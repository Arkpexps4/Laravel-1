<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;

    protected $table = 'images';

    // Relacion One To Many / de uno a muchos

    public function comments()
    {
        return $this->hasMany('App\Models\comment');
    }

    // Relacion One To Many

    public function likes()
    {
        return $this->hasMany('App\Models\like');
    }

    // Relacion Many To One / de muchos a uno

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
