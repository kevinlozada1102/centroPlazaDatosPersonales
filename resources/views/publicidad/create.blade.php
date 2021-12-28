@extends('layouts.plantilla')
@section('contenido')
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-lg-3">
            <h2>Publicidad</h2>
        </div>
    </div>
    <div class="container">
        @if(session('mensaje'))
            <div class="alert alert-success">
                <p>{{session('mensaje')}}</p>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{route('publicidad.create')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col">
                            <div class="form-group ">
                                <label for="nombre"> Nombre </label>
                                <input type="text" class="form-control"  placeholder="Ingresar el nombre"  name="nombre" />
                                @if ($errors->has('nombre'))
                                    <p class="texer">*{{$errors->first('nombre') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="fechainicio" >Fecha De Inicio</label>
                                <input  class="form-control"   placeholder=" Seleccione fecha de inicio " type="date" name="fechainicio">
                                @if ($errors->has('fechainicio'))
                                    <p class="texer">*{{$errors->first('fechainicio') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="fechafinal" >Fecha de Fin</label>
                                <input  class="form-control"   placeholder=" Seleccione fecha final " type="date" name="fechafinal">
                                @if ($errors->has('fechafinal'))
                                    <p class="texer">*{{$errors->first('fechafinal') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group ">
                                <label for="asunto"> Asunto </label>
                                <input type="text" class="form-control"  placeholder="Ingrese el Asunto"  name="asunto" >
                                @if ($errors->has('asunto'))
                                    <p class="texer">*{{$errors->first('asunto') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group ">
                                <label for="contenido"> Contenido </label>
                                <textarea name="contenido" id="contenido" rows="4" class="form-control"  placeholder="Ingrese el Contenido" ></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="imagen"> Imagen Principal</label>
                                <input type="file" name="imagen" class="form-control" id="imagen">

                            </div>

                        </div>

                    </div>

                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary mb-2">Registrar</button>
                        <br>
                    </div>
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

                </form>
            </div>
        </div>
    </div>


@endsection
