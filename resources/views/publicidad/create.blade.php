@extends('layouts.plantilla')
@section('contenido')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col text-center mt-3">
                <h4 class="display-4">Publicidad</h4>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 05px;">
            <div class="col-12 col-md-6  align-content-center text-center ">
                <img src=" {{asset('img/cent.jpg')}} " class="img-fluid-center "  width="250px" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        @if(session('mensaje'))
            <div class="alert alert-success">
                <p>{{session('mensaje')}}</p>
            </div>
        @endif
            <div class="row abs ">
                <div class="col-12  col-md-6 border form " >
                <form action="{{route('publicidad.create')}}" method="POST"  enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="row p-3 p-md-0">
                        <div class="col-12 " style="margin-top: 10px;">
                            <div class="form-group ">
                                <label for="nombre" class="form-label"> Nombre </label>
                                <input type="text" class="form-control"  placeholder="Ingresar el nombre"  name="nombre" value="{{old('nombre')}}">
                                @if ($errors->has('nombre'))
                                    <p class="erro">*{{$errors->first('nombre') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row p-3 p-md-0">
                        <div class="col-12 col-md-6" style="margin-top: 10px;">
                            <div class="form-group">
                                <label for="fechainicio" >Fecha De Inicio</label>
                                <input  class="form-control"   placeholder=" Seleccione fecha de inicio " min="1997-01-01" max="2030-12-31" type="date" name="fechainicio">
                                @if ($errors->has('fechainicio'))
                                    <p class="erro">*{{$errors->first('fechainicio') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-md-6" style="margin-top: 10px;">
                            <div class="form-group">
                                <label for="fechafinal" >Fecha de Fin</label>
                                <input  class="form-control"   placeholder=" Seleccione fecha final " min="1997-01-01" max="2030-12-31" type="date" name="fechafinal">
                                @if ($errors->has('fechafinal'))
                                    <p class="erro">*{{$errors->first('fechafinal') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row p-3 p-md-0">
                        <div class="col-12 "  style="margin-top: 10px;">
                            <div class="form-group ">
                                <label for="asunto" class="form-label"> Asunto </label>
                                <input type="text" class="form-control"  placeholder="Ingrese el Asunto"  name="asunto" >
                                @if ($errors->has('asunto'))
                                    <p class="erro">*{{$errors->first('asunto') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row p-3 p-md-0">
                        <div class="col-12 "  style="margin-top: 10px;">
                            <div class="form-group" >
                                <label for="contenido" class="form-label"> Contenido </label>
                                <textarea name="contenido" id="contenido" rows="3" class="form-control"  placeholder="Ingrese el Contenido"  value="{{old('contenido')}}"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row p-3 p-md-0">
                        <div class="col-12 " style="margin-top: 10px;">
                            <div class="form-group">
                                <label for="imagen"> Imagen Principal</label>
                                <input type="file" name="imagen" class="form-control" id="imagen">
                                @if ($errors->has('imagen'))
                                    <p class="erro">*{{$errors->first('imagen') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary mb-2">Registrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
