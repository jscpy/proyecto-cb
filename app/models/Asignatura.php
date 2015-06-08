<?php
class Asignatura extends Eloquent{
	
	public $timestamps  = false;
	public $errors;
	protected $table    = 'asignaturas';
	protected $fillable = array(
		'nombre','clave','carrera','semestre','horas_teoricas','horas_practicas','horas_totales','fk_reticula');

	public function OfertarMateria(){

		return $this->hasOne('OfertarMateria','fk_asignatura');
	}

	public function isValid($data){

		$rules = array(

			'nombre'          => 'required|alpha_spaces|min:7',
			'clave'           => 'required|alpha_num|min:7',
			'carrera'         => 'required',
			'semestre'        => 'required',
			'fk_reticula'     => 'required',
			'horas_teoricas'  => 'numeric|between:1,4',
			'horas_practicas' => 'numeric|between:1,4',
			'horas_totales'   => 'numeric|between:3,6'
		);

		$validator = Validator::make($data, $rules);

		if ($validator->passes()){

			return true;
		}

		$this->errors = $validator->errors();
		return false;
	}
}
?>