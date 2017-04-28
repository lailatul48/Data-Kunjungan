@extends('layouts.app')
@section('title', 'users')
@section('content')
          <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Edit Visitors</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <span class="input-group-btn">
                    </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Design <small>different form elements</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required"></span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nis">Nis <span class="required"></span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nis" name="nis" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button  class="btn btn-primary" type="button" href="list-users.html">Cancel</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('scripts')
 <!-- jQuery -->
  <script src={{asset('vendors/jquery/dist/jquery.min.js')}}></script>
  <!-- Bootstrap -->
  <script src={{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}></script>
  <!-- FastClick -->
  <script src={{asset('vendors/fastclick/lib/fastclick.js')}}></script>
  <!-- NProgress -->
  <script src={{asset('vendors/nprogress/nprogress.js')}}></script>
  <!-- bootstrap-progressbar -->
  <script src={{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}></script>
  <!-- iCheck -->
  <script src={{asset('vendors/iCheck/icheck.min.js')}}></script>
  <!-- bootstrap-daterangepicker -->
  <script src={{asset('vendors/moment/min/moment.min.js')}}></script>
  <script src={{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}></script>
  <!-- bootstrap-wysiwyg -->
  <script src={{asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}></script>
  <script src={{asset('vendors/jquery.hotkeys/jquery.hotkeys.js')}}></script>
  <script src={{asset('vendors/google-code-prettify/src/prettify.js')}}></script>
  <!-- jQuery Tags Input -->
  <script src={{asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}></script>
  <!-- Switchery -->
  <script src={{asset('vendors/switchery/dist/switchery.min.js')}}></script>
  <!-- Select2 -->
  <script src={{asset('vendors/select2/dist/js/select2.full.min.js')}}></script>
  <!-- Parsley -->
  <script src={{asset('vendors/parsleyjs/dist/parsley.min.js')}}></script>
  <!-- Autosize -->
  <script src={{asset('vendors/autosize/dist/autosize.min.js')}}></script>
  <!-- jQuery autocomplete -->
  <script src={{asset('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}></script>
  <!-- starrr -->
  <script src={{asset('vendors/starrr/dist/starrr.js')}}></script>
  <!-- Custom Theme Scripts -->
  <script src={{asset('build/js/custom.min.js')}}></script>

    @endsection