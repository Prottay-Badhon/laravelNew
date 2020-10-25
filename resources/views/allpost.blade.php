<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/uikit.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
  <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
  <title>@yield('title')</title>
</head>
<body>
  <nav class="navbar navbar-dark navbar-expand-md py-2 fixed-top">
  <div class="container">
    <div class="navbar-brand">
      <a href="" class="nav-link text-light">Glozzom</a>
    </div>
    <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navDiv"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navDiv">
      <ul class="navbar-nav  ml-auto">
        <li class="nav-item"><a href="{{URL('/')}}" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="{{route('about')}}" class="nav-link">ABOUT</a></li>
        <li class="nav-item"><a href="{{route('service')}}" class="nav-link">SERVICE</a></li>
        <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">BLOG</a></li>
        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">CONTACT</a></li>
      </ul>
    </div>
    </div>
  </nav>
  <div class="bg-dark mt-5 p-5 text-light" id="badhonDiv">

  </div>


  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/uikit.min.js') }}"></script>
  <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
</body>
</html>
