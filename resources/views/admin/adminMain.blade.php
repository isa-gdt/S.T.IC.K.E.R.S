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
@endsection

