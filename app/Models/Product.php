<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'price',
        'color',
        'materials',
        'brand',
        'short_description',
        'description',
        'image',
        'desc_image',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
