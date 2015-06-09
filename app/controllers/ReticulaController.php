<?php

class ReticulaController extends BaseController {

	public function create (){

		return View::make('reticula.create');
	}

	public function show() {

		$reticulas = Reticula::all();

		return View::make('reticula.show')->with('reticula',$reticulas);

	}

	public function store(){

                $data = Input::all();

                $clave   = Input::get('clave');
                $carrera = Input::get('carrera');

                $mensaje = "ya ha sido registrada";

                $buscar = Reticula::where('clave','=',$clave)->get();

                $reticula = new Reticula;

                if ($reticula->isValid($data)) {

                        if (count($buscar) == 0) {
                	
                        	$reticula->fill($data);
                        	$reticula->save();

                        	return Redirect::to('/reticula/show');
                        }

                        else {

                                return View::make('reticula.error')->with('mensaje',$mensaje);
                        }
                }

                else {

                        return Redirect::back()->withInput()->withErrors($reticula->errors);
                }

        }

        public function edit($id){

                $reticula = Reticula::find($id);

                return View::make('reticula.edit')->with('reticula',$reticula);

        }

        public function update($id){

                $reticula = Reticula::find($id);

                $data = Input::all();

                        if ($reticula->isValid($data)) {
                                
                                $reticula->fill($data);
                                $reticula->save();

                                return Redirect::to('/reticula/show');
                        }

                        else {

                                return Redirect::back()->withInput()->withErrors($reticula->errors);
                        }
                }

        public function destroy ($id){

                $reticula = Reticula::find($id);
                $mensaje = "no puede ser borrada";

                $asignatura = DB::select('SELECT * FROM reticulas, asignaturas 
                        WHERE asignaturas.fk_reticula = reticulas.clave AND reticulas.id = ?', array($id));

                if (count($asignatura) == 0) {

                        $reticula->delete();

                        return Redirect::to('/reticula/show');

        }
                else {

                        return View::make('/reticula/error')->with('mensaje',$mensaje);
                }

        }

}


