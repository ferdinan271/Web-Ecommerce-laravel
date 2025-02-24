<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'is_active'
    ];


}
