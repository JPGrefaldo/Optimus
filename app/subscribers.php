<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscribers extends Model
{
    //
    public $incrementing = false;

    protected $fillable = [
        'name', 'email', 'password','company','image',
    ];
}
