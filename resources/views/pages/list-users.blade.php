@extends('layouts.app')
@section('title', 'users')
@section('content')
     <div class="page-title">
            <div class="title_left">
              <h3><small></small></h3>
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
                        <th>Nis</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Level</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>


                   <tbody>
                        @foreach ($users as $user)
                          <tr>
                            <td>{{ $user->nis }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->status }}</td>
                            <td>
                              @if($user->level == 1)
                                <span class="label label-primary">Administrator</span>
                              @else
                                <span class="label label-default">Users</span>
                              @endif
                            </td>
                            <td>
                           <a class="btn btn-info btn-flat" href={{route('page.edit-users',['id' => $user->id])}}>
                              <i class="fa fa-lg fa-edit"></i></a>
                              <button class="btn btn-warning btn-flat" onClick="deleteData('{{$user->id}}')">
                              <i class="fa fa-lg fa-trash"></i></button>
                        </td>
                      </tr>
                       @endforeach
                      </tbody>
                      </table>
                      
@endsection
@section('scripts')
<script>
  function deleteData(userId){
    console.log(userId);
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
          url: "/api/users/" + userId,
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