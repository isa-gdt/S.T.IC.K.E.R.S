<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/admin.css')}}">
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
                <div class="nav--search nav--item nav--item__10">

                </div>
            </nav>

        @section('banner-register')
            {{-- Banner para registro --}}
            <div class="grid--item grid--item__12">
            </div>
        @show

        @section('banner--left')
            <div id="bannerRight" class="grid--item grid--item__2">

            </div>
        @show

        @section('main')
            {{-- MAIN (mostrar stickers) --}}
            <main class="grid--item grid--item__8">
            </main>
        @show

        @section('banner-right')
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
                                <li>Lo más popular</li>
                                <li>Tendencias de búsqueda</li>
                                <li>Blog</li>
                            </ul>
                        </div>
                        <div class="columns--informacion">
                            <h4>INFORMACIÓN</h4>
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
                                <li>Términos de uso</li>
                                <li>Acuerdo de licencia</li>
                                <li>Política de privacidad</li>
                                <li>Información de Copyright</li>
                                <li>Política de cookies</li>
                                <li>Cookie Settings</li>
                            </ul>
                            <h4>AYUDA</h4>
                            <ul>
                                <li>Soporte</li>
                                <li>Contáctanos</li>
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
                        <a href="">LOGO</a>
                        <p>Copyright blablablabla SL. Todos los derechos reservados</p>
                    </div>
                    <div class="footer--container__lan"></div>

                </div>
            </footer>
        @show

    </body>
    <script src="{{asset('/js/admin.js')}}"></script>
</html>

