@extends('layouts.plantilla')
@section('contenido')

    <div class="container">
        <div class="row">
            <h1>Lista de Publicidad</h1>
        </div>





    <table  class="table" >
        <thead  class=" text-center">
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Imagen</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de registro</th>
            <th scope="col">Fecha de finalizacion</th>
            <th scope="col">Asunto</th>
        </tr>
        </thead>
        <tbody>
        @foreach($publicidad as $publicidad)
            <tr>
                <td>{{$publicidad->id}}</td>

                <td>
                    <img src="{{asset ($publicidad->imagen)}}" class="img-fluid img-thumbnail" width="100" alt="">
                </td>


                <td>{{$publicidad->nombre}}</td>
                <td>{{$publicidad->fechainicio}}</td>
                <td>{{$publicidad->fechafin}}</td>
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
@endsection
