<?php

class OfertarMateriasController extends \BaseController {

	public function index()	{
		
		return View::make('ofertar_materias.index');	

	}

	public function search(){

		return View::make('ofertar_materias.search');

	}

	public function show(){

		$carrera = Input::get('carrera');

		$resultado = DB::select(
			   'SELECT asignaturas.nombre, asignaturas.clave, asignaturas.semestre, 
			   	alumnos_grupo, alumnos_aceptados, alumnos_inscritos, sc_reprob_1a, sc_cumple_req, 
			   	reprobados, grupos_estimados,alumnos_esperados,reprob_real
				FROM ofertar_materias, asignaturas
				WHERE asignaturas.id = ofertar_materias.fk_asignatura AND asignaturas.carrera = ? 
				ORDER BY asignaturas.semestre',array($carrera));

		return View::make('/ofertar_materias/show')->with('asignatura',$resultado)->with('carrera',$carrera);
		
	}

	public function create(){

		$carrera  = Input::get('carrera');
		$semestre = Input::get('semestre');
		
		$asignaturas = DB::select(
		'SELECT asignaturas.nombre, asignaturas.clave, 
			alumnos_grupo, alumnos_aceptados, alumnos_inscritos, sc_reprob_1a, sc_cumple_req, 
			reprobados, grupos_estimados,alumnos_esperados,reprob_real
		FROM ofertar_materias, asignaturas
		WHERE asignaturas.id = ofertar_materias.fk_asignatura AND asignaturas.carrera = ? AND asignaturas.semestre = ?
		ORDER BY asignaturas.id',
		array($carrera,$semestre));

		return View::make('ofertar_materias.create')
									->with('asignatura',$asignaturas)
									->with('carrera',$carrera)
									->with('semestre',$semestre);
	}

	public function store() {
		
		$semestre = Input::get('semestre');
		$carrera  = Input::get('carrera');
		
		$chk1     = Input::get('chk1'); 
		$chk2     = Input::get('chk2'); 
		$chk3     = Input::get('chk3'); 
		$chk4     = Input::get('chk4'); 
		$chk5     = Input::get('chk5'); 
		$chk6     = Input::get('chk6'); 

		//ENCABEZADO 1

		if ($chk1 == '1' ){

			$clave = Input::get('sClaveAsignatura');

			$ides = DB::select('SELECT ofertar_materias.id as ofertar, asignaturas.id as asignatura
					FROM asignaturas, ofertar_materias 
					WHERE asignaturas.id = ofertar_materias.fk_asignatura AND asignaturas.semestre = ? AND asignaturas.carrera = ? AND asignaturas.clave = ?', 
					array($semestre,$carrera,$clave));

			foreach ($ides as $i) {
				
				$id_ofertar    = $i-> ofertar;
				$id_asignatura = $i-> asignatura;
			}

			$OfertarMateria = OfertarMateria::find($id_ofertar);
			
			$OfertarMateria -> fk_asignatura     = $id_asignatura;	
			$OfertarMateria -> alumnos_grupo     = Input::get('iAlumno_Grupo');
			$OfertarMateria -> alumnos_aceptados = Input::get('iAlumnos_Aceptados');
			$OfertarMateria -> alumnos_esperados = Input::get('iAlumnos_Esperados');
			$OfertarMateria -> alumnos_inscritos = Input::get('iAlumnos_Inscritos');		
			$OfertarMateria -> sc_reprob_1a      = Input::get('iSC_Reprobados_1a');
			$OfertarMateria -> sc_cumple_req     = Input::get('iSC_Cumple_Req');
			$OfertarMateria -> reprobados        = Input::get('iReprobados');
			$OfertarMateria -> reprob_real       = Input::get('iReprobados_Real');
			$OfertarMateria -> grupos_estimados  = Input::get('iGrupos_Estimados');
			
			

			$OfertarMateria -> save();
	}

		//ENCABEZADO 2 

		if ($chk2 == '1') {

			$clave = Input::get('sClaveAsignatura_2');

			$ides = DB::select('SELECT ofertar_materias.id as ofertar, asignaturas.id as asignatura
					FROM asignaturas, ofertar_materias 
					WHERE asignaturas.id = ofertar_materias.fk_asignatura AND asignaturas.semestre = ? AND asignaturas.carrera = ? AND asignaturas.clave = ?', 
					array($semestre,$carrera,$clave));

			foreach ($ides as $i) {
				
				$id_ofertar    = $i-> ofertar;
				$id_asignatura = $i-> asignatura;
			}

			$OfertarMateria_2 = OfertarMateria::find($id_ofertar);

			$OfertarMateria_2 -> fk_asignatura     = $id_asignatura;
			$OfertarMateria_2 -> alumnos_grupo     = Input::get('iAlumno_Grupo');
			$OfertarMateria_2 -> alumnos_aceptados = Input::get('iAlumnos_Aceptados');
			$OfertarMateria_2 -> alumnos_esperados = Input::get('iAlumnos_Esperados');
			$OfertarMateria_2 -> alumnos_inscritos = Input::get('iAlumnos_Inscritos_2');		
			$OfertarMateria_2 -> sc_reprob_1a      = Input::get('iSC_Reprobados_1a_2');
			$OfertarMateria_2 -> sc_cumple_req     = Input::get('iSC_Cumple_Req_2');
			$OfertarMateria_2 -> reprobados        = Input::get('iReprobados_2');
			$OfertarMateria_2 -> reprob_real       = Input::get('iReprobados_Real_2');
			$OfertarMateria_2 -> grupos_estimados  = Input::get('iGrupos_Estimados_2');

			$OfertarMateria_2 -> save();
	}

		//ENCABEZADO 3 

		if ($chk3 == '1'){
		
			$clave = Input::get('sClaveAsignatura_3');

			$ides = DB::select('SELECT ofertar_materias.id as ofertar, asignaturas.id as asignatura
					FROM asignaturas, ofertar_materias 
					WHERE asignaturas.id = ofertar_materias.fk_asignatura AND asignaturas.semestre = ? AND asignaturas.carrera = ? AND asignaturas.clave = ?', 
					array($semestre,$carrera,$clave));

			foreach ($ides as $i) {
				
				$id_ofertar    = $i-> ofertar;
				$id_asignatura = $i-> asignatura;
			}

			$OfertarMateria_3 = OfertarMateria::find($id_ofertar);

			$OfertarMateria_3 -> fk_asignatura     = $id_asignatura;
			$OfertarMateria_3 -> alumnos_grupo     = Input::get('iAlumno_Grupo');
			$OfertarMateria_3 -> alumnos_aceptados = Input::get('iAlumnos_Aceptados');
			$OfertarMateria_3 -> alumnos_esperados = Input::get('iAlumnos_Esperados');
			$OfertarMateria_3 -> alumnos_inscritos = Input::get('iAlumnos_Inscritos_3');		
			$OfertarMateria_3 -> sc_reprob_1a      = Input::get('iSC_Reprobados_1a_3');
			$OfertarMateria_3 -> sc_cumple_req     = Input::get('iSC_Cumple_Req_3');
			$OfertarMateria_3 -> reprobados        = Input::get('iReprobados_3');
			$OfertarMateria_3 -> reprob_real       = Input::get('iReprobados_Real_3');
			$OfertarMateria_3 -> grupos_estimados  = Input::get('iGrupos_Estimados_3');

			$OfertarMateria_3 -> save();
	}

		//ENCABEZADO 4 

		if ($chk4 == '1') {
		
			$clave = Input::get('sClaveAsignatura_4');

			$ides = DB::select('SELECT ofertar_materias.id as ofertar, asignaturas.id as asignatura
					FROM asignaturas, ofertar_materias 
					WHERE asignaturas.id = ofertar_materias.fk_asignatura AND asignaturas.semestre = ? AND asignaturas.carrera = ? AND asignaturas.clave = ?', 
					array($semestre,$carrera,$clave));

			foreach ($ides as $i) {
				
				$id_ofertar    = $i-> ofertar;
				$id_asignatura = $i-> asignatura;
			}

			$OfertarMateria_4 = OfertarMateria::find($id_ofertar);

			$OfertarMateria_4 -> fk_asignatura     = $id_asignatura;
			$OfertarMateria_4 -> alumnos_grupo     = Input::get('iAlumno_Grupo');
			$OfertarMateria_4 -> alumnos_aceptados = Input::get('iAlumnos_Aceptados');
			$OfertarMateria_4 -> alumnos_esperados = Input::get('iAlumnos_Esperados');
			$OfertarMateria_4 -> alumnos_inscritos = Input::get('iAlumnos_Inscritos_4');		
			$OfertarMateria_4 -> sc_reprob_1a      = Input::get('iSC_Reprobados_1a_4');
			$OfertarMateria_4 -> sc_cumple_req     = Input::get('iSC_Cumple_Req_4');
			$OfertarMateria_4 -> reprobados        = Input::get('iReprobados_4');
			$OfertarMateria_4 -> reprob_real       = Input::get('iReprobados_Real_4');
			$OfertarMateria_4 -> grupos_estimados  = Input::get('iGrupos_Estimados_4');

			$OfertarMateria_4 -> save();
	}

		//ENCABEZADO 5

		if ($chk5 == '1') {
		
			$clave = Input::get('sClaveAsignatura_5');

			$ides = DB::select('SELECT ofertar_materias.id as ofertar, asignaturas.id as asignatura
					FROM asignaturas, ofertar_materias 
					WHERE asignaturas.id = ofertar_materias.fk_asignatura AND asignaturas.semestre = ? AND asignaturas.carrera = ? AND asignaturas.clave = ?', 
					array($semestre,$carrera,$clave));

			foreach ($ides as $i) {
				
				$id_ofertar    = $i-> ofertar;
				$id_asignatura = $i-> asignatura;
			}

			$OfertarMateria_5 = OfertarMateria::find($id_ofertar);

			$OfertarMateria_5 -> fk_asignatura     = $id_asignatura;
			$OfertarMateria_5 -> alumnos_grupo     = Input::get('iAlumno_Grupo');
			$OfertarMateria_5 -> alumnos_aceptados = Input::get('iAlumnos_Aceptados');
			$OfertarMateria_5 -> alumnos_esperados = Input::get('iAlumnos_Esperados');
			$OfertarMateria_5 -> alumnos_inscritos = Input::get('iAlumnos_Inscritos_5');		
			$OfertarMateria_5 -> sc_reprob_1a      = Input::get('iSC_Reprobados_1a_5');
			$OfertarMateria_5 -> sc_cumple_req     = Input::get('iSC_Cumple_Req_5');
			$OfertarMateria_5 -> reprobados        = Input::get('iReprobados_5');
			$OfertarMateria_5 -> reprob_real       = Input::get('iReprobados_Real_5');
			$OfertarMateria_5 -> grupos_estimados  = Input::get('iGrupos_Estimados_5');

			$OfertarMateria_5 -> save();
	}

		//ENCABEZADO 6

		if($chk6 == '1') {
		
			$clave = Input::get('sClaveAsignatura_6');

			$ides = DB::select('SELECT ofertar_materias.id as ofertar, asignaturas.id as asignatura
					FROM asignaturas, ofertar_materias 
					WHERE asignaturas.id = ofertar_materias.fk_asignatura AND asignaturas.semestre = ? AND asignaturas.carrera = ? AND asignaturas.clave = ?', 
					array($semestre,$carrera,$clave));

			foreach ($ides as $i) {
				
				$id_ofertar    = $i-> ofertar;
				$id_asignatura = $i-> asignatura;
			}

			$OfertarMateria_6 = OfertarMateria::find($id_ofertar);

			$OfertarMateria_6 -> fk_asignatura     = $id_asignatura;
			$OfertarMateria_6 -> alumnos_grupo     = Input::get('iAlumno_Grupo');
			$OfertarMateria_6 -> alumnos_aceptados = Input::get('iAlumnos_Aceptados');
			$OfertarMateria_6 -> alumnos_esperados = Input::get('iAlumnos_Esperados');
			$OfertarMateria_6 -> alumnos_inscritos = Input::get('iAlumnos_Inscritos_6');		
			$OfertarMateria_6 -> sc_reprob_1a      = Input::get('iSC_Reprobados_1a_6');
			$OfertarMateria_6 -> sc_cumple_req     = Input::get('iSC_Cumple_Req_6');
			$OfertarMateria_6 -> reprobados        = Input::get('iReprobados_6');
			$OfertarMateria_6 -> reprob_real       = Input::get('iReprobados_Real_6');
			$OfertarMateria_6 -> grupos_estimados  = Input::get('iGrupos_Estimados_6');

			$OfertarMateria_6 -> save();
	}

		return Redirect::to('/ofertar_materias/search');

	}

	public function edit() {


	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}


}

