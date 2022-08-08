<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index()
    {
        $clientes = $this->cliente->all();

        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->cliente->create($data);

        return redirect()->route('cliente.index');
    }

   
    public function show($id)
    {
        if(!$cliente = $this->cliente->find($id))
            return redirect()->route('cliente.index');

        $title = 'Usuário '. $cliente->name;

        return view('cliente.show', compact('cliente', 'title'));
    }

   
    public function edit($id)
    {
        if(!$cliente = $this->cliente->find($id))
            return redirect()->route('cliente.index');

        return view('cliente.edit', compact('cliente'));
    }


    public function update(Request $request, $id)
    {
        if (!$cliente =  $this->cliente ->find($id))
            return redirect()->route('cliente.index');
        
        $data = $request->all();
        
        $cliente->update($data);

        return redirect()->route('cliente.index');
    }

    
    public function destroy($id)
    {
        $cliente =  $this->cliente->find($id);

        $cliente->delete();

        return redirect()->route('cliente.index');
    }
}
