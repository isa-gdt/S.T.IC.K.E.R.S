@extends('layouts.adminTemplate')

@section('nav-Menu')
    <div class="nav--menu nav--item nav--item__12">
        <a href="{{route('profile')}}">Mi perfil</a>
        <a href="{{route('artStation')}}">Art Station</a>
        <a href="{{route('myCollection')}}">Mi colección</a>
        <a href="{{route('admin.admin')}}">Admin Panel</a>
        <a href="{{route('logout')}}">Logout</a>
    </div>
@endsection

@section('banner-register')
    <div  class="grid--item grid--item__12">
        <h1> Admin main </h1>
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

