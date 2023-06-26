@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Programas</h1>
<a class="btn btn-success" href="/programas/registrar">Adicionar</a>


@stop


@section('content')
<p>Listado de Programas</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Facultad</th>
            <th scope="col" class="text-right">Opciones</th>
        </tr>
    </thead>
    <tbody>
        
        @php
        $x = 0
        @endphp 
        @foreach ($programas as $p)
        <tr>
            <th scope="row">{{$x += 1}}</th>
            <td> {{ $p -> codprograma}}</td>
            <td> {{ $p -> nomprograma}}</td>
            <td> {{ $p -> facultad}} </td>
            <td class="text-right">
                <a class="btn btn-danger" href="{{route('eliminaProg', $p->codprograma)}}">Eliminar</a>
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