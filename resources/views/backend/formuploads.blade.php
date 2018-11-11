@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-6 col-md-offset-4">

  <div class="card">
    <h5 class="card-header">Image Uploads</h5>
<div class="card-body">
  <form role="form" action="{{route('uploadroomtypes')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
      <!-- image uploads -->
      <input type="file" name="type_img1">


    </div>

    <button type="submit" name="button" class="btn btn-primary">upload</button>
    <a href="{{route('viewroomtypes')}}">back</a>
  </form>

</div>
  </div>

</div>



</div>





@endsection
