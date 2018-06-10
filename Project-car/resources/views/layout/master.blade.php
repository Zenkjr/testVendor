<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/master.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset('/img/logo.png') }}">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mua Xe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bán Xe</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tin Tức
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Khuyến Mãi</a>
                            <a class="dropdown-item" href="#">Xe Mới</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Thị Trường Xe</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên Hệ</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</header>

{{--<div class="container">--}}
    @section('body')

    @show
{{--</div>--}}
<footer>
    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="col-md-12 row pr-0">
                <div class="col-md-3">
                    <h2 class="text-white"><a href="#" class="badge badge-dark">YouCar.vn</a></h2>
                    <p class="text-muted"> Công ty cổ phần YourCar</p>
                    <p class="text-muted"> Địa chỉ: Đại học Fpt, Mỹ Đình, Hầ Nội</p>
                    <p class="text-muted"> Phone: 19001002</p>
                    <p class="text-muted"> Eamil: YorCar@gmail.com</p>
                    <p class="text-muted"> YorCar.VN © All rights reserved.</p>
                </div>
                <div class="col-md-3">
                    <ul class="pl-0">
                        <div class="border-bottom pt-2 pb-2">
                            <a href="#" class="badge badge-dark"> Mua Xe</a>
                        </div>
                        <div class="border-bottom pt-2 pb-2">
                            <a class="badge badge-dark" href="#"> Bán Xe</a>
                        </div>
                        <div class="border-bottom pt-2 pb-2">
                            <a class="badge badge-dark" href="#"> Khuyến Mãi</a>
                        </div>
                        <div class="border-bottom pt-2 pb-2">
                            <a class="badge badge-dark" href="#"> Xe Mới</a>
                        </div>
                        <div class="border-bottom pt-2 pb-2">
                            <a href="#" class="badge badge-dark"> Thị Trường Xe</a>
                        </div>
                        <div class="border-bottom pt-2 pb-2">
                            <a class="badge badge-dark" href="#"> Liên Hệ</a>
                        </div>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <iframe class="img-fluid w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.09794595131!2d105.77952571561066!3d21.028766593152568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbfa96f309f%3A0x7917af0f83effe1b!2sFPT+University%2C+Hanoi!5e0!3m2!1sen!2s!4v1528537368680"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>