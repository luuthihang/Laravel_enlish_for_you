<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function index(){
    	return view("admin_login");
    }

    public function show_dashboard(){
        $this->AuthLogin();
    	return view("admin.dashboard");
    }

     public function dashboard(Request $request){
    	$email=$request->Email;
    	$pass=md5($request->Password);
        
        // $result1=DB::table('tbl_vocabulary')->where('id',$id)->first();
    	$result=DB::table('tbl_admin')->where('admin_gmail',$email)->where('admin_pass',$pass)->first();
        
    // 	echo "<pre>";
    // 	print_r($result);
    // 	echo "</pre>";
    //     if($result1){
    //          echo "<pre>";
    //     print_r($result1);
    //     echo "</pre>";
    // }else{
    //     echo "khong co";
    // }
       
    	if($result){
            Session::put('admin_id',$result->admin_id);
    		Session::put('admin_name',$result->admin_name);
    		Session::put('admin_pass',$result->admin_pass);
    		return Redirect::to('/dashboard');
    	}else{
    		Session::put('message','Mật Khẩu Hoặc Tài Khoản Sai.Nhập Lại');
    		return Redirect::to('/admin');
    	}
    		
    }

    public function logOut(){
    	Session::put('admin_name',null);
    	Session::put('admin_id',null);
    	return Redirect('/admin');
    }



    



}
