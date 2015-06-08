<?php 
$arreglo_nombre = array();
$arreglo_clave = array();

for ($i=0; $i < 6 ; $i++) { 
	$arreglo_nombre[$i] = " ";
	$arreglo_clave[$i] = " ";
}

$i = 0;
$j = 0;

foreach ($asignatura as $a) {

$nombre = $a->nombre;
$arreglo_nombre[$i] = $nombre;
$i++;

$clave = $a->clave;
$arreglo_clave[$j] = $clave;
$j++;
} 
?>


<table class="table table-bordered table-striped" id="tb">
	<caption><h3>1° Semestre</h3></caption>
	<thead>
		<tr>
			<th>#</th>
			<th>Asignatura</th>
			<th>Clave</th>
			<th>Alumnos por Grupo</th>
			<th>Aceptados</th>
			<th>Inscritos</th>
			<th>S/C Repro 1ra</th>
			<th>S/C Cump Req</th>
			<th>Reprobados</th>
			<th>Grupos Estimados</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td><? echo "$arreglo_nombre[0]";  ?></td>
			<td><? echo "$arreglo_clave[0]"; ?></td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>2</td>
			<td><? echo "$arreglo_nombre[1]";  ?></td>
			<td><? echo "$arreglo_clave[1]"; ?></td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>3</td>
			<td><? echo "$arreglo_nombre[2]";  ?></td>
			<td><? echo "$arreglo_clave[2]"; ?></td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>4</td>
			<td><? echo "$arreglo_nombre[3]";  ?></td>
			<td><? echo "$arreglo_clave[3]"; ?></td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>5</td>
			<td><? echo "$arreglo_nombre[4]";  ?></td>
			<td><? echo "$arreglo_clave[4]"; ?></td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>6</td>
			<td><? echo "$arreglo_nombre[5]";  ?></td>
			<td><? echo "$arreglo_clave[5]"; ?></td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
	</tbody>
</table>

<table class="table table-bordered table-striped">
	<caption><h3>2° Semestre</h3></caption>
	<thead>
		<tr>
			<th>#</th>
			<th>Asignatura</th>
			<th>Clave</th>
			<th>Alumnos por Grupo</th>
			<th>Aceptados</th>
			<th>Inscritos</th>
			<th>S/C Repro 1ra</th>
			<th>S/C Cump Req</th>
			<th>Reprobados</th>
			<th>Grupos Estimados</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>2</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>3</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>4</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>5</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>1</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>

	</tbody>
</table>

<table class="table table-bordered table-striped">
	<caption><h3>3° Semestre</h3></caption>
	<thead>
		<tr>
			<th>#</th>
			<th>Asignatura</th>
			<th>Clave</th>
			<th>Alumnos por Grupo</th>
			<th>Aceptados</th>
			<th>Inscritos</th>
			<th>S/C Repro 1ra</th>
			<th>S/C Cump Req</th>
			<th>Reprobados</th>
			<th>Grupos Estimados</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>2</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>3</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>4</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>5</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>1</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>

	</tbody>
</table>

<table class="table table-bordered table-striped">
	<caption><h3>4° Semestre</h3></caption>
	<thead>
		<tr>
			<th>#</th>
			<th>Asignatura</th>
			<th>Clave</th>
			<th>Alumnos por Grupo</th>
			<th>Aceptados</th>
			<th>Inscritos</th>
			<th>S/C Repro 1ra</th>
			<th>S/C Cump Req</th>
			<th>Reprobados</th>
			<th>Grupos Estimados</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>2</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>3</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>4</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>5</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>1</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>

	</tbody>
</table>

<table class="table table-bordered table-striped">
	<caption><h3>5° Semestre</h3></caption>
	<thead>
		<tr>
			<th>#</th>
			<th>Asignatura</th>
			<th>Clave</th>
			<th>Alumnos por Grupo</th>
			<th>Aceptados</th>
			<th>Inscritos</th>
			<th>S/C Repro 1ra</th>
			<th>S/C Cump Req</th>
			<th>Reprobados</th>
			<th>Grupos Estimados</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>2</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>3</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>4</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>5</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>1</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>

	</tbody>
</table>




@extends('layouts.header')

@section('content')
<div id="tabla" >
<form>
<center>
<table border ="1" id="tabla1">
<tr>
<td size="20">

<p>Alumnos por grupo:</p>

</td>
<td><input type="text" id="alugpo" size ="2" value="37" onblur="" onchange="vale()" onkeydown="validanum(this.id,this.value)"></td>
</tr>

</table>
</center>
<br>
<center>
<table border="1">

<tr>
<td>

<p>Esperados:</p>

</td>
<td><input type="text" id="estesp" size ="4" value="0" onchange="validacuadro();thelast()" onkeydown="enter();validanum(this.id,this.value)" onblur="thelast()"validanum(this.id,this.value)></td>
<td> 
<p>Aceptados</p>
</td>
<td><input type="text" id="acept" size ="4"  value="0" onchange="validacuadro()" onkeydown="enter();validanum(this.id,this.value)"></td>
</tr>
</table>
</center>
<center>

<table border="1" width="1000" height="300" id="tabla2">

<tr id="Encabezado">
<td rowspan="2">Incluir</td>
<td rowspan="2">Materia</td>
<td rowspan="2">Clave</td>
<td rowspan="2">Inscritos</td>
<td rowspan="2">S/cursar reprob 1a</td>
<td rowspan="2">S/cursar cump req</td>
<td colspan="2">Repro.</td>
<td colspan="2">Aprob.</td>
<td colspan="2">Grupos calculados</td>
<td colspan="3">Grupos proyectados</td>
<td rowspan="2">Grupo estimado</td>
<td rowspan="2">Grupos estimados</td>
<td rowspan="2">Olgura</td>
<td rowspan="2">Grupos a ofertar</td>


</tr>

<tr id="Encabezado0">

<td>Num</td>
<td>%</td>
<td>Num</td>
<td>%</td>
<td>Ordinario</td>
<td>Repite</td>
<td>Ordinario</td>
<td>Reprob. real</td>
<td>Repite</td>

@foreach($asignatura as $id)
</tr>
@foreach ($asignatura as $a )
<tr id="Encabezado1">
<td><input type="checkbox" id="chk1" onclick="valida()"></td>
<td>{{$a->nombre}}</td>
<td>{{$a->clave}}</td>
<td bgcolor="#6495ED"><input type="text" id="C1" size="3" value="0" onchange="validacuadro()" onkeydown="enter();validanum(this.id,this.value)" ></td>
<td bgcolor="#6495ED"><input type="text" id="D1" size="3"	value="0" onchange="validacuadro()" onkeydown="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="E1" size="3"	value="0" onchange="validacuadro()" onkeydown="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="F1" size="2" value="0" onchange="validacuadro()" onkeydown="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="G1" size="3" value="0" readonly="true"></td>
<td><input type="text" id="H1" size="2" value="0" readonly="true"></td>
<td><input type="text" id="I1" size="2" value="0" readonly="true"></td>
<td><input type="text" id="J1" size="2" value="0" readonly="true"></td>
<td><input type="text" id="K1" size="2" value="0" readonly="true"></td>
<td><input type="text" id="L1" size="2" value="0" readonly="true"></td>
<td bgcolor="#6495ED"><input type="text" id="M1" size="2" value="0" onchange="validacuadro()" onkeydown="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="N1" size="2" value="0" readonly="true"></td>
<td><input type="text" id="O1" size="2" value="0" readonly="true"></td>
<td bgcolor="#6495ED"><input type="text" id="P1" size="2" value="0" onchange="validacuadro()" onkeydown="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="Q1" size="2" value="0" readonly="true"></td>
<td><input type="text" id="R1" size="2" value="0" readonly="true"></td>
</tr>
@endforeach


<tr id="Encabezado2">
<td><input type="checkbox" id="chk2" onclick="valida()"></td>
<td></td>
<td></td>
<td bgcolor="#6495ED"><input type="text" id="C2" size="3" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="D2" size="3" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="E2" size="3" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="F2" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="G2" size="3" value="0" readonly="true"></td>
<td><input type="text" id="H2" size="2" value="0" readonly="true"></td>
<td><input type="text" id="I2" size="2" value="0" readonly="true"></td>
<td><input type="text" id="J2" size="2" value="0" readonly="true"></td>
<td><input type="text" id="K2" size="2" value="0" readonly="true"></td>
<td><input type="text" id="L2" size="2" value="0" readonly="true"></td>
<td bgcolor="#6495ED"><input type="text" id="M2" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="N2" size="2" value="0" readonly="true"></td>
<td><input type="text" id="O2" size="2" value="0" readonly="true"></td>
<td bgcolor="#6495ED"><input type="text" id="P2" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="Q2" size="2" value="0" readonly="true"></td>
<td><input type="text" id="R2" size="2" value="0" readonly="true"></td>
</tr>

<tr id="Encabezado3">
<td><input type="checkbox" id="chk3" onclick="valida()"></td>
<td><input type="text" id="A3" size="20"></td>
<td><input type="text" id="B3" size="8"></td>
<td bgcolor="#6495ED"><input type="text" id="C3" size="3" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="D3" size="3"	value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="E3" size="3"	value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="F3" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="G3" size="3" value="0" readonly="true"></td>
<td><input type="text" id="H3" size="2" value="0" readonly="true"></td>
<td><input type="text" id="I3" size="2" value="0" readonly="true"></td>
<td><input type="text" id="J3" size="2" value="0" readonly="true"></td>
<td><input type="text" id="K3" size="2" value="0" readonly="true"></td>
<td><input type="text" id="L3" size="2" value="0" readonly="true"></td>
<td bgcolor="#6495ED"><input type="text" id="M3" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="N3" size="2" value="0" readonly="true"></td>
<td><input type="text" id="O3" size="2" value="0" readonly="true"></td>
<td bgcolor="#6495ED"><input type="text" id="P3" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="Q3" size="2" value="0" readonly="true"></td>
<td><input type="text" id="R3" size="2" value="0" readonly="true"></td>
</tr>

<tr id="Encabezado4">

<td><input type="checkbox" id="chk4" onclick="valida()"></td>
<td><input type="text" id="A4" size="20"></td>
<td><input type="text" id="B4" size="8"></td>
<td bgcolor="#6495ED"><input type="text" id="C4" size="3" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="D4" size="3"	value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="E4" size="3"	value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="F4" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="G4" size="3" value="0" readonly="true"></td>
<td><input type="text" id="H4" size="2" value="0" readonly="true"></td>
<td><input type="text" id="I4" size="2" value="0" readonly="true"></td>
<td><input type="text" id="J4" size="2" value="0" readonly="true"></td>
<td><input type="text" id="K4" size="2" value="0" readonly="true"></td>
<td><input type="text" id="L4" size="2" value="0" readonly="true"></td>
<td bgcolor="#6495ED"><input type="text" id="M4" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="N4" size="2" value="0" readonly="true"></td>
<td><input type="text" id="O4" size="2" value="0" readonly="true"></td>
<td bgcolor="#6495ED"><input type="text" id="P4" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="Q4" size="2" value="0" readonly="true"></td>
<td><input type="text" id="R4" size="2" value="0" readonly="true"></td>
</tr>

<tr id="Encabezado5">

<td><input type="checkbox" id="chk5" onclick="valida()"></td>
<td><input type="text" id="A5" size="20"></td>
<td><input type="text" id="B5" size="8"></td>
<td bgcolor="#6495ED"><input type="text" id="C5" size="3" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="D5" size="3"	value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="E5" size="3"	value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="F5" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="G5" size="3" value="0" readonly="true"></td>
<td><input type="text" id="H5" size="2" value="0" readonly="true"></td>
<td><input type="text" id="I5" size="2" value="0" readonly="true"></td>
<td><input type="text" id="J5" size="2" value="0" readonly="true"></td>
<td><input type="text" id="K5" size="2" value="0" readonly="true"></td>
<td><input type="text" id="L5" size="2" value="0" readonly="true"></td>
<td bgcolor="#6495ED"><input type="text" id="M5" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="N5" size="2" value="0" readonly="true"></td>
<td><input type="text" id="O5" size="2" value="0" readonly="true"></td>
<td bgcolor="#6495ED"><input type="text" id="P5" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="Q5" size="2" value="0" readonly="true"></td>
<td><input type="text" id="R5" size="2" value="0" readonly="true"></td>
</tr>

<tr id="Encabezado6">

<td><input type="checkbox" id="chk6" onclick="valida()"></td>
<td><input type="text" id="A6" size="20"></td>
<td><input type="text" id="B6" size="8"></td>
<td bgcolor="#6495ED"><input type="text" id="C6" size="3" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="D6" size="3"	value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="E6" size="3"	value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td bgcolor="#6495ED"><input type="text" id="F6" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="G6" size="3" value="0" readonly="true"></td>
<td><input type="text" id="H6" size="2" value="0" readonly="true"></td>
<td><input type="text" id="I6" size="2" value="0" readonly="true"></td>
<td><input type="text" id="J6" size="2" value="0" readonly="true"></td>
<td><input type="text" id="K6" size="2" value="0" readonly="true"></td>
<td><input type="text" id="L6" size="2" value="0" readonly="true"></td>
<td bgcolor="#6495ED"><input type="text" id="M6" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="N6" size="2" value="0" readonly="true"></td>
<td><input type="text" id="O6" size="2" value="0" readonly="true"></td>
<td bgcolor="#6495ED"><input type="text" id="P6" size="2" value="0" onchange="validacuadro()" onkeyup="enter();validanum(this.id,this.value)"></td>
<td><input type="text" id="Q6" size="2" value="0" readonly="true"></td>
<td><input type="text" id="R6" size="2" value="0" readonly="true"></td>
</tr>
</table>
</center>
</form>
</div>
@stop