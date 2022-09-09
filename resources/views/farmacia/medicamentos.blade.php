@extends('layouts.app')
@section('content')

<div class="container  d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="card-header"> Registro de medicamentos del Programa 
        <br>    
        de atencion al paciente Vih Mérida</div>
        <form class="row bg-dark text-info" method="POST">
        
        <div class="col-md-4 px-3">
            <label for="codigo" class="form-label">Codigo del Medicamento</label>
            <input type="text" class="form-control" id="nombre">  
        </div>   
        <div class="col-md-4 px-3">
          <label for="nombre" class="form-label">Nombre del medicamento</label>
          <input type="text" class="form-control" id="nombre">
        </div>
        <div class="col-md-4 px-3">
          <label for="descripcion" class="form-label">descripcion</label>
          <input type="textarea" class="form-control" id="descripcion">
          </form>
        </div>
        <div class="col-12  mx-2">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>

    </div>
</div>
@endsection