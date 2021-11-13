<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assistance extends Model
{
    protected $fillable = [
        'work', 'duedate', 'description','status',
    ];
}
