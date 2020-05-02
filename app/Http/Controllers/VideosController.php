<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category_videos;
use App\Videos;
use DB;
class VideosController extends Controller
{
	public function VideoTitle(){
		$category_video=Category_videos::all();
		return view('pages.VideoTitle',compact('category_video'));
	}

    public function showVideos($id){
    	$get_video=Videos::where('category_video',$id)->paginate(9);
    	return view('pages.Videos',compact('get_video'));
    }

    public function insertData(){
    	$url_1="F:\laragon\www\boctachHTML\animate.txt";
    	$url="F:\laragon\www\boctachHTML\dayli.txt";
    	
    	if(file_exists($url)){
    		$data=file($url);
    	}else{
    		$data=0;
    	}
    	$editarray=array_unique ($data);

    	foreach ($editarray as $key => $value) {
    		$idvideo=array('category_video'=>2,'id_video'=>trim($value));
    		//DB::table('tbl_videos')->insert($idvideo);
    	}

    	//return view('pages.insert',compact('data'));
    }
}
