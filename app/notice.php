<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notice extends Model
{
    protected $fillable = [
        'title', 'subject','type',
    ];
    
}
