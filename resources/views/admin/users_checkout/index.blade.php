@extends('layouts.admin.index')
@section('content')
<div class="content-wrapper" style="min-height: 1200.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users Checkout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users Checkout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
    
    <!-- Main content -->
    <section class="content">
     <div class="row">
    <div class="col-13">
    <div class="card">
   
    <!-- /.card-header -->
    <div class="card-body">
      <table id="categories" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Orders ID</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Country</th>
      <th scope="col">City</th>
      <th scope="col">Zip_code</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Additional Information</th>
      <th scope="col">Created_at</th>
      <th scope="col">Updated_at</th>
      <th scope="col">Delete</th>

    </tr>
    
  </thead>
  <tbody>
  @if($users_checkout) 	
    @foreach($users_checkout as $user_checkout)	
    <tr>
      <td>{{$user_checkout->id}}</td>
      <td>{{$user_checkout->order_id}}</td>
      <td>{{$user_checkout->name}}</td>
      <td>{{$user_checkout->surname}}</td>
      <td>{{$user_checkout->email}}</td>
      <td>{{$user_checkout->address}}</td>
      <td>{{$user_checkout->country}}</td>
      <td>{{$user_checkout->city}}</td>
      <td>{{$user_checkout->zip_code}}</td>
      <td>{{$user_checkout->phone_number}}</td>
      <td>{{$user_checkout->additional_information}}</td>
      <td>{{$user_checkout->created_at ? $user_checkout->created_at->diffForHumans() : 'No data'}}</td>
      <td>{{$user_checkout->updated_at ? $user_checkout->updated_at->diffForHumans() : 'No data'}}</td>
      <td>
      {!!Form::open(['method'=>'DELETE' , 'action'=>['AdminUsersCheckoutController@destroy', $user_checkout->id]])!!}
       <div class="form-group">
        {!!Form::submit('DELETE USER', ['class'=>'btn btn-danger'])!!}
       </div>
      {!!Form::close()!!}
      </td>
    </tr>
    @endforeach
   @endif 
  </tbody>
  </table>
</div>
<!-- /.card-body -->

</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
    </section>
</div>
@stop    
    
    
    
