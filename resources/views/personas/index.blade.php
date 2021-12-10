@extends('layouts.plantilla')
@section('title' , 'Personas')


@section('contenido')
    <div class=" text"  >
        Datos Personales
    </div>

    <br>
    <br>
    <div >

    <h1 class="text1">Personas Registradas</h1>

    <table  class="table" >
        <thead  class=" bg-info text-white text-center">
          <tr class="trbody">
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
        <tbody class="text-center">
           @foreach($personas as $persona)
               <tr class="tbody">
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

@endsection

