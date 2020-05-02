<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_videos extends Model
{
    protected $table="tbl_category_video";
    public function Videos(){
    	return $this->hasMany('App\Videos','category_video','id');
    }

}
