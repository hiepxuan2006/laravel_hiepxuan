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
        <h3>danh sách user</h3>
        <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Username</th>
            <th>Password</th>
            <th>Full_name</th>
            <th>Email</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->image}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->full_name}}</td>
                <td>{{$user->email}}</td>
                <th>
                    <a href="view/{{$user->id}}/edit" class="btn btnedit">Edit</a>
                </th>
                <th>
                    <a href="view/delete/{{$user->id}}" class="btn btndelete">Delete</a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
