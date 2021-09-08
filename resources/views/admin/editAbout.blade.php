@extends('layouts.main')
@section('content')
<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> About</h3>
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
             Edit About
            </header>
            <div class="panel-body">
              <div class="form">
                <form class="form-validate form-horizontal" id="feedback_form" method="post" action="/about/{{$about->id}} ">
                    @csrf
                    @method('put')
                  <div class="form-group ">
                    <label for="title" class="control-label col-lg-2"> Title <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" value="{{$about->title}}" id="title" name="title" minlength="5" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="descrption" class="control-label col-lg-2">Descrption <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " value="{{$about->descrption}}" id="descrption" rows="5" type="text" name="descrption" required />
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="image" class="control-label col-lg-2">Images<span class="required">*</span></label>
                    <div class="col-lg-10">

                        <input
                        class="form-control"
                        required="required"
                        id="image"
                        name="image"
                        type ="file"
                        value="{{$about->image}}"
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

