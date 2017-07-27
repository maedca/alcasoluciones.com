@extends('layout.app')
@section('styles')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.css">
@endsection
@section('content')
    <div class="container" id="fullpa">
        <div class="row">
            <div class="col s12 m12 l12">
                <br>
                <BR>
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="{{asset('img/slider_1.jpg')}}" class="img-responsive"> <!-- random image -->
                            <!--<div class="caption center-align">
                                <h3>This is our big Tagline!</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>-->
                        </li>
                        <li><img src="{{asset('img/slider_2.jpg')}}" alt="" class="img-responsive"></li>
                        <li><img src="{{asset('img/slider_3.jpg')}}" alt="" class="img-responsive"></li>
                        <li><img src="{{asset('img/slider_4.jpg')}}" alt="" class="img-responsive"></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="container" style="margin-bottom: 0px">
        <div class="row">
            <div class="col s12 m4 l4 center parte" id="slide1">
                <img src="{{asset('img/icon_1.svg')}}" alt="" class="img-responsive carde">
                <h5>Transporte</h5>
                <ul>
                    <li>-Pasajes a mas de 100
                        destinos nacionales
                    </li>
                    <li>-Giros</li>
                    <li>-Pagos de Fundación de la
                        mujer
                    </li>
                    <li>-Turismo</li>
                    <li>-Recargas a todos los
                        operadores
                    </li>
                    <li>-Pagos Cooprofesores</li>
                </ul>
            </div>
            <div class="col s12 m4 l4 center">
                <img src="{{asset('img/icon_2.svg')}}" alt="" class="img-responsive carde">
                <h5>Comunicaciones</h5>
                <ul>
                    <li>-Movistar y Tigo
                    </li>
                    <li>-Planes Pospago, Prepago,
                        Corporativos, Datos
                    </li>
                    <li>-Internet 3G y 4G
                    </li>
                    <li>-Llamadas Internacionales
                    </li>
                    <li>-La mejor cobertura</li>
                </ul>
            </div>
            <div class="col s12 m4 l4 center">
                <img src="{{asset('img/icon_3.svg')}}" alt="" class="img-responsive carde">
                <h5>Entretenimiento</h5>
                <ul>
                    <li>- Paquetes DirecTV
                    </li>
                    <li>-Kit Prepago
                    </li>
                    <li>-Planes Postpago
                    </li>
                    <li>-Servicio Tecnico Autorizado
                    </li>
                    <li>-Canales HD
                    </li>
                    <li>-Lider mundial en
                        entretenimiento
                    </li>
                    <li>-Canales Premeum
                    </li>
                    <li>-Televisión HD</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax s12 l12 m12"><img class="img-responsive" src="{{asset('img/parallax.jpg')}}"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 l6 m6 parte" id="slide2">
                <br><br>
                <a href="tel:0376293002" style="color: black;"><i style="color: #5b1a56;font-size: 2rem;"
                                                                  class="icon-phone "></i> Telefonos: 0376 29 30
                    02</a><br>
                <a href="tel:3504000182" style="color: black;"><i style="color: #5b1a56;font-size: 2rem;"
                                                                  class="icon-phone "></i> Telefonos: 350 400
                    0182</a><br>
                <a href="tel:0376293954" style="color: black;"><i style="color: #5b1a56;font-size: 2rem;"
                                                                  class="icon-phone "></i> Telefonos: 0376 29 39
                    54</a><br>
                <a href="tel: 3106071353" style="color: black;"><i style="color: #5b1a56;font-size: 2rem;"
                                                                   class="icon-phone "></i> Telefonos: 310 607
                    1353</a><br>
                <a href="tel: 3158660068" style="color: black;"><i style="color: #5b1a56;font-size: 2rem;"
                                                                   class="icon-whatsapp "></i> Whatsapp: 310 607
                    1353</a><br>
                <a href="#" style="color: black;"><i style="color: #5b1a56;font-size: 2rem;" class="icon-marcador "></i>
                    Carrera 11 No 14-19 </a><br>
                <a href="#" style="color: black;"><i style="color: #5b1a56;font-size: 2rem;" class="icon-marcador "></i>
                    Barrio Carvajal</a><br>
                <a href="mailto:comercial@alcasoluciones.com" style="color: black;"><i style="color: #5b1a56;font-size: 2rem;" class="icon-correo "></i> comercial@alcasoluciones.com</a><br>
                <a href="#" style="color: black;"><i style="color: #5b1a56;font-size: 2rem;" class="icon-marcador "></i>
                    Sabana de Torres - Santander</a><br>
            </div>
            <div class="col s12 l6 m6">
                <br><br>
                <form method="post" action="send" id="contacto">

                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nombre" type="text" name="name" placeholder="Nombre" class="validate" required>
                            <label for="nombre">Nombre:</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" placeholder="E-mail" class="validate" required>
                            <label for="email">E-Mail:</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="telefono" type="text" name="tel" placeholder="Telefono" class="validate" required>
                            <label for="telefono">Telefono</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="mensaje" type="text" name="mensaje" placeholder="Mensaje" class="materialize-textarea" required></textarea>
                            <label for="mensaje">Mensaje</label>
                        </div>
                        <div class="input-field col s12">
                            <button type="submit" class="waves-effect waves-light btn red darken-3">
                                Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal de registro -->
    @include('layout.partials.register')

    @include('layout.partials.map')
@endsection