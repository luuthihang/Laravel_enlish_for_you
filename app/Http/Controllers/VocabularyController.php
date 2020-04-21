<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use App\vocabulary;
use App\Category_vocabulary;

class VocabularyController extends Controller
{
    // public function index(){
    // 	return view('pages.vocabularyTitle');
    // }
    public function vocabularyTitle(){
    	return view('pages.vocabularyTitle');
    }

     public function vocabularyItems(){
     	 $vocabulary1=vocabulary::all();
          // $vocabulary1=vocabulary::where('id',1)->paginate(10);
         
        // $vca=vocabulary::all();

        // $SVoC=$vca->vocabulary_content;
        // $JVoc=json_decode($SVoC);


    	// return view('pages.vocabularyItemsAdd',['vc'=>$vocabulary1]);
    	return view('pages.vocabularyItemsAdd',compact('vocabulary1'));
    }


   



     
}
