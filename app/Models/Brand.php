<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;



class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'slug'
    ];
    protected $guarded = [
        'id'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    protected static function booted(){
        static::creating(function($brand){
            $brand->slug = Str::slug($brand->brand_name);
        });
    }

}
