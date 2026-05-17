<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
        protected $fillable = [
        'weight',
        'reference_photo',
        'details',
        'receiver_name',
        'contact_number',
        'city',
        'date_time',
    ];
}
