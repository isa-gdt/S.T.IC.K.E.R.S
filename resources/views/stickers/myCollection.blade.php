{{--
    <?php
    echo "<pre>";
        print_r($pack[0]->stickersPack());
    echo    "</pre>";
    ?> --}}
@extends('layouts.mainTemplate')

@section('nav-Menu')
    <div class="nav--menu nav--item nav--item__12">
        <a href="{{route('logout')}}">Logout</a>
        <a href="{{route('profile')}}">Mi perfil</a>
        <a href="{{route('artStation')}}">Art Station</a>
        <a href="{{route('myCollection')}}">Mi colección</a>
        <a href="{{route('logged')}}">Back to logged</a>
    </div>
@endsection

@section('banner-register')
    <div id="goPremium"  class="grid--item grid--item__12">
        <h1>My Collection</h1>
        <button>Nuevo pack</button>
        <form action="{{route('pack.create')}}" method="post">
            @csrf
            <label for="name">Nombre</label>
            <input type="text"  name="name">
           <input type="submit">
        </form>
    </div>
@endsection

@section('main')
    <main class="grid--item grid--item__8">
        <table>
            <thead>
                <tr>
                    <th>idPack</th>
                    <th>nombre</th>
                    <th>??</th>
                    <th>??</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pack as $item)
                    <tr>
                        <td>{{$item->idPack}}</td>
                        <td>{{$item->name}}</td>
                        @foreach($item->stickersPack() as $sti)
                        <td><img src="{{$sti->img}}" alt=""></td>
                        @endforeach
                        <td><button><a href="{{route('pack.delete', $item)}}">Borrar</a></button></td>
                        {{-- <td><button><a href="{{route('goToCreation', $item)}}">Añadir</a></button></td> --}}
                    </tr>

                @endforeach
            </tbody>
        </table>

    </main>
@endsection


