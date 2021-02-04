<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hiển thị danh sách user</title>
</head>
<body>
<div class="view">
    <table class="viewtable" border="1" cellspacing="0">
        <h1>Danh Sách User</h1>
        <thead>
        <a href="{{route('home')}}" style="text-decoration: none">
            <h3>Trang home</h3>
        </a>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Username</th>
            <th>Password</th>
            <th>Full_name</th>
            <th>Email</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th>{{$user->id}}</th>
                <td>{{$user->image}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->full_name}}</td>
                <td>{{$user->email}}</td>
                <th>
                    <form method="GET" action="{{route('users.edit',['id'=>$user->id])}}">
                        @method('get')
                        <button type="submit">Edit</button>
                    </form>
                </th>
                <th>
                    <form method="POST" action="{{route('users.delete',['id'=>$user->id])}}">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </th>
                <th>
                    <form method="get" action="{{route('users.create')}}">
                        @csrf
                        <button type="submit">Add</button>
                    </form>
                </th>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
