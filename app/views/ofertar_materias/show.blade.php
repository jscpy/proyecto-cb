@extends('layouts.master')

@section('content')
@include('search')
<table class="table table-hover table-striped" id="tabla">
	<caption><h3>{{$carrera}}</h3></caption>
	<thead>
		<tr>
			<th>Asignatura</th>
			<th>Clave</th>
			<th>Semestre</th>
			<th width="120">Alumnos Gpo.</th>
			<th>Esperados</th>
			<th>Aceptados</th>
			<th>Inscritos</th>
			<th>Reprobados</th>
			<th>S/C Repro 1ra</th>
			<th>S/C Cump Req</th>
			<th>Reprobados Reales</th>
			<th>Gpos. Estimados</th>
		</tr>
	</thead>
	<tbody>
@foreach ($asignatura as $a)
		<tr>
			<td>{{ $a-> nombre }}</td>
			<td>{{ $a-> clave }} </td>
			<td>{{ $a-> semestre }}°</td>
			<td>{{ $a-> alumnos_grupo }}</td>
			<td>{{ $a-> alumnos_esperados }}</td>
			<td>{{ $a-> alumnos_aceptados }}</td>
			<td>{{ $a-> alumnos_inscritos }}</td>
			<td>{{ $a-> reprobados }}</td>
			<td>{{ $a-> sc_reprob_1a }}</td>
			<td>{{ $a-> sc_cumple_req }}</td>
			<td>{{ $a-> reprob_real }}</td>
			<td>{{ $a-> grupos_estimados }}</td>
		</tr>
@endforeach
	</tbody>
</table>
@stop