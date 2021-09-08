@extends('layouts.main')
@section('content')
<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> Price</h3>
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
             Add Price
            </header>
            <div class="panel-body">
              <div class="form">
                <form class="form-validate form-horizontal" id="feedback_form" method="post" action="/price" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group ">
                    <label for="title" class="control-label col-lg-2">Title <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" id="title" name="title" minlength="5" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pric" class="control-label col-lg-2">Price<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="pric" type="number" name="pric" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="text1" class="control-label col-lg-2">text<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="text1" type="text" name="text1" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="text2" class="control-label col-lg-2">text<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="text2" type="text" name="text2" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="text3" class="control-label col-lg-2">text<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="text3" type="text" name="text3" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="text4" class="control-label col-lg-2">text<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="text4" type="text" name="text4" required />
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

