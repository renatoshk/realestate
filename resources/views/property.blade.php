@extends('layouts.web.index')
@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
            <div class="single_slider single_slider2  d-flex align-items-center property_bg overlay2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 offset-xl-1">
                                <div class="property_wrap">
                                        <div class="slider_text text-center justify-content-center">
                                                <h3>Search property</h3>
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
    </div>
    <!-- slider_area_end -->
    <div class="popular_property plus_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h4>240 Properties found</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Sale
                            </div>
                            <img src="img/property/1.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="#">Comfortable Apartment in Palace</a></h3>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">From $20k</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag red">
                                    For Rent
                            </div>
                            <img src="img/property/2.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="#">Comfortable Apartment in Palace</a></h3>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">$563/month</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Sale
                            </div>
                            <img src="img/property/3.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="#">Comfortable Apartment in Palace</a></h3>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">From $20k</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag red">
                                    For Rent
                            </div>
                            <img src="img/property/4.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="#">Comfortable Apartment in Palace</a></h3>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">$563/month</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Sale
                            </div>
                            <img src="img/property/5.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="#">Comfortable Apartment in Palace</a></h3>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">From $20k</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Sale
                            </div>
                            <img src="img/property/6.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="#">Comfortable Apartment in Palace</a></h3>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">From $20k</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
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
                        <a href="#" class="boxed-btn3-line">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->
@stop