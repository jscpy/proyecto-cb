<?php
class OfertarMateria extends Eloquent{
	public $timestamps = false;
	protected $table = 'ofertar_materias';
	protected $fillable = array(
		'fk_asignatura','alumnos_grupo','alumnos_aceptados','alumnos_inscritos','sc_reprob_1a',
		'sc_cumple_req','reprobados','grupos_estimados'
	);

	public function Asignatura(){

		return $this->belongsTo('Asignatura','id');
	}
}
?>