<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;


use App\vocabulary;
use App\Category_vocabulary;

class VocabularyController extends Controller
{
    public function vocabularyTitle(){
        $categor_vocabulary=Category_vocabulary::all();
    	return view('pages.vocabularyTitle',compact('categor_vocabulary'));
    }
   

     public function vocabularyItems_ok1(Request $request){
     	 //$vocabulary1=vocabulary::all();
         // $vocabulary1=vocabulary::where('id',1)->paginate(10);
            #ok
         //$vocabulary1=vocabulary::where('id','>',0)->paginate(1);
        
         #v1
         //  $vca=vocabulary::all();
      
         //  foreach ($vca as $value1) {
         //      $arrayCT[]=$value1->vocabulary_content;
         //  }
         // foreach ($arrayCT as $key2 => $value2) {
         //         $x[]=$value2;
         //     }
         //  foreach ($x as $key3 => $value3) {
         //     $v1=json_decode($value3);
         //       $x1[]=$v1->list;
         //  }

         //  foreach ($x1 as $key4 => $value4) {
         //       foreach ($value4 as $key5 => $value5) {
         //          $x2[]=$value5;
         //       }
         //     }
         #v2
         // foreach ($vca as $value1) {
         //     $arrayCT[]=$value1->vocabulary_content;
         // }
         // foreach ($arrayCT as $key3 => $value3) {
         //    $v1=json_decode($value3);
         //      $x1[]=$v1->list;
         //      foreach (pos($x1) as $key5 => $value5) {
         //         $x2[]=$value5;
         //      }
         //      next($x1);
         // }

        $vca=vocabulary::all();
        foreach ($vca as $value1) {
             $arrayCT[]=$value1->vocabulary_content;
            $v1=json_decode(pos($arrayCT))->list;
              foreach ($v1 as $key5 => $value5) {
                 $x2[]=$value5;
              }
              next($arrayCT);
         }

        // $results=$x2;
         // $perPage=10;
         // $vocabulary1 =new Paginator($results,$perPage);
         //    $vocabulary1 = new LengthAwarePaginator($results,count($results),10,2, [
         // 'path' => $request->url(),
         // 'query' => $request->query()
         // ]);
     $Sum_vocabulary=$x2;
     $total = count($Sum_vocabulary); // total count of the set, this is necessary so the paginator will know the total pages to display
     $page = $request->page ? $request->page : 1; // get current page from the request, first page is null
       
     $perPage = 10; // how many items you want to display per page?
     $offset = ($page - 1) * $perPage; // get the offset, how many items need to be "skipped" on this page

     $Sum_vocabulary = array_slice($Sum_vocabulary, $offset, $perPage); // the array that we actually pass to the paginator is sliced

     $vocabulary1=  new LengthAwarePaginator($Sum_vocabulary, $total, $perPage, $page, [
        'path' => $request->url(),
        'query' => $request->query()
    ]);
   
    	// return view('pages.vocabularyItemsAdd',['vc'=>$vocabulary1]);

    	 return view('pages.vocabularyItemsAdd',compact('vocabulary1'));
    }

    public function vocabularyItems_ok2($id_level){
         $vocabulary1=vocabulary::where('id',$id_level)->get();
        return view('pages.vocabularyItemsAdd',compact('vocabulary1'));
    }


    public function vocabularyItems($id_level,Request $request){

         $vca=vocabulary::where('id',$id_level)->get();
        // $vca=vocabulary::all();
        foreach ($vca as $value1) {
            $arrayCT[]=$value1->vocabulary_content;
            $v1=json_decode(pos($arrayCT))->list;
            foreach ($v1 as $key5 => $value5) {
                 $x2[]=$value5;
              }
              next($arrayCT);
         }

        $Sum_vocabulary=$x2;
         $total = count($Sum_vocabulary); // total count of the set, this is necessary so the paginator will know the total pages to display
         $page = $request->page ? $request->page : 1; // get current page from the request, first page is null
           
         $perPage = 10; // how many items you want to display per page?
         $offset = ($page - 1) * $perPage; // get the offset, how many items need to be "skipped" on this page

         $Sum_vocabulary = array_slice($Sum_vocabulary, $offset, $perPage); // the array that we actually pass to the paginator is sliced

         $vocabulary1=  new LengthAwarePaginator($Sum_vocabulary, $total, $perPage, $page, [
            'path' => $request->url(),
            'query' => $request->query()
        ]);


        return view('pages.vocabularyItemsAdd',compact('vocabulary1','id_level'));
    }

 
    // public function vocabularyPopular(){
    //    $id_vc=vocabulary::select('id')->get();
    //   return view('pages.cardTitleItems_vocabulary',compact('id_vc'));
    // }

    public function vocabularyPopular($id_category){
        // $id_category_get=Category_vocabulary::select('id')->get();
       $id_vc=vocabulary::where('Category_vocabulary_id',$id_category)->get();
      return view('pages.cardTitleItems_vocabulary',compact('id_vc'));
    }
     
}
