@extends('layouts.plantilla')
@section('contenido')






    <table  class="table" >
        <thead  class=" bg-info text-white text-center">
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de registro</th>
            <th scope="col">Fecha de finalizacion</th>
            <th scope="col">Asunto</th>
        </tr>
        </thead>
        <tbody>
        @foreach($public as $publicidad)
            <tr>
                <td>{{$publiciad->id}}</td>
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
