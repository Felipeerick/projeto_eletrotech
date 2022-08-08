<?php

namespace App\Http\Controllers;

use App\Models\{
    Cliente,
    OrderService,
    OrderService_Product,   
    OrderService_Service
};

use Illuminate\Http\Request;

class OrderServiceController extends Controller
{
   public function __construct(OrderService_Product $product, OrderService_Service $service, OrderService $orderService, Cliente $cliente)
   {
    $this->product = $product;
    $this->service = $service;
    $this->orderService = $orderService;
    $this->cliente = $cliente;
   }

    public function index()
    {
        $Order_Service = OrderService::all();
        return view('orderService.index', compact('Order_Service'));
    }

    public function create()
    {
        $clientes = $this->cliente->all();

        return view('orderService.create', compact('clientes'));
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
