<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/uikit.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
  <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
  <title>Glozzom</title>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-md py-2">
<div class="container">
  <div class="navbar-brand">
    <a href="" class="nav-link text-light">Glozzom</a>
  </div>
  <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navDiv"><span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="navDiv">
    <ul class="navbar-nav  ml-auto">
      <li class="nav-item"><a href="{{URL('/')}}" class="nav-link active">HOME</a></li>
      <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">ABOUT</a></li>
      <li class="nav-item"><a href="{{ route('service') }}" class="nav-link">SERVICE</a></li>
      <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">BLOG</a></li>
      <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">CONTACT</a></li>
    </ul>
  </div>
  </div>
</nav>
<!--Carousel-->
<section class="" id="carousel">
    <div class="carousel slide" data-ride="carousel" id="slider">
      <div class="carousel-indicators">
        <li class="active" data-target="#slider" data-slide-to="0"></li>
        <li class="" data-target="#slider" data-slide-to="1"></li>
        <li class="" data-target="#slider" data-slide-to="2"></li>

      </div>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="frontend/img/slide1.jpg" alt="" class="img-fluid">

          <div class="carousel-caption mb-5 pb-5">
            <div class="">
			      <h3 class="display-4 text-light">Heading One</h3>
			      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Veritatis at esse, voluptatibus tenetur ab obcaecati. Voluptatem expedita fugit minima sapiente!
            </p>
            <button type="button" name="button" class="btn btn-danger">Read More</button>
           </div>
		    	</div>

        </div>

        <div class="carousel-item">
          <img src="frontend/img/slide2.jpg" alt="" class="img-fluid">
          <div class="carousel-caption mb-5 pb-5">
            <div class="text-right">
			      <h3 class="display-4 text-light">Heading Two</h3>
			      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Veritatis at esse, voluptatibus tenetur ab obcaecati. Voluptatem expedita fugit minima sapiente!
            </p>
            <button type="button" name="button" class="btn btn-danger">Read More</button>
           </div>
		    	</div>
        </div>

        <div class="carousel-item">
          <img src="frontend/img/slide3.jpg" alt="" class="img-fluid" style="width:100%">
          <div class="carousel-caption mb-5 pb-5">
            <div class="text-left">
			      <h3 class="display-4 text-light">Heading Three</h3>
			      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Veritatis at esse, voluptatibus tenetur ab obcaecati. Voluptatem expedita fugit minima sapiente!
            </p>
            <button type="button" name="button" class="btn btn-danger">Read More</button>
           </div>
		    	</div>
        </div>
      </div>
      <a href="#slider" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
		<a href="#slider" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
    </div>
</section>
<section class="text-center mt-5" id="Turning">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-12">
        <i class="fa fa-gears"></i>
        <h3 class="">Turning Gears</h3>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, maxime vero adipisci unde harum,
            Consequatur perspiciatis ipsum nobis voluptatum eligendi nemo!</p>
      </div>

      <div class="col-lg-4 col-12">
        <i class="fa fa-cloud"></i>
        <h3 class="">Turning Gears</h3>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, maxime vero adipisci unde harum,
            Consequatur perspiciatis ipsum nobis voluptatum eligendi nemo!</p>
      </div>

      <div class="col-lg-4 col-12">
        <i class="fa fa-cart-plus"></i>
        <h3 class="">Turning Gears</h3>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, maxime vero adipisci unde harum,
            Consequatur perspiciatis ipsum nobis voluptatum eligendi nemo!</p>
      </div>
    </div>
  </div>
</section>
<section class="text-center text-light pt-5" id="getstarter">
  <div class="dark-overlay">
    <div class="container">
      <div class="row">
        <div class="col mt-5 pt-4">
          <div class="">
          <h3 class="text-light">Are You Ready To Get Started?</h3>
          <p class="lead">orem ipsum dolor sit amet, consectetur adipisicing elit. Rem quaerat voluptatem laboriosam
            vero recusandae repellendus?
            Impedit iure est sit voluptatum blanditiis cum sequi laudantium quod dicta, a quaerat vel, obcaecati!
          </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="" id="laptop">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 align-self-center">

          <h3 class="">Lorem Ipsum Dolor Sit</h3>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Eaque dignissimos recusandae nobis reiciendis voluptatem quae iusto,
             fugiat itaque iste explicabo.</p>
             <button type="button" name="button" class="btn btn-outline-dark">Read More</button>

      </div>

      <div class="col-lg-6 col-md-6 col-12 mt-sm-3 mt-md-0 mt-lg-0" id="responsive">

          <img src="frontend/img/laptop.jpg" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<section  id="home-video" class="text-center text-light py-5">
  <div class="dark-overlay">
    <div class="container">
      <div class="row">
        <div class="col  mt-5 pt-5">
          <div class="" uk-lightbox>
            <a href="https://youtu.be/GEKAq7igoCM" class="text-danger">
            <i class="fa fa-play"></i>
            </a>
          </div>
          <h2 class="mt-2 text-light">Bootstrap 4 Crash video</h2>
        </div>
      </div>
    </div>
  </div>

</section>

<section class="py-5" uk-lightbox id="gallery">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col-12">
        <h2 class="">Photo Gallery</h2>
        <p class="lead">Check out our photos</p>
      </div>
    </div>
      <div class="row mb-3">
      <div class=" col-12 col-md-4 col-lg-4">
        <div class="">
        <a href="frontend/img/desert (1).jpg" class="">
        <img src="frontend/img/desert (1).jpg" alt="" class="img-fluid">
        </a>
        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-4">
        <div class="">
        <a href="frontend/img/desert (2).jpg" class="">
        <img src="frontend/img/desert (2).jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>


      <div class="col-12 col-md-4 col-lg-4">
        <div class="">
        <a href="frontend/img/desert (3).jpg" class="">
        <img src="frontend/img/desert (3).jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>
  </div>

    <div class="row mb-3">
    <div class="col-12 col-md-4 col-lg-4">
      <div class="">
      <a href="frontend/img/river (1).jpg" class="">
      <img src="frontend/img/river (1).jpg" alt="" class="img-fluid">
      </a>
      </div>
    </div>

    <div class=" col-12 col-md-4 col-lg-4">
      <div class="">
      <a href="frontend/img/river (2).jpg" class="">
      <img src="frontend/img/river (2).jpg" alt="" class="img-fluid">
      </a>
      </div>
    </div>

    <div class="col-12 col-md-4 col-lg-4">
      <div class="">
      <a href="frontend/img/river (3).jpg" class="">
      <img src="frontend/img/river (3).jpg" alt="" class="img-fluid">
      </a>
      </div>
    </div>
  </div>


  <div class="row mb-3">
  <div class="col-12 col-md-4 col-lg-4">
    <div class="">
    <a href="frontend/img/river (4).jpg" class="">
    <img src="frontend/img/river (4).jpg" alt="" class="img-fluid">
    </a>
  </div>
  </div>

  <div class="col-12 col-md-4 col-lg-4">
    <div class="">
    <a href="frontend/img/desert (2).jpg" class="">
    <img src="frontend/img/desert (2).jpg" alt="" class="img-fluid">
    </a>
    </div>
  </div>

  <div class="col-12 col-md-4 col-lg-4">
    <div class="">
    <a href="frontend/img/desert (3).jpg" class="">
    <img src="frontend/img/desert (3).jpg" alt="" class="img-fluid">
    </a>
    </div>
  </div>
</div>
  </div>

</section>
<section class="text-center bg-dark py-5 text-light mt-0" id="footerDiv">
<div class="container">
  <div class="row">
    <div class="col-12">
      <footer>
        <h2 class="text-light">Signup For Our Newsletter</h2>
        <p class="lead">orem ipsum dolor sit amet, consectetur adipisicing elit.
          Veritatis magnam similique esse assumenda quasi repellendus illum perferendis quos aliquid possimus.</p>
      </footer>

    </div>
  </div>
     <div class="">
       <form action="" class="">
         <div class="row justify-content-center px-3">
         <input type="text" name="" value="" placeholder="Enter Name" class="form-control col-md-2 col-lg-2 mr-1">

         <input type="text" name="" value="" placeholder="Enter Name" class="form-control col-md-2 col-lg-2 mr-1">

         <input type="button" name="" value="Subscribe" placeholder="Enter Name" class="form-control col-md-2 col-lg-2  mr-1 btn btn-info">
         </div>


       </form>
     </div>

</div>
</section>
<div class="row">
  <div class="col-12">
    <footer class="text-center  py-3" style="background:#000000">
          <p class="text-light">Copyright 2020 Â©Badhon</p>
    </footer>
  </div>
</div>

<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/uikit.min.js') }}"></script>
<script src="{{ asset('frontend/js/uikit-icons.min.js') }}"></script>

</body>
</html>
