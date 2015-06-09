function calculo(){
	
	
var iHoras_Practicas = parseInt(document.forms[0].horas_practicas.value);
var iHoras_Teoricas  = parseInt(document.forms[0].horas_teoricas.value);
var iHoras_Totales;

iHoras_Totales = M_Suma(iHoras_Practicas,iHoras_Teoricas);

document.forms[0].horas_totales.value = iHoras_Totales.toString();

	/*
	if (iHoras_Totales<3 || iHoras_Totales>6) {

			
	alert("El número máximo de horas totales es de 6 y un minímo de 3");		

	//+++++++++++++++++++++++++++******************************++++++++++++++++++++++++++++++++++++
		if(iHoras_Teoricas == 0 && (iHoras_Practicas == 2||iHoras_Practicas == 1))
		{
		document.forms[0].horas_practicas.value = 3;
		iHoras_Practicas = parseInt(document.forms[0].horas_practicas.value); 
		iHoras_Totales = M_Suma(iHoras_Practicas,iHoras_Teoricas);
		document.forms[0].horas_totales.value = "";
		document.forms[0].horas_totales.value = iHoras_Totales.toString();

		

		}	

		if(iHoras_Practicas == 0 && (iHoras_Teoricas == 2||iHoras_Teoricas == 1) )
		{
		document.forms[0].horas_teoricas.value = 3;
		iHoras_Teoricas = parseInt(document.forms[0].horas_teoricas.value);
		iHoras_Totales = M_Suma(iHoras_Practicas,iHoras_Teoricas);
		document.forms[0].horas_totales.value = "";
		document.forms[0].horas_totales.value = iHoras_Totales.toString();

		
		}
	//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

	if(iHoras_Teoricas == 4 && iHoras_Practicas== 3) {
	
			document.forms[0].horas_practicas.value = 2;
			iHoras_Practicas                        = parseInt(document.forms[0].horas_practicas.value); 
			iHoras_Totales                          = M_Suma(iHoras_Practicas,iHoras_Teoricas);
			document.forms[0].horas_totales.value   = "";
			document.forms[0].horas_totales.value   = iHoras_Totales.toString();
	}
	
	if(iHoras_Practicas == 4 && iHoras_Teoricas == 3 ) {
			document.forms[0].horas_teoricas.value = 2;
			iHoras_Teoricas = parseInt(document.forms[0].horas_teoricas.value);
			iHoras_Totales = M_Suma(iHoras_Practicas,iHoras_Teoricas);
			document.forms[0].horas_totales.value = "";
			document.forms[0].horas_totales.value = iHoras_Totales.toString();

	}

	if((iHoras_Teoricas == 4 && iHoras_Practicas == 4)||(iHoras_Teoricas == 0 && iHoras_Practicas == 0)) {
			
			document.forms[0].horas_practicas.value = 0;
			document.forms[0].horas_teoricas.value  = 0;
			document.forms[0].horas_totales.value   = 0;
	}
	
	}
	*/
}


function M_Suma(iX,iY) {
	
	var iZ;
	iZ = iX + iY;
	return iZ;
}