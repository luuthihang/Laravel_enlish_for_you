<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vocabulary extends Model
{
    protected $table="tbl_vocabulary";
    public function category_vocabulaty(){
    	return $this->belongsTo('App\Category_vocabulary','Category_vocabulary_id','id');
    }
}
