@extends('layouts.plantilla')
@section('title' , 'Personas')


@section('contenido')

    <br>
    <br>
    <div >

    <h1 class=" text-center">Personas Registradas</h1>
        <hr>

    <table class="table table-silver table-striped mt-8 " class=table-primary" >
        <thead  class="bg-danger text-white text-center">
          <tr>
              <th scope="col">N°</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Email</th>
              <th scope="col">DNI</th>
              <th scope="col">Telefono</th>
              <th scope="col">Direccion</th>X
          </tr>
        </thead>
        <tbody>
           @foreach($personas as $persona)
               <tr>
                   <td>{{$persona->id}}</td>
                    <td>{{$persona->nombre}}</td>
                   <td>{{$persona->apellido}}</td>
                   <td>{{$persona->email}}</td>
                   <td>{{$persona->dni}}</td>
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

@endsection

