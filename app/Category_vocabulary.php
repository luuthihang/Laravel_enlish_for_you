<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_vocabulary extends Model
{
    protected $table="tbl_category_vocabulary";
    public function vocabulary(){
    	return $this->hasMany('App\vocabulary','Category_vocabulary_id','id');
    }
}
