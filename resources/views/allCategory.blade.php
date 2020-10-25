<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/uikit.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">

</head>
<body>

    <section class="my-5 py-5 bg-light text-center">
        <div class="container ">
        <div class="row">
          <div class="col-lg-12">
        <table class="table">
          <thead class="thead-dark">
          <tr class="">
            <th class="">SL</th>
            <th class="">Name</th>
            <th class="">Slug</th>
            <th class="">Created AT</th>
            <th class="">Action</th>
          </tr>
        </thead>

          <tbody class="tbody-light">
          @foreach($category as $row)
          <tr class="">

            <td class="">{{ $row->id }}</td>
            <td class="">{{ $row->name }}</td>
            <td class="">{{ $row->slug }}</td>
            <td class="">{{ $row->created_at }}</td>
            <td class="">
              <a href="{{ url('/editCategory'.$row->id)  }}" class="btn btn-info">Edit</a>
              <a href="{{ url('/allCategory/Delete'.$row->id)  }}" class="btn btn-danger">Delete</a>
              <a href="{{ url('/allCategory/Show'.$row->id) }}" class="btn btn-success">view</a>

            </td>
          </tr>
          @endforeach
        </tbody>

        </table>

        </div>
        </div>
        </div>

    </section>
    <script type="text/javascript">
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Your work has been saved',
      showConfirmButton: false,
      timer: 1500
    })
    </script>
    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
</body>
</html>
