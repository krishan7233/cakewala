<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductVariant;
use App\Models\Product;
class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['session_id','user_id', 'product_id', 'variant_id', 'quantity', 'price', 'discount','product_message','order_image','shipping_charge','delivery_date','time_slot'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function variant()
    {
        return $this->belongsTo(ProductVariant::class);
    }

   
}
