<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrammarCardController extends Controller
{
    public function index(){
    	return view('pages.cardForGrammar');
    }

    public function detail_grammar(){
    	return view('pages.detail_grammar');
    }
}
