<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class ShipperController extends Controller
{
    public function add_shipper()
    {
        return view ('admin.add_shipper');
    }
    public function all_shipper()
    {
        $all_shipper = DB::table('tbl_shipper')->get();
        $manage_shipper = view ('admin.all_shipper')->with('all_shipper',$all_shipper);
        return view('admin_layout')->with('admin.all_shipper',$manage_shipper);

    }
    public function save_shipper(Request $request)
    {
        $data = array();
        $data['shipper_name'] = $request->shipper_name;
        $data['shipper_email'] = $request->shipper_email;
        $data['shipper_password'] = $request->shipper_password;
        $data['shipper_phone'] = $request->shipper_phone;

        DB::table('tbl_shipper')->insert($data);
         Session::put('message','Thêm shipper thành công');
         return redirect('all-shipper');
    }
    public function edit_shipper($shipper_id)
    {
        $edit_shipper = DB::table('tbl_shipper')->where('shipper_id',$shipper_id)->get();
        $manage_shipper = view ('admin.edit_shipper')->with('edit_shipper',$edit_shipper);
        return view('admin_layout')->with('admin.edit_shipper',$manage_shipper);
    }
    public function update_shipper(Request $request, $shipper_id)
    {
        $data = array();
        $data['shipper_name'] = $request->shipper_name;
        $data['shipper_email'] = $request->shipper_email;
        $data['shipper_phone'] = $request->shipper_phone;
        DB::table('tbl_shipper')->where('shipper_id',$shipper_id)->update($data);
        Session::put('message','Cập nhật shipper thành công');
        return redirect('all-shipper');
    }
    public function delete_shipper($shipper_id)
    {
        DB::table('tbl_shipper')->where('shipper_id',$shipper_id)->delete();
        Session::put('message','Xóa shipper thành công');
        return redirect('all-shipper');
    }
}
