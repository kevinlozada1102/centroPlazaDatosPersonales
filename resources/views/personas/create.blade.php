

@extends('layouts.plantilla')
@section('title' , 'Personas')


@section('contenido')
    <div class=" text"  >
        Datos Personales
    </div>

    <div  class="mx-auto "  style="width: 550px;"  style="background-color: lightseagreen">



        @if(session('mensaje'))
            <div class="alert alert-success">
                <p>{{session('mensaje')}}</p>
            </div>

        @endif

<div  style="align-content:center  "   >
    <form action="{{route('personas.create')}}" method="POST" >
        {{ csrf_field() }}
      <div class="row">
          <div class="col">
        <div class="form-group "  >
            <label for="nombre"  class="text2">Nombre</label>
            <input type="text" class="form-control"  placeholder="Ingresa tu nombre"  name="nombre" value="{{old('nombre')}}">
            @if ($errors->has('nombre'))
                <p class="texer">*{{$errors->first('nombre') }}</p>
            @endif
        </div>
        </div>
        <br>
          <div class="col">
        <div class="form-group">
            <label for="apellido" class="text2">Apellido</label>
            <input type="text" class="form-control"  placeholder="Ingresa tu apellido"  name="apellido" value="{{old('apellido')}}">
            @if ($errors->has('apellido'))
                <p class="texer">*{{$errors->first('apellido') }}</p>
            @endif
        </div>
        </div>
      </div>
        <div class="row">
            <div class="col">
        <div class="form-group">
            <label for="dni" class="text2">DNI</label>
            <input  class="form-control"  placeholder=" Ingresa tu DNI" type="number" name="dni" value="{{old('dni')}}">
            @if ($errors->has('dni'))
                <p class="texer">*{{$errors->first('dni') }}</p>
            @endif
        </div>
        </div>
            <div class="col">
        <div class="form-group">
            <label for="sexo" class="text2">Sexo</label>
            <select id="sexo" name="sexo" class="form-control"  value="{{old('sexo')}}" >
                <option value="" {{ old('sexo') == '' ? 'selected' : '' }}>Seleccione sexo</option>
                <option value="F" {{ old('sexo') == 'F' ? 'selected' : '' }}>Femenino</option>
                <option value="M" {{ old('sexo') == 'M' ? 'selected' : '' }}>Masculino</option>
            </select>
            @if ($errors->has('sexo'))
                <p class="texer">*{{$errors->first('sexo') }}</p>
            @endif
        </div>
        </div>

        <br>
            <div class="row">
                <div class="col">
        <div class="form-group">
            <label for="fechanac" class="text2">Fecha De Nacimiento</label>
            <input  class="form-control"   placeholder=" Seleccione su fecha " type="date" name="fechanac" value="{{old('fechanac')}}">
            @if ($errors->has('fechanac'))
                <p class="texer">*{{$errors->first('fechanac') }}</p>
            @endif
        </div>
        </div>
        <br>
                <div class="col">
        <div class="form-group">
            <label for="telefono" class="text2">Telefono</label>
            <input  class="form-control"  placeholder="Ingresa tu telefono" type="number" name="telefono" value="{{old('telefono')}}">
            @if ($errors->has('telefono'))
                <p class="texer">*{{$errors->first('telefono') }}</p>
            @endif
        </div>
        </div>
                <br>

                <div class="form-group">
                    <label for="email" class="text2">Email</label>
                    <input class="form-control"  placeholder="Ingresa un email válido" type="email" name="email" value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <p class="texer">*{{$errors->first('email') }}</p>
                    @endif
                </div>
        <br>
        <div class="form-group">
            <label for="direccion" class="text2">Direccion</label>
            <input type="text" class="form-control"  placeholder="Ingresa tu direccion" type="text" name="direccion" value="{{old('direccion')}}">
            @if ($errors->has('direccion'))
                <p class="texer">*{{$errors->first('direccion') }}</p>
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

        <div   class="modal" id="ventanaModal" tabindex="30" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 id="tituloVentana">Terminos y condiciones</h2>
                        <button  data-dismiss="modal" aria-label="cerrar">
                            <span aria-hidden="true">cerrar</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="text2" rows="10" cols="10">
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
                    </div >
                    <div class="modal-footer">
                       <p></p>
                    </div>
                </div>
            </div>
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


    <br>


@endsection
