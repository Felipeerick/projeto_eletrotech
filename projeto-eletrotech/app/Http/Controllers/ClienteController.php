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

        return view('admin.index', compact('clientes'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->cliente->create($data);

        return redirect()->route('admin.index');
    }

   
    public function show($id)
    {
        if(!$cliente = $this->cliente->find($id))
            return redirect()->route('admin.index');

        $title = 'Usuário '. $cliente->name;

        return view('admin.show', compact('cliente', 'title'));
    }

   
    public function edit($id)
    {
        if(!$cliente = $this->cliente->find($id))
            return redirect()->route('admin.index');

        return view('admin.edit', compact('cliente'));
    }


    public function update(Request $request, $id)
    {
        if (!$cliente =  $this->cliente ->find($id))
            return redirect()->route('admin.index');
        
        $data = $request->all();
        
        $cliente->update($data);

        return redirect()->route('admin.index');
    }

    
    public function destroy($id)
    {
        if (!$cliente =  $this->cliente ->find($id))
            return redirect()->route('admin.index');

        $this->cliente->delete($cliente);

        return redirect()->route('admin.index');
    }
}
