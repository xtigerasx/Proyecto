@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Registro de Programas</h1>


@stop

@section('content')
<form class="col-lg-4" action="{{url('programas/registrar')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="codigoPrograma" class="form-label">Código</label>
    <input type="text" class="form-control" id="codigoPrograma" name="codigoPrograma" required>
  </div>
  <div class="mb-3">
    <label for="nombrePrograma" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombrePrograma" name="nombrePrograma" required>
  </div>
  <div class="mb-3">
    <label for="facultadPrograma" class="form-label">Facultad</label>
    <input type="text" class="form-control" id="facultadPrograma" name="facultadPrograma" required>
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