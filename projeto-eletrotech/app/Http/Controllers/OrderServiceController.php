<?php

namespace App\Http\Controllers;

use App\Models\{
    Cliente,
    OrderService,
};

use Illuminate\Http\Request;

class OrderServiceController extends Controller
{
   public function __construct( OrderService $orderService, Cliente $cliente)
   {
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
        $data = $request->all();

        $data['valueTotal'] = $request->valueService + $request->valueProduct;
        
        $this->orderService->create($data);
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
