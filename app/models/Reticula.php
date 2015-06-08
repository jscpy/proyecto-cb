<?php
class Reticula extends Eloquent{
	
	public $timestamps  = false;
	public $errors;
	protected $table    = 'reticulas';
	protected $fillable = array('clave','carrera');
	
	public function isValid($data){

		$rules = array(

			'clave'   => 'required|alpha_dash|min:13',
			'carrera' => 'required'
		);

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			
			return true;
		}

		$this->errors = $validator->errors();
		return false;
	}
}
?>