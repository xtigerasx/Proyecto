@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Facultades</h1>
<a class="btn btn-success" href="/facultades/registrar">Adicionar</a>


@stop


@section('content')
<p>Listado de Facultades</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col" class="text-right">Opciones</th>
        </tr>
    </thead>
    <tbody>
        
        @php
        $x = 0
        @endphp 
        @foreach ($facultades as $f)
        <tr>
            <th scope="row">{{$x += 1}}</th>
            <td> {{ $f -> codfacultad}}</td>
            <td> {{ $f -> nomfacultad}}</td>
            <td class="text-right">
                <a class="btn btn-primary" href="{{route('form_editar', $f->codfacultad)}}">Editar</a>
                <a class="btn btn-danger" href="{{route('eliminaFac', $f->codfacultad)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7l16 0"></path>
                        <path d="M10 11l0 6"></path>
                        <path d="M14 11l0 6"></path>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                </a>
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