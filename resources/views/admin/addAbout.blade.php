@extends('layouts.main')
@section('content')
<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> About</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Add</a></li>

          </ol>
        </div>
      </div>
      <!-- Form validations -->
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
             Add About
            </header>
            <div class="panel-body">
              <div class="form">
                <form class="form-validate form-horizontal" id="feedback_form" method="post" action="/about" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group ">
                    <label for="title" class="control-label col-lg-2">Title <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" id="title" name="title" minlength="5" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="descrption" class="control-label col-lg-2">descrption<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="descrption" type="text"rows="5" name="descrption" required />
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

                        >

                    </div>
                </div>


                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-primary" type="submit">Add</button>
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

