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
<form action="shop_add" method="post">
    <table>
        <tr>
            <td>商品名称</td>
            <td><input type="text" name="s_name"></td>
        </tr>
        <tr>
            <td>商品价格</td>
            <td><input type="text" name="s_price"></td>
        </tr>
        <tr>
            <td>商品数量</td>
            <td><input type="text" name="s_num"></td>
        </tr>
        <tr>
            <td>商品描述</td>
            <td><input type="text" name="s_desc"></td>
        </tr>
        <tr>
            <td><input type="submit" value="添加商品"></td>
        </tr>
    </table>
</form>
</body>
</html>