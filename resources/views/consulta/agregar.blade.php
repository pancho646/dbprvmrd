@extends('layouts.app')
@section('content')
<div class="container">
 <h2>Datos Personales</h2>   
<form class="row g-3">
  <div class="col-md-3">
    <label for="firstname" class="form-label">Primer Nombre</label>
    <input type="text" class="form-control" id="firstname">
  </div>
  <div class="col-md-3">
    <label for="secondname" class="form-label">Segundo Nombre</label>
    <input type="text" class="form-control" id="secondname">
  </div>
  <div class="col-md-3">
    <label for="lastname1" class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" id="lastname1">
  </div>
  <div class="col-md-3">
    <label for="lastname2" class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" id="lastname2">
  </div>
  <div class="col-md-3">
    <label for="cedula" class="form-label">Cedula de identidad</label>
    <input type="text" class="form-control" id="cedula">
  </div>
  <div class="col-md-3">
    <label for="historia" class="form-label"> Numero de Historia</label>
    <input type="text" class="form-control" id="historia">
  </div>
  <div class="col-md-3">
    <label for="nacionalidad" class="form-label">Nacionalidad</label>
    <input type="text" class="form-control" id="nacionalidad">
  </div>
  <div class="col-md-3">
    <label for="genero" class="form-label">Genero</label>
    <input type="text" class="form-control" id="genero">
  </div>
  <div class="col-md-3">
    <label for="fechaNac" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fechaNac">
  </div>
  <div class="col-md-3">
    <label for="estado" class="form-label">Estado</label>
    <input type="text" class="form-control" id="estado">
  </div>
  <div class="col-md-3">
    <label for="ciudad" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="ciudad">
  </div>
  <div class="col-md-3">
    <label for="municipio" class="form-label">Municipio</label>
    <input type="text" class="form-control" id="municipio">
  </div>
  <div class="col-md-3">
    <label for="parroquia" class="form-label">Parroquia</label>
    <input type="text" class="form-control" id="parroquia">
  </div>
  
  <div class="col-9">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="direccion" placeholder="Av las Americas">
  </div>
  <div class="col-md-3">
    <label for="telfHab" class="form-label">Telefono de habitación</label>
    <input type="text" class="form-control" id="telfHa">
  </div>
  <div class="col-md-3">
    <label for="telfCel" class="form-label">Telefono celular</label>
    <input type="text" class="form-control" id="telfCel">
  </div>
  <div class="col-md-3">
    <label for="email" class="form-label">Correo electronico</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="col-md-3">
    <label for="nivelIns" class="form-label">Nivel de instrucción</label>
    <input type="text" class="form-control" id="nivelIns">
  </div>
  <div class="col-md-3">
    <label for="profOf" class="form-label">Profesión u oficio</label>
    <input type="text" class="form-control" id="profOf">
  </div>
  <div class="col-md-3">
    <label for="nivelIns" class="form-label">Nivel de instrucción</label>
    <input type="text" class="form-control" id="nivelIns">
  </div>
  <h3>Datos clinicos</h3>
  <div class="col-md-3">
    <label for="fechaIng" class="form-label">Fecha de ingreso al programa</label>
    <input type="date" class="form-control" id="fechaIng">
  </div>
  <div class="col-md-3">
    <label for="anioDiag" class="form-label">Año de diagnostico</label>
    <input type="text" class="form-control" id="anioDiag">
  </div>
  <div class="col-md-3">
    <label for="estatusAdm" class="form-label">Estatus Administrativo</label>
    <input type="text" class="form-control" id="estatusAdm">
  </div>
  <div class="col-md-3">
    <label for="servCargo" class="form-label">Servicio a cargo</label>
    <input type="text" class="form-control" id="serCargo">
  </div>
  <div class="col-md-3">
    <label for="elisa1" class="form-label">Resultado primer elisa</label>
    <input type="text" class="form-control" id="elisa1">
  </div>
  <div class="col-md-3">
    <label for="elisa2" class="form-label">Resultado segundo elisa</label>
    <input type="text" class="form-control" id="elisa2">
  </div>
  <div class="col-md-3">
    <label for="wb" class="form-label">Resultado Western Block</label>
    <input type="text" class="form-control" id="wb">
  </div>
  <!--<div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
-->        
    </div>
  </div>
  <div class="col-12 d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Registrar paciente</button>
  </div>
</form>
</div>
@endsection