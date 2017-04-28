@extends('layouts.app')
@section('title', 'visitors')
@section('content')
      <div class="page-title">
            <div class="title_left">
              <h3>Visitors <small>Some examples to get you started</small></h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <span class="input-group-btn">
                       <a class="btn btn-info btn-flat" href={{route('page.create-visitors')}}><i class="fa fa-lg fa-plus"></i></a>
                      <a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a>
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
                  <h2>List Visitors</h2>
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
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>NIS</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>


                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-visitors')}}<i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-visitors')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-visitors')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-visitors')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-visitors')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-visitors')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-visitors')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-visitors')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-visitors')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-visitors')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-visitors')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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
  <!-- iCheck -->
  <script src={{asset('vendors/iCheck/icheck.min.js')}}></script>
  <!-- Datatables -->
  <script src={{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}></script>
  <script src={{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}></script>
  <script src={{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}></script>
  <script src={{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}></script>
  <script src={{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}></script>
  <script src={{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}></script>
  <script src={{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}></script>
  <script src={{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}></script>
  <script src={{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}></script>
  <script src={{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}></script>
  <script src={{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}></script>
  <script src={{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}></script>
  <script src={{asset('vendors/jszip/dist/jszip.min.js')}}></script>
  <script src={{asset('vendors/pdfmake/build/pdfmake.min.js')}}></script>
  <script src={{asset('vendors/pdfmake/build/vfs_fonts.js')}}></script>

  <!-- Custom Theme Scripts -->
  <script src={{asset('build/js/custom.min.js')}}></script>
    @endsection