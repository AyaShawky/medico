@extends('layouts.layout')
@section('content')

  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i> Introuction</h3>
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
              introduction Table
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_profile"></i> Titel</th>
                  <th><i class="icon_briefcase"></i> Description</th>
                  <th><i class="icon_briefcase"></i> icon</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
                <tr>
                    @foreach ($introduction as $item)


                  <td>{{$item->title}} </td>
                  <td>{{$item->decription}}</td>
                  <td>{{$item->icon}} </td>

                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="introduction/create"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="introduction/{{$item->id}}/edit"><i class="icon_check_alt2"></i></a>
                      <form method="POST" action="introduction/{{$item->id}}" style="display: initial">
                        @method('delete')
                        @csrf
                      <button class="btn btn-danger" type="submit"><i class="icon_close_alt2"></i></button>
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


