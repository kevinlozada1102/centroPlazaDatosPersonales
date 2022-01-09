@extends('layouts.plantilla')
@section('title' , 'Personas')


@section('contenido')
        <div class="row rot p-0">
            <div class="col text-center ">
                <h3 class="display-3">Personas Registradas</h3>
            </div>
        </div>
        <div class="row p-4  justify-content-center " >
                    <form action="{{route('personas.index')}}" method="get" >
                        <div class="input-group">

                            <div class="col col-md-6 py-3">
                                <input type="text" class="form-control border-dark" name="texto" value="{{$texto}}">
                            </div>
                            <div class="col col-md-6 py-3">
                                <input type="submit" class="btn btn-warning" style="font-weight: bold;" value="Buscar">
                            </div>
                        </div>
                    </form>
            </div>
                <div class="table-responsive ">
                    <table class="table table-striped" style="padding: 1em 2em;">
                        <thead  class=" bg-warning   text-center" style="font-weight: bold;">
                        <tr class="p-sm-0 text-center">
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Email</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Accion</th>
                        </tr>
                        </thead>
                        <tbody >
                        @if(count($personas)<=0)
                            <tr>
                                <td colspan="10" class="display-4 text-center">No hay resultados</td>
                            </tr>
                        @else
                        @foreach($personas as $persona)
                            <tr class="text-center">
                                <td>{{$persona->nombre}}</td>
                                <td>{{$persona->email}}</td>
                                <td>{{$persona->dni}}</td>
                                <td>{{$persona->sexo}}</td>
                                <td>{{$persona->fechanac}}</td>
                                <td>{{$persona->telefono}}</td>
                                <td>{{$persona->direccion}}</td>
                                @if($persona->estado == "1")
                                <td>Activo</td>
                                @endif
                                @if($persona->estado == "0")
                                    <td>Inactivo</td>
                                @endif
                                @if($persona->estado == "1")
                                <td>
                                    <form action="{{route('personas.destroy', $persona->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-warning " type="submit" style="font-weight: bold;">Eliminar</button>
                                    </form>
                                </td>
                                @endif
                                @if($persona->estado == "0")
                                <td>
                                    <form action="{{route('personas.update', $persona->id)}}" method="POST">
                                        @csrf
                                        <button  class="btn btn-warning " type="submit" style="font-weight: bold;" >Activar</button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{$personas->links()}}
                </div>
            </div>
        </div>

@endsection

