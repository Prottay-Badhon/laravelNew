@extends('test');
@section('content')
<div class="text-center">
  <h3 class="">This is BLOG Page</h3>
</div>
@endsection


@section('title')
 Our Blog
@endsection

@section('slider')
Our Blog
@endsection

@section('blogContent')
<section class="my-5 py-5 bg-light">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <a href="{{ route('addCategory') }}" class="btn btn-danger">Add Category</a>
          <a href="{{ route('allCategory') }}" class="btn btn-info">All Category</a>

          <a href="{{ route('writePost') }}" class="btn btn-success">Write Post</a>

          <a href="{{ route('allpost') }}" class="btn btn-warning text-light">All Post</a>

        </div>
      </div>

    </div>
</section>
@endsection
