@extends('layouts.web.index')
@section('content')
    
<div class="bradcam_area bradcam_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>Add Property</h3>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <br>
      <h1 style="text-align: center;">Create Property</h1>
      {!!Form::open(['method'=>'POST', 'action'=>'AddPropertyController@store'])!!}
	      {{-- @csrf --}}
            <select name="status" id="">
            	<option value="1">Rent</option>
            	<option value="2">Sale</option>
            </select>
          <br>
          <br>
          <br>
           <div class="form-group" id="attr_group_select">
          	{!!Form::select('property_type',[''=>'Choose Type']+$attributes_set, null, ['class'=>'form-control'])!!}
          </div>
          <br>
          <br>
          <div class="form-group">
          	{!!Form::label('property_name', 'Property Name:')!!}
          	{!!Form::text('property_name',null, ['class'=>'form-control'])!!}
          </div>
          <div class="form-group">
          	{!!Form::label('property_description', 'Property Description:')!!}
          	{!!Form::textarea('property_description',null, ['class'=>'form-control'])!!}
          </div>
          <div class="form-group">
                <input type="file" id="files" name="files" multiple accept="image/*" class="form-control"><br/>
               <div id="selectedFiles"></div>
          </div>
          <div class="form-group" id='submit-btn'>
          	{!!Form::submit('Add Property', ['class'=>'form-control btn btn-primary' ])!!}
          </div>
      {!!Form::close()!!}

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

$(document).ready(function(){
	debugger;
	$('#attr_group_select').children('select').on('change', function(event){
		alert('Hello');
	});
});

</script>
@stop
   