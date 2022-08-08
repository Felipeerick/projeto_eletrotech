<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderService_Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'ordem_service_id',
        'serviceDescription',
        'warranty',
        'valueService',
    ];
}
