<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifacturer extends Model
{
    public function user()
    {
        return $this->belongsTo('User', 'id');
    }
}
