@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Estudiantes</h1>
<a class="btn btn-success" href="/estudiantes/registrar">Adicionar</a>


@stop


@section('content')
<p>Listado de Estudiantes</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Sexo</th>
            <th scope="col">Ciudad de nacimiento</th>
            <th scope="col">Barrio</th>
            <th scope="col">Programa</th>
            <th scope="col" class="text-right">Opciones</th>
        </tr>
    </thead>
    <tbody>
        
        @php
        $x = 0
        @endphp 
        @foreach ($estudiantes as $e)
        <tr>
            <th scope="row">{{$x += 1}}</th>
            <td> {{ $e -> codestudiante}}</td>
            <td> {{ $e -> nomestudiante}}</td>
            <td> {{ $e -> edaestudiante}}</td>
            <td> {{ $e -> fechestudiante}}</td>
            <td> {{ $e -> sexestudiante}}</td>
            <td> {{ $e -> ciudad}}</td>
            <td> {{ $e -> barrio}}</td>
            <td> {{ $e -> programa}}</td>
            <td class="text-right">
                <a class="btn btn-primary" href="{{route('form_editar', $e->codestudiante)}}">Editar</a>
                <a class="btn btn-danger" href="{{route('eliminaEst', $e->codestudiante)}}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop