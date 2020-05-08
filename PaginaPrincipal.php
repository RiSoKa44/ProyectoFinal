<?php
include 'header.php';
?>

<!-- BODY -->
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="imgLogo" src="IMG/Header/logo-web.png" alt="logo_esports_madness" height="200em">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navigation -->

<!-- Body -->

<body>

    <ul id="proyecto">

        <!--Juegos-->
        <div class="juegos">
            <div v-for='juego in juegos'>
                <h2>{{juego.Nombre}}</h2>
                <img class="imgJuegos pointer" v-bind:src="'./IMG/Juegos/' + juego.Imagen" @click="getLigas(juego.ID)" />
                <p>{{juego.Plataforma}}</p>
            </div>
        </div>
        <!--Juegos-->

        <br>

        <!--Ligas-->
        <div v-if="ligas">
            <div class="ligas">
                <div v-for='liga in ligas'>
                    <h2>{{liga.Nombre}}</h2>
                    <img class="imgLigas pointer" v-bind:src="'./IMG/Ligas/' + liga.Imagen" @click="getEquipos(liga.ID)" />
                </div>
            </div>
            <br>
        </div>
        <!--Ligas-->

        <!--Equipos-->
        <div v-if="equipos">
            <div class="equipos">
                <div class="plantillaEquipo" v-for='equipo in equipos'>
                    <h2>{{equipo.Nombre}}</h2>
                    <img class="imgEquipos pointer" v-bind:src="'./IMG/Equipos/' + equipo.Logo" width="100" height="100" @click="getJugadores(equipo.ID) , getEntrenadores(equipo.ID)" />
                </div>
            </div>
            <br>
        </div>
        <!--Ligas-->

        <!--Jugadores-->
        <div v-if="jugadores">
            <div class="jugadores">
                <div class="fichaJugador" v-for='jugador in jugadores'>
                    <h2>{{jugador.Nombre}}</h2>
                    <img class="imgjugadores pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + jugador.Imagen" width="100" height="100" />
                    <p>{{jugador.Rol}}</p>
                </div>
            </div>
            <br>
        </div>
        <!--Jugadores-->

        <!--Entrenador-->
        <div v-if="entrenadores">
            <div class="entrenadores">
                <div class="fichaEntrenador" v-for='entrenador in entrenadores'>
                    <h2>{{entrenador.Nombre}}</h2>
                    <img class="imgEntrenador pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + entrenador.Imagen" width="100" height="100" />
                </div>
            </div>
        </div>
        <!--Entrenador-->

    </ul>
</body>

<!--BODY-->


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify"> Bienvenido a <i>E-Sport Madness</i> el lugar perfecto para los amantes de los E-Sports. <br><br> ¿Quieres competir con tus amigos y saber quien conoce mejor las competiciones? <br><br> No busques más, E-sport Madness es tu lugar.</p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>E-Sports</h6>
                <ul class="footer-links">
                    <li><a href="https://euw.leagueoflegends.com/es-es/">League</a></li>
                    <li><a href="https://watch.lolesports.com/standings/lec/lec_2020_split1/regular_season">LEC</a></li>
                    <li><a href="https://www.arenazero.net/">ArenaZero</a></li>
                    <li><a href="https://lvp.global/">LVP</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="#">Sobre Nosotros</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Contribute</a></li>
                    <li><a href="#">Privacidad</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
                    <a href="#">RiSoKa&Oscar InsPedralbes</a>.
                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="JS/funcions.js"></script>
<!--<script src="js/componentes.js"></script>-->

</html>