<h1>holi</h1>
<div id="user_edit" >
    <form action="{{route('user.edit', $user)}}"method="post">

        <h2>Editar usuario {{$user->type==0?'Premium':'Admin'}}</h2>
        @csrf
        <label for="name" >Name</label>
        <input type="text" name="name" placeholder="{{$user->name}}"><br>
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="{{$user->email}}"><br>
        <label for="type">Tipo de usuario</label>
        <select name="type" id="type">Tipo
            <option value="1">Admin</option>
            <option value="0">Premium</option>
        </select><br>
        <input type="text" name="type" placeholder="{{$user->type==0?'Premium':'Admin'}}">
        <input type="submit">
    </form>
</div>
