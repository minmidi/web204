<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class UserController extends Controller
{
    public function add_user()
    {
        return view('admin.add_user');
    }
    public function all_user()
    {
        $all_user = DB::table('tbl_users')->get();
        $manage_user = view ('admin.all_user')->with('all_user',$all_user);
        return view('admin_layout')->with('admin.all_user',$manage_user);
    }
    public function save_user(Request $request)
    {
        $data = array();
        $data['user_name'] = $request->user_name;
        $data['user_email'] = $request->user_email;
        $data['user_password'] = $request->user_password;
        $data['user_phone'] = $request->user_phone;

        DB::table('tbl_users')->insert($data);
         Session::put('message','Thêm người dùng thành công');
         return redirect('all-user');
    }
    public function edit_user($user_id)
    {
        $edit_user = DB::table('tbl_users')->where('user_id',$user_id)->get();
        $manage_user = view ('admin.edit_user')->with('edit_user',$edit_user);
        return view('admin_layout')->with('admin.edit_user',$manage_user);
    }
    public function update_user(Request $request, $user_id)
    {
        $data = array();
        $data['user_name'] = $request->user_name;
        $data['user_email'] = $request->user_email;
        $data['user_phone'] = $request->user_phone;
        DB::table('tbl_users')->where('user_id',$user_id)->update($data);
        Session::put('message','Cập nhật người dùng thành công');
        return redirect('all-user');
    }
    public function delete_user($user_id)
    {
        DB::table('tbl_users')->where('user_id',$user_id)->delete();
        Session::put('message','Xóa người dùng thành công');
        return redirect('all-user');
    }
}
