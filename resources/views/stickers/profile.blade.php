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
    <h1> My Profile</h1>
</div>
@endsection

@section('main')
    <main class="grid--item grid--item__8">
        <form action="{{route('user.edit', $usu)}}" method="post">
            @csrf
            <label for="name" >Name</label>
            <input type="text" name="name" placeholder="{{$usu->name}}">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="{{$usu->email}}">
            <input type="submit">
        </form>

        <button><a href="{{route('user.delete', $usu)}}">Eliminar Cuenta</a></button>

    </main>
@endsection





{{-- <h1>My profile</h1>
<a href="{{route('logged')}}">Back to logged</a>
{{-- Aquí va a ir un form para ver/editar el perfil del usuario
        Falta la img de avatar del usuario --}}
 <?php
// echo $usu;
// var_dump("holi".Auth::user());

?>
{{--
<form action="{{route('user.edit', $usu)}}" method="post">
    @csrf
    <label for="name" >Name</label>
    <input type="text" name="name" placeholder="{{$usu->name}}">
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="{{$usu->email}}">

    <input type="submit">
</form>


<button><a href="{{route('user.delete', $usu)}}">Eliminar Cuenta</a></button>  --}}
