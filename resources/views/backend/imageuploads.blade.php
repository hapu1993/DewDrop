@extends('layouts.app')
<div class="container">


@section('content')
@if(count($errors)>0)
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
<li>{{ $error }}</li>

    @endforeach
  </ul>

</div>

@endif

@if(\Session::has('success'))

<div class="alert alert-success">
  <p>{{\Session::get('success')}}</p>

</div>

@endif

<p>
<a href="{{route('formfileroomtypes')}}">Upload Files</a>


</p>
<div class="raw">

<div class="col-md-4">
  <div class="card">
    <img class="card-image-top" src="{{Storage::url($files->type_img1)}}" alt="">

  </div>

</div>

</div>





</div>
@endsection
