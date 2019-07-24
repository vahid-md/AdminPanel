<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['path'];

    protected $uplods = '/images/';

    public function getPathAttribute($photo){
        return $this->uplods.$photo;
    }
}
