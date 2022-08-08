<?php

namespace App\Models;

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
    ];

    public function OrderService_Product()
    {
        return $this->hasMany(OrdemService_Product::class);
    }

    public function OrderService_Service()
    {
        return $this->hasMany(OrdemService_Service::class);
    }

    public function cliente(){
        return $this->hasMany(Cliente::class);
    }
}
