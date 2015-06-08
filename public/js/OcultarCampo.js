$(document).ready(function() {

	/*
		Funcion para ocultar el campo Alumnos_Aceptados del formulario,
		el campo sera visible cuando se realizen proyecciones del 1 semestre
	*/

	var Semestre = $("input#semestre").val();

		if ( Semestre > 1 ){ 

 			$("#Alumnos_Aceptados").css('display', 'none');
 	}

 	/* 
		Muestra un * en el campo de las proyecciones Grupos Estimados en caso de que sea 0
 	*/
 	var GruposEstimados = $("input#P1").val();

 	 	if (GruposEstimados == 0) {

 	 		$("#asterisko1").css('display', 'block');
 	 	}

 	 	if (GruposEstimados > 0) {

 	 		$("#asterisko1").css('display', 'none');

 	 	}

 	var GruposEstimados_2 = $("input#P2").val();

 	 	if (GruposEstimados_2 == 0) {

 	 		$("#asterisko2").css('display', 'block');
 	 	}

 	 	if (GruposEstimados_2 > 0) {

 	 		$("#asterisko2").css('display', 'none');

 	 	}

 	 var GruposEstimados_3 = $("input#P3").val();

 	 	if (GruposEstimados_3 == 0) {

 	 		$("#asterisko3").css('display', 'block');
 	 	}

 	 	if (GruposEstimados_3 > 0) {

 	 		$("#asterisko3").css('display', 'none');

 	 	}
 	
 	var GruposEstimados_4 = $("input#P4").val();

 	 	if (GruposEstimados_4 == 0) {

 	 		$("#asterisko4").css('display', 'block');
 	 	}

 	 	if (GruposEstimados_4 > 0) {

 	 		$("#asterisko4").css('display', 'none');

 	 	}

 	var GruposEstimados_5 = $("input#P5").val();

 	 	if (GruposEstimados_5 == 0) {

 	 		$("#asterisko5").css('display', 'block');
 	 	}

 	 	if (GruposEstimados_5 > 0) {

 	 		$("#asterisko5").css('display', 'none');

 	 	}

 	var GruposEstimados_6 = $("input#P6").val();

 	 	if (GruposEstimados_6 == 0) {

 	 		$("#asterisko6").css('display', 'block');
 	 	}

 	 	if (GruposEstimados_6 > 0) {

 	 		$("#asterisko6").css('display', 'none');

 	 	}

 	$("input#P1").change(function(event) {
 		
 		var GruposEstimados = $("input#P1").val();

 	 	if (GruposEstimados == 0) {

 	 		$("#asterisko1").css('display', 'block');
 	 	}

 	 	if (GruposEstimados > 0) {

 	 		$("#asterisko1").css('display', 'none');

 	 	}
 	});

  	$("input#P2").change(function(event) {
 		
 		var GruposEstimados_2 = $("input#P2").val();

 	 	if (GruposEstimados_2 == 0) {

 	 		$("#asterisko2").css('display', 'block');
 	 	}

 	 	if (GruposEstimados_2 > 0) {

 	 		$("#asterisko2").css('display', 'none');

 	 	}
 	});

  	$("input#P3").change(function(event) {
 		
 		var GruposEstimados_3 = $("input#P3").val();

 	 	if (GruposEstimados_3 == 0) {

 	 		$("#asterisko3").css('display', 'block');
 	 	}

 	 	if (GruposEstimados_3 > 0) {

 	 		$("#asterisko3").css('display', 'none');

 	 	}
 	});

  	$("input#P4").change(function(event) {
 		
 		var GruposEstimados_4 = $("input#P4").val();

 	 	if (GruposEstimados_4 == 0) {

 	 		$("#asterisko4").css('display', 'block');
 	 	}

 	 	if (GruposEstimados_4 > 0) {

 	 		$("#asterisko4").css('display', 'none');

 	 	}
 	});

  	$("input#P5").change(function(event) {
 		
 		var GruposEstimados_5 = $("input#P5").val();

 	 	if (GruposEstimados_5 == 0) {

 	 		$("#asterisko5").css('display', 'block');
 	 	}

 	 	if (GruposEstimados_5 > 0) {

 	 		$("#asterisko5").css('display', 'none');

 	 	}
 	});

 	$("input#P6").change(function(event) {
 		
 		var GruposEstimados_6 = $("input#P6").val();

 	 	if (GruposEstimados_6 == 0) {

 	 		$("#asterisko6").css('display', 'block');
 	 	}

 	 	if (GruposEstimados_6 > 0) {

 	 		$("#asterisko6").css('display', 'none');

 	 	}
 	});

});