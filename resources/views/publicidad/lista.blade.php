@extends('layouts.plantilla')
@section('contenido')
    <div class="container">
        <div class="row rot">
            <div class="col text-center">
                <h3 class="display-3">Publicidad Registrada</h3>
            </div>
        </div>
        <div class="row p-3" >
            <div class="col">
                <div class="table-responsive ">
                    <table  class="table table-striped   table-hover " >
                        <thead  class=" bg-info text-white lead text-center">
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha de registro</th>
                            <th scope="col">Fecha de finalizacion</th>
                            <th scope="col">Asunto</th>
                            <th scope="col">Accion</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($publicidad as $publicidad)
                            <tr>
                                <td>{{$publicidad->id}}</td>
                                <td>
                                    <img src="{{asset ($publicidad->imagen)}}" class="img-fluid img-thumbnail" width="100" alt="">
                                </td>
                                <td>{{$publicidad->nombre}}</td>
                                <td>{{$publicidad->fechainicio}}</td>
                                <td>{{$publicidad->fechafinal}}</td>
                                <td>{{$publicidad->asunto}}</td>
                                <td>
                                    <form action="{{route('publicidad.destroy', $publicidad->id)}}" method="POST">
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
@endsection
