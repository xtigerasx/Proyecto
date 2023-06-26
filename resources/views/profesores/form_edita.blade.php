@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Edición de Facultad</h1>


@stop

@section('content')
<form class="col-lg-4" action="{{route('actualiza_facultad', $facultad->codfacultad)}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="codigoFacultad" class="form-label">Código</label>
    <input type="text" class="form-control" id="codigoFacultad" name="codigoFacultad" required value="{{$facultad->codfacultad}}">
  </div>
  <div class="mb-3">
    <label for="nombreFacultad" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombreFacultad" name="nombreFacultad" required value="{{$facultad->nomfacultad}}">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop