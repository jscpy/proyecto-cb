$(document).ready(function() {
	
	$('#guardar').click(function(event) {
 		
 		var respuesta = confirm("¿Está seguro de guardar todos los cambios?");

 		if (respuesta) {

 			return true;

 		}

 		else {

 			return false;
 		}
 	});
});