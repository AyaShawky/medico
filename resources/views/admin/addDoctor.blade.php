@extends('layouts.main')
@section('content')
<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> Doctor</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="/create">Add</a></li>

          </ol>
        </div>
      </div>
      <!-- Form validations -->
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
             Add Doctor
            </header>
            <div class="panel-body">
              <div class="form">

                <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="/doctor" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group ">
                    <label for="fName" class="control-label col-lg-2">First Name <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" id="fName" name="fName" minlength="5" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lName" class="control-label col-lg-2">Last Name <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="lName" type="text" name="lName" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Specialization" class="control-label col-lg-2">Specialization <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Specialization" type="text" name="Specialization" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="mobile" class="control-label col-lg-2"> mobile<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" id="mobile" name="mobile" minlength="10" type="number" required />
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

