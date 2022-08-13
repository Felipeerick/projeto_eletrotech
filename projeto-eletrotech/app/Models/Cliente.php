<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'tel',
        'street',
        'neighborhood',
        'state',
        'city',
    ];

    public function getClientes($search){
        $cliente = $this->where(function ($query) use ($search){
            if($search){
                $query->where('email', $search);
                $query->orWhere('name', 'LIKE', "%{$search}%");
            }
        });
        
        return $cliente->paginate(6);
    }
}
