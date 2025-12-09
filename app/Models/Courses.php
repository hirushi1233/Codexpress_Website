<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'icon_url',
        'icon_class',
        'content',
        'projects',
        'is_active',
        'order'
    ];

    protected $casts = [
        'content' => 'array',
        'is_active' => 'boolean'
    ];

    // Scope to get only active courses
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope to get ordered courses
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
