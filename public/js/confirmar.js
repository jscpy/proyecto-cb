function confirmar () {
	var respuesta = confirm("¿Esta seguro de eliminar el registro ");

	if (respuesta) {

		return true;
	}

	else {

		return false;
	}
}