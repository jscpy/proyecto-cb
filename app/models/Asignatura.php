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

			'nombre'          => 'required|alpha_spaces|min:4',
			'clave'           => 'required|alpha_num|min:7',
			'carrera'         => 'required',
			'semestre'        => 'required',
			'fk_reticula'     => 'required',
			'horas_totales'   => 'numeric|between:2,6'
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