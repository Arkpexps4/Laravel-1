<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    use HasFactory;

    protected $table = 'likes';

    // Relacion Many To One / de muchos a uno

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    // Relacion Many To One / de muchos a uno

    public function image()
    {
        return $this->belongsTo('App\image', 'image_id');
    }
}
