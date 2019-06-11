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
<form action="logout" method="post">
    <button>退登</button>
</form>
<table>
    <tr>
        <td>id</td>
        <td>用户名</td>
        <td>性别</td>
        <td>密码</td>
        <td>邮箱</td>
        <td>操作</td>
    </tr>
    @foreach($data as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->sex}}</td>
            <td>{{$v->pwd}}</td>
            <td>{{$v->email}}</td>

        </tr>
        @endforeach
</table>
</body>
</html>