<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name',
        'title',
        'company',
        'message',
        'is_approved'
    ];
}



