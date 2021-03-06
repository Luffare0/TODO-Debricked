<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function todos()
    {
        return $this->hasMany('App\Todo');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
