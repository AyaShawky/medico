@extends('layouts.main')
@section('content')
<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> Testmonials</h3>
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
             Add Testmonials
            </header>
            <div class="panel-body">
              <div class="form">
                <form class="form-validate form-horizontal" id="feedback_form" method="post" action="/testmonils" enctype="multipart/form-data">

                    @csrf
                  <div class="form-group ">
                    <label for="name" class="control-label col-lg-2"> Name <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" id="name" name="name" minlength="5" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="job" class="control-label col-lg-2">Job <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="job" type="text" name="job" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="description" class="control-label col-lg-2">Description <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="description" type="text" name="description" required />
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

