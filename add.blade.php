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
<h2>商品添加</h2>
<form action="add_do" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>商品名称</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>商品买点</td>
            <td><input type="text" name="point"></td>
        </tr>
        <tr>
            <td>店铺价</td>
            <td><input type="text" name="number"></td>
        </tr>
        <tr>
            <td>市场价</td>
            <td><input type="text" name="market"></td>
        </tr>
        <tr>
            <td>成本价</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>商品库存</td>
            <td><input type="text" name="stock"></td>
        </tr>
        <tr>
            <td>商品库存码</td>
            <td><input type="text" name="code"></td>
        </tr>
        <tr>
            <td>商品图片</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td><input type="submit" value="添加"></td>
        </tr>
    </table>
</form>
</body>
</html>