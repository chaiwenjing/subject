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
<form action="">
    <table border="1">
        <tr>
            <td>商品名称</td>
            <td>商品买点</td>
            <td>店铺价</td>
            <td>市场价</td>
            <td>成本价</td>
            <td>商品库存</td>
            <td>商品库存码</td>
            <td>商品图片</td>
            <td>操作</td>
        </tr>
        @foreach($data as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->name}}</td>
                <td>{{$v->point}}</td>
                <td>{{$v->number}}</td>
                <td>{{$v->market}}</td>
                <td>{{$v->price}}</td>
                <td>{{$v->stock}}</td>
                <td>{{$v->code}}</td>
                <td><img src="../images/{{$v->image}}" alt=""></td>
            </tr>
            @endforeach
    </table>
</form>
</body>
</html>