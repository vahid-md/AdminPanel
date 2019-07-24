<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use \Conner\Tagging\Taggable;

    protected $fillable = [
        'title','body','tag','author','category_id','photo_id'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
