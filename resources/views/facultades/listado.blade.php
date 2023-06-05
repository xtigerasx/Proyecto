@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Facultades</h1>


@stop

@section('content')
<p>Listado de Facultades</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>
                <a class="btn btn-primary">Editar</a>
                <a class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
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