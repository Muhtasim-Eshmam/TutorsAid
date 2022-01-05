<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class submission extends Model
{
        protected $fillable = [
            'name',
        'email',
        'topic',
        'class',
        'description',
      'image_path',
        ];
  
    
    public function getImagePathAttribute($value)
    {
        if ($value)
        {
            return asset($value);
        }
    }
}
