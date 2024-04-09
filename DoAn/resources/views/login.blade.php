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
@include('navbar')
<body>

    <div class="login-container">
        <h2>Đăng nhập</h2>
        <form id="loginForm">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
           <div class="input-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <p class="forgot-password"><a href="#">Quên mật khẩu?</a></p>
          <!-- <div class="input-group remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Ghi nhớ đăng nhập</label>
            </div> --> 
            
            <button type="button" onclick="checkLogin()" class="login-btn">Đăng nhập</button>
            <!-- Thêm nút đăng ký ở đây -->
            <p class="register-now">
              Bạn chưa có tài khoản? <a href="/register">Đăng ký ngay</a>
            </p>
        </form>
        <!-- <p class="forgot-password"><a href="#">Quên mật khẩu?</a></p> -->
    </div>

</body>
@include('footer')
</html>
