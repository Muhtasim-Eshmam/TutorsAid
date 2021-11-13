<?php

namespace App;


    use Illuminate\Database\Eloquent\Model;
    
    class notes extends Model
    {
      
    
        protected $fillable = [
            'classno',
        'topic',
        'subject',
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