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
<h2>展示页面</h2>
<table>
    <tr>
        <td>活动名称</td>
        <td>活动时间</td>
        <td>修改时间</td>
        <td>添加时间</td>
    </tr>
    @foreach($data as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->hour}}</td>
            <td>{{$v->updated_at}}</td>
            <td>{{$v->created_at}}</td>
            <td>

            </td>
        </tr>
        @endforeach
    <form action="purchase" method="post">
        <input type="hidden" name="name">
        <button>购买</button>
    </form>

</table>
</body>
</html>