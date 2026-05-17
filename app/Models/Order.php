<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id','id');
    }
    
     public function users_address()
    {
        return $this->hasMany(DeliveryAddress::class, 'id','address_id');
    }
}
