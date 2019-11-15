<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
