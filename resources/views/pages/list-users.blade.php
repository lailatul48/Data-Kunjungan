@extends('layouts.app')
@section('title', 'users')
@section('content')
     <div class="page-title">
            <div class="title_left">
              <h3>Users <small>Some examples to get you started</small></h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <span class="input-group-btn">
                      <a class="btn btn-info btn-flat" href={{route('page.create-users')}}><i class="fa fa-lg fa-plus"></i></a>
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
                  <h2>List Users</h2>
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
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>


                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                        <td>
                          <a class="btn btn-info btn-flat" href={{route('page.edit-users')}}><i class="fa fa-lg fa-edit"></i></a>
                          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                      </tr>
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