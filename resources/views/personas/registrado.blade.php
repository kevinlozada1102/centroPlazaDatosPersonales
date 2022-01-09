
@extends('layouts.plantilla')
@section('title' , 'Personas')


@section('contenido')
    <div class="container">
            <div class="row justify-content-center ">
              <div class="row justify-content-center " style="margin-top: 20px;">
                        <div class="col-12 col-md-6  text-center">
                            <img src=" {{asset('img/cen.jpg')}} " width="250px ">
                        </div>
                  <div class="row p-3 p-md-0  justify-content-center ">
                            <div class="col-12 col-md-6" >
                                <h4   class="display-4 text-center">REGISTRO EXITOSO!! </h4>
                            </div>
                  </div>
                  <div class="row justify-content-center">
                      <div class="col-12 col-md-6 text-center" >
                      <img src=" {{asset('img/buena.jpg')}} " width="130px">
                      </div>
                  </div>
                  <div class="row justify-content-center">
                      <div class="col-12 col-md-6">
                          <p class="text-center lead"> Muchas gracias por registrarse,
                              su informacion ha sido guardada exitosamente. </p>
                      </div>
                  </div>
                  <div class="row justify-content-center">
                      <div class="col-12 col-md-6 text-center">
                          <a href="{{ route('personas.create') }}" >REGRESAR</a>
                      </div>
                  </div>
              </div>
            </div>
    </div>
@endsection
