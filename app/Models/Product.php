<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'brand',
        'image_path',
        'description',
    ];

    /**
     * Scope: filter by brand using case-insensitive comparison.
     * Uses LOWER() for MySQL case-insensitive matching regardless of collation.
     */
    public function scopeByBrand(Builder $query, string $brand): Builder
    {
        return $query->whereRaw('LOWER(brand) = ?', [strtolower($brand)]);
    }
}
