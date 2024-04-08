@include('header')
<body>
    <nav class="navbar">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="login.html">Đăng nhập</a></li>
            <li><a href="">Đăng ký</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Chỉnh sửa</a></li>
            <li><a href="">Chi tiết</a></li>
        </ul>
    </nav>

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
              Bạn chưa có tài khoản? <a href="register.html">Đăng ký ngay</a>
            </p>
        </form>
        <!-- <p class="forgot-password"><a href="#">Quên mật khẩu?</a></p> -->
    </div>

</body>
@include('footer')
