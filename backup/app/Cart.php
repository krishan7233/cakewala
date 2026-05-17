<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductVariant;
use App\Models\Product;
class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['session_id', 'product_id', 'variant_id', 'quantity', 'price', 'discount'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function variant()
    {
        return $this->belongsTo(ProductVariant::class);
    }

   
}
