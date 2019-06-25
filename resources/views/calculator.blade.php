<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Đăng nhập</h1>
<form action="{{ route('calculator') }}" method="POST">
    @csrf
    <p>
        <input type="text" name="productName" placeholder="ProductName">
    </p>
    <p>
        <input type="number" name="listPrice" placeholder="Price">
    </p>
    <p>
        <input type="number" name="percent" placeholder="Discount Percent">
    </p>
    <p>
        <button type="submit" name="submit" >Calculate</button>
    </p>
</form>
</body>
</html>

