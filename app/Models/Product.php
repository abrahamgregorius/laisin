<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'part_number',
        'description',
        'brand_id',
        'car_year'
    ];

    protected $guarded = [
        'id'
    ];

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
}
