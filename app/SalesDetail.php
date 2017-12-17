<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesDetail extends Model
{
    public function main(){
        return $this->belongsTo('Sales');
    }
}
