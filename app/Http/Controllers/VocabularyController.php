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
            $array_info=json_decode(pos($arrayCT));
            $v1=json_decode(pos($arrayCT))->list;
            $name_title=$array_info->name;
            foreach ($v1 as $key5 => $value5) {
                 $x2[]=$value5;
              }
              next($arrayCT);
         }

        $Sum_vocabulary=$x2;
         $total = count($Sum_vocabulary); // total count of the set, this is necessary so the paginator will know the total pages to display
         $page = $request->page ? $request->page : 1; // get current page from the request, first page is null
           
         $perPage = 15; // how many items you want to display per page?
         $offset = ($page - 1) * $perPage; // get the offset, how many items need to be "skipped" on this page

         $Sum_vocabulary = array_slice($Sum_vocabulary, $offset, $perPage); // the array that we actually pass to the paginator is sliced

         $vocabulary1=  new LengthAwarePaginator($Sum_vocabulary, $total, $perPage, $page, [
            'path' => $request->url(),
            'query' => $request->query()
        ]);


        return view('pages.vocabularyItemsAdd',compact('vocabulary1','id_level','name_title'));
    }

 
    // public function vocabularyPopular(){
    //    $id_vc=vocabulary::select('id')->get();
    //   return view('pages.cardTitleItems_vocabulary',compact('id_vc'));
    // }

    public function vocabularyPopular($id_category){
        // $id_category_get=Category_vocabulary::select('id')->get();
       $id_vc=vocabulary::where('Category_vocabulary_id',$id_category)->get();
       foreach ($id_vc as $key => $value) {
          $inforVocabulary=json_decode($value->vocabulary_content);
          $nametopic[$value->id]=$inforVocabulary->name;
       }
      return view('pages.cardTitleItems_vocabulary',compact('id_vc','nametopic'));
    }




    public function getImages_OK(){
         $vca=vocabulary::all();
      
        foreach ($vca as $value1) {
            $arrayCT[]=$value1->vocabulary_content;
            $array_info=json_decode(pos($arrayCT));
            $v1=json_decode(pos($arrayCT))->list;
            $name_title=$array_info->name;
            $name_level[]=$name_title;
            foreach ($v1 as $key5 => $value5) {
                // $x2[]=$value5->_id;
                $x2[$value5->_id]= $value5->image;//.$value5->image->name.$value5->image->type;
              }
              $x2[]="ket thuc".$name_title;
              next($arrayCT);
         }
         $nameImages=$x2;
        return view('pages.schema',compact('nameImages','name_level[]'));
    }


    public function getImages(){
        $vca=vocabulary::all();
        foreach ($vca as $value1) {
            $arrayCT[]=$value1->vocabulary_content;
            $array_info=json_decode(pos($arrayCT));
            $v1=json_decode(pos($arrayCT))->list;
            $id_level_audio=$array_info->idn->id;
            $id_audio_level[]=$id_level_audio;

            foreach ($v1 as $key5 => $value5) {
                if(isset($value5->word->word)){
                     $id_name_audio=$value5->word->word;
                } 

              if(isset($value5->word->_id) && !empty($value5->word->audio)){
                 $i=0;
                foreach ($value5->word->audio as $key_name_audio => $value_name) {

                    $name_audio=explode("/",$value_name);
                    $x2[]="https://kndict.com/upload/audio/word/fda750d28413811b3ede6e5911efd33c/".$id_level_audio."-202030/".$value5->word->_id."/".$i.'_'.$id_name_audio.".mp3";
                     $i++;
                }


                
              }
            
        
              }
               $x2[]=$array_info->idn->id."-----".$array_info->name;
           //$x2[]= "</br> ket thuc".$id_level_audio;
              next($arrayCT);
         }
         $file_audios=$x2;
        return view('pages.schema',compact('file_audios','id_audio_level'));

    }
     
}
