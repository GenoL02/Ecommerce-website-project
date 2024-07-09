<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'category_id',
        'city_id',
        'draft_content',
        'sku',
        'name',
        'slug',
        'price',
        'discount',
        'discount_type',
        'status',
        'published',
        'quantity',
        'description',
        'brand',
        'warranty',
        'warranty_type',
        'shipping',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details');
    }
}
