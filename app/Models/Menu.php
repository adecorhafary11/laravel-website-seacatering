<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    // use SoftDeletes;
    // use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'details',
        'image'
        

    ];

    // protected $casts = [
    //     'is-active' => 'boolean',
    //     'is_featured' => 'boolean',
    // ];

    // Accessor untuk URL gambar
    // public function imageUrl(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value, $attributes) => $attributes['image'] 
    //             ? asset('storage/menus/'.$attributes['image']) 
    //             : asset('images/default-food.png')
    //     );
    // }

    // // Scope untuk menu aktif
    // public function scopeActive($query)
    // {
    //     return $query->where('is_active', true);
    // }

    // // Scope untuk menu unggulan
    // public function scopeFeatured($query)
    // {
    //     return $query->where('is_featured', true);
    // }

    // // Scope untuk urutan
    // public function scopeOrdered($query)
    // {
    //     return $query->orderBy('position')->orderBy('name');
    // }
}