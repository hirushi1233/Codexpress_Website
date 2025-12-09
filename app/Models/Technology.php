<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon_url',
        'icon_class',
        'description',
        'order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer'
    ];

    // Scope to get only active technologies
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope to order by custom order field
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
