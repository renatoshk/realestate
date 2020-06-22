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
              <li class="breadcrumb-item active">Edit Profile</li>
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
                <h3 class="card-title">Edit Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!!Form::model($user, ['method'=>'PATCH', 'action'=>['ProfileController@update',$user->id, 'files'=>'true']])!!}
              <br>
                <div class="card-body">
                  <div class="form-group">
                      {!!Form::label('name', 'Name:')!!}
                      {!!Form::text('name',null, ['class'=>'form-control'])!!}
                  </div>
                    <div class="form-group">
                      {!!Form::label('surname', 'Surname:')!!}
                      {!!Form::text('surname',null, ['class'=>'form-control'])!!}
                  </div>
                  <div class="form-group">
                      {!!Form::label('username', 'Username:')!!}
                      {!!Form::text('username',null, ['class'=>'form-control'])!!}
                 </div>
                  <div class="form-group">
                      {!!Form::label('Email', 'Email:')!!}
                      {!!Form::email('email',null, ['class'=>'form-control'])!!}
                  </div> 
                   <div class="form-group">
                      {!!Form::label('phone_number', 'Phone Number:')!!}
                      {!!Form::text('phone_number',null, ['class'=>'form-control'])!!}
                  </div>  
                </div>
                <!-- /.card-body -->

                <div class="card-footer" id='submit-btn'>
                  <button type="submit" class="btn btn-primary">Update</button>
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

  
  @stop
 

