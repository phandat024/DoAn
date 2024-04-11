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
<body>
<nav class="navbar navbar-expand-sm ">
  <div class="container-fluid">
    <a class="navbar-brand ms-auto" href="javascript:void(0)">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-5">
        <li class="nav-item ">
          <a class="nav-link" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sản phẩm bán chạy nhất</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sale</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Danh mục</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Đăng nhập</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Đăng kí</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('signout') }}">Logout</a>
        </li>
        @endguest           

      </ul>
    </div>
  </div>
  <form class="d-flex custom-form">
    <input class="form-control " type="text" placeholder="Search">
    <button type="button" class="btn btn-outline-dark ">Search</button>
  </form>
  <!-- Thêm class của Font Awesome để hiển thị icon -->
  <i class='fas fa-user-alt me-3' style='font-size:24px'></i>
  <i class='fas fa-shopping-cart me-3' style='font-size:24px'></i>
</nav>


    @yield("content")



    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis libero sed lobortis dictum.</p>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: contact@example.com</p>
                <p>Phone: +123456789</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Your Website Name</p>
        </div>
    </footer>
</body>
</html>