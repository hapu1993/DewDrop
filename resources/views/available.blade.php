<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{url('css/homepage/linearicons.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/main.css')}}">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <title></title>
    <style media="screen">
    a.list-group-item {
  height:auto;
  min-height:220px;
}
a.list-group-item.active small {
  color:#fff;
}
.stars {
  margin:20px auto 1px;
}
.price{
  font-family: 'Open Sans', sans-serif;
  color: #19b714;
}
.credit{
  font-family: 'Open Sans', sans-serif;
  color: #19b714;
  font-size: 10px;
}
.list-group-item-text{
  font-family: 'Source Sans Pro', sans-serif;
}
body{
  font-family: 'Source Sans Pro', sans-serif;

}
.dewdrop{
  color: #54ad2e;
}
.item-heading {
    color: #577adb;
}
.point{
color: #54ad2e;;
  /* background-color: #74fc74; */
}
.cancel{
  color: #2fbc2f;
  font-weight: bold;
}
.cancel1{
  color: color: #2fbc2f;;
}

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  margin-left: -100px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em;
  width: 1150px;
}

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1); } }



.banner-slot{
  background-color: #4286f4;
  height: 600px;
  width: 160px;
  position: absolute;
  float: right;
  margin-left: 1189px;
  margin-top: 20px;

}
    </style>

  </head>
  <body>
    <header id="header">
    				<div class="header-top">
    					<div class="container">
    			  		<div class="row align-items-center">
    			  			<div class="col-lg-6 col-sm-6 col-6 header-top-left">
    			  				<ul>
    			  					<li><a href="#">Visit Us</a></li>
    			  					<li><a href="#">Book Now</a></li>
    			  				</ul>
    			  			</div>
    			  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
    							<div class="header-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
    							</div>
    			  			</div>
    			  		</div>
    					</div>
    				</div>
    				<div class="container main-menu">
    					<div class="row align-items-center justify-content-between d-flex">
    				      <div id="logo">
    				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
    				      </div>
    				      <nav id="nav-menu-container">
    				        <ul class="nav-menu">
    				          <li><a href="index.html">Home</a></li>
    				          <li><a href="about.html">About</a></li>
    				          <li><a href="packages.html">Packages</a></li>
    				          <li><a href="hotels.html">Hotels</a></li>
    				          <li><a href="insurance.html">Insurence</a></li>
    				          <li class="menu-has-children"><a href="">Blog</a>
    				            <ul>
    				              <li><a href="blog-home.html">Blog Home</a></li>
    				              <li><a href="blog-single.html">Blog Single</a></li>
    				            </ul>
    				          </li>
    				          <li class="menu-has-children"><a href="">Pages</a>
    				            <ul>
    				            	  <li><a href="elements.html">Elements</a></li>
    						          <li class="menu-has-children"><a href="">Level 2 </a>
    						            <ul>
    						              <li><a href="#">Item One</a></li>
    						              <li><a href="#">Item Two</a></li>
    						            </ul>
    						          </li>
    				            </ul>
    				          </li>
    				          <li><a href="contact.html">Contact</a></li>
    				        </ul>
    				      </nav><!-- #nav-menu-container -->
    					</div>
    				</div>
    			</header><!-- #header -->
    <!------ Include the above in your HEAD tag ---------->
    <!-- start banner Area -->
    			<section class="about-banner relative">
    				<div class="overlay overlay-bg"></div>
    				<div class="container">
    					<div class="row d-flex align-items-center justify-content-center">
    						<div class="about-content col-lg-12">
    							<h1 class="text-white">
    								Availability
    							</h1>
    							<p class="text-white link-nav"><a href="index.html">Home </a> <i class="fas fa-arrow-right"></i></span>  <a href="about.html"> Available Rooms</a></p>
    						</div>
    					</div>
    				</div>
    			</section>
    			<!-- End banner Area -->
<div class="banner-slot">
<iframe src="{{url('banners/travelLKbanner1/index.html')}}" width="160" height="640"></iframe>
</div>
          <?php
            $sum=0;

           ?>

           <?php
           $availables5=DB::table('reservations')
                   ->whereNotBetween('check_in', [$checkin_date, $checkout_date])
                  ->WhereNotBetween('check_out', [$checkin_date, $checkout_date])
                  ->join('rooms','rooms.room_id','=','reservations.res_room_id')
                  ->join('roomtypes','roomtypes.type_id','=','rooms.room_type_id')

                 ->count();

                 $availables6=DB::table('rooms')
                        ->where('isFull', '0')
                        ->join('roomtypes','rooms.room_type_id','=','roomtypes.type_id')

                        ->count();
                        $total_availables_check=$availables5+$availables6;
                        // echo $total_availables_check;
                        if(!($total_availables_check=="0")){


                 ?>

          @foreach($room_types as $room_type)

          <?php
          // echo $room_type['type_adult'];

          $recommended_rooms=ceil($total_guest/($room_type['type_adult']+$room_type['type_child']));
          $sum=$sum+$recommended_rooms;
           // echo $recommended_rooms."<br>";
           $availables1=DB::table('reservations')
                   ->whereNotBetween('check_in', [$checkin_date, $checkout_date])
                  ->WhereNotBetween('check_out', [$checkin_date, $checkout_date])
                  ->join('rooms','rooms.room_id','=','reservations.res_room_id')
                  ->join('roomtypes','roomtypes.type_id','=','rooms.room_type_id')
                  ->where('room_type_id',$room_type['type_id'])
                 ->count();
                 $availables3=DB::table('reservations')
                         ->whereNotBetween('check_in', [$checkin_date, $checkout_date])
                        ->WhereNotBetween('check_out', [$checkin_date, $checkout_date])
                        ->join('rooms','rooms.room_id','=','reservations.res_room_id')
                        ->join('roomtypes','roomtypes.type_id','=','rooms.room_type_id')
                        ->where('room_type_id',$room_type['type_id'])
                       ->get();

                     $availables2=DB::table('rooms')
                            ->where('isFull', '0')
                            ->join('roomtypes','rooms.room_type_id','=','roomtypes.type_id')
                            ->where('room_type_id',$room_type['type_id'])
                            ->count();
                            $availables4=DB::table('rooms')
                                   ->where('isFull', '0')
                                   ->join('roomtypes','rooms.room_type_id','=','roomtypes.type_id')
                                   ->where('room_type_id',$room_type['type_id'])
                                   ->get();
                            $total_availables=$availables1+$availables2
          ?>

          @if($recommended_rooms<=$total_availables)
          <div class="container">
    		<div class="card">
    			<div class="container-fliud">
    				<div class="wrapper row">
    					<div class="preview col-md-6">

    						<div class="preview-pic tab-content">
    						  <div class="tab-pane active" id="pic-1"><img src="{{Storage::url($room_type->type_img1)}}" /></div>
    						  <div class="tab-pane" id="pic-2"><img src="{{Storage::url($room_type->type_img2)}}" height="" /></div>
    						  <div class="tab-pane" id="pic-3"><img src="{{Storage::url($room_type->type_img3)}}" /></div>
    						  <div class="tab-pane" id="pic-4"><img src="{{Storage::url($room_type->type_img4)}}" /></div>
    						  <div class="tab-pane" id="pic-5"><img src="{{Storage::url($room_type->type_img5)}}" /></div>
    						</div>
    						<ul class="preview-thumbnail nav nav-tabs">
    						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{Storage::url($room_type->type_img1)}}" /></a></li>
    						  <li><a data-target="#pic-2" data-toggle="tab"><img src="{{Storage::url($room_type->type_img2)}}" /></a></li>
    						  <li><a data-target="#pic-3" data-toggle="tab"><img src="{{Storage::url($room_type->type_img3)}}" /></a></li>
    						  <li><a data-target="#pic-4" data-toggle="tab"><img src="{{Storage::url($room_type->type_img4)}}" /></a></li>
    						  <li><a data-target="#pic-5" data-toggle="tab"><img src="{{Storage::url($room_type->type_img5)}}" /></a></li>
    						</ul>

    					</div>
    					<div class="details col-md-6">
    						<h3 class="product-title">{{$room_type->type_name}}</h3>
    						<div class="rating">
    							<div class="stars">
    								<span class="fa fa-star checked"></span>
    								<span class="fa fa-star checked"></span>
    								<span class="fa fa-star checked"></span>
    								<span class="fa fa-star"></span>
    								<span class="fa fa-star"></span>
    							</div>
    							<span class="review-no">41 reviews</span>
    						</div>
    						<p class="product-description">{{$room_type->type_description}}</p>
                <p class="product-description"><i class="fas fa-bed"></i>  Beds : {{$room_type['type_beds']}} beds for each room</p>
                <p class="cancel">FREE Cancelation</p>
                <p class="cancel1">Risk Free: You can cancel later, so lock in this great price today!</p>
                <p class="cancel"><i class="fas fa-plane-arrival"></i> Airport shuttle
                <i class="fas fa-parking"></i> Free parking
                <i class="fas fa-street-view"></i> Room service
                <i class="fas fa-wifi"></i> Free WiFi
                <i class="fas fa-male"></i><i class="fas fa-female"></i> Family rooms</p>
                <div class="alert alert-warning" role="alert">
                      {{$recommended_rooms}} Rooms Recommended for <i class="fas fa-user"></i> x {{$total_guest}} Guests
                  </div>
    						<h4 class="price"><b>LKR {{$room_type->type_price}} </b><span>for One Night for One Room</span></h4>
    						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>


    						<div class="action">
    							<button class="add-to-cart btn btn-default" type="button">Book Now</button>
    							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
@else

<div class="container">
<div class="card">
  <div class="alert alert-danger" role="alert">
    <i class="far fa-clock"></i>
  No Available Rooms in {{$room_type->type_name}} Type.
  <h4>You just missed it! Our last {{$room_type->type_name}} room sold out a few days ago.Check other Type Rooms </h4>

  Your dates are popular – we've run out of rooms at this property! Check out more below.

  </div>
</div>
</div>
@endif
@endforeach
<?php }
else {
?>
<div class="alert alert-danger" role="alert">
Not Available Any Type of Rooms
</div>
<?php
} ?>

  </body>

<!-- end ticker -->

<script type="text/javascript">
function blinker() {
  $('#blink_me').fadeOut(500);
  $('#blink_me').fadeIn(500);
}

setInterval(blinker, 1000);
</script>
  <script src="{{url('js/homepage/vendor/jquery-2.2.4.min.js')}}"></script>
  <script src="{{url('js/homepage/popper.min.js')}}"></script>
  <script src="{{url('js/homepage/vendor/bootstrap.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="{{url('js/homepage/jquery-ui.js')}}"></script>
    <script src="{{url('js/homepage/easing.min.js')}}"></script>
  <script src="{{url('js/homepage/hoverIntent.js')}}"></script>
  <script src="{{url('js/homepage/superfish.min.js')}}"></script>
  <script src="{{url('js/homepage/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{url('js/homepage/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{url('js/homepage/jquery.nice-select.min.js')}}"></script>
  <script src="{{url('js/homepage/owl.carousel.min.js')}}"></script>
  <script src="{{url('js/homepage/mail-script.js')}}"></script>
  <script src="{{url('js/homepage/main.js')}}"></script>
</html>
