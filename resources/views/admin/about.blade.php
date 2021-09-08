@extends('layouts.layout')
@section('content')

  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i> About</h3>
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
              About Table
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_profile"></i> Titel</th>
                  <th><i class="icon_briefcase"></i> Description</th>
                  <th><i class="icon_image"></i> image</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
                @foreach ($about as $item)


                <tr>
                  <td style="
                  max-width: 30px;
              ">{{$item->title}} </td>
                  <td style="
                  max-width: 60px;
              ">{{$item->descrption}}</td>
                  <td>{{$item->image}}</td>


                  <td>
                    <div class="btn-group" >

                      <a class="btn btn-success" href="about/{{$item->id}}/edit"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-primary" href="about/create"><i class="icon_plus_alt2"></i></a>

                      <form method="POST" action="about/{{$item->id}} " style="display: initial">
                        @method('delete')
                        @csrf
                      <button class="btn btn-danger" type="submit" ><i class="icon_close_alt2"></i></button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach




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


