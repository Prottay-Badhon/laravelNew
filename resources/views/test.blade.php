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
  <section class="text-center py-5" id="aboutFirstSection">
    <div class="dark-overlay">
      <div class="container">
        <div class="mt-5 py-5">
        <h2 class="text-light">@yield('slider')</h2>
        <p class="lead text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, saepe.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="whatToDo" class="py-5">
    <div class="container">

      <div class="row">


        <div class="col-12 col-md-6 col-lg-6 align-self-center">
          @yield('content')
        </div>

        <div class="col-12 col-md-6 col-lg-6">
        <div class="text-center">
          <img src='frontend/img/cartoon.jpg'  alt="" class="img-fluid rounded-circle">
        </div>
        </div>
      </div>
    </div>
  </section>


  <section class="" id="cardDiv">
    <div class="container">


          <div class="row">
          <div class="col-md-4">
          <div class="card text-center bg-success text-light">
            <div class="card-body">
              <i class="fa fa-envelope"></i>
              <h3 class="text-light">card title</h3>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
            </div>
          </div>
        </div>

         <div class="col-md-4">
          <div class="card text-center  bg-dark text-light" id="midDiv">
            <div class="card-body">
              <i class="fa fa-car"></i>
              <h3 class="text-light">card title</h3>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
            </div>
          </div>
         </div>
         <div class="col-md-4">
          <div class="card text-center  bg-info text-light">
            <div class="card-body">
              <i class="fa fa-play"></i>
              <h3 class="text-light">card title</h3>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
            </div>
          </div>
         </div>


      </div>

      <div class="row" id="lastIconDiv">
        <div class="col-md-4">
          <div class="card text-center bg-warning ">
            <div class="card-body">
              <i class="fa fa-tree"></i>
              <h3 class="">card title</h3>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center bg-primary text-light " >
            <div class="card-body">
              <i class="fa fa-cart-plus"></i>
              <h3 class="text-light">card title</h3>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
            </div>
          </div>
         </div>
         <div class="col-md-4">
          <div class="card text-center bg-light  ">
            <div class="card-body">
              <i class="fa fa-youtube"></i>
              <h3 class="">card title</h3>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
            </div>
          </div>
          </div>
     </div>
  </div>
  </section>
  @yield('blogContent')

  <section class="bg-light my-5 py-5 text-center" id="testimonial">
    <div class="container">
    <h3 class="">Testimonial</h3>
    <blockquote class="blockquote">
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil repudiandae eos explicabo perferendis. Ratione, aspernatur.</p>
                  <footer class="blockquote-footer">
                    Munna From <a href="http://www.codersfoundation.com/" tabindex="0">Coders Foundation</a>
                  </footer>
                </blockquote>

    </div>
  </section>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/uikit.min.js') }}"></script>
  <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
</body>
</html>
