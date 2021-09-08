@extends('layouts.layout')
@section('content')

  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i> Doctor</h3>
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
              Doctor Table
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_profile"></i> First Name</th>
                  <th><i class="icon_profile"></i> Last Name</th>
                  <th><i class="icon_briefcase"></i> Specialization</th>
                  <th><i class="icon_image"></i> Image</th>
                  <th><i class="icon_mobile"></i> Mobile</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
               @foreach ($doctor as $item)

                <tr>
                  <td>{{$item->fName}} </td>
                  <td>{{$item->lName}}</td>
                  <td>{{$item->Specialization}}</td>
                  <td>{{$item->image}}</td>
                  <td>{{$item->mobile}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="doctor/create"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="doctor/{{$item->id}}/edit "><i class="icon_check_alt2"></i></a>
                      <form method="POST" action="doctor/{{$item->id}}" style="display: initial">
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


