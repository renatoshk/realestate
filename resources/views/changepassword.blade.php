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
              <li class="breadcrumb-item"><a href="/adm">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
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
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!!Form::model($user, ['method'=>'PATCH', 'action'=>['ChangePasswordController@update',$user->id, 'files'=>'true']])!!}
              <br>
                <div class="card-body">
                  <div class="form-group row {{$errors->has('oldpassword') ? 'has-error' : ''}}">
                {!!Form::label('oldpassword', 'Old Password:')!!}
                {!!Form::password('oldpassword', ['class'=>'form-control'])!!}
              </div>
                <div class="form-group row">
                        <label for="password">{{ __('Password: ') }}
                        </label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password: ') }}
                              </label>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
            <div class="form-group">
             {!!Form::submit('Change', ['class'=>'btn btn-primary'])!!}
            </div>
                  
                </div>
                <!-- /.card-body -->

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
 

