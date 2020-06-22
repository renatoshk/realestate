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
                <h3> Properties</h3>
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
                        @if($result)
                        <h4>{{count($result)}} Properties found</h4>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                @if($result)
                 @foreach($result as $prop) 
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For {{$prop['status']}}
                            </div>
                            <img src="/photos/{{$prop->photos[0]['image'] ?? ''}}" width="400px;" height="400px;" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="{{route('home', $prop['slug'])}}">Comfortable {{$prop['property_type']}} in {{$prop['location']}}</a></h3>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">From ${{$prop['price']}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                  @endforeach
                @endif
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        {{$result->links()}}
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