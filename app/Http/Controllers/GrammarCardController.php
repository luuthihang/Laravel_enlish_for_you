<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Grammar;
class GrammarCardController extends Controller
{
    public function index(){
    	$tbl_grammar1=Grammar::all();//select('id','description','image');

    	// foreach ($tbl_grammar1 as $key => $value) {
    	// 	$grammar_title[$key]=$value->description;
    	// 	$grammar_image=$value->image;
    	// }
    	return view('pages.cardForGrammar',compact('tbl_grammar1'));
    }

    // public function detail_grammar(){
    // 	return view('pages.detail_grammar');
    // }
    public function detail_grammar($id_grammar){
    	$grammar_content1=Grammar::where('id',$id_grammar)->get();
    	foreach ($grammar_content1 as $key => $value) {
    		$grammar_content[]=$value->content;
    	}
    	return view('pages.detail_grammar',compact('grammar_content'));
    }
}
