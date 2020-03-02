@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
         Danh sách shipper
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
              <th>Tên shipper</th>
              <th>Email</th>
              <th>Số điện thoại</th>
            </tr>
          </thead>
          <tbody>
             @foreach ( $all_shipper as $key => $shipper )
            <tr>
            <td>{{ $shipper->shipper_name }}</td>
             <td>{{ $shipper->shipper_email }}</td>
            <td> {{ $shipper->shipper_phone }}</td>
            <td>
                  <a href="{{URL::to('/edit-shipper/'.$shipper->shipper_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                 <a onclick="return confirm('Bạn chắc chắn xóa shipper này ?')" href="{{URL::to('/delete-shipper/'.$shipper->shipper_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
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
