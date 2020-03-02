@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
         Danh sách người dùng
      </div>
      <div class="row w3-res-tb">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3"></div>

        </div>
      </div>
      <div class="table-responsive">
                        <?php
                              $message = Session::get('message');
                              if($message){
                                  echo '<span class="text-alert">'.$message.'</span>';
                                  Session::put('message',null);
                              }
                              ?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th>Tên người dùng</th>
              <th>Email</th>
              <th>Số điện thoại</th>
              {{--  <th style="width:30px;"></th>  --}}
            </tr>
          </thead>
          <tbody>
            @foreach ( $all_user as $key => $user )

            <tr>
            <td>{{ $user->user_name }}</td>
             <td>{{ $user->user_email }}</td>
            <td> {{ $user->user_phone }}</td>
            <td>
                <a href="{{URL::to('/edit-user/'.$user->user_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn chắc chắn xóa người dùng này ?')" href="{{URL::to('/delete-user/'.$user->user_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
                </a>

              </a>
            </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      </footer>
    </div>
  </div>
@endsection
