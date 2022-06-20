<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>Document</title>
</head>
<body>
    <div id="form_edit_pack">
        <h2>Editar pack</h2>
        <form action="{{route('pack.editPack', $pack)}}" method="post">
            @csrf
                <label for="name" >Nombre</label>
                <input type="text" name="name" placeholder="{{$pack->name}}"><br>
                <label for="idUsu">idUsu</label>
                <input type="text" name="idUsu" placeholder="{{$pack->idUsu}}"><br>
            <input type="submit">
        </form>
    </div>
</body>
</html>

