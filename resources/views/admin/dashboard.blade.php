@extends('layouts.admin.index')
@section('content')
<style>
    html,
body {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: navajowhite;
}

.box {
    display: flex;
}

.box .inner {
    width: 400px;
    height: 200px;
    line-height: 200px;
    font-size: 4em;
    font-family: sans-serif;
    font-weight: bold;
    white-space: nowrap;
    overflow: hidden;
}

.box .inner:first-child {
    background-color: black;
    color: white;
    transform-origin: right;
    transform: perspective(100px) rotateY(-15deg);
}

.box .inner:last-child {
    background-color: white;
    color: black;
    transform-origin: left;
    transform: perspective(100px) rotateY(15deg);
}

.box .inner span {
    position: absolute;
    animation: marquee 5s linear infinite;
}

.box .inner:first-child span {
    animation-delay: 2.5s;
    left: -100%;
}

@keyframes marquee {
    from {
        left: 100%;
    }

    to {
        left: -100%;
    }
}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/adm">Home</a></li>
                        <li class="breadcrumb-item active">My Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <br>
    <div class="box">
          <div class="inner">
            <span>Hello Dashboard</span>
          </div>
          <div class="inner">
            <span>Hello System</span>
          </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3></h3>

                <p>Products Available</p>
              </div>
              <div class="icon">
                <i class="ion ion-laptop"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
             <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3></h3>

                <p>Products Unavailable</p>
              </div>
              <div class="icon">
                <i class="ion ion-iphone"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>

                <p>Cart Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3></h3>

                <p>Purchase Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-pricetag"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-black">
              <div class="inner">
                <h3></h3>

                <p>User Checkouts</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
             <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <h3></h3>

                <p>Shippings</p>
              </div>
              <div class="icon">
                <i class="ion ion-plane"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                <h3></h3>

                <p>Payments</p>
              </div>
              <div class="icon">
                <i class="ion-social-usd"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3></h3>

                <p>Posts</p>
              </div>
              <div class="icon">
                <i class="ion-ios-book"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-pink">
              <div class="inner">
                <h3></h3>

                <p>Comments</p>
              </div>
              <div class="icon">
                <i class="ion-chatboxes"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>

                <p>Product Categories</p>
              </div>
              <div class="icon">
                <i class="ion-chatboxes"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3></h3>

                <p>Posts Categories</p>
              </div>
              <div class="icon">
                <i class="ion-chatboxes"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    <!-- /.content -->
    <br>
    <br>
       <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Analyse Data</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
        <!-- /.card-body -->
      </div>
  </div>
<!-- /.content-wrapper -->

@stop
@section('scripts')
<script>
   $(function () {
//-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Products Available', 
          'Cart Orders',
          'Purchase Orders', 
          'Users Register', 
          'Users Checkout', 
          'Shpping Customers', 
          'Payments',
      ],
      datasets: [
        {
          data: [],
          backgroundColor : ['black', 'yellow', 'white', 'purple', 'blue', 'pink','red'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })
 })   
</script>
@stop