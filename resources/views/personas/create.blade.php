

@extends('layouts.plantilla')
@section('title' , 'Personas')


@section('contenido')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col text-center mt-3">
                <h4 class="display-4">Datos Personales</h4>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="col-12 col-md-6  align-content-center text-center ">
                <img src=" {{asset('img/cent.jpg')}} " class="img-fluid-center "  width="250px" alt="">
            </div>
        </div>
        <div class="row  abs  ">
            <div class="col-12  col-md-6  form  " >
                <form action="{{route('personas.store')}}" method="POST" class="border p-3 mt-md-3" >
                    {{ csrf_field() }}
                    <div class="row p-3 p-md-0 " >
                            <div class="col-12 col-md-6" style="margin-top: 15px;">
                                <div class="form-group "  >
                                    <label for="nombre"  class="form-label">Nombre</label>
                                    <input type="text" class="form-control border-warning"  placeholder="Ingresa tu nombre"  name="nombre" value="{{old('nombre')}}">
                                    @if ($errors->has('nombre'))
                                        <p class="erro">*{{$errors->first('nombre') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6  " style="margin-top: 15px;" >
                                <div class="form-group">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control border-warning"  placeholder="Ingresa tu apellido"  name="apellido" value="{{old('apellido')}}">
                                    @if ($errors->has('apellido'))
                                        <p class="erro">*{{$errors->first('apellido') }}</p>
                                    @endif
                                </div>
                            </div>
                    </div>
                    <div class="row p-3 p-md-0">
                        <div class="col-12 col-md-6 "  style="margin-top: 15px;" >
                            <div class="form-group">
                                <label for="dni" class="form-label" >DNI</label>
                                <input  class="form-control border-warning"  placeholder=" Ingresa tu DNI" type="number" name="dni" value="{{old('dni')}}">
                                @if ($errors->has('dni'))
                                    <p class="erro">*{{$errors->first('dni') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-md-6 "  style="margin-top: 15px;" >
                            <div class="form-group">
                                <label for="sexo" class="form-label">Sexo</label>
                                <select id="sexo" name="sexo" class="form-select border-warning"  value="{{old('sexo')}}" >
                                    <option value="" {{ old('sexo') == '' ? 'selected' : '' }}>Seleccione sexo</option>
                                    <option value="F" {{ old('sexo') == 'F' ? 'selected' : '' }}>Femenino</option>
                                    <option value="M" {{ old('sexo') == 'M' ? 'selected' : '' }}>Masculino</option>
                                </select>
                                @if ($errors->has('sexo'))
                                    <p class="erro">*{{$errors->first('sexo') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row p-3 p-md-0" >
                        <div class="col-12 col-sm-6" style="margin-top: 15px;">
                            <div class="form-group">
                                <label for="fechanac" class="form-label">Fecha De Nacimiento</label>
                                <input  class="form-control border-warning"   placeholder=" Seleccione su fecha " type="date" name="fechanac" min="1800-01-01" max="2030-12-31" value="{{old('fechanac')}}">
                                @if ($errors->has('fechanac'))
                                    <p class="erro">*{{$errors->first('fechanac') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-sm-6" style="margin-top: 15px;" >
                            <div class="form-group">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input  class="form-control border-warning"  placeholder="Ingresa tu telefono" type="number" name="telefono" value="{{old('telefono')}}">
                                @if ($errors->has('telefono'))
                                    <p class="erro">*{{$errors->first('telefono') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row p-3 p-md-0" >
                        <div class="col-12 " style="margin-top: 10px;">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control border-warning"  placeholder="Ingresa un email válido" type="email" name="email" value="{{old('email')}}">
                                @if ($errors->has('email'))
                                    <p class="erro">*{{$errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row p-3 p-md-0" >
                        <div class="col-12 " style="margin-top: 10px;">
                            <div class="form-group">
                                <label for="direccion" class="form-label">Direccion</label>
                                <input type="text" class="form-control border-warning"  placeholder="Ingresa tu direccion" type="text" name="direccion" value="{{old('direccion')}}">
                                @if ($errors->has('direccion'))
                                    <p class="erro">*{{$errors->first('direccion') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row p-3 p-md-0"  >
                        <div class="col-12" style="margin-top: 10px;">
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input border-warning" id="exampleCheck1"  required>
                            <label class="form-check-label" for="exampleCheck1">
                                <a  style="color: #0a58ca" data-bs-toggle="modal" data-bs-target="#ventanaModal">Acepto los términos y condiciones </a>
                            </label>
                        </div>
                    </div>
                            <br>
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-warning mb-2 border-dark" >Registrarme</button>
                    </div>
                            <div   class="modal fade" id="ventanaModal"   tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"  role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 id="tituloVentana" class="modal-title">Terminos y condiciones</h5>
                                            <button  type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="cerrar">
                                                <span aria-hidden="true"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body" modal-sm>
                                            <div style="height: 500px;">
                                                <p> Los tres componentes principales de cualquier política son:
                                    los principios que la  orientan (la ideología o argumentos que la sustentan);
                                    los instrumentos mediante los cuales se ejecuta (incluyendo aspectos de regulación, de financiamiento,
                                    y de mecanismos de prestación de las políticas) y los servicios o acciones principales
                                    que se llevan o deberían llevarse a cabo de acuerdo a los principios propuestos.
                                    Los tres componentes principales de cualquier política son:
                                    los principios que la  orientan (la ideología o argumentos que la sustentan);
                                    los instrumentos mediante los cuales se ejecuta (incluyendo aspectos de regulación, de financiamiento,
                                    y de mecanismos de prestación de las políticas) y los servicios o acciones principales
                                    que se llevan o deberían llevarse a cabo de acuerdo a los principios propuestos.
                                    Los tres componentes principales de cualquier política son:
                                    los principios que la  orientan (la ideología o argumentos que la sustentan);</p>
                                            </div>
                                        </div >
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </form>
                <br>
            </div>
        </div>
    </div>
@endsection
