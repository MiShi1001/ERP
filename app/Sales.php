<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    public function detail(){
        return $this->hasMany('SalesDetail');
    }
}
