@extends('layouts.web.index')
@section('content')
    <!-- slider_area_start -->
        <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-11 offset-xl-1">
                <div class="slider_text text-center justify-content-center">
                    <h3>Find your best Property</h3>
                    <p>“If you don't own a home, buy one"</p>
                </div>
                <div class="property_form">
                    {!!Form::open(['method'=>'GET', 'action'=>'SearchController@index']) !!}
                        <div class="row">
                            <div class="col-xl-20">
                                <div class="form_wrap d-flex">
                                    <div class="single-field max_width ">
                                        <label for="property_type">Property type</label>
                                        {{Form::select('property_type', [''=>'Choose Type']+$attributes, NULL, ['class'=>'wide'])}}
                                    </div>
                                      <div class="single-field max_width ">
                                            <label for="#">Price($)</label>
                                            <div id="slider"></div> 
                                            <input type="hidden" name="price-range" id="p-range" value="">
                                    </div>
                                    <div class="single-field max_width ">
                                            <label for="#">Location</label>
                                            <input type="text" id="location" name="location" class="form_wrap form-control">
                                    </div>
                                    <div class="single-field min_width ">
                                            <label for="#">Status</label>
                                           <select name="status" class="wide">
                                                    <option value="">Choose</option>
                                                    <option value="Rent">Rent</option>
                                                    <option value="Sale">Sale</option>
                                            </select>
                                        </div>
                                     <div class="serach_icon">
                                            <input type="submit" value="search" class="form-control form_wrap">
                                        </a>
                                     </div>
                                </div>
                            </div>
                        </div>
                    {{Form::close()}}
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
                            <img src="/photos/{{$prop['image']}}" width="400px;" height="400px;" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="{{route('home', $prop['slug'])}}">{{$prop['property_name']}}</a></h3>
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
                                            <span><a href="{{route('home', $prop['slug'])}}">Click here for Details!</a></span>
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
                        @if($properties)
                           {{$properties->links()}}
                        @endif
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
                        @if($data)
                          @foreach($data as $prop)
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                        <div class="modern_home_info">
                                                <div class="modern_home_info_inner">
                                                    <span class="for_sale">
                                                        {{$prop['status']}}
                                                    </span>
                                                    <div class="info_header">
                                                            <h3>{{$prop['property_name']}}</h3>
                                                            <div class="popular_pro d-flex">
                                                                <img width="400px" height="200px"  src="/photos/{{$prop['image']}}" alt="">
                                                                <span>Popular Properties</span>
                                                            </div>
                                                    </div>
                                                    <div class="info_content">
                                                      
                                                        <p>{{$prop['property_description']}}</p>
                                                        <div class="prise_view_details d-flex justify-content-between align-items-center">
                                                            <span>${{$prop['price']}}</span>
                                                            <a class="boxed-btn3-line" href="{{route('home', $prop['slug'])}}">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
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
                                                                    How long does it take to buy a home?</span>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                                        <div class="card-body">From start (searching online) to finish (closing escrow), buying a home takes about 10 to 12 weeks. Once a home is selected an the offer is accepted, the average time to complete the escrow period on a home is 30 to 45 days (under normal market conditions). Though, well-prepared home buyers who pay cash have been known to purchase properties faster than that.

                                                        Market conditions are a major factor in how fast homes are sold. In hot markets with a lot of sales activity, buying a home may take a little longer than normal. That’s because several parties involved in the transaction get behind when business suddenly picks up. For example, a spike in home sales increases the demand for property appraisals and home inspections, yet there will be no increase in the number of appraisers and inspectors available to do the work. Lender turn-around times for loan underwriting can also slow down. If each party involved in a deal takes a day or two longer to get their work done, the entire process gets extended.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                    What kind of credit score do I need to buy a home?
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                                        <div class="card-body">Most loan programs require a FICO score of 620 or better. Borrowers with higher credit scores represent less risk to the lender, often resulting in a lower the down payment requirement and better interest rate. Conversely, home shoppers with lower credit scores may need to bring more money to the table (or accept a higher interest rate) to offset the lender’s risk.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    How long can the seller take to respond to my offer?
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                                        <div class="card-body">Written offers should stipulate the timeframe in which the seller should respond. Giving them twenty-four hours should be sufficient.
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
                                        <p>NEVER GIVE UP FROM YOUR DREAM! </p>
                                        <div class="testmonial_author">
                                            <h3>Renato Shkulaku</h3>
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
                        <span>+3559812168</span>
                        <a href="{{route('add.create')}}" class="boxed-btn3-line">Add Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->

    <!-- footer start -->
    @stop
  