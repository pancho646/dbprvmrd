@extends('layouts.app')
@section('content')
<div class="container text-white">
 <h2>Datos Personales</h2>   
<form class="row g-3">
  <div class="col-md-3">
    <label for="firstname" class="form-label">Primer Nombre</label>
    <input type="text" class="form-control" id="firstname" name="firstname" value="{{$patient->firstname}}">
  </div>
  <div class="col-md-3">
    <label for="secondname" class="form-label">Segundo Nombre</label>
    <input type="text" class="form-control" id="secondname" name="secondname" value="{{$patient->secondname}}">
  </div>
  <div class="col-md-3">
    <label for="lastname1" class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" id="lastname1" name="lastname1" value="{{$patient->lastname1}}">
  </div>
  <div class="col-md-3">
    <label for="lastname2" class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" id="lastname2" name="lastname2" value="{{$patient->lastname2}}">
  </div>
  <div class="col-md-3">
    <label for="cedula" class="form-label">Cedula de identidad</label>
    <input type="text" class="form-control" id="cedula" name="cedula" value="{{$patient->cedula}}">
  </div>
  <div class="col-md-3">
    <label for="historia" class="form-label"> Numero de Historia</label>
    <input type="text" class="form-control" id="historia" name="historia" value="{{$patient->historia}}">
  </div>
  <div class="col-md-3">
    <label for="nacionalidad" class="form-label">Nacionalidad</label>
    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" value="{{$patient->nacionalidad}}">
  </div>
  <div class="col-md-3">
    <label for="genero" class="form-label">Genero</label>
    <input type="text" class="form-control" id="genero" name="genero" value="{{$patient->genero}}">
  </div>
  <div class="col-md-3">
    <label for="fechaNac" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fechaNac" name="fecNac" value="{{$patient->fecNac}}">
  </div>
  <div class="col-md-3">
    <label for="estado" class="form-label">Estado</label>
    <input type="text" class="form-control" id="estado" name="estado" value="{{$patient->estado}}">
  </div>
  <div class="col-md-3">
    <label for="ciudad" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{$patient->ciudad}}">
  </div>
  <div class="col-md-3">
    <label for="municipio" class="form-label">Municipio</label>
    <input type="text" class="form-control" id="municipio" name="municipio" value="{{$patient->municipio}}">
  </div>
  <div class="col-md-3">
    <label for="parroquia" class="form-label">Parroquia</label>
    <input type="text" class="form-control" id="parroquia" name="parroquia" value="{{$patient->parroquia}}">
  </div>
  
  <div class="col-9">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion" value="{{$patient->direccion}}"placeholder="Av las Americas">
  </div>
  <div class="col-md-3">
    <label for="telfHab" class="form-label">Telefono de habitación</label>
    <input type="text" class="form-control" id="telfHab" name="telfHab" value="{{$patient->telfHab}}">
  </div>
  <div class="col-md-3">
    <label for="telfCel" class="form-label">Telefono celular</label>
    <input type="text" class="form-control" id="telfCel" name="telfCel" value="{{$patient->telfCel}}">
  </div>
  <div class="col-md-3">
    <label for="email" class="form-label">Correo electronico</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$patient->email}}">
  </div>
  <div class="col-md-3">
    <label for="nivelIns" class="form-label">Nivel de instrucción</label>
    <input type="text" class="form-control" id="nivelIns" name="nivelIns" value="{{$patient->nivelIns}}">
  </div>
  <div class="col-md-3">
    <label for="profOf" class="form-label">Profesión u oficio</label>
    <input type="text" class="form-control" id="profOf" name="profOf" value="{{$patient->profOf}}">
  </div>
  <div class="col-md-3">
    <label for="nivelIns" class="form-label">Nivel de instrucción</label>
    <input type="text" class="form-control" id="nivelIns" name="nivelIns" value="{{$patient->nivelIns}}">
  </div>
  <h3>Datos clinicos</h3>
  <div class="col-md-3">
    <label for="fechaIng" class="form-label">Fecha de ingreso al programa</label>
    <input type="date" class="form-control" id="fechaIng" name="fechaIng" value="{{$patient->fechaIng}}">
  </div>
  <div class="col-md-3">
    <label for="anioDiag" class="form-label">Año de diagnostico</label>
    <input type="text" class="form-control" id="anioDiag" name="anioDiag" value="{{$patient->anioDiag}}">
  </div>
  <div class="col-md-3">
    <label for="estatusAdm" class="form-label">Estatus Administrativo</label>
    <input type="text" class="form-control" id="estatusAdm" name="estatusAdm" value="{{$patient->estatusAdm}}">
  </div>
  <div class="col-md-3">
    <label for="servCargo" class="form-label">Servicio a cargo</label>
    <input type="text" class="form-control" id="serCargo" name="serCargo" value="{{$patient->serCargo}}">
  </div>
  <div class="col-md-3">
    <label for="elisa1" class="form-label">Resultado primer elisa</label>
    <input type="text" class="form-control" id="elisa1" name="elisa1" value="{{$patient->elisa1}}">
  </div>
  <div class="col-md-3">
    <label for="elisa2" class="form-label">Resultado segundo elisa</label>
    <input type="text" class="form-control" id="elisa2" name="elisa2" value="{{$patient->elisa2}}">
  </div>
  <div class="col-md-3">
    <label for="wb" class="form-label">Resultado Western Block</label>
    <input type="text" class="form-control" id="wb" name="wb" value="{{$patient->wb}}">
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
  <div class="col-12 d-flex justify-content-center bg-warning py-2">
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
  </div>
</form>
</div>
@endsection