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
        'valueTotalService',
        'valueTotalProduct',
        'valueTotalOs',
        'discountService',
        'discountProduct',
        'status',
        'equipment',
        'model',
        'brand',
        'serialNumber',
        'observation',
        'defect',
        'technicalReport',
        'serviceDescription',
        'warrantyService',
        'valueService',
        'productDescription',
        'warrantyProduct',
        'valueProduct',
        'name',
        'tel',
    ];

    public function getOrderService($search){
        $orderService = $this->where(function ($query) use ($search){
            if($search){
                $query->where('name', 'LIKE', "%{$search}%");
            }
        });

        return $orderService->paginate(6);
    }
}
