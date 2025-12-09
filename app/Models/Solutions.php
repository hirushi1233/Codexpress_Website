<?php

// app/Models/Solution.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solutions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'icon_url',
        'icon_class',
        'category',
        'order',
        'is_active'
    ];
}
