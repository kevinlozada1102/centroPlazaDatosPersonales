<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Centro Plaza</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css')}}" rel="stylesheet" >
</head>
<body>
<div id="app">

    <div class="container">
        <section id="hero">
            <div class="row justify-content-center" style="background-color: rgba(253,253,253,0.99)">
                <div id="heroCarousel" class="col-md-6 text-center mb-5" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner" role="listbox">

                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="carousel-background"><img src="assets/img/slide/slide-1.jpg" alt=""></div>
                            <div class="carousel-container" >
                                <div class="row">
                                    <div class="col">
                                        <img src=" {{asset('img/chec.png')}} " width="100px">
                                    </div>
                                    <br>
                                    <div class="col-md-10">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">REGISTRO EXITOSO!! </h2>
                                </div>
                                    </div>
                                    <br>
                                <div>
                                    <p class="animate__animated animate__fadeInUp "> Muchas gracias por registrarse,
                                        su informacion ha sido guardada exitosamente!!
                                        <br>
                                    </p>
                                </div>

                                <div >
                                    <img src=" {{asset('img/pika.png')}} " width="200px">
                                </div>


                                <div class="carousel-container" >

                                    <a href="http://localhost/centroPlazaDatosPersonales/public/personas/create/" class="btn-get-started animate__animated animate__fadeInUp scrollto">REGRESAR</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </section>
    </div>
</div>
</body>
</html>
