//Inicia definicion de la clase con funciones***************************************************************************************************************	
var funciones = function () {	
		
	this.reprobado = function(iNumReprobados,iInscritos) {
		
		if(iInscritos == ""){}
		
		else {
			
			iNumReprobados = parseInt(iNumReprobados);
			iInscritos     = parseInt(iInscritos);
			var x          = iNumReprobados/iInscritos;
			x              = x.toFixed(2);
			x              = x*100; 
			
			return x;	
		}
	};
	
	this.aprobadonum = function(iInscritos,iNumReprobados) {
		
		iNumReprobados = parseInt(iNumReprobados);
		iInscritos     = parseInt(iInscritos);
		var x          = iInscritos - iNumReprobados;
		
		return x;
	};
	
	this.aprobadociento = function(iInscritos,iProcentajeReprobados) {
		
		if(iInscritos=="") {}
		
		else {

			iProcentajeReprobados = parseInt(iProcentajeReprobados);
			iProcentajeReprobados = 1 -(iProcentajeReprobados/100);
			iProcentajeReprobados = iProcentajeReprobados*100;
			
			return iProcentajeReprobados.toFixed();
		}
	};
	
	this.gpocalord = function(iEsperados,iAlumnosPorGrupo,iSCursarCump1a,iAceptados) {
	
		iEsperados       = parseInt(iEsperados);
		iAlumnosPorGrupo = parseInt(iAlumnosPorGrupo);
		iSCursarCump1a   = parseInt(iSCursarCump1a); 
		iAceptados       = parseInt(iAceptados);
		
		if(iEsperados == iAceptados) {

			iEsperados = parseFloat((iEsperados + iSCursarCump1a)/iAlumnosPorGrupo);
		}
		
		else {
			
			iEsperados=parseFloat((iAceptados + iSCursarCump1a)/iAlumnosPorGrupo);
		}
		
		return iEsperados.toFixed(2);
	};
	
	this.gpocalrep = function(iSCursarReprob1a,iNumReprobados,iAlumnosPorGrupo) {
		
		iSCursarReprob1a = parseInt(iSCursarReprob1a);
		iNumReprobados   = parseInt(iNumReprobados);
		iAlumnosPorGrupo = parseInt(iAlumnosPorGrupo);
		
		iSCursarReprob1a = parseFloat(((iSCursarReprob1a + iNumReprobados)/iAlumnosPorGrupo));
		
		return iSCursarReprob1a.toFixed(2);
	};
	
	this.gpoprorept = function(iSCursarReprob1a,iGrupProyecReprobReal,iAlumnosPorGrupo) {
		
		var w;
		
		iSCursarReprob1a      = parseInt(iSCursarReprob1a);
		iGrupProyecReprobReal = parseInt(iGrupProyecReprobReal);
		iAlumnosPorGrupo      = parseInt(iAlumnosPorGrupo);
		w                     = (iSCursarReprob1a + iGrupProyecReprobReal)/iAlumnosPorGrupo;
		
		return w.toFixed(2);
	};
	
	this.gpoest = function(iGrupProyecOrdi,GrupCalcRepite) {
		
		iGrupProyecOrdi = parseFloat(iGrupProyecOrdi);
		GrupCalcRepite  = parseFloat(GrupCalcRepite);
			
		iGrupProyecOrdi = iGrupProyecOrdi+GrupCalcRepite;
		
		return iGrupProyecOrdi.toFixed(2);
	};
	
	this.olgura = function(GrupEstimados,iAlumnosPorGrupo,iGrupProyecOrdi,iGrupCalcuRept) {
		
		var w;
		
		GrupEstimados    = parseFloat(GrupEstimados);
		iAlumnosPorGrupo = parseFloat(iAlumnosPorGrupo);
		iGrupProyecOrdi  = parseFloat(iGrupProyecOrdi);
		iGrupCalcuRept   = parseFloat(iGrupCalcuRept);
		
		w = iAlumnosPorGrupo*(GrupEstimados - (iGrupProyecOrdi + iGrupCalcuRept)); 
		
		return w.toFixed();
	};
	
	this.gpooferta = function(iGrupProyecOrdi,iGrupProyecRept) {
	
		iGrupProyecOrdi = parseFloat(iGrupProyecOrdi);
		iGrupProyecRept = parseFloat(iGrupProyecRept);
		
		iGrupProyecOrdi = iGrupProyecOrdi + iGrupProyecRept;
		
		return iGrupProyecOrdi.toFixed(1);
	};
	
	this.check = function(lista, condicion) {
	
	if(condicion) //(lista[1].value!=""&&lista[2].value!="")
	{
			
		for(var x = 0; x < lista.length; x++)
		{
			d = lista[x].type;
			d.toString();
			
			if(d == "text")
			{
				lista[x].disabled=false;
			}
		}
				
	}
		
	else
	{	
		for(var x = 0; x < lista.length; x++)
		{
			c = lista[x].type;
			c.toString();
			
			if(c=="text")
			{
				lista[x].disabled=true;
			}
		}
	}
	
	};	
};

//Termina definicion de la clase con funciones
	
function EjecucionDeFuncionesObjeto() {
	
	var ObjetoPrincipal = new funciones();
	var f1,f2,f3,f4,f5,f6;
		
	f1 = parseInt(document.getElementById('C1').value); 
	f2 = parseInt(document.getElementById('C2').value); 
	f3 = parseInt(document.getElementById('C3').value); 
	f4 = parseInt(document.getElementById('C4').value); 
	f5 = parseInt(document.getElementById('C5').value); 
	f6 = parseInt(document.getElementById('C6').value); 
	
		// FILA 1
		
		if(document.getElementById('C1').value=="0"||document.getElementById('C1').value==""||f1<=0) {}
		
		else {

			document.getElementById('G1').value = ObjetoPrincipal.reprobado(document.getElementById('F1').value,document.getElementById('C1').value);
			document.getElementById('H1').value = ObjetoPrincipal.aprobadonum(document.getElementById('C1').value, document.getElementById('F1').value);
			document.getElementById('I1').value = ObjetoPrincipal.aprobadociento(document.getElementById('C1').value, document.getElementById('G1').value);
			document.getElementById('J1').value = ObjetoPrincipal.gpocalord(document.getElementById('estesp').value, document.getElementById('alugpo').value,document.getElementById('E1').value,document.getElementById('acept').value);
			document.getElementById('K1').value = ObjetoPrincipal.gpocalrep(document.getElementById('D1').value, document.getElementById('F1').value, document.getElementById('alugpo').value);
			document.getElementById('L1').value = document.getElementById('J1').value;
			document.getElementById('N1').value = ObjetoPrincipal.gpoprorept(document.getElementById('D1').value,document.getElementById('M1').value,document.getElementById('alugpo').value);
			document.getElementById('O1').value = ObjetoPrincipal.gpoest(document.getElementById('L1').value,document.getElementById('K1').value);
			document.getElementById('Q1').value = ObjetoPrincipal.olgura(document.getElementById('P1').value,document.getElementById('alugpo').value,document.getElementById('L1').value,document.getElementById('K1').value);
			document.getElementById('R1').value = ObjetoPrincipal.gpooferta(document.getElementById('L1').value,document.getElementById('N1').value);
		}
	
		//FILA 2
		
		if(document.getElementById('C2').value=="0"||document.getElementById('C2').value==""||f2<=0){}
		
		else {
			
			document.getElementById('G2').value = ObjetoPrincipal.reprobado(document.getElementById('F2').value,document.getElementById('C2').value);
			document.getElementById('H2').value = ObjetoPrincipal.aprobadonum(document.getElementById('C2').value, document.getElementById('F2').value);
			document.getElementById('I2').value = ObjetoPrincipal.aprobadociento(document.getElementById('C2').value, document.getElementById('G2').value);
			document.getElementById('J2').value = ObjetoPrincipal.gpocalord(document.getElementById('estesp').value, document.getElementById('alugpo').value,document.getElementById('E2').value,document.getElementById('acept').value);
			document.getElementById('K2').value = ObjetoPrincipal.gpocalrep(document.getElementById('D2').value, document.getElementById('F2').value, document.getElementById('alugpo').value);
			document.getElementById('L2').value = document.getElementById('J2').value;
			document.getElementById('N2').value = ObjetoPrincipal.gpoprorept(document.getElementById('D2').value,document.getElementById('M2').value,document.getElementById('alugpo').value);
			document.getElementById('O2').value = ObjetoPrincipal.gpoest(document.getElementById('L2').value,document.getElementById('K2').value);
			document.getElementById('Q2').value = ObjetoPrincipal.olgura(document.getElementById('P2').value,document.getElementById('alugpo').value,document.getElementById('L2').value,document.getElementById('K2').value);
			document.getElementById('R2').value = ObjetoPrincipal.gpooferta(document.getElementById('L2').value,document.getElementById('N2').value);
		}
	
		//FILA 3

		if(document.getElementById('C3').value=="0"||document.getElementById('C3').value==""||f3<=0){}
		
		else {

			document.getElementById('G3').value = ObjetoPrincipal.reprobado(document.getElementById('F3').value,document.getElementById('C3').value);
			document.getElementById('H3').value = ObjetoPrincipal.aprobadonum(document.getElementById('C3').value, document.getElementById('F3').value);
			document.getElementById('I3').value = ObjetoPrincipal.aprobadociento(document.getElementById('C3').value, document.getElementById('G3').value);
			document.getElementById('J3').value = ObjetoPrincipal.gpocalord(document.getElementById('estesp').value, document.getElementById('alugpo').value,document.getElementById('E3').value,document.getElementById('acept').value);
			document.getElementById('K3').value = ObjetoPrincipal.gpocalrep(document.getElementById('D3').value, document.getElementById('F3').value, document.getElementById('alugpo').value);
			document.getElementById('L3').value = document.getElementById('J3').value;
			document.getElementById('N3').value = ObjetoPrincipal.gpoprorept(document.getElementById('D3').value,document.getElementById('M3').value,document.getElementById('alugpo').value);
			document.getElementById('O3').value = ObjetoPrincipal.gpoest(document.getElementById('L3').value,document.getElementById('K3').value);
			document.getElementById('Q3').value = ObjetoPrincipal.olgura(document.getElementById('P3').value,document.getElementById('alugpo').value,document.getElementById('L3').value,document.getElementById('K3').value);
			document.getElementById('R3').value = ObjetoPrincipal.gpooferta(document.getElementById('L3').value,document.getElementById('N3').value);
		}
		
		//FILA 4
		
		if(document.getElementById('C4').value=="0"||document.getElementById('C4').value==""||f4<=0){}
		
		else {

			document.getElementById('G4').value = ObjetoPrincipal.reprobado(document.getElementById('F4').value,document.getElementById('C4').value);
			document.getElementById('H4').value = ObjetoPrincipal.aprobadonum(document.getElementById('C4').value, document.getElementById('F4').value);
			document.getElementById('I4').value = ObjetoPrincipal.aprobadociento(document.getElementById('C4').value, document.getElementById('G4').value);
			document.getElementById('J4').value = ObjetoPrincipal.gpocalord(document.getElementById('estesp').value, document.getElementById('alugpo').value,document.getElementById('E4').value,document.getElementById('acept').value);
			document.getElementById('K4').value = ObjetoPrincipal.gpocalrep(document.getElementById('D4').value, document.getElementById('F4').value, document.getElementById('alugpo').value);
			document.getElementById('L4').value = document.getElementById('J4').value;
			document.getElementById('N4').value = ObjetoPrincipal.gpoprorept(document.getElementById('D4').value,document.getElementById('M4').value,document.getElementById('alugpo').value);
			document.getElementById('O4').value = ObjetoPrincipal.gpoest(document.getElementById('L4').value,document.getElementById('K4').value);
			document.getElementById('Q4').value = ObjetoPrincipal.olgura(document.getElementById('P4').value,document.getElementById('alugpo').value,document.getElementById('L4').value,document.getElementById('K4').value);
			document.getElementById('R4').value = ObjetoPrincipal.gpooferta(document.getElementById('L4').value,document.getElementById('N4').value);
		}
		
		//FILA 5

		if(document.getElementById('C5').value=="0"||document.getElementById('C5').value==""||f5<=0){}
		
		else {

			document.getElementById('G5').value = ObjetoPrincipal.reprobado(document.getElementById('F5').value,document.getElementById('C5').value);
			document.getElementById('H5').value = ObjetoPrincipal.aprobadonum(document.getElementById('C5').value, document.getElementById('F5').value);
			document.getElementById('I5').value = ObjetoPrincipal.aprobadociento(document.getElementById('C5').value, document.getElementById('G5').value);
			document.getElementById('J5').value = ObjetoPrincipal.gpocalord(document.getElementById('estesp').value, document.getElementById('alugpo').value,document.getElementById('E5').value,document.getElementById('acept').value);
			document.getElementById('K5').value = ObjetoPrincipal.gpocalrep(document.getElementById('D5').value, document.getElementById('F5').value, document.getElementById('alugpo').value);
			document.getElementById('L5').value = document.getElementById('J5').value;
			document.getElementById('N5').value = ObjetoPrincipal.gpoprorept(document.getElementById('D5').value,document.getElementById('M5').value,document.getElementById('alugpo').value);
			document.getElementById('O5').value = ObjetoPrincipal.gpoest(document.getElementById('L5').value,document.getElementById('K5').value);
			document.getElementById('Q5').value = ObjetoPrincipal.olgura(document.getElementById('P5').value,document.getElementById('alugpo').value,document.getElementById('L5').value,document.getElementById('K5').value);
			document.getElementById('R5').value = ObjetoPrincipal.gpooferta(document.getElementById('L5').value,document.getElementById('N5').value);
		}

		//FILA 6

		if(document.getElementById('C6').value=="0"||document.getElementById('C6').value==""||f6<=0){}
		
		else{

			document.getElementById('G6').value = ObjetoPrincipal.reprobado(document.getElementById('F6').value,document.getElementById('C6').value);
			document.getElementById('H6').value = ObjetoPrincipal.aprobadonum(document.getElementById('C6').value, document.getElementById('F6').value);
			document.getElementById('I6').value = ObjetoPrincipal.aprobadociento(document.getElementById('C6').value, document.getElementById('G6').value);
			document.getElementById('J6').value = ObjetoPrincipal.gpocalord(document.getElementById('estesp').value, document.getElementById('alugpo').value,document.getElementById('E6').value,document.getElementById('acept').value);
			document.getElementById('K6').value = ObjetoPrincipal.gpocalrep(document.getElementById('D6').value, document.getElementById('F6').value, document.getElementById('alugpo').value);
			document.getElementById('L6').value = document.getElementById('J6').value;
			document.getElementById('N6').value = ObjetoPrincipal.gpoprorept(document.getElementById('D6').value,document.getElementById('M6').value,document.getElementById('alugpo').value);
			document.getElementById('O6').value = ObjetoPrincipal.gpoest(document.getElementById('L6').value,document.getElementById('K6').value);
			document.getElementById('Q6').value = ObjetoPrincipal.olgura(document.getElementById('P6').value,document.getElementById('alugpo').value,document.getElementById('L6').value,document.getElementById('K6').value);
			document.getElementById('R6').value = ObjetoPrincipal.gpooferta(document.getElementById('L6').value,document.getElementById('N6').value);
		}
	
};

window.onload = function CargaDeFuncionesObjeto() {
	
	EjecucionDeFuncionesObjeto();
};
	
//Validaciones dentro de la tabla
function ValidacionDeCheckBox() {	
		
	var lista1 = document.getElementById('Encabezado1').querySelectorAll("input");
	var lista2 = document.getElementById('Encabezado2').querySelectorAll("input");
	var lista3 = document.getElementById('Encabezado3').querySelectorAll("input");
	var lista4 = document.getElementById('Encabezado4').querySelectorAll("input");
	var lista5 = document.getElementById('Encabezado5').querySelectorAll("input");
	var lista6 = document.getElementById('Encabezado6').querySelectorAll("input");
		
	var ObjetoCondicion = new funciones();
		
	ObjetoCondicion.check(lista1,document.getElementById('chk1').checked);
		
	ObjetoCondicion.check(lista2,document.getElementById('chk2').checked);
	ObjetoCondicion.check(lista3,document.getElementById('chk3').checked);
	ObjetoCondicion.check(lista4,document.getElementById('chk4').checked);
	ObjetoCondicion.check(lista5,document.getElementById('chk5').checked);
	ObjetoCondicion.check(lista6,document.getElementById('chk6').checked);
		

};

function ValidacionInputsIniciales() {	
	
	var x;
	
	x = parseInt(document.getElementById('alugpo').value);
	
	if(x<=37||document.getElementById('alugpo').value=="")  {
		
		document.getElementById('alugpo').value = "37";
	}
	
	else {
		
		EjecucionDeFuncionesObjeto();
	}
		
	if(document.getElementById('estesp').value==""||document.getElementById('estesp').value=="0") {
		
		document.getElementById('estesp').value ="0";
	}
	
	else {

		EjecucionDeFuncionesObjeto();
	}

};
	
function ClickEventoEnter() {
	
	if(event.keyCode==13)
	{
		ValidacionInputsIniciales();
	}
	
};
	
function EsperadosToAceptados(evento) {
	
	//alert(document.getElementById('estesp').value +" ASCII:"+event.keyCode);
	
	if((evento.keyCode>47&&evento.keyCode<58)||(evento.keyCode>95&&evento.keyCode<105)) { 
		
		var x = document.getElementById('estesp').value;
		document.getElementById('acept').value = x;
	}
};
	
function ValidacionDeNumeros(ID,NUM) {
	
	var ER_Enteros = /^([0-9])*$/;//expresion regular para validar enteros		
	
	if(!ER_Enteros.test(NUM)) { 

		document.getElementById(ID).value="0";
	}
		
};

function ValidacionDeNumFlotantes(ID,NUM) {
	
	if (!/^([0-9])*[.]?[0-9]*$/.test(NUM)) {

		document.getElementById(ID).value="0";
	}
};

function ValidacionDeInputs(ID,VALUE) {	
	//alert(ID+" "+VALUE);
	
	if(document.getElementById(ID).value=="" || isNaN(VALUE)) {
			
		document.getElementById(ID).value="0";
	}
}
//fin de validaciondentro de la tabla
