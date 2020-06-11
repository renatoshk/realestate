@extends('layouts.web.index')
@section('content')
    <!-- header-end -->

         <!-- bradcam_area  -->
        <div class="property_details_banner">
                <div class="container"> 
                        <div class="row">
                            <div class="col-xl-6 col-md-8 col-lg-6">
                                <div class="comfortable_apartment">
                                    <h4>Comfortable {{$attr_set[0]['name']}} in {{$property->location}}
                                       for {{$property->status}}</h4>
                                    <p> <img  src="/photos/{{$photos[0]['image']}}" width="800px" height="600px" alt="">{{$property->location}}
                                    </p>
                                    <div class="quality_quantity d-flex">
                                        @if($attrs)
                                          @foreach($attrs as $attr)
                                        <div class="single_quantity">
                                            <img src="{{asset('img/svg_icon/color_box.svg')}}" alt="">
                                            <span>{{$attr->label}} {{App\Propertyattributes::where('property_id', $property->id)->where('attribute_id',$attr->id)->first()->attribute_value}}</span>
                                        </div>
                                          @endforeach
                                         @endif   
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-4 col-lg-6">
                                <div class="prise_quantity">
                                    <h4>${{$property->price}}</h4>
                                    <a href="#">+3559812168</a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
            <!--/ bradcam_area  -->

    <!-- details  -->
    <div class="property_details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="property_banner">
                        <div class="property_banner_active owl-carousel">
                 @if($photos)
                    @foreach($photos as $photo)
                            <div class="single_property">
                                <img style="max-height: 900px;" src="/photos/{{$photo->image}}" alt="">
                            </div>
                    @endforeach
                @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="details_info">
                        <h4>Description</h4>
                       <p>{{$property->property_description}}</p>
                    </div>
                   <hr>
                    <div class="contact_field">
                        <h3>Are you Interesed for this Property?</h3>
                        <h3>Contact Us!</h3>
                        <form action="#">
                                <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <input type="text" placeholder="Your Name" >
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <input type="email" placeholder="Email" >
                                        </div>
                                        <div class="col-xl-12">
                                            <input type="number" placeholder="Phone no." >
                                        </div>
                                        <div class="col-xl-12">
                                           <textarea name="" id="" cols="30" rows="10" placeholder="Message" ></textarea>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="send_btn">
                                                <button type="submit" class="send_btn">Send</button>
                                            </div>
                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /details  -->

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