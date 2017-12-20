<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Previlege extends Model
{
    public function users() //  Previlege (1) -> User (n)
    {
        return $this->hasMany(User::class);
    }
}
