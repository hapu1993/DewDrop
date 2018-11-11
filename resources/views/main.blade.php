<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Travel</title>
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" type="text/css" media="all">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{url('css/homepage/linearicons.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/homepage/main.css')}}">
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
              <!-- <a href="#"><i class="fa fa-facebook"></i></a> -->
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
              <a href="index.html"><img src="{{url('images/homepage/logo.png')}}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu ">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('travelguide')}}">Travel Guide</a></li>
                <li><a href="packages.html">Products</a></li>
                <li><a href="hotels.html">Facilities & Services</a></li>
                <li><a href="insurance.html">Location</a></li>
                <li class="menu-has-children"><a href="">Contact Us</a>
                  <ul>
                    <li><a href="blog-home.html">Blog Home</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                  </ul>
                </li>
                <li class="menu-has-children"><a href="">Pages</i></a>
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

    <!-- start banner Area -->
    <section class="banner-area relative">
      <div class="overlay overlay-bg"></div>
      <div class="container">
<div class="dewdrop-ad"><iframe class="dewdrop" src="{{asset('dewdrop2/index.html')}}" width="970" height="90"></iframe></div>
        <div class="row fullscreen align-items-center justify-content-between">

          <div class="col-lg-6 col-md-6 banner-left">
            <h6 class="text-white">Ayubowan Sri Lanka</h6>
            <h1 class="text-white">Dew Drop</h1>
            <p class="text-white">
              Dew Drop Resort is nestled in the middle of the charismatic village of Ella and is the only hotel located whose view is focussed through the legendary Ella Gap that’s located between Little Adam’s Peak and Ella Rock.
            </p>
            <a href="#" class="primary-btn text-uppercase">Get Started</a>
          </div>
          <div class="col-lg-4 col-md-6 banner-right">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#all" role="tab" aria-controls="flight" aria-selected="true">All</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" id="flight-tab" data-toggle="tab" href="#budget_twin" role="tab" aria-controls="flight" aria-selected="true">Budget</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#budget_twin" role="tab" aria-controls="hotel" aria-selected="false">Budget Twin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="holiday-tab" data-toggle="tab" href="#bangalo" role="tab" aria-controls="holiday" aria-selected="false">Bangalo</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="flight-tab">
              <form class="form-wrap" action="{{route('availability')}}" method="post">
                {{ csrf_field() }}
                <input type=hidden name="room_type" value="">
                <!-- <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">
                <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '"> -->
                <input type="text" id="from" class="form-control" name="from" autocomplete="off" placeholder="Check-in" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Check-In '" required/>
                <input type="text" class="form-control" id="to" name="to" placeholder="Check-out" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Check-In '" required/>
                <!-- <input type="text" class="form-control date-picker" name="check_in" placeholder="Check-in  " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Check-In '" required>
                <input type="text" class="form-control date-picker" name="check_out" placeholder="Check-out" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Check-Out'" required> -->
                <label>Adults</label><select class="form-control" name="adults" aria-label="Number of children" id="group_children" data-group-children-count="" data-component="search/group/children-ages-tooltip search/group/add-children-tooltip" data-add-children-tooltip="" value="0">

                    <option value="1" selected="selected">
                      1
                    </option>
                    <option value="2">
                      2
                    </option>
                    <option value="3">
                      3
                    </option>
                    <option value="4">
                      4
                    </option>
                    <option value="5">
                      5
                    </option>
                    <option value="6">
                      6
                    </option>
                    <option value="7">
                      7
                    </option>
                    <option value="8">
                      8
                    </option>
                    <option value="9">
                      9
                    </option>
                    <option value="10">
10
</option>
</select>


                <label>Child</label><select class="form-control" name="child" aria-label="Number of children" id="group_children" data-group-children-count="" data-component="search/group/children-ages-tooltip search/group/add-children-tooltip" data-add-children-tooltip="" value="0">
                    <option value="0" selected="selected">
                      0
                    </option>
                    <option value="1">
                      1
                    </option>
                    <option value="2">
                      2
                    </option>
                    <option value="3">
                      3
                    </option>
                    <option value="4">
                      4
                    </option>
                    <option value="5">
                      5
                    </option>
                    <option value="6">
                      6
                    </option>
                    <option value="7">
                      7
                    </option>
                    <option value="8">
                      8
                    </option>
                    <option value="9">
                      9
                    </option>
                    <option value="10">
10
</option>
</select>
                <!-- <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '" value="1">
                <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '" value="0"> -->
                <!-- <a href="#" class="primary-btn text-uppercase">Availability</a> -->
                <button type="submit" name="search" class="primary-btn text-uppercase">Availability</button>
              </form>
              </div>

              <div class="tab-pane fade" id="budget_twin" role="tabpanel" aria-labelledby="holiday-tab">
              <form class="form-wrap" action="{{route('availability')}}" method="post">
                {{ csrf_field() }}
                <input type=hidden name="room_type" value="22">
                <!-- <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">
                <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '"> -->
                <input type="text" class="form-control date-picker" id="check_in" name="from" placeholder="Check-in  " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Check-In '" autocomplete="off" required>
                <input type="text" class="form-control date-picker" id="check_out" name="to" placeholder="Check-out" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Check-Out'" autocomplete="off" required>

                <!-- <input type="text" class="form-control" id="from" placeholder="Check-in  " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Check-In '" required>
                <input type="text" class="form-control" id="to" placeholder="Check-out" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Check-Out'" required> -->

                <label>Adults</label><select class="form-control" name="adults" aria-label="Number of children" id="group_children" data-group-children-count="" data-component="search/group/children-ages-tooltip search/group/add-children-tooltip" data-add-children-tooltip="" value="0" >

                    <option value="1" selected="selected">
                      1
                    </option>
                    <option value="2">
                      2
                    </option>
                    <option value="3">
                      3
                    </option>
                    <option value="4">
                      4
                    </option>
                    <option value="5">
                      5
                    </option>
                    <option value="6">
                      6
                    </option>
                    <option value="7">
                      7
                    </option>
                    <option value="8">
                      8
                    </option>
                    <option value="9">
                      9
                    </option>
                    <option value="10">
                      10
                    </option>
                  </select>


                <label>Child</label><select class="form-control" name="child" aria-label="Number of children" id="group_children" data-group-children-count="" data-component="search/group/children-ages-tooltip search/group/add-children-tooltip" data-add-children-tooltip="" value="0">
                    <option value="0" selected="selected">
                      0
                    </option>
                    <option value="1">
                      1
                    </option>
                    <option value="2">
                      2
                    </option>
                    <option value="3">
                      3
                    </option>
                    <option value="4">
                      4
                    </option>
                    <option value="5">
                      5
                    </option>
                    <option value="6">
                      6
                    </option>
                    <option value="7">
                      7
                    </option>
                    <option value="8">
                      8
                    </option>
                    <option value="9">
                      9
                    </option>
                    <option value="10">
10
</option>
</select>
                <!-- <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '" value="1">
                <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '" value="0"> -->
                <!-- <a href="#" class="primary-btn text-uppercase">Availability</a> -->
                <button type="submit" name="search" class="primary-btn text-uppercase">Availability</button>

              </form>
              </div>

              <div class="tab-pane fade" id="bangalo" role="tabpanel" aria-labelledby="holiday-tab">
              <form class="form-wrap" action="{{route('availability')}}" method="post">
                {{ csrf_field() }}
                <input type=hidden name="room_type" value="23">
                <!-- <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">
                <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '"> -->
                <input type="text" class="form-control date-picker" id="check_in" name="from" placeholder="Check-in  " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Check-In '" autocomplete="off" required>
                <input type="text" class="form-control date-picker" id="check_out" name="to" placeholder="Check-out" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Check-Out'" autocomplete="off" required>
<!--
                <input type="text" id="from" class="form-control" name="from" autocomplete="off" placeholder="Check-in" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Check-In '" required/>

                 <input type="text" class="form-control" id="to" name="to" placeholder="Check-out" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Check-In '" required/> -->
                <label>Adults</label><select class="form-control" name="adults" aria-label="Number of children" id="group_children" data-group-children-count="" data-component="search/group/children-ages-tooltip search/group/add-children-tooltip" data-add-children-tooltip="" value="0">

                    <option value="1" selected="selected">
                      1
                    </option>
                    <option value="2">
                      2
                    </option>
                    <option value="3">
                      3
                    </option>
                    <option value="4">
                      4
                    </option>
                    <option value="5">
                      5
                    </option>
                    <option value="6">
                      6
                    </option>
                    <option value="7">
                      7
                    </option>
                    <option value="8">
                      8
                    </option>
                    <option value="9">
                      9
                    </option>
                    <option value="10">
10
</option>
</select>


                <label>Child</label><select class="form-control" name="child" aria-label="Number of children" id="group_children" data-group-children-count="" data-component="search/group/children-ages-tooltip search/group/add-children-tooltip" data-add-children-tooltip="" value="0">
                    <option value="0" selected="selected">
                      0
                    </option>
                    <option value="1">
                      1
                    </option>
                    <option value="2">
                      2
                    </option>
                    <option value="3">
                      3
                    </option>
                    <option value="4">
                      4
                    </option>
                    <option value="5">
                      5
                    </option>
                    <option value="6">
                      6
                    </option>
                    <option value="7">
                      7
                    </option>
                    <option value="8">
                      8
                    </option>
                    <option value="9">
                      9
                    </option>
                    <option value="10">
10
</option>
</select>
                <!-- <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '" value="1">
                <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '" value="0"> -->
                <!-- <a href="#" class="primary-btn text-uppercase">Availability</a> -->
                <button type="submit" name="search" class="primary-btn text-uppercase">Availability</button>

              </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start popular-destination Area -->
    <section class="popular-destination-area section-gap">
      <div class="container">
              <div class="row d-flex justify-content-center">
                  <div class="menu-content pb-70 col-lg-8">
                      <div class="title text-center">
                          <h1 class="mb-10">Popular Destinations Around Ella</h1>
                          <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
                      </div>
                  </div>
              </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="single-destination relative">
              <div class="thumb relative">
                <div class="overlay overlay-bg"></div>
                <img class="img-fluid" src="{{url('images/homepage/des1.jpg')}}" alt="">
              </div>
              <div class="desc">
                <a href="#" class="price-btn">Travel with us</a>
                <h4>Nine Arch Bridge</h4>
                <p>2.3 km From Dew Drop Resort</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-destination relative">
              <div class="thumb relative">
                <div class="overlay overlay-bg"></div>
                <img class="img-fluid" src="{{url('images/homepage/des4.jpg')}}" alt="">
              </div>
              <div class="desc">
                <a href="#" class="price-btn">Travel with us</a>
                <h4>Little Adam's Peak</h4>
                <p>2 km from Dew Drop Resort</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-destination relative">
              <div class="thumb relative">
                <div class="overlay overlay-bg"></div>
                <img class="img-fluid" src="{{url('images/homepage/dev6.jpg')}}" alt="">
              </div>
              <div class="desc">
                <a href="#" class="price-btn">Travel with us</a>
                <h4>Ella Rock</h4>
                <p>Sri Lanka</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End popular-destination Area -->


    <!-- Start price Area -->
    <section class="price-area section-gap">
      <div class="container">
              <div class="row d-flex justify-content-center">
                  <div class="menu-content pb-70 col-lg-8">
                      <div class="title text-center">
                          <h1 class="mb-10">Dew Drop Travel Guide</h1>
                          <p>Well educated, intellectual people, especially scientists at all times demonstrate considerably.</p>
                      </div>
                  </div>
              </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="single-price">
              <h4>Cheap Packages</h4>
              <ul class="price-list">
                <li class="d-flex justify-content-between align-items-center">
                  <span>New York</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Maldives</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Sri Lanka</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Nepal</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Thiland</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Singapore</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-price">
              <h4>Luxury Packages</h4>
              <ul class="price-list">
                <li class="d-flex justify-content-between align-items-center">
                  <span>New York</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Maldives</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Sri Lanka</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Nepal</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Thiland</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Singapore</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-price">
              <h4>Camping Packages</h4>
              <ul class="price-list">
                <li class="d-flex justify-content-between align-items-center">
                  <span>New York</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Maldives</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Sri Lanka</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Nepal</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Thiland</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Singapore</span>
                  <a href="#" class="price-btn">$1500</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End price Area -->


    <!-- Start other-issue Area -->
    <section class="other-issue-area section-gap">
      <div class="container">
              <div class="row d-flex justify-content-center">
                  <div class="menu-content pb-70 col-lg-9">
                      <div class="title text-center">
                          <h1 class="mb-10">Dew Drop Services</h1>
                          <p>Relierble and Best Service</p>
                      </div>
                  </div>
              </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="single-other-issue">
              <div class="thumb">
                <img class="img-fluid" src="{{url('images/homepage/ser2.jpg')}}" alt="">
              </div>
              <a href="#">
                <h4>Online Booking</h4>
              </a>
              <p>
                The preservation of human life is the ultimate value, a pillar of ethics and the foundation.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-other-issue">
              <div class="thumb">
                <img class="img-fluid" src="{{url('images/homepage/ser1.jpg')}}" alt="">
              </div>
              <a href="#">
                <h4>Travel Guide</h4>
              </a>
              <p>
                I was always somebody who felt quite sorry for myself, what I had not got compared.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-other-issue">
              <div class="thumb">
                <img class="img-fluid" src="{{url('images/homepage/ser3.jpg')}}" alt="">
              </div>
              <a href="#">
                <h4>Buy Ayuruwedhic Products</h4>
              </a>
              <p>
                The following article covers a topic that has recently moved to center stage–at least it seems.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-other-issue">
              <div class="thumb">
                <img class="img-fluid" src="{{url('images/homepage/o4.jpg')}}" alt="">
              </div>
              <a href="#">
                <h4>Dew Drop Restuarest</h4>
              </a>
              <p>
                There are many kinds of narratives and organizing principles. Science is driven by evidence.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End other-issue Area -->


    <!-- Start testimonial Area -->
      <section class="testimonial-area section-gap">
          <div class="container">
              <div class="row d-flex justify-content-center">
                  <div class="menu-content pb-70 col-lg-8">
                      <div class="title text-center">
                          <h1 class="mb-10">Testimonial from our Clients</h1>
                          <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="active-testimonial">
                      <div class="single-testimonial item d-flex flex-row">
                          <div class="thumb">
                              <img class="img-fluid" src="{{asset('images/homepage/elements/user1.png')}}" alt="">
                          </div>
                          <div class="desc">
                              <p>
                                  Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                              </p>
                              <h4>Harriet Maxwell</h4>
                              <div class="star">
                  <span class="fab fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                          </div>
                      </div>
                      <div class="single-testimonial item d-flex flex-row">
                          <div class="thumb">
                              <img class="img-fluid" src="{{asset('images/homepage/elements/user2.png')}}" alt="">
                          </div>
                          <div class="desc">
                              <p>
                                  A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                              </p>
                              <h4>Carolyn Craig</h4>
                              <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                          </div>
                      </div>
                      <div class="single-testimonial item d-flex flex-row">
                          <div class="thumb">
                              <img class="img-fluid" src="{{asset('images/homepage/elements/user1.png')}}" alt="">
                          </div>
                          <div class="desc">
                              <p>
                                  Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                              </p>
                              <h4>Harriet Maxwell</h4>
                              <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                          </div>
                      </div>
                      <div class="single-testimonial item d-flex flex-row">
                          <div class="thumb">
                              <img class="img-fluid" src="{{asset('images/homepage/elements/user2.png')}}" alt="">
                          </div>
                          <div class="desc">
                              <p>
                                  A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                              </p>
                              <h4>Carolyn Craig</h4>
                              <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                          </div>
                      </div>
                      <div class="single-testimonial item d-flex flex-row">
                          <div class="thumb">
                              <img class="img-fluid" src="{{asset('images/homepage/elements/user1.png')}}" alt="">
                          </div>
                          <div class="desc">
                              <p>
                                  Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                              </p>
                              <h4>Harriet Maxwell</h4>
                              <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                          </div>
                      </div>
                      <div class="single-testimonial item d-flex flex-row">
                          <div class="thumb">
                              <img class="img-fluid" src="{{asset('images/homepage/elements/user2.png')}}" alt="">
                          </div>
                          <div class="desc">
                              <p>
                                  A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                              </p>
                              <h4>Carolyn Craig</h4>
                              <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End testimonial Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-end">
          <div class="col-lg-6 col-md-12 home-about-left">
            <h1>
              Did not find your Package? <br>
              Feel free to ask us. <br>
              We‘ll make it for you
            </h1>
            <p>
              inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
            </p>
            <a href="#" class="primary-btn text-uppercase">request custom price</a>
          </div>
          <div class="col-lg-6 col-md-12 home-about-right no-padding">
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/1O_lLdW3HwQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
          </div>
        </div>
      </div>
    </section>
    <!-- End home-about Area -->


    <!-- Start blog Area -->
    <section class="recent-blog-area section-gap">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-60 col-lg-9">
            <div class="title text-center">
              <h1 class="mb-10">Latest from Dew Drop Resort</h1>
              <p>With the exception of Nietzsche, no other madman has contributed so much to human sanity as has.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="active-recent-blog-carusel">
            <div class="single-recent-blog-post item">
              <div class="thumb">
                <img class="img-fluid" src="{{url('images/homepage/newb1.jpg')}}" alt="">
              </div>
              <div class="details">
                <div class="tags">
                  <ul>
                    <li>
                      <a href="#">Travel</a>
                    </li>
                    <li>
                      <a href="#">Life Style</a>
                    </li>
                  </ul>
                </div>
                <a href="#"><h4 class="title">Three day trip to Anuradhapuraya</h4></a>
                <p>
                  Anuradhapura was the greatest monastic city of the ancient world and the heart of Sri Lankan civilisation for over a millennium
                  We hope to Guide
                  Dew Drop Travel Guide
                </p>
                <h6 class="date">Book now for get latest offers</h6>
              </div>
            </div>
            <div class="single-recent-blog-post item">
              <div class="thumb">
                <img class="img-fluid" src="{{url('images/homepage/newb2.jpg')}}" alt="">
              </div>
              <div class="details">
                <div class="tags">
                  <ul>
                    <li>
                      <a href="#">Travel</a>
                    </li>
                    <li>
                      <a href="#">Life Style</a>
                    </li>
                  </ul>
                </div>
                <a href="#"><h4 class="title">One day trip to Kandy</h4></a>
                <p>
                  Travel with Dew Drop
                </p>
                <h6 class="date">Best Offers with Dew Drop</h6>
              </div>
            </div>
            <div class="single-recent-blog-post item">
              <div class="thumb">
                <img class="img-fluid" src="{{url('images/homepage/newb3.jpg')}}" alt="">
              </div>
              <div class="details">
                <div class="tags">
                  <ul>
                    <li>
                      <a href="#">Travel</a>
                    </li>
                    <li>
                      <a href="#">Life Style</a>
                    </li>
                  </ul>
                </div>
                <a href="#"><h4 class="title">Buy Our Ayurwedhic Products</h4></a>
                <p>
                  Buy our Ayurvedhic Products. Dew Drop
                </p>
                <h6 class="date">31st January,2018</h6>
              </div>
            </div>
            <div class="single-recent-blog-post item">
              <div class="thumb">
                <img class="img-fluid" src="{{url('images/homepage/newb4.jpg')}}" alt="">
              </div>
              <div class="details">
                <div class="tags">
                  <ul>
                    <li>
                      <a href="#">Travel</a>
                    </li>
                    <li>
                      <a href="#">Life Style</a>
                    </li>
                  </ul>
                </div>
                <a href="#"><h4 class="title">Book online Dew Drop</h4></a>
                <p>
                  Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                </p>
                <h6 class="date">31st January,2018</h6>
              </div>
            </div>
            <div class="single-recent-blog-post item">
              <div class="thumb">
                <img class="img-fluid" src="{{url('images/homepage/newb2.jpg')}}" alt="">
              </div>
              <div class="details">
                <div class="tags">
                  <ul>
                    <li>
                      <a href="#">Travel</a>
                    </li>
                    <li>
                      <a href="#">Life Style</a>
                    </li>
                  </ul>
                </div>
                <a href="#"><h4 class="title">One day trip to Kandy with best offers</h4></a>
                <p>
                  Dew Drop resort Travel Guide.Book online now
                </p>
                <h6 class="date">Dew Drop Travel Guide</h6>
              </div>
            </div>
            <div class="single-recent-blog-post item">
              <div class="thumb">
                <img class="img-fluid" src="{{url('images/homepage/newb3.jpg')}}" alt="">
              </div>
              <div class="details">
                <div class="tags">
                  <ul>
                    <li>
                      <a href="#">Travel</a>
                    </li>
                    <li>
                      <a href="#">Life Style</a>
                    </li>
                  </ul>
                </div>
                <a href="#"><h4 class="title">Best Ayurvedhic and other products from Dew Drop Resort</h4></a>
                <p>
                  Buy Our Best Products.
                </p>
                <h6 class="date">Dew Drop Products</h6>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- End recent-blog Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <div class="container">

        <div class="row">
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>About Dew Drop</h6>
              <p>
                Mountain Heavens is nestled in the middle of the charismatic village of Ella and is the only hotel located whose view is focussed through the legendary Ella Gap that’s located between Little Adam’s Peak and Ella Rock.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Navigation Links</h6>
              <div class="row">
                <div class="col">
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Feature</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                  </ul>
                </div>
                <div class="col">
                  <ul>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Newsletter</h6>
              <p>
                For business professionals caught between high OEM price and mediocre print and graphic output.
              </p>
              <div id="mc_embed_signup">
                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                  <div class="input-group d-flex flex-row">
                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                    <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
                  </div>
                  <div class="mt-10 info"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">InstaFeed</h6>
              <ul class="instafeed d-flex flex-wrap">
                <li><img src="{{url('images/homepage/i1.jpg')}}" alt=""></li>
                <li><img src="{{url('images/homepage/i2.jpg')}}" alt=""></li>
                <li><img src="{{url('images/homepage/i3.jpg')}}" alt=""></li>
                <li><img src="{{url('images/homepage/i4.jpg')}}" alt=""></li>
                <li><img src="{{url('images/homepage/i5.jpg')}}" alt=""></li>
                <li><img src="{{url('images/homepage/i6.jpg')}}" alt=""></li>
                <li><img src="{{url('images/homepage/i7.jpg')}}" alt=""></li>
                <li><img src="{{url('images/homepage/i8.jpg')}}" alt=""></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row footer-bottom d-flex justify-content-between align-items-center">
          <p class="col-lg-8 col-sm-12 footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <a href="{{url('/')}}" target="_blank">Dew Drop</a>
</p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- End footer Area -->

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
  </body>
  <script type="text/javascript">
  var dateToday = new Date();
  var dates = $("#from, #to").datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      minDate: dateToday,
      onSelect: function(selectedDate) {
          var option = this.id == "from" ? "minDate" : "maxDate",
              instance = $(this).data("datepicker"),
              date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
          dates.not(this).datepicker("option", option, date);
      }
  });

  </script>
</html>
