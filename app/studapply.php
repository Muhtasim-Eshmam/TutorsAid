<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studapply extends Model
{
    protected $fillable = [
        'taskid', 'name', 'education','grade',
    ];
}
