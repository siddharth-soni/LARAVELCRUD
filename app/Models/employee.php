<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'password',
        'city',
        'address',
        'phone',
    ];
}
