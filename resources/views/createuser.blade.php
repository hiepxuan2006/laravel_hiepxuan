@extends('layouts.app')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm user mới</title>
</head>
<body>
<div>
    <form class="formuser" method="post" action="{{route('users.store')}}">
        @csrf
        <div>
            <label for="username">Username</label><br>
            <input class="formuser1" type="text" name="username" placeholder="user1" value="">
        </div>
        <div>
            <label for="password">Password</label><br>
            <input class="formuser1" type="password" name="password" placeholder="nhập password" value="">
        </div>
        <div>
            <label for="password_confirmation">Password confirm</label><br>
            <input class="formuser1" type="password" name="password_confirmation" placeholder="nhập lại password" value="">
        </div>
        <p>
            <label for="full_name">Fullname</label><br>
            <input class="formuser1" type="text" name="full_name" placeholder="Username 1" value="">
        </p>
        <p>
            <label for="email">Email</label><br>
            <input class="formuser1" type="text" name="email" placeholder="user1@gmail.com" value="">
        </p>
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>
    <ul class="alert text-danger" style="list-style: none;color: red ">
        @foreach( $errors ->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
</body>
</html>
