<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class incometab extends Model
{
    protected $fillable = [
        'name', 'month', 'amount','email','status',
    ];
}
