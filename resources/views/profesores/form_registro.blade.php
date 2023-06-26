@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Registro de Profesores</h1>


@stop

@section('content')
<form class="col-lg-4" action="{{url('profesores/registrar')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="codigoProfesor" class="form-label">Código</label>
    <input type="text" class="form-control" id="codigoProfesor" name="codigoProfesor" required>
  </div>
  <div class="mb-3">
    <label for="nombreProfesor" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombreProfesor" name="nombreProfesor" required>
  </div>
  <div class="mb-3">
    <label for="categoriaProfesor" class="form-label">Categoria</label>
    <input type="text" class="form-control" id="categoriaProfesor" name="categoriaProfesor">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
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