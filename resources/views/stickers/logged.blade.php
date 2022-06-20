@extends('layouts.mainTemplate')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<?php
if (isset($results)){
    echo $results;
}


?>

@section('nav-Menu')
    <div class="nav--menu nav--item nav--item__12">
        <a href="{{route('logout')}}">Logout</a>
        <a href="{{route('profile')}}">Mi perfil</a>
        <a href="{{route('artStation')}}">Art Station</a>
        <a href="{{route('myCollection')}}">Mi colección</a>
        <div class="nav--logo nav--item nav--item__2">

        </div>
        <div class="nav--search nav--item nav--item__10">
        </div>
    </div>
@endsection

@section('banner-register')
    <div id="goPremium"  class="grid--item grid--item__12">
        <h1> Welcome to the sticker-verse </h1>
        <p>Encuentra y crea los stickers más divertidos</p>
    </div>
@endsection

@section('main')
    <main class="grid--item grid--item__8 main">
        <table>
            <thead>
                <tr>
                    <th>temática</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($sti as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        @foreach($item->stickersPack() as $sti)
                        <td><img src="{{$sti->img}}" alt=""></td>
                        @endforeach
                    </tr>

                @endforeach
            </tbody>
        </table>
    </main>
@endsection

</body>
</html>


