<?php

class AsignaturaController extends BaseController {

		public function index() {
			
		}

		public function create() {
			
			$reticulas = Reticula::all();

			return View::make('asignatura.create')->with('reticula',$reticulas);
		}

		public function show() {

			$asignaturas = Asignatura::all();

			return View::make('asignatura.show')->with('asignatura',$asignaturas);
		}

		public function store() {
					
				$data     = Input::all();
					
				$nombre   = Input::get('nombre');
				$clave    = Input::get('clave');
				$reticula = Input::get('fk_reticula');
				$carrera  = Input::get('carrera');

	        	$buscar = Asignatura::where('nombre','=',$nombre)
	            					->where('clave','=',$clave)
	            					->where('fk_reticula','=',$reticula)
	            					->where('carrera','=',$carrera)
	            					->get();

	            $asignatura = new Asignatura;

	            if ($asignatura->isValid($data)){

		            	if ( count($buscar) == 0 ) {

			            	$asignatura->fill($data);
			            	$asignatura->save();

			            	return Redirect::to('/asignatura/show');
		            }

		            	else {

		            		return View::make('asignatura.error');

		            	}
	            }

	            else {

	            	return Redirect::back()->withInput()->withErrors($asignatura->errors);
	            }
		}

		public function edit($id) {

			$asignatura = Asignatura::find($id);

			$reticula  = Reticula::all();

			return View::make('asignatura.edit')->with('asignatura',$asignatura)->with('reticula',$reticula);
		}

		public function update($id) {

			$asignatura = Asignatura::find($id);

			$data = Input::all();

	            if ($asignatura->isValid($data)){

	            	$asignatura->fill($data);
	            	$asignatura->save();

	            	return Redirect::to('/asignatura/show');
	            }

	            else {

	            	return Redirect::back()->withInput()->withErrors($asignatura->errors);
	            }
		}

		public function destroy($id) {
			
			$asignatura = Asignatura::find($id);

			$asignatura->delete();

			return Redirect::to('/asignatura/show');
		}

		public function reticula($carrera) {	

			$reticula = Reticula::select('clave')->where('carrera','=',$carrera)->get();

			if (count($reticula) == 0 ){

				return $mensaje = "";
			}

			else {

				foreach ($reticula as $r) {
					
					$mensaje = $r -> clave;
				}
			
			return $mensaje;
		}
	}


}
