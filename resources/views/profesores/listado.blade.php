@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Profesores</h1>
<a class="btn btn-success" href="/profesores/registrar">Adicionar</a>


@stop


@section('content')
<p>Listado de Profesores</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoría</th>
            <th scope="col" class="text-right">Opciones</th>
        </tr>
    </thead>
    <tbody>
        
        @php
        $x = 0
        @endphp 
        @foreach ($profesores as $p)
        <tr>
            <th scope="row">{{$x += 1}}</th>
            <td> {{ $p -> codprofesor}}</td>
            <td> {{ $p -> nomprofesor}}</td>
            @php
                if ( $p -> catprofesor == ""){
                    echo "<td>No se ha registrado una categoría</td>";
                }else{
                    echo "<td> {$p -> catprofesor} </td>";
                }
            @endphp
            <td class="text-right">
                <a class="btn btn-danger" href="{{route('eliminaProf', $p->codprofesor)}}">Eliminar</a>
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