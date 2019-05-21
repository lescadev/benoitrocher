<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    public function categories_id(){
        return $this->belongsTo(categories::class);
    }
}