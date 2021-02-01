<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHỉnh sửa thông tin</title>
</head>
<body>
<form class="formuser" method="post" action="{{route('user.update',['id'=>$users->id])}}">
    @csrf
    <p>
        <label for="username">Username</label><br>
        <input type="text" name="username" value="{{ $users->username }}">
    </p>
    <p>
        <label for="password">Password</label><br>
        <input type="text" name="password" value="{{ $users->password }}">
    </p>
    <p>
        <label for="fullname">Full name</label><br>
        <input type="text" name="full_name" value="{{ $users->full_name }}">
    </p>
    <p>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="{{ $users->email }}">
    </p>
    <p>
        <button type="submit" class="btn btnupdate">Update</button>
    </p>
</form>
</body>
</html>
