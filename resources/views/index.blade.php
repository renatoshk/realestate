@extends('layouts.web.index')
@section('content')
    <!-- slider_area_start -->
        <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-10 offset-xl-1">
                <div class="slider_text text-center justify-content-center">
                    <h3>Find your best Property</h3>
                    <p>Esteem spirit temper too say adieus who direct esteem.</p>
                </div>
                <div class="property_form">
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form_wrap d-flex">
                                        <div class="single-field max_width ">
                                                <label for="#">Location</label>
                                                <select class="wide" >
                                                        <option data-display="NewYork">NewYork</option>
                                                        <option value="1">Bangladesh</option>
                                                        <option value="2">India</option>
                                                </select>
                                            </div>
                                        <div class="single-field max_width ">
                                                <label for="#">Property type</label>
                                                <select class="wide" >
                                                        <option data-display="Apartment">Apartment</option>
                                                        <option value="1">Apartment</option>
                                                        <option value="2">Apartment</option>
                                                </select>
                                            </div>
                                            <div class="single_field range_slider">
                                                    <label for="#">Price ($)</label>
                                                <div id="slider"></div>
                                            </div>
                                        <div class="single-field min_width ">
                                                <label for="#">Bed Room</label>
                                                <select class="wide" >
                                                        <option data-display="01">01</option>
                                                        <option value="1">02</option>
                                                        <option value="2">03</option>
                                                </select>
                                            </div>
                                        <div class="single-field min_width ">
                                        <label for="#">Bath Room</label>
                                        <select class="wide" >
                                                <option data-display="01">01</option>
                                                <option value="1">02</option>
                                                <option value="2">03</option>
                                        </select>
                                    </div>
                                    <div class="serach_icon">
                                        <a href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    <!-- slider_area_end -->

    <!-- popular_property  -->
    <div class="popular_property">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>Popular Properties</h3>
                    </div>
                </div>
            </div> 
            <div class="row">
            @if($data)
                @foreach($data as $prop)
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    {{$prop['status']}}
                            </div> 
                            <img src="/photos/{{$prop['image']}}" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="{{route('home', $prop['id'])}}">{{$prop['property_name']}}</a></h3>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>{{$prop['type']}}</span>
                                    </div>
                                    <span class="amount">From ${{$prop['price']}}</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>  
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span><a href="{{route('home', $prop['id'])}}">Click here for Details!</a></span>
                                        </div>
                                    </li>
                                </ul>
                         </div>
                    </div>
                </div>
                @endforeach
            @endif
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        <a href="#" class="boxed-btn3-line">More Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /popular_property  -->
    
    <!-- home_details  -->
    <div class="home_details">
        <div class="container">
            <div class="row">   
                <div class="col-xl-12">
                    <div class="home_details_active owl-carousel">
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                        <div class="modern_home_info">
                                                <div class="modern_home_info_inner">
                                                    <span class="for_sale">
                                                        For Sale
                                                    </span>
                                                    <div class="info_header">
                                                            <h3>Blue haven modern home</h3>
                                                            <div class="popular_pro d-flex">
                                                                <img src="img/svg_icon/location.svg" alt="">
                                                                <span>Popular Properties</span>
                                                            </div>
                                                    </div>
                                                    <div class="info_content">
                                                        <ul>
                                                            <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>  </li>
                                                            <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                            <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                                        </ul>
                                                        <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                                                        <div class="prise_view_details d-flex justify-content-between align-items-center">
                                                            <span>$4567</span>
                                                            <a class="boxed-btn3-line" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                        <div class="modern_home_info">
                                                <div class="modern_home_info_inner">
                                                    <span class="for_sale">
                                                        For Sale
                                                    </span>
                                                    <div class="info_header">
                                                            <h3>Blue haven modern home</h3>
                                                            <div class="popular_pro d-flex">
                                                                <img src="img/svg_icon/location.svg" alt="">
                                                                <span>Popular Properties</span>
                                                            </div>
                                                    </div>
                                                    <div class="info_content">
                                                        <ul>
                                                            <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>  </li>
                                                            <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                            <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                                        </ul>
                                                        <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                                                        <div class="prise_view_details d-flex justify-content-between align-items-center">
                                                            <span>$4567</span>
                                                            <a class="boxed-btn3-line" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                        <div class="modern_home_info">
                                                <div class="modern_home_info_inner">
                                                    <span class="for_sale">
                                                        For Sale
                                                    </span>
                                                    <div class="info_header">
                                                            <h3>Blue haven modern home</h3>
                                                            <div class="popular_pro d-flex">
                                                                <img src="img/svg_icon/location.svg" alt="">
                                                                <span>Popular Properties</span>
                                                            </div>
                                                    </div>
                                                    <div class="info_content">
                                                        <ul>
                                                            <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>  </li>
                                                            <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                            <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                                        </ul>
                                                        <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                                                        <div class="prise_view_details d-flex justify-content-between align-items-center">
                                                            <span>$4567</span>
                                                            <a class="boxed-btn3-line" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                        <div class="modern_home_info">
                                                <div class="modern_home_info_inner">
                                                    <span class="for_sale">
                                                        For Sale
                                                    </span>
                                                    <div class="info_header">
                                                            <h3>Blue haven modern home</h3>
                                                            <div class="popular_pro d-flex">
                                                                <img src="img/svg_icon/location.svg" alt="">
                                                                <span>Popular Properties</span>
                                                            </div>
                                                    </div>
                                                    <div class="info_content">
                                                        <ul>
                                                            <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>  </li>
                                                            <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                            <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                                        </ul>
                                                        <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                                                        <div class="prise_view_details d-flex justify-content-between align-items-center">
                                                            <span>$4567</span>
                                                            <a class="boxed-btn3-line" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6">
                                        <div class="modern_home_info">
                                                <div class="modern_home_info_inner">
                                                    <span class="for_sale">
                                                        For Sale
                                                    </span>
                                                    <div class="info_header">
                                                            <h3>Blue haven modern home</h3>
                                                            <div class="popular_pro d-flex">
                                                                <img src="img/svg_icon/location.svg" alt="">
                                                                <span>Popular Properties</span>
                                                            </div>
                                                    </div>
                                                    <div class="info_content">
                                                        <ul>
                                                            <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>  </li>
                                                            <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                            <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                                        </ul>
                                                        <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                                                        <div class="prise_view_details d-flex justify-content-between align-items-center">
                                                            <span>$4567</span>
                                                            <a class="boxed-btn3-line" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /home_details  -->

    <!-- accordion  -->
    <div class="accordion_area">
            <div class="container">
                <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                                <div class="faq_ask">
                                    <h3>Frequently ask</h3>
                                        <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    Adieus who direct esteem <span>It esteems luckily?</span>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                    Who direct esteem It esteems?
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    Duis consectetur feugiat auctor?
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="accordion_thumb">
                            <img src="img/banner/accordion.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- accordion  -->

    <!-- counter_area  -->
    <div class="counter_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span  class="counter" >200</span> <span>+</span> </h3>
                        <p>Properties for sale</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter" >300</span></h3>
                        <p>Properties for sale</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter" >15</span></h3>
                        <p>Properties for sale</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /counter_area  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="img/case/testmonial.png" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="img/case/testmonial.png" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="img/case/testmonial.png" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <!-- team_area  -->
    <div class="team_area">
            <div class="container">
                    <div class="row">
                            <div class="col-xl-12">
                                <div class="section_title mb-40 text-center">
                                    <h3>
                                            Our Agents
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single_team">
                                    <div class="team_thumb">
                                        <img src="img/team/1.png" alt="">
                                        <div class="social_link">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h3>Milani Mou</h3>
                                        <p>Business Agent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single_team">
                                    <div class="team_thumb">
                                        <img src="img/team/2.png" alt="">
                                        <div class="social_link">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h3>Halim Yoka</h3>
                                        <p>Business Agent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single_team">
                                    <div class="team_thumb">
                                        <img src="img/team/3.png" alt="">
                                        <div class="social_link">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h3>Dalim Karma</h3>
                                        <p>Business Agent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single_team">
                                    <div class="team_thumb">
                                        <img src="img/team/4.png" alt="">
                                        <div class="social_link">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h3>Micky</h3>
                                        <p>Business Agent</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    <!-- /team_area  -->

    <!-- contact_action_area  -->
    <div class="contact_action_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="action_heading">
                        <h3>Add your property for sale</h3>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="call_add_action">
                        <span>+10 637 367 4567</span>
                        <a href="#" class="boxed-btn3-line">Add Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->

    <!-- footer start -->
    @stop
  