<?php

namespace App\Models;

use App\Models\Cliente;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderService extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'dateOfEntry',
        'valueTotal',
        'discount',
        'status',
        'equipment',
        'model',
        'brand',
        'serialNumber',
        'observation',
        'defect',
        'order_service_id',
        'serviceDescription',
        'warrantyService',
        'valueService',
        'order_product_id',
        'productDescription',
        'warrantyProduct',
        'valueProduct',
        'name',
        'tel',
    ];

    public function cliente(){
        return $this->hasMany(Cliente::class);
    }
}
