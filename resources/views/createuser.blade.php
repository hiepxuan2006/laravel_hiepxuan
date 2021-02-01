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
<form class="formuser" method="post" action="{{route('user.store')}}" >
    @csrf
    <p>
        <label for="username">Username</label><br>
        <input class="formuser1" type="text" name="username" value="">
    </p>
    <p>
        <label for="password">Password</label><br>
        <input class="formuser1" type="text" name="password" value="">
    </p>
    <p>
        <label for="full_name">Fullname</label><br>
        <input class="formuser1" type="text" name="full_name" value="">
    </p>
    <p>
        <label for="email">Email</label><br>
        <input class="formuser1" type="text" name="email" value="">
    </p>
    <p>
        <button type="submit">Create</button>
    </p>
</form>
</body>
</html>
