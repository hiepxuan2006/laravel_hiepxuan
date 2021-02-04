<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<div>
   <a href="{{route('home')}}">
       <h1>Home</h1>
   </a>
    <?php
    $message= Session::get('message');
    if($message){
        echo '<span class="text-alert">'.$message.'</span>';
        Session::put('message',null);
    }
    ?>
    <ul>
        @if(Auth::check())
        <li style="list-style:none">
            <a style="text-decoration: none" href="{{route('admin.logout')}}" >
                <h3>Đăng xuất</h3>
            </a>
        </li>
        @else
            <li style="list-style:none">
                <a style="text-decoration: none" href="{{route('admin.login')}}" >
                    <h3>Đăng Nhập</h3>
                </a>
            </li>
        @endif
    </ul>
    <ul>
        <li style="list-style:none">
            <a style="text-decoration: none" href="{{route('users.index')}}" >
                <h3>Quản lí user</h3>
            </a>
        </li>
    </ul>
</div>
</body>
</html>
