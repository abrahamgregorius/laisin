<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

    protected static function booted(){
        static::creating(function($category){
            $category->slug = Str::slug($category->name);
        });
    }

    
}
