<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css\footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css\register.css') }}">
    <link rel="stylesheet" href="{{ asset('css\navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css\login.css') }}">
</head>
@include("navbar")
<body>
    <login>
    <div class="container padd">
        <div class="formDK text-center mainColor text-center d-block text-white "><div>
            <h1>Đăng kí</h1>
        </div>
        <form action="#" method="get" class="mx-4 border-top">
            <p class="d-inline">Tài khoản</p>
            <input type="text" class="m-1 form-control " placeholder="Từ 8-15 kí tự a-zA-Z 0-9">
            <br>
            <p class="d-inline">Mật khẩu</p>
            <input type="password" class="mt-1 form-control" placeholder="Từ 8-15 kí tự a-zA-Z 0-9">
            <br>
            <p class="d-inline">Nhập lại mật khẩu</p>
            <input type="password" class="mt-1 form-control" placeholder="Nhập lại mật khẩu">
            <br>
            <p class="d-inline">SDT</p>
            <input type="text" class="mt-1 form-control" placeholder="Số điện thoại">
            <br>
            <button type="submit" class="my-1 rounded">Đăng kí</button>
        </form>
        <p>Bạn đã có tài khoản? Hãy bấm vào đây để <a href="/login">Đăng nhập</a></p></div>    
    </div>
    </login>
</body>
@include("footer")
</html>
    