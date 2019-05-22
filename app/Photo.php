<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function categories_id(){
        return $this->belongsTo(categories::class);
    }
}