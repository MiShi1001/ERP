<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function suppliers()
    {
        return $this->hasMany('Supplier');
    }
    public function consumers()
    {
        return $this->hasMany('Consumer');
    }
    public function products()
    {
        return $this->hasMany('Product');
    }
    public function manifacturers()
    {
        return $this->hasMany('Manifacturer');
    }

}
