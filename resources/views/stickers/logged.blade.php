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
            <h1>

            </h1>
        </div>
        <div class="nav--search nav--item nav--item__10">
            <form action="#" id="search-form">
                @csrf
                <div class="row">
                    <div class="col-12" id="search-wrapper">
                        <input type="text" class="form-control w-100 m-0 search" placeholder="What are you looking for .. " aria-describedby="basic-addon2">

                        <div id="results">

                        </div>
                    </div>
                </div>
            </form>
    </div>
@endsection

@section('banner-register')
    <div id="goPremium"  class="grid--item grid--item__12">
        <h1> Logueado </h1>
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

{{-- Buscador --}}

<script>
    $(function ()
    {
        'use strict';

        $(document).on('keyup', '#search-form .search', function ()
        {
            if($(this).val().length > 0)
            {
                var search = $(this).val();

                $.get("{{ route('search') }}", {search: search}, function (res)
                {
                    $('#results').html(res);
                });

                return;
            }

            $('#results').empty();
        });

        $(document).on('click', '.post-link', function ()
        {
            var postId = $(this).data('id');

            $.get("{{ url('show') }}", {id: postId}, function (res)
            {
                $('#results').empty();
                $('.search').val('');
            });
        });
    });
    </script>
</body>
</html>


