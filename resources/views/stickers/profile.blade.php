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
<div class="grid--item grid--item__12">
    <h2> Account data</h2>
</div>
@endsection

@section('main')
    <main class="grid--item grid--item__8">
        <form id="form-profile" action="{{route('user.edit', $usu)}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="avatar">Foto de perfil</label>
            <div ><img id="img-avatar" src="{{$usu->avatar}}" alt=""></div>
            <input type="file" name ="avatar"><br>
            <label for="name" >Name</label>
            <input type="text" name="name" placeholder="{{$usu->name}}"><br>
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="{{$usu->email}}"><br>
            <input class="editDatos-btn" type="submit" value="Modificar datos">
        </form>
        <button id="borrarCuenta-btn"><a href="{{route('user.delete', $usu)}}"></a>Eliminar Cuenta</button>


        <div id="profile-notifications">
            <h2> Notifications</h2>

            <p class="p-border">I wish to recieve newsletter, promotions and news from Freepik Company <input type="checkbox" checked="checked"></p>


            <p><strong>Basic information on Data Protection:</strong> Freepik Company stores your data to improve the service and, with your consent, offers news, promotions and raffles, as well as projects and releases from Freepik Company.<strong>More information</strong></p>
        </div>
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
