@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Registro de Estudiantes</h1>


@stop

@section('content')
<form class="col-lg-4" action="{{url('estudiantes/registrar')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="codigoEstudiante" class="form-label">Código</label>
    <input type="text" class="form-control" id="codigoEstudiante" name="codigoEstudiante" required>
  </div>
  <div class="mb-3">
    <label for="nombreEstudiante" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombreEstudiante" name="nombreEstudiante" required>
  </div>
  <div class="mb-3">
    <label for="edadEstudiante" class="form-label">Edad</label>
    <input type="number" class="form-control" id="edadEstudiante" name="edadEstudiante" required>
  </div>
  <div class="mb-3">
    <label for="fechEstudiante" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fechEstudiante" name="fechEstudiante" required>
  </div>
  <div class="mb-3">
    <label for="sexEstudiante" class="form-label">Sexo</label>
    <input type="text" class="form-control" id="sexEstudiante" name="sexEstudiante" required>
  </div>
  <div class="mb-3">
    <label for="ciudadEstudiante" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="ciudadEstudiante" name="ciudadEstudiante" required>
  </div>
  <div class="mb-3">
    <label for="barrioEstudiante" class="form-label">Barrio</label>
    <input type="text" class="form-control" id="barrioEstudiante" name="barrioEstudiante" required>
  </div>
  <div class="mb-3">
    <label for="programaEstudiante" class="form-label">Programa</label>
    <input type="text" class="form-control" id="programaEstudiante" name="programaEstudiante" required>
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