<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function parent() {
        return $this->belongsTo(static::class, 'parent_id');
    }

    public function scopeRoot($query)
    {
        return $query->where('parent_id', 0);
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id')->with('children')->orderBy('name', 'asc');
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
