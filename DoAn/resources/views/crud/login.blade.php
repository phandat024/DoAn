@extends('dashboard')

@section('content')
    <div class="login-container">
        <h2>Đăng nhập</h2>
        <form id="loginForm" action="{{route('loginIn')}}" method="post">
            @csrf
            <div class="input-group" >
                <label for="username">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
           <div class="input-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
          <!-- <div class="input-group remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Ghi nhớ đăng nhập</label>
            </div> --> 
            
            <button type="submit"  class="login-btn">Đăng nhập</button>
            <!-- Thêm nút đăng ký ở đây -->
            <p class="register-now">
              Bạn chưa có tài khoản? <a href="/register">Đăng ký ngay</a>
            </p>
        </form>
        <!-- <p class="forgot-password"><a href="#">Quên mật khẩu?</a></p> -->
    </div>
@endsection
