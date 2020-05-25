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
              <li class="breadcrumb-item active">Add Property</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Property</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!!Form::open(['method'=>'POST', 'action'=>'AddPropertyController@store', 'files'=>'true'])!!}
                <div class="card-body">
                  <div class="form-group">
                   <select  class="form-control" name="status" id="status">
                         <option value="Rent">Rent</option>
                         <option value="Sale">Sale</option>
                   </select>
                 </div> 
                  <div class="form-group" id="attr_group_select" >
                   {!!Form::select('property_type',[''=>'Choose Type']+$attributes_set, null, ['class'=>'form-control'])!!}
                 </div>
                  <div class="form-group">
                      {!!Form::label('property_name', 'Property Name:')!!}
                      {!!Form::text('property_name',null, ['class'=>'form-control'])!!}
                  </div>
                  <div class="form-group">
                      {!!Form::label('property_description', 'Property Description:')!!}
                      {!!Form::textarea('property_description',null, ['class'=>'form-control'])!!}
                 </div>
                  <div class="form-group" id="prop-files-uploader">
                   <input type="file" id="files" name="photos[]" multiple accept="image/*" class="form-control"><br/>
                   <div id="selectedFiles"></div>
                 </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer" id='submit-btn'>
                  <button type="submit" class="btn btn-primary">Add Property</button>
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
 

