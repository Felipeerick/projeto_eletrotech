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
        $order_service = OrderService::all();
        return view('orderService.index', compact('order_service'));
    }

    public function create()
    {
        $clientes = $this->cliente->all();

        return view('orderService.create', compact('clientes'));
    }

   
    public function store(Request $request)
    {
        $data = $request->all();

        
        $data['valueTotalService'] = ($request->valueService - $request->discountService);
        $data['valueTotalProduct'] = ($request->valueProduct - $request->discountProduct);
        
        $data['valueTotalOs'] = $data['valueTotalService'] + $data['valueTotalProduct'];

        $this->orderService->create($data);

        return redirect()->route('orderService.index')->with('create', 'Adicionado com sucesso!');
    }

   
    public function show($id)
    {
        if(!$order = $this->orderService->find($id))
        return redirect()->route('orderService.index');

        return view('orderService.show', compact('order'));
    }

   
    public function edit($id)
    {
        if(!$order = $this->orderService->find($id))
        return redirect()->route('cliente.index');

        $clientes = $this->cliente->all();
       
        return view('orderService.edit', compact('order', 'clientes'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();

        $order = $this->orderService->find($id);

        $order->update($data);

        return redirect()->route('orderService.index')->with('edit', 'Editado com sucesso!');
    }

    
    public function destroy($id)
    {
        $order = $this->orderService->find($id);

        $order->delete();

        return redirect()->route('orderService.index')->with('remove', 'Removido com sucesso!');
    }
}
