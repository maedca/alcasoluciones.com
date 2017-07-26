<div class="container">
    <div class="row">
        <div class="col s12">
            <img src="{{asset('img/logo_sombra.png')}}" class="responsive-img logo" >
        </div>
    </div>
</div>
<nav class="full navbar-fixed">
    <div class="nav-wrapper">
        <a href="#" data-activates="mobile-demo" class="right button-collapse"><i class="material-icons">menu</i></a>
        <div class="container">
            <div class="row">
                <ul class="left hide-on-med-and-down">
                    <li><a href="{{URL('/')}}">Inicio</a></li>
                    <li><a href="/#slide1">Productos y Servicios</a></li>
                    <li><a href="/#slide2">Contáctenos</a></li>

                </ul>
                <ul id="redes" class="right hide-on-med-and-down">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>

                </ul>
            </div>
        </div>
        <!-- Barra para Moviles -->
        <ul class="side-nav" id="mobile-demo">
            <li><a href="">Inicio</a></li>
            <li><a href="">Productos y Servicios</a></li>
            <li><a href="">Contáctenos</a></li>

            <li id="redes-movil">
                <a href="#"><i class="small icon-facebook"></i></a>
                <a href="#"><i class="small icon-instagram"></i></a>
            </li>
        </ul>
    </div>
</nav>