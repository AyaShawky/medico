@extends('layouts.layout')
@section('content')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="/admin">Dashboard</a></li>

          </ol>
        </div>
      </div>
      <!-- page start-->
      <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>welcome to my dashboard</h1>
        <p>Resize this responsive page to see the effect!</p>

      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box blue-bg">
            <i class="fa fa-cloud-download"></i>
            <div class="count">  {{$doctorCount}}</div>
            <div class="title">Doctor</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box brown-bg">
            <i class="fa fa-shopping-cart"></i>
            <div class="count">  {{$departmentCount}}</div>
            <div class="title">Department</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box dark-bg">
            <i class="fa fa-thumbs-o-up"></i>
            <div class="count">  {{$serviceCount}}</div>
            <div class="title">Services</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box green-bg">
            <i class="fa fa-cubes"></i>
            <div class="count">  {{$testmonilsCount}}</div>
            <div class="title">testmonils</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

      </div>

      <!-- page end-->
    </section>
  </section>
  <!--main content end-->

@endsection


