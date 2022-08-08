<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderService_Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
       'ordem_product_id',
        'productDescription',
       'warranty',
       'valueProduct',
    ];
}
