<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table="tbl_videos";
    public function category_video(){
    	return $this->belongsTo('App\Category_videos','category_video','id');
    }
}
