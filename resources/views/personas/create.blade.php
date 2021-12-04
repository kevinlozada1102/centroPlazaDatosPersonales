

@extends('layouts.plantilla')
@section('title' , 'Personas')


@section('contenido')
    <div  class="mx-auto "  style="width: 400px;" class="container-fluid" style="background-color: lightseagreen">
    <h3>Registrarse</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('mensaje'))
            <div class="alert alert-success">
                <p>{{session('mensaje')}}</p>
            </div>
        @endif


    <form action="{{route('personas.create')}}" method="POST">
        {{ csrf_field() }}

        <div class="form-group" >
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control"  placeholder="Ingresa tu nombre"  name="nombre" value="{{old('nombre')}}">
            @if ($errors->has('nombre'))
                <p>*{{$errors->first('nombre') }}</p>
            @endif
        </div>
        <br>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control"  placeholder="Ingresa tu apellido"  name="apellido" value="{{old('apellido')}}">
            @if ($errors->has('apellido'))
                <p>*{{$errors->first('apellido') }}</p>
            @endif
        </div>
        <br>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control"  placeholder="Ingresa un email válido" type="email" name="email" value="{{old('email')}}">
            @if ($errors->has('email'))
                <p>*{{$errors->first('email') }}</p>
            @endif
        </div>
        <br>

        <div class="form-group">
            <label for="dni">DNI</label>
            <input  class="form-control"  placeholder=" Ingresa tu DNI" type="number" name="dni" value="{{old('dni')}}">
            @if ($errors->has('dni'))
                <p>*{{$errors->first('dni') }}</p>
            @endif
        </div>
        <br>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input  class="form-control"  placeholder="Ingresa tu telefono" type="number" name="telefono" value="{{old('telefono')}}">
            @if ($errors->has('telefono'))
                <p>*{{$errors->first('telefono') }}</p>
            @endif
        </div>
        <br>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control"  placeholder="Ingresa tu direccion" type="text" name="direccion" value="{{old('direccion')}}">
            @if ($errors->has('direccion'))
                <p>*{{$errors->first('direccion') }}</p>
            @endif
        </div>
            <p href="">
                <label><input type="checkbox" name="cb-terminosservicio" required>
                    <a href="">Acepto los términos y condiciones</a></label><br>
            </p>
        <br>
        <div style="text-align: center;">
        <button type="submit" class="btn btn-primary mb-2">Registrarme</button>
        </div>
    </form>
    </div>
    <br>

@endsection

