<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function baskets()
    {
        return $this->belongsTo(Basket::class)->withPivot('quantity');
    }

    public function getCategory()
    {
        return Category::find($this->category_id);
    }

    public function getBrand()
    {
        return Brand::find($this->brand_id);
    }
}
