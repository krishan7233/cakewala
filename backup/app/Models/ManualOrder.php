<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManualOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'timing',
        'address',
        'receiver_name',
        'contact_number',
        'alternate_number',
        'occasion',
        'cake_message',
        'flavour',
        'weight',
        'reference_photo',
    ];
}
