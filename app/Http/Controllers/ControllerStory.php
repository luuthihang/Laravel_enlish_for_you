<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Storys;
class ControllerStory extends Controller
{
	public function titleStory(){
		$story=Storys::all();
    	return view('pages.titleStory',compact('story'));
    }
    public function showStory($id_story){
    	$story=Storys::where('id',$id_story)->get();
    	return view('pages.stoty',compact('story'));
    }
}
