@extends('layouts.mainTemplate')

<?php
if (isset($pack)){
    echo $pack;
}

?>




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
    <h1>Art Station</h1>
</div>
@endsection

@section('main')
    <main class="grid--item grid--item__8">
        <form id="">
            <div>
              <label for="file">Choose file to upload</label>
              <input type="file" id="file" name="file" multiple>
            </div>
            <div>
              <button>Submit</button>
            </div>
        </form>

        <div class="component">
            <div class="overlay">
                <div class="overlay--inner"></div>
            </div>

                <button class="btn-crop js-crop">Cortar</button>


            <div class="resize-container">
                <span class="resize-handle resize-handle-nw"></span>
                <span class="resize-handle resize-handle-ne"></span>
                <img class="resize-image" src="img/mrx.jpg" alt="Image" />
                <span class="resize-handle resize-handle-sw"></span>
                <span class="resize-handle resize-handle-se"></span>
            </div>
        </div>

        <div>
            <form action="{{route('createSticker')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="pack">Nombre del pack</label>
                <select name="packName">
                    @foreach($packs as $item)
                        <option value={{$item->name}}>{{$item->name}}</option>
                    @endforeach
                </select>
                <input  id="foto-recortada" name="img" type="hidden" value="" >
                <input type="submit">
            </form>
        </div>

        <img id="prueba" src=" " alt="">
    </main>
@endsection


