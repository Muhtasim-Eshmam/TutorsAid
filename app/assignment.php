<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assignment extends Model
{
    protected $fillable = [
        'topic', 'duedate', 'description','class',
    ];
}
