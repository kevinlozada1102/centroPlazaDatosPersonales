@extends('layouts.plantilla')
@section('title' , 'Personas')


@section('contenido')
    <div class="container" >
        <div class="row rot">
            <div class="col text-center">
                <h3 class="display-3">Personas Registradas</h3>
            </div>
        </div>
        <div class="row p-3" >
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped   table-hover ">
                        <thead  class=" bg-info text-white lead text-center">
                        <tr >
                            <th scope="col">N°</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Accion</th>
                        </tr>
                        </thead>
                        <tbody >
                        @foreach($personas as $persona)
                            <tr>
                                <td>{{$persona->id}}</td>
                                <td>{{$persona->nombre}}</td>
                                <td>{{$persona->apellido}}</td>
                                <td>{{$persona->email}}</td>
                                <td>{{$persona->dni}}</td>
                                <td>{{$persona->sexo}}</td>
                                <td>{{$persona->fechanac}}</td>
                                <td>{{$persona->telefono}}</td>
                                <td>{{$persona->direccion}}</td>
                                <td>
                                    <form action="{{route('personas.destroy', $persona->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
    </div>

@endsection

