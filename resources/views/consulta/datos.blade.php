@extends('layouts.app')
@section('content')
<div class="container  d-flex justify-content-center align-items-center">
    <div class="card">
      <h1>Sistema para reigstro de pacientes del Programa de atencion al paciente Vih Mérida</h1>
      <form class="row g-2 bg-dark text-info">
        <div class="col-md-4 px-3">
          <label for="cedula" class="form-label">Cedula</label>
          <input type="number" class="form-control" id="cedula">
        </div>
        <div class="col-md-4 px-3">
          <label for="historia" class="form-label">Numero de historia</label>
          <input type="number" class="form-control" id="historia">
        </div>
        <div class="col-md-4 px-3">
          <label for="firstname" class="form-label">Primer Nombre</label>
          <input type="text" class="form-control" id="firstname">
        </div>
        <div class="col-md-4 px-3">
          <label for="secondname" class="form-label">Segundo Nombre</label>
          <input type="text" class="form-control" id="secondname">
        </div>
        <div class="col-md-4 px-3">
          <label for="lastname1" class="form-label">Primer Apellido</label>
          <input type="text" class="form-control" id="lastname1">
        </div>
        <div class="col-md-4 px-3">
          <label for="lastname2" class="form-label">Segundo Apellido</label>
          <input type="text" class="form-control" id="lastname2">
        </div>
        <div class="col-md-3 px-3">
          <label for="fecha_nac" class="form-label">Fecha de Nacimiento</label>
          <input type="date" class="form-control" id="fecha_nac">
        </div>
        <div class="col-md-3 px-3">
          <label for="sexo" class="form-label">Sexo</label>
          <input type="text" class="form-control" id="sexo">
        </div>
        <div class="col-md-3 px-3">
          <label for="nacionalidad" class="form-label">Nacionalidad</label>
          <input type="text" class="form-control" id="nacionalidad">
        </div>
        <div class="col-md-3 px-3">
          <label for="estado" class="form-label">Estado</label>
          <input type="text" class="form-control" id="estado">
        </div>
        <div class="col-md-3 px-3">
          <label for="municipio" class="form-label">Municipio</label>
          <input type="text" class="form-control" id="municipio">
        </div>
        <div class="col-md-3 px-3">
          <label for="parroquia" class="form-label">Parroquia</label>
          <input type="text" class="form-control" id="parroquia">
        </div>
        
        <div class="col-12 px-3">
          <label for="direccion" class="form-label">Direccion</label>
          <input type="text" class="form-control" id="direccion" >
        </div>
        <div class="col-md-3 px-3">
          <label for="telf_cel" class="form-label">Telefono Celular</label>
          <input type="text" class="form-control" id="telf_cel">
        </div>
        <div class="col-md-3 px-3">
          <label for="telf_hab" class="form-label">Telefono de Habitacion </label>
          <input type="text" class="form-control" id="telf_hab">
        </div>
        <div class="col-md-3 px-3">
          <label for="email" class="form-label">Correo electronico</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="col-md-3 px-3">
          <label for="nivel_ins" class="form-label">Nivel de instruccion</label>
          <input type="text" class="form-control" id="nivel_ins">
        </div>
        <div class="col-md-3 px-3">
          <label for="prof_of" class="form-label">Profesion u Oficio</label>
          <input type="text" class="form-control" id="prof_of">
        </div>
    <div class="col-12  mx-2">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </form>
</div>
</div>
@endsection