<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Grammar;
use App\Category_vocabulary;
use App\vocabulary;

class HomeController extends Controller
{
    public function index(){
    	$titleGrammar=Grammar::all();
    	$titleVcabulary=Category_vocabulary::all();
    	

    	return view('pages.home',compact('titleGrammar','titleVcabulary'));
    }
}
