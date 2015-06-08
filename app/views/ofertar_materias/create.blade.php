@extends('layouts.master')

@section('content')

<?php 
$arreglo_nombre            = array();
$arreglo_clave             = array();
$arreglo_alumnos_grupo     = array();
$arreglo_alumnos_aceptados = array();
$arreglo_alumnos_inscritos = array();
$arreglo_sc_reprob_1a      = array();
$arreglo_sc_cumple_req     = array();
$arreglo_reprobados        = array();
$arreglo_grupos_estimados  = array();
$arreglo_alumnos_esperados = array();
$arreglo_reprob_real       = array();

for ($i=0; $i < 6 ; $i++) { 
    
    $arreglo_nombre[$i]            = " ";
    $arreglo_clave[$i]             = " ";
    $arreglo_alumnos_grupo[$i]     = 0;
    $arreglo_alumnos_aceptados[$i] = 0;
    $arreglo_alumnos_inscritos[$i] = 0;
    $arreglo_sc_cumple_req[$i]     = 0;
    $arreglo_sc_reprob_1a[$i]      = 0;
    $arreglo_reprobados[$i]        = 0;
    $arreglo_grupos_estimados[$i]  = 0;
    $arreglo_alumnos_esperados[$i] = 0;
    $arreglo_reprob_real[$i]       = 0;
}

$i = 0;

foreach ($asignatura as $a) {
    
    $nombre                        = $a-> nombre;
    $arreglo_nombre[$i]            = $nombre;
    
    $clave                         = $a-> clave;
    $arreglo_clave[$i]             = $clave;
    
    $alumnos_grupo                 = $a-> alumnos_grupo;
    $arreglo_alumnos_grupo[$i]     = $alumnos_grupo;
    
    $alumnos_aceptados             = $a-> alumnos_aceptados;
    $arreglo_alumnos_aceptados[$i] = $alumnos_aceptados;
    
    $alumnos_inscritos             = $a-> alumnos_inscritos;
    $arreglo_alumnos_inscritos[$i] = $alumnos_inscritos;
    
    $sc_reprob_1a                  = $a-> sc_reprob_1a;
    $arreglo_sc_reprob_1a[$i]      = $sc_reprob_1a;
    
    $sc_cumple_req                 = $a-> sc_cumple_req;
    $arreglo_sc_cumple_req[$i]     = $sc_cumple_req;
    
    $reprobados                    = $a-> reprobados;
    $arreglo_reprobados[$i]        = $reprobados;
    
    $grupos_estimados              = $a-> grupos_estimados;
    $arreglo_grupos_estimados[$i]  = $grupos_estimados;
    
    $alumnos_esperados             = $a-> alumnos_esperados;
    $arreglo_alumnos_esperados[$i] = $alumnos_esperados;
    
    $reprob_real                   = $a-> reprob_real;
    $arreglo_reprob_real[$i]       = $reprob_real;
    
    $i++;
} 
 ?>

<div id="tabla">

<form class="form-horizontal" role="form" action="/ofertar_materias/store" method="post" accept-charset="utf-8" id="form">
<div class="form-group">
    <label class="col-lg-4 control-label" >Carrera a Proyectar:</label>
    <div class="col-lg-1">
        <input type="text" value="<?php echo "$carrera"; ?>" name="carrera" id="carrera" class="form-control" readonly="true" tabindex="1"> 
    </div>
    <label class="col-lg-2 control-label" >Semestre:</label>
    <div class="col-lg-1" >
        <input type="text" value="<?php echo "$semestre"; ?>" name="semestre" id="semestre" class="form-control" readonly="true" tabindex="1">
    </div>
</div>
<br/>
<div class="form-group">
     <label for="iAlumno_Grupo" class="col-lg-3 control-label">Alumno por Grupo:</label>
    <div class="col-lg-1">
      <input type="text" class="form-control" id="alugpo" name="iAlumno_Grupo" size ="2" maxlength="3" tabindex="2" value="<?echo "$arreglo_alumnos_grupo[0]"; ?>" 
      onchange="ValidacionInputsIniciales()" onkeydown="ValidacionDeNumeros(this.id,this.value)" 
      onkeypress="return permite(event, 'num')"  >
    </div>

    <label for="Esperados" class="col-lg-2 control-label">Esperados:</label>
    <div class="col-lg-1">
      <input type="text" class="form-control" id="estesp" name="iAlumnos_Esperados" size ="4" tabindex="2"
      value="<?echo "$arreglo_alumnos_esperados[0]"; ?>" 
      maxlength="3" onkeyup="EsperadosToAceptados(event)" 
      onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
      onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" onblur="ValidacionInputsIniciales();ValidacionDeNumeros(this.id,this.value);ValidacionDeInputs(this.id,this.value)"
      onkeypress="return permite(event, 'num')" >
    </div>
<div id="Alumnos_Aceptados">
    <label for="Aceptados" class="col-lg-2 control-label">Aceptados:</label>
    <div class="col-lg-1">
      <input type="text" class="form-control" id="acept" name="iAlumnos_Aceptados" size ="4" tabindex="2"
      value="<?echo "$arreglo_alumnos_aceptados[0]"; ?>" 
      maxlength="3" onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" onblur="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)"
      onkeypress="return permite(event, 'num')" >
    </div>
</div>
</div>

<br/>

<div class="table-responsive">
<table id="tabla2" class="table table-bordered table-condensed" >
<thead>
<tr id="Encabezado">
    <th rowspan="2"><span class ="glyphicon glyphicon-ok"></span></th>
    <th rowspan="2">Materia</th>
    <th rowspan="2">Clave</th>
    <th rowspan="2">Inscritos</th>
    <th rowspan="2">S/C Reprob 1a</th>
    <th rowspan="2">S/C Cump Req</th>
    <th colspan="2">Reprobados</th>
    <th colspan="2">Aprobados</th>
    <th colspan="2">Gpos. Calculados</th>
    <th colspan="3">Gpos. Proyectados</th>
    <th rowspan="2">Gpo. Estimado</th>
    <th rowspan="2">Gpos. estimados</th>
    <th rowspan="2">Olgura</th>
    <th rowspan="2">Gpos. a Ofertar</th>
</tr>
<tr id="Encabezado0">
    <th>Num</th>
    <th>%</th>
    <th>Num</th>
    <th>%</th>
    <th>Ord</th>
    <th>Repite</th>
    <th>Ord</th>
    <th>Reprob. Real</th>
    <th>Repite</th>
</tr>
</thead>
<tbody>
<div class="form-group">
<tr id="Encabezado1">
    <td> 
        <div class="checkbox"> 
            <input type="checkbox" id="chk1" name="chk1" value="1" onclick="ValidacionDeCheckBox()" tabindex="3"> 
        </div> 
    </td>
    <td tabindex ="-1"> <?echo "$arreglo_nombre[0]";?></td>
    <td> 
        <input value="<?echo "$arreglo_clave[0]";?>" name="sClaveAsignatura" id="sClaveAsignatura" 
        readonly="true" size="10" tabindex="-1"> 
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="C1" name="iAlumnos_Inscritos" size="3" tabindex="4"
        value="<?echo "$arreglo_alumnos_inscritos[0]";?>" maxlength="3" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="D1" name="iSC_Reprobados_1a" size="3" maxlength="3" tabindex="4"
        value="<?echo "$arreglo_sc_reprob_1a[0]"; ?>"
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="E1" name="iSC_Cumple_Req" size="3" maxlength="3" tabindex="4"
        value="<?echo "$arreglo_sc_cumple_req[0]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)"  onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="F1" size="3" maxlength="3" name="iReprobados" tabindex="4"
        value="<?echo "$arreglo_reprobados[0]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)"  onkeypress="return permite(event, 'num')">
    </td>
    <td>
        <input type="text" id="G1" size="3" value="0" maxlength="3"  readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="H1" size="3" value="0" maxlength="3" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="I1" size="3" value="0" maxlength="3"  readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="J1" size="3" value="0" maxlength="3"readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="K1" size="3" value="0" maxlength="3"readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="L1" size="3" value="0" maxlength="3"readonly="true" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="M1" name="iReprobados_Real" size="3" maxlength="3" tabindex="4"
        value="<?echo "$arreglo_reprob_real[0]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)"  onkeypress="return permite(event, 'num')">
    </td>
    <td>
        <input type="text" id="N1" size="3" value="0" maxlength="3" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="O1" size="3" value="0" maxlength="3" readonly="true" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="P1" name="iGrupos_Estimados" size="3" maxlength="3" tabindex="4"
        value="<?echo "$arreglo_grupos_estimados[0]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumFlotantes(this.id,this.value)">
    </td>
    <td>
        <input type="text" id="Q1" size="3" maxlength="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="R1" size="3" maxlength="3" value="0" readonly="true" tabindex="-1">
    </td>

    <td> 
        <div id="asterisko1">  <span class="glyphicon glyphicon-asterisk"> </span> </div>  
    </td> 
</tr>

<tr id="Encabezado2">
    <td> 
        <div class="checkbox"> 
            <input type="checkbox" id="chk2" name="chk2" value="1" onclick="ValidacionDeCheckBox()" tabindex="3">
         </div>
    </td>
    <td tabindex ="-1"> <?echo "$arreglo_nombre[1]";?> </td>
    <td> 
        <input value="<?echo "$arreglo_clave[1]";?>" tabindex="1" name="sClaveAsignatura_2" id="sClaveAsignatura2"
        readonly="true" size="10">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="C2" name="iAlumnos_Inscritos_2" size="3" tabindex="5" maxlength="3"
        value="<?echo "$arreglo_alumnos_inscritos[1]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="D2" name="iSC_Reprobados_1a_2" size="3" tabindex="5" maxlength="3"
        value="<?echo "$arreglo_sc_reprob_1a[1]";  ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="E2" name="iSC_Cumple_Req_2" size="3" tabindex="5" maxlength="3"
        value="<?echo "$arreglo_sc_cumple_req[1]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="F2" size="3" value="<?echo "$arreglo_reprobados[1]"; ?>" name="iReprobados_2" tabindex="5" maxlength="3"
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
     </td>
    <td>
        <input type="text" id="G2" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="H2" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="I2" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="J2" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="K2" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="L2" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="M2" name="iReprobados_Real_2" size="3" tabindex="5" maxlength="3"
        value="<?echo "$arreglo_reprob_real[1]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td>
        <input type="text" id="N2" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="O2" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="P2" name="iGrupos_Estimados_2" size="3" tabindex="5" maxlength ="3"
        value="<?echo "$arreglo_grupos_estimados[1]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumFlotantes(this.id,this.value)" >
    </td>
    <td>
        <input type="text" id="Q2" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="R2" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td> 
        <div id="asterisko2">  <span class="glyphicon glyphicon-asterisk"> </span> </div>  
    </td> 
</tr>

<tr id="Encabezado3">
    <td>
        <div class="checkbox"> 
            <input type="checkbox"  id="chk3" name="chk3" value="1" onclick="ValidacionDeCheckBox()" tabindex="3">
        </div>
    </td>
    <td tabindex ="-1"> <?echo "$arreglo_nombre[2]";?> </td>
    <td>
        <input value="<?echo "$arreglo_clave[2]";?>" name="sClaveAsignatura_3" id="sClaveAsignatura3" readonly="true" size="10" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="C3" name="iAlumnos_Inscritos_3" size="3" tabindex="6" maxlength="3"
        value="<? echo "$arreglo_alumnos_inscritos[2]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="D3" size="3" name="iSC_Reprobados_1a_3" tabindex="6" maxlength="3"
        value="<?echo "$arreglo_sc_reprob_1a[2]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="E3" name="iSC_Cumple_Req_3" size="3" tabindex="6" maxlength="3"
        value="<?echo "$arreglo_sc_cumple_req[2]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="F3" size="3" value="<?echo "$arreglo_reprobados[2]"; ?>" name="iReprobados_3" tabindex="6" maxlength="3"
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')" >
    </td>
    <td>
        <input type="text" id="G3" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="H3" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="I3" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="J3" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="K3" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="L3" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="M3" name="iReprobados_Real_3" size="3" tabindex="6" maxlength="3"
        value="<?echo "$arreglo_reprob_real[2]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td>
        <input type="text" id="N3" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="O3" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="P3" name="iGrupos_Estimados_3" size="3" tabindex="6" maxlength="3"
        value="<?echo "$arreglo_grupos_estimados[2]"; ?>"
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumFlotantes(this.id,this.value)" >
    </td>
    <td>
        <input type="text" id="Q3" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="R3" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td> 
        <div id="asterisko3">  <span class="glyphicon glyphicon-asterisk"> </span> </div>  
    </td> 
</tr>

<tr id="Encabezado4">
    <td>
        <div class="checkbox"> 
            <input type="checkbox" id="chk4" name="chk4" value="1" onclick="ValidacionDeCheckBox()" tabindex="3"> 
        </div>
    </td>
    <td tabindex ="-1"> <?echo "$arreglo_nombre[3]";?> </td>
    <td>
        <input value="<?echo "$arreglo_clave[3]";?>" name="sClaveAsignatura_4" id="sClaveAsignatura4" readonly="true" size="10" tabindex="-1"> 
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="C4" name="iAlumnos_Inscritos_4" size="3" tabindex="7" maxlength="3"
        value="<?echo "$arreglo_alumnos_inscritos[3]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="D4" name="iSC_Reprobados_1a_4" size="3" tabindex="7" maxlength="3"
        value="<?echo "$arreglo_sc_reprob_1a[3]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="E4" name="iSC_Cumple_Req_4" size="3" tabindex="7" maxlength="3"
        value="<?echo "$arreglo_sc_cumple_req[3]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="F4" size="3" value="<?echo "$arreglo_reprobados[3]"; ?>" name="iReprobados_4" tabindex="7" maxlength="3"
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td>
        <input type="text" id="G4" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="H4" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="I4" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="J4" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="K4" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="L4" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="M4" size="3" name="iReprobados_Real_4" tabindex="7" maxlength="3"
        value="<?echo "$arreglo_reprob_real[3]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td>
        <input type="text" id="N4" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="O4" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="P4" size="3" name="iGrupos_Estimados_4" tabindex="7" maxlength="3"
        value="<?echo "$arreglo_grupos_estimados[3]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumFlotantes(this.id,this.value)">
    </td>
    <td>
        <input type="text" id="Q4" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="R4" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td> 
        <div id="asterisko4">  <span class="glyphicon glyphicon-asterisk"> </span> </div>  
    </td> 
</tr>

<tr id="Encabezado5">
    <td>
        <div class="checkbox"> 
            <input type="checkbox"  id="chk5" name="chk5" value="1" onclick="ValidacionDeCheckBox()" tabindex="3">
        </div>
    </td>
    <td tabindex ="-1"> <?echo "$arreglo_nombre[4]";?> </td>
    <td>
        <input value="<?echo "$arreglo_clave[4]";?>" name="sClaveAsignatura_5" id="sClaveAsignatura5" tabindex="-1" 
        readonly="true" size="10"> 
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="C5" name="iAlumnos_Inscritos_5" size="3" tabindex="8" maxlength="3"
        value="<?echo "$arreglo_alumnos_inscritos[4]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="D5" size="3" name="iSC_Reprobados_1a_5" tabindex="8" maxlength="3"
        value="<?echo "$arreglo_sc_reprob_1a[4]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="E5" size="3" name="iSC_Cumple_Req_5" tabindex="8" maxlength="3"
        value="<?echo "$arreglo_sc_cumple_req[4]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="F5" size="3" value="<?echo "$arreglo_reprobados[4]"; ?>" name="iReprobados_5" tabindex="8" maxlength="3"
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td>
        <input type="text" id="G5" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="H5" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="I5" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="J5" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="K5" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="L5" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="M5" name="iReprobados_Real_5" size="3" tabindex="8" maxlength="3"
        value="<?echo "$arreglo_reprob_real[4]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td>
        <input type="text" id="N5" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="O5" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="P5" name="iGrupos_Estimados_5" size="3" tabindex="8" maxlength="3"
        value="<?echo "$arreglo_grupos_estimados[4]"; ?>"
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumFlotantes(this.id,this.value)" >
    </td>
    <td>
        <input type="text" id="Q5" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="R5" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td> 
        <div id="asterisko5">  <span class="glyphicon glyphicon-asterisk"> </span> </div>  
    </td> 
</tr>

<tr id="Encabezado6">
    <td>
        <div class="checkbox"> 
            <input type="checkbox" id="chk6" name="chk6" value="1" onclick="ValidacionDeCheckBox()" tabindex="3">
        </div>
    </td>
    <td tabindex ="-1"><?echo "$arreglo_nombre[5]";?> </td>
    <td>
        <input value="<?echo "$arreglo_clave[5]";?>" name="sClaveAsignatura_6" id="sClaveAsignatura6" readonly="true" size="10" tabindex="-1"> 
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="C6" name="iAlumnos_Inscritos_6" size="3" tabindex="9" maxlength="3"
        value="<?echo "$arreglo_alumnos_inscritos[5]"; ?>"
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="D6" name="iSC_Reprobados_1a_6" size="3" tabindex="9" maxlength="3"
        value="<?echo "$arreglo_sc_reprob_1a[5]"; ?>"
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="E6" size="3" name="iSC_Cumple_Req_6" tabindex="9" maxlength="3"
        value="<?echo "$arreglo_sc_cumple_req[5]"; ?>"
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="F6" size="3" value="<?php echo "$arreglo_reprobados[5]"; ?>" name="iReprobados_6" tabindex="9" maxlength="3"
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td>
        <input type="text" id="G6" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="H6" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="I6" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="J6" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="K6" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="L6" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="M6"  name="iReprobados_Real_6" size="3" tabindex="9" maxlength="3"
        value="<?echo "$arreglo_reprob_real[5]"; ?>" 
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumeros(this.id,this.value)" 
        onkeypress="return permite(event, 'num')">
    </td>
    <td>
        <input type="text" id="N6" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td>
        <input type="text" id="O6" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td bgcolor="#6495ED">
        <input type="text" id="P6" name="iGrupos_Estimados_6" size="3" tabindex="9" maxlength="3"
        value="<?php echo "$arreglo_grupos_estimados[5]"; ?>"
        onblur ="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onchange="ValidacionInputsIniciales();ValidacionDeInputs(this.id,this.value)" 
        onkeyup="ClickEventoEnter();ValidacionDeNumFlotantes(this.id,this.value)" >
    </td>
    <td>
        <input type="text" id="Q6" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td >
        <input type="text" id="R6" size="3" value="0" readonly="true" tabindex="-1">
    </td>
    <td> 
        <div id="asterisko6">  <span class="glyphicon glyphicon-asterisk"> </span> </div>  
    </td> 
</tr>
</tbody>
</table>
</div>
<center>
    <button type="submit" id="guardar" class="btn btn-primary" tabindex="10">Guardar</button>
</center>
</form>
</div>
@stop