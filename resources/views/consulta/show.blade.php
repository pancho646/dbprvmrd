<h1>estoy aqui</h1>

<p>{{$pacientes}}</p>

<div>
            <table class="table px-2 mx-2">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Primer Nombre</th>
                        <th scope="col">Primer apellido</th>
                        <th scope="col">Numero de historia</th>
                        <th scope="col">Numero de cedula</th>
                        <th scope="col" colspan="2" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($pacientes as $patient) 
                    <tr>
                        <th scope="row">{{$pacientes->id}}</th>
                        <td>{{$patient->firstname}}</td>
                        <td>{{$patient->lastname1}}</td>
                        <td>{{$patient->historia}}</td>
                        <td>{{$patient->cedula}}</td>
                        
                        
                        <td>
                            <button class="btn btn-warning mx-auto" @click="modificar=true; abrirModal(cl);">Editar datos</button>
                        </td>
                        <td>
                            <button class="btn btn-danger mx-auto" @click="remover(cl.id);">Eliminar de BD</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
