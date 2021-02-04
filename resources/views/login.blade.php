<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="loginbox">
    <h1>Login Here</h1>
    <?php
    $message= Session::get('message');
    if($message){
        echo '<span class="text-alert">'.$message.'</span>';
        Session::put('message',null);
    }
    ?>
    <form method="post" action="{{route('admin.authlogin')}}">
        @csrf
        <div>
            <p>Username</p>
            <input type="text" name="username" value="{{old('username')}}" placeholder="Enter Username">
        </div>
        <div>
            <p>Password</p>
            <input type="password" name="password" value="{{old('password')}}" placeholder="Enter Password">
        </div>
        <div>
            <p>
                <input type="submit" name="" value="Login">
            </p>
        </div>
        <ul class="alert text-danger" style="list-style: none;color: red ">
            @foreach( $errors ->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </form>

</div>
</body>
</html>
