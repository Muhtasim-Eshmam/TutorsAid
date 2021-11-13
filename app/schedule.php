<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $fillable = [
        'subject', 'time','date','bookname','price','store'
    ];
    
}
