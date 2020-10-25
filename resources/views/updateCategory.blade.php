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

  <div class="row mt-5 p-5">
  <div class="col-12">

    <form action="{{ url('/updateCategoryCore'.$edit->id) }}" method="post">
      @csrf
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Catagory Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" value="{{$edit->name}}" placeholder="Enter Catagory Name" name="name">
        </div>
      </div>


      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Slug Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" value="{{$edit->slug}}" placeholder="Enter Slug Name" name="slug">
        </div>
      </div>
      <hr>
      
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      </div>
      @endif

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Update</button>

        </div>
      </div>
    </form>
</div>
</div>

<script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@9') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/uikit.min.js') }}"></script>
<script src="{{ asset('js/uikit-icons.min.js') }}"></script>
</body>
</html>
