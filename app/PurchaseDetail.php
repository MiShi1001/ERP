<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    public function main(){
        return $this->belongsTo('Purchase');
    }
}
