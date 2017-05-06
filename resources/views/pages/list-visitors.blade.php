@extends('layouts.app')
@section('title', 'visitors')
@section('content')
      <div class="page-title">
            <div class="title_left">
              <h3>List Visitors</h3>
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
                  <a class="btn btn-info btn-flat submit" href={{route('page.create-visitors')}}><i class="fa fa-lg fa-plus"></i></a>
                  <a class="btn btn-info btn-flat submit" href={{route('page.list-visitors')}}><i class="fa fa-lg fa-refresh"></i></a>
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
                   <div class="col-md-4 pull-right">
              <form method="GET" action="{{route('page.list-visitors')}}"> 
                <div class="form-group">
                  <input type="text" class="form-control" name="search" placeholder="Pencarian..." value="">
                </div>
              </form>
            </div>
          </div>
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
                        @foreach ($visitors as $visitor)
                          <tr>
                            <td>{{ $visitor->name }}</td>
                            <td>{{ $visitor->nis }}</td>
                            <td>
                              <a class="btn btn-info btn-flat" href={{route('page.edit-visitors',['id' => $visitor->id])}}>
                              <i class="fa fa-lg fa-edit"></i></a>
                              <button class="btn btn-warning btn-flat" onClick="deleteData('{{$visitor->id}}')">
                              <i class="fa fa-lg fa-trash"></i></button>
                            </td>
                          </tr>
                       @endforeach
                      </tbody>
                      </table>
                </div>
              </div>
            </div>
          </div>
        </div>
         <div class="col-md-12 text-center">
     <!--pagination-->
     {{$visitors->links()}}
   </div>
@endsection
@section('scripts')
<script>
  function deleteData(visitorId){
    console.log(visitorId);
    swal({
      title: "Are you sure?",
      text: "You will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel plx!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm){
      if (isConfirm) {
        // delete data using ajax
        $.ajax({
          url: "/api/visitors/" visitorId,
          type: 'DELETE',
          success: function( data, textStatus, jQxhr ){
            console.log(data);
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          },
          error: function( data, textStatus, jQxhr ){
            swal("Internal Server Error", "Whooops something went wrong!", "error");
          }
        });
        // reload page
        location.reload();
      } else {
        swal("Cancelled", "Your imaginary file is safe :)", "error");
      }
    });
  };
</script>
@endsection