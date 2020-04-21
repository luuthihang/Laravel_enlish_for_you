<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuBarController extends Controller
{
   public function index(){
    	return view('pages.menuBar');
    }
}
