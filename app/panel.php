<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class panel extends Model
{
    protected $fillable = [
        'name',   'title', 'msg', 
    ];
}
