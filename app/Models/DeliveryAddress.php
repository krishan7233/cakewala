<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryAddress extends Model
{
    use HasFactory;

    // Table name (optional, if following Laravel convention)
    protected $table = 'delivery_addresses';

    // Mass-assignable fields
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'landmark',
        'pincode',
        'city',
        'mobile',
        'alt_mobile',
    ];
    

    // Relationship to User (optional)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
