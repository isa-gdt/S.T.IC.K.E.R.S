<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="./css/logged.css" />
    </head>
    <body class="item">
        {{-- NAV --}}
        <nav class="grid--item grid--item__12 nav">
            <div class="nav--menu nav--item nav--item__12">
                <a href="{{route('logout')}}">Logout</a>
                <a href="{{route('profile')}}">Mi perfil</a>
                <a href="{{route('artStation')}}">Art Station</a>
                <a href="{{route('myCollection')}}">Mi colección</a>
            </div>
            <div class="nav--logo nav--item nav--item__2">
                <h1>
                    Logueado
                </h1>
            </div>
            <div class="nav--search nav--item nav--item__10">
                <p>buscador</p>
            </div>
        </nav>

        {{-- Banner para registro --}}
        <div id="goPremium"  class="grid--item grid--item__12">
            <p>banner go premium</p>

        </div>

        {{-- Banner de publicidad izq--}}
        <div id="bannerRight" class="grid--item grid--item__2">
            <p>banner publi</p>
        </div>


        {{-- MAIN (mostrar stickers) --}}
        <main class="grid--item grid--item__8">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sti as $item)
                        <tr>
                            <td>{{$item->idSti}}</td>
                            <td>{{$item->img}}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </main>

        {{-- Banner de publicidad derecha --}}
        <div id="bannerRight" class="grid--item grid--item__2">
            <p>banner publi</p>
        </div>

        {{-- FOOTER --}}
        <footer class="grid--item grid--item__12">
            <p>footer</p>
        </footer>

    </body>
</html>

