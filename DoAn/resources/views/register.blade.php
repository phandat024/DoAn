
@include("header")
<link rel="stylesheet" href="{{ asset('css\register.css') }}">
</head>
<body>
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
</body>
@include("footer")

    