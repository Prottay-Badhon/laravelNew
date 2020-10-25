<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Badhon</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/uikit.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">

</head>
<body>

    <section class="my-5 py-5 bg-light">
        <div class="container">
        <div class="row">
          <div class="col-lg-12 ">
            <ol class="">
              <li class="">SL:{{ $category->id }}</li>
              <li class="">Name:{{ $category->name }}</li>
              <li class="">Slug:{{ $category->slug }}</li>
              <li class="">Created At:{{ $category->created_at }}</li>

            </ol>
        </div>
        </div>
        </div>
    </section>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>

</body>
</html>
