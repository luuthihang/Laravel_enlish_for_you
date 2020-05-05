<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Storys;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();
class ControllerStory extends Controller
{
    public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

	public function titleStory(){
        
		$story=Storys::all();
    	return view('pages.titleStory',compact('story'));
    }
    public function showStory($id_story){
        
    	$story=Storys::where('id',$id_story)->get();
    	return view('pages.stoty',compact('story'));
    }

	public function all_story(){
         $this->AuthLogin();
		$get_all_story=DB::table('tbl_story')->get();
		$manager_story=view('admin.all_story')->with('sen_all_story',$get_all_story);
    	return view('admin_layout')->with('admin.all_story',$manager_story);
    }


    public function add_story(){
         $this->AuthLogin();
    	return view('admin.add_story');
    }
    // public function save_story(Request $request){
    // 	$data=array();
    // 	$data['title_en']=$request->nameEn;
    // 	$data['title_vn']=$request->nameVn;
    // 	$data['content_en']=$request->content_story_en;
    // 	$data['content_vn']=$request->content_story_vn;
    // 	$data['image1']=$request->image1;
    // 	$data['image2']=$request->image2;
    // 	DB::table('tbl_story')->insert($data);
    // 	Session::put('message','Them thanh cong');
    // 	return Redirect::to('add-story');
    // }


    public function save_story(Request $request){
        $data=array();
        $data['title_en']=$request->nameEn;
        $data['title_vn']=$request->nameVn;
        $data['content_en']=$request->content_story_en;
        $data['content_vn']=$request->content_story_vn;
        // $data['image1']=$request->image1;
        // $data['image2']=$request->image2;
        $get_image1=$request->file('image1');
        $get_image2=$request->file('image2');

        if($get_image1 || $get_image2){
            $get_name1=$get_image1->getClientOriginalName();
            $name1=current(explode('.', $get_name1));
            $new_image1=$name1.rand(0,99).'.'.$get_image1->getClientOriginalExtension();
            $get_image1->move('public\frontend\images',$new_image1);
            $data['image1']= $new_image1;

            $get_name2=$get_image2->getClientOriginalName();
            $name2=current(explode('.', $get_name2));
            $new_image2=$name2.rand(0,99).'.'.$get_image2->getClientOriginalExtension();
            $get_image2->move('public\frontend\images',$new_image2);
            $data['image2']= $new_image2;

            DB::table('tbl_story')->insert($data);
            Session::put('message','Them thanh cong');
            return Redirect::to('add-story');
        }

        $data['image1']= '';
        $data['image2']= '';
        DB::table('tbl_story')->insert($data);
        Session::put('message','Them thanh cong');
        return Redirect::to('add-story');
    }

    public function edit_story($id_story_edit){
        $this->AuthLogin();
        $storyItem=DB::table('tbl_story')->where('id',$id_story_edit)->get();
        $maneger_story=view('admin.edit_story')->with('item_story',$storyItem);
        return view('admin_layout')->with('admin.edit_story',$maneger_story);
    }

    public function update_story($id,Request $request){
        $this->AuthLogin();
        $data=array();
        $data['title_en']=$request->nameEn;
        $data['title_vn']=$request->nameVn;
        $data['content_en']=$request->content_story_en;
        $data['content_vn']=$request->content_story_vn;
        // $data['image1']=$request->image1;
        // $data['image2']=$request->image2;
         $get_image1=$request->file('image1');
        $get_image2=$request->file('image2');

        if($get_image1 || $get_image2){
            $name1=$get_image1->getClientOriginalName();
            $getn1=current(explode('.', $name1));
            $new_image1=$getn1.rand(0,99).'.'.$get_image1->getClientOriginalExtension();
            $get_image1->move('public\frontend\images',$new_image1);//public\upload\stories
            $data['image1']= $new_image1;

            $name2=$get_image2->getClientOriginalName();
            $getn2=current(explode('.',$name2));
            $new_image2=$getn2.rand(0,99).'.'.$get_image2->getClientOriginalExtension();
            $get_image2->move('public\frontend\images',$new_image2);
            $data['image2']= $new_image2;

            DB::table('tbl_story')->where('id',$id)->update($data);
            Session::put('message','update thanh cong 1 item');
            return Redirect('all-story');
        }
        $data['image1']="";
        $data['image2']="";
        DB::table('tbl_story')->where('id',$id)->update($data);
        Session::put('message','update thanh cong 1 item');
        return Redirect('all-story');
    }


    public function delete_story($id_story_delete){
        $this->AuthLogin();
        DB::table('tbl_story')->where('id',$id_story_delete)->delete();
        Session::put("message","Da xoa");
        return Redirect('all-story');

    }
}
