<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'part_number',
        'description',
        'category_id',
        'brand_id',
        'car_year'
    ];

    protected $guarded = [
        'id'
    ];

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    protected static function booted(){
        static::creating(function($product){
            $product->slug = Str::slug($product->name);
        });
    }
}
