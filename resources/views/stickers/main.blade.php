@extends('layouts.mainTemplate')

@section('nav-Menu')
    <div class="nav--menu nav--item nav--item__12">
        <a class="nav--menu__login" href="{{route('login')}}">Login</a>
        <a class="nav--menu__register" href="{{route('register')}}">Registro</a>
    </div>
@endsection

@section('banner-register')
    <div id="goPremium"  class="grid--item grid--item__12">
        <div id="goPremium--box">
            <h2> Díselo con Stickers </h2>
            <h3> y déjal@s sin palabras</h3>
            <button id="goPremium--box__register"><a  href="{{route('register')}}">Regístrate</a></button>
        </div>

    </div>
@endsection

@section('banner--left')
{{-- Banner de publicidad izq--}}
<div id="bannerLeft" class="grid--item grid--item__2">
    <img src = "{{ asset('./css/imgs/bb.webp') }}" alt="Logo"/>
</div>
@endsection

@section('banner-right')
{{-- Banner de publicidad derecha --}}
<div id="bannerRight" class="grid--item grid--item__2">
    <p>der</p>
</div>
@endsection

@section('main')
    <main class="grid--item grid--item__8 main">
        <div class="grid--item__tittle">
            <h1>Top Stickers Pack</h1>
        </div>
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

