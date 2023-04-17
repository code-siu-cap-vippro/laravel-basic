<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="bg-dark text-white fs-2 text-center p-3">
            ĐỌC "THƠ - TRUYỆN - VĂN" TRỰC TUYẾN
        </div>
        <nav class="nav fs-4 bg-light">
            <a class="nav-link active" aria-current="page" href="{{route('thome')}}">Thơ Về Mẹ</a>
            <a class="nav-link" href="{{route('ngungon')}}">Truyện Ngụ Ngôn</a>
            <a class="nav-link" href="#">Bạn Đọc Bình Luận</a>
        </nav>
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
        <div class="py-5 my-2 bg-dark position-sticky">
            <p class="m-0 text-center text-white">Bản quyền bởi &copy; TDK &copy; 2023</p>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>