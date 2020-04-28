<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerStory extends Controller
{
	public function titleStory(){
    	return view('pages.titleStory');
    }
    public function showStory(){
    	return view('pages.stoty');
    }
}
