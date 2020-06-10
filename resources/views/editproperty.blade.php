@extends('layouts.property.index')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Property</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <br>
    @if ( Session::has('flash_message') )
       <div class="alert {{ Session::get('flash_type', 'alert-success') }}">
      <h3>{{ Session::get('flash_message') }}</h3>
       </div>
    @endif
    <br>

    <!-- Main content -->
    <section class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Property</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!!Form::model($property, ['method'=>'PATCH', 'action'=>['AddPropertyController@update',$property->id, 'files'=>'true']])!!}
              <br>
               @if($photos)
                 @foreach($photos as $photo)
                   <img src="/photos/{{$photo->image}}" width="100px" height="100px;" alt="">
                 @endforeach
               @endif
                <div class="card-body">
                  <div class="form-group" id="attr_group_select" >
                  {!!Form::label('property_type',$attributes_set, ['class'=>'form-control'])!!}
                 </div>
                  <div class="form-group">
                   <select  class="form-control" name="status" id="status">
                         <option value="Rent">Rent</option>
                         <option value="Sale">Sale</option>
                   </select>
                 </div> 
                  <div class="form-group">
                      {!!Form::label('property_name', 'Property Name:')!!}
                      {!!Form::text('property_name',null, ['class'=>'form-control'])!!}
                  </div>
                  <div class="form-group">
                      {!!Form::label('property_description', 'Property Description:')!!}
                      {!!Form::textarea('property_description',null, ['class'=>'form-control'])!!}
                 </div>
                  <div class="form-group">
                      {!!Form::label('price', 'Property Price:')!!}
                      {!!Form::text('price',null, ['class'=>'form-control'])!!}
                  </div> 
                   <div class="form-group">
                      {!!Form::label('location', 'Property Location:')!!}
                      {!!Form::text('location',null, ['class'=>'form-control'])!!}
                  </div>  
                  <div class="form-group" id="prop-files-uploader">
                     <input type="file" id="files" name="photos[]"  enctype="multipart/form-data" multiple accept="image/*" class="form-control"><br/>
                      <div id="selectedFiles"></div>
                 </div>
                 @if($attrs) 
                  @foreach($attrs as $attr) 
                    <div class="form-group">
                      <label for="{{$attr->label}}">{{$attr->label}}</label>
                      <input type="hidden" name="id_'{{$attr->attr_code}}" value="{{$attr->id}}">
                      <input type="{{$attr->type}}" name="{{$attr->attr_code}}" value="{{App\Propertyattributes::where('attribute_id', $attr->id)->first()->attribute_value}}" class="form-control">
                    </div>
                  @endforeach
                 @endif
                </div>
                <!-- /.card-body -->

                <div class="card-footer" id='submit-btn'>
                  <button type="submit" class="btn btn-primary">Edit Property</button>
                </div>
              {!!Form::close()!!}
            </div>
            <!-- /.card -->

                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
var selDiv = "";
document.addEventListener("DOMContentLoaded", init, false);
function init() {
  document.querySelector('#files').addEventListener('change', handleFileSelect, false);
  selDiv = document.querySelector("#selectedFiles");
}

function handleFileSelect(e) {

  if (!e.target.files || !window.FileReader) return;

  selDiv.innerHTML = "";

  var files = e.target.files;
  var filesArr = Array.prototype.slice.call(files);
  filesArr.forEach(function(f,i) {
    var f = files[i];
    if (!f.type.match("image.*")) {
      return;
    }

    var reader = new FileReader();
    reader.onload = function(e) {
      var html =  f.name + "<br clear=\"left\"/>";
      selDiv.innerHTML += html;
    }
    reader.readAsDataURL(f);
  });

}
  </script>
  
  @stop
 

