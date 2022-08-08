<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct(Cliente $Cliente)
    {
        $this->cliente = $Cliente;
    }

    public function index()
    {
        $clientes = $this->cliente->all();

        return view('admin.index', compact('clientes'));
    }

    public function create()
    {
        return view('admin.create');

        return redirect()->route('admin.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->cliente->create($data);
    }

   
    public function show($id)
    {
        $cliente = $this->cliente->find($id);

        $title = 'Usuário '. $cliente->name;

        return view('admin.show', compact('cliente', 'title'));
    }

   
    public function edit($id)
    {
        $cliente = $this->cliente->find($id);
        return view('admin.edit', compact('cliente'));
    }


    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $cliente = $this->cliente->find($id);

        $this->cliente->delete($cliente);
    }
}
