@extends('layouts.main')
@section('content')
<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> Introduction</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Edit</a></li>

          </ol>
        </div>
      </div>
      <!-- Form validations -->
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
             Edit introduction
            </header>
            <div class="panel-body">
              <div class="form">
                <form class="form-validate form-horizontal" id="feedback_form" method="post" action="/introduction/{{$introduction->id}} ">
                    @csrf
                    @method('put')
                  <div class="form-group ">
                    <label for="title" class="control-label col-lg-2"> Title <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" value="{{$introduction->title}}" id="title" name="title" minlength="5" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="decription" class="control-label col-lg-2">Decription <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " value="{{$introduction->decription}}" id="decription" rows="5" type="text" name="decription" required />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="icon" class="control-label col-lg-2">icon<span class="required">*</span></label>
                    <div class="col-lg-10">
                        <input
                        class="form-control"
                        required="required"
                        id="icon"
                        name="icon"
                        type ="text"
                        value="{{$introduction->icon}}"
                        >

                    </div>
                </div>



                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-primary" type="submit">Edit</button>
                      <button class="btn btn-default" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </section>
        </div>
      </div>

      <!-- page end-->
    </section>
  </section>
@endsection

