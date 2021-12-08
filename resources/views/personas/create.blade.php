

@extends('layouts.plantilla')
@section('title' , 'Personas')


@section('contenido')

    <div align="center"><img src="{{ asset('img/pers.jpg')}}"  alt="" class="logo-main"></div>

    <div  class="mx-auto "  style="width: 400px;" class="container-fluid" style="background-color: lightseagreen">

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


    <form action="{{route('personas.create')}}" method="POST" class="formulario">
        {{ csrf_field() }}

        <div class="form-group "  >
            <label for="nombre"  class="text2">Nombre</label>
            <input type="text" class="form-control"  placeholder="Ingresa tu nombre"  name="nombre" value="{{old('nombre')}}">
            @if ($errors->has('nombre'))
                <p>*{{$errors->first('nombre') }}</p>
            @endif
        </div>
        <br>

        <div class="form-group">
            <label for="apellido" class="text2">Apellido</label>
            <input type="text" class="form-control"  placeholder="Ingresa tu apellido"  name="apellido" value="{{old('apellido')}}">
            @if ($errors->has('apellido'))
                <p>*{{$errors->first('apellido') }}</p>
            @endif
        </div>
        <br>

        <div class="form-group">
            <label for="email" class="text2">Email</label>
            <input class="form-control"  placeholder="Ingresa un email válido" type="email" name="email" value="{{old('email')}}">
            @if ($errors->has('email'))
                <p>*{{$errors->first('email') }}</p>
            @endif
        </div>
        <br>

        <div class="form-group">
            <label for="dni" class="text2">DNI</label>
            <input  class="form-control"  placeholder=" Ingresa tu DNI" type="number" name="dni" value="{{old('dni')}}">
            @if ($errors->has('dni'))
                <p>*{{$errors->first('dni') }}</p>
            @endif
        </div>
        <br>
        <div class="form-group">
            <label for="telefono" class="text2">Telefono</label>
            <input  class="form-control"  placeholder="Ingresa tu telefono" type="number" name="telefono" value="{{old('telefono')}}">
            @if ($errors->has('telefono'))
                <p>*{{$errors->first('telefono') }}</p>
            @endif
        </div>
        <br>
        <div class="form-group">
            <label for="direccion" class="text2">Direccion</label>
            <input type="text" class="form-control"  placeholder="Ingresa tu direccion" type="text" name="direccion" value="{{old('direccion')}}">
            @if ($errors->has('direccion'))
                <p>*{{$errors->first('direccion') }}</p>
            @endif
        </div>
        <div class="form-group">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">
                <a  data-toggle="modal" data-target="#ventanaModal" class=" textenlace" >Acepto los términos y condiciones</a>
            </label>
        </div>
        </div>

        <br>
        <br>
        <div style="text-align: center;">
        <button type="submit" class="btn btn-primary mb-2">Registrarme</button>
            <br>
        </div>


        <div class="modal" id="ventanaModal" tabindex="30" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="tituloVentana">Terminos y condiciones</h4>
                        <button  data-dismiss="modal" aria-label="cerrar">
                            <span aria-hidden="true">cerrar</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="text2">
                            <h6><strong>Los tres componentes principales de cualquier política son:
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
                                    los principios que la  orientan (la ideología o argumentos que la sustentan);
                                    los instrumentos mediante los cuales se ejecuta (incluyendo aspectos de regulación, de financiamiento,
                                    y de mecanismos de prestación de las políticas) y los servicios o acciones principales
                                    que se llevan o deberían llevarse a cabo de acuerdo a los principios propuestos.</strong></h6>
                        </div>
                    </div>
                    <div class="modal-footer">
                       <p></p>
                    </div>
                </div>
            </div>
        </div>

    </form>
    </div>
    <br>





@endsection
