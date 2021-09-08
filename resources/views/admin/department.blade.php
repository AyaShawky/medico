@extends('layouts.layout')
@section('content')

  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i> Department</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index">show</a></li>

          </ol>
        </div>
      </div>
      <!-- page start-->

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              department Table
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_profile"></i>  Name</th>
                  <th><i class="icon_briefcase"></i>Title</th>
                  <th><i class="icon_mobile"></i> Description</th>
                  <th><i class="icon_image"></i> image</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
                @foreach ($department as $item)


                <tr>
                  <td>{{$item->name}} </td>
                  <td style=" max-width: 43px;">{{$item->title}}</td>
                  <td style=" max-width: 43px;">
                   {{$item->description}}</td>
                  <td>{{$item->image}}</td>

                  <td>
                    <div class="btn-group" >
                      <a class="btn btn-primary" href="department/create"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="department/{{$item->id}}/edit"><i class="icon_check_alt2"></i></a>
                      <form method="POST" action="department/{{$item->id}}" style="display: initial">
                        @csrf
                        @method('delete')
                      <button class="btn btn-danger" type="submit" ><i class="icon_close_alt2"></i></button>
                      </form>
                    </div>
                  </td>
                </tr>

                @endforeach()
              </tbody>
            </table>
          </section>
        </div>
      </div>
      <!-- page end-->
    </section>
  </section>
  <!--main content end-->


@endsection


