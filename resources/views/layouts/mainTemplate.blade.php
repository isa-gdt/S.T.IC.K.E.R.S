<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/logged.css')}}"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/5831c4a164.js" crossorigin="anonymous"></script>
    </head>
    <body class="item">
        {{-- NAV --}}

            <nav class="grid--item grid--item__12 nav">
                @section('nav-Menu')
                    <div class="nav--menu nav--item nav--item__12">
                    </div>
                @show
                <div class="nav--logo nav--item nav--item__2">
                    <img src = "{{ asset('./css/imgs/logo.svg') }}" alt="Logo"/>
                </div>

            </nav>


        @section('banner-register')
            {{-- Banner para registro --}}
            <div id="goPremium"  class="grid--item grid--item__12">
            </div>
        @show

        @section('banner--left')
            {{-- Banner de publicidad izq--}}
            <div id="bannerRight" class="grid--item grid--item__2">

            </div>
        @show

        @section('main')
            {{-- MAIN (mostrar stickers) --}}
            <main class="grid--item grid--item__8">
            </main>
        @show

        @section('banner-right')
            {{-- Banner de publicidad derecha --}}
            <div id="bannerRight" class="grid--item grid--item__2">

            </div>
        @show

        @section('footer')
            {{-- FOOTER --}}
            <footer class="grid--item grid--item__12 footer">
                <div class="footer--container">
                    <div class="footer--container__columns">
                        <div class="columns--contenido">
                            <h4>CONTENIDO</h4>
                            <ul>
                                <li>Novedades</li>
                                <li>Lo m??s popular</li>
                                <li>Tendencias de b??squeda</li>
                                <li>Blog</li>
                            </ul>
                        </div>
                        <div class="columns--informacion">
                            <h4>INFORMACI??N</h4>
                            <ul>
                                <li>Planes y precios</li>
                                <li>Sobre nosotros</li>
                                <li>Oportunidades de empleo</li>
                                <li>Vende tu contenido</li>
                            </ul>
                        </div>
                        <div class="columns--legal">
                            <h4>LEGAL</h4>
                            <ul>
                                <li>T??rminos de uso</li>
                                <li>Acuerdo de licencia</li>
                                <li>Pol??tica de privacidad</li>
                                <li>Informaci??n de Copyright</li>
                                <li>Pol??tica de cookies</li>
                                <li>Cookie Settings</li>
                            </ul>
                            <h4>AYUDA</h4>
                            <ul>
                                <li>Soporte</li>
                                <li>Cont??ctanos</li>
                            </ul>
                        </div>
                        <div class="columns--rrss">
                            <h4>REDES SOCIALES</h4>
                            <ul class="columns--rrss__icons">
                                <li>f</li>
                                <li>t</li>
                                <li>p</li>
                                <li>i</li>
                                <li>y</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer--container__logo">
                        <p>Copyright blablablabla SL. Todos los derechos reservados</p>
                    </div>
                    <div class="footer--container__lan"></div>

                </div>
            </footer>
        @show

    </body>

    <script src="{{asset('js/main.js')}}"></script>
</html>

<?php




