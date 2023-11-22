<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vuno="11";
        $vdos=12;
        $datosClientes=Cliente::all();
        return view('cliente.index')->with('clientes',$datosClientes)->with('rvariable',$vuno)->with('rd');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cliente=new Cliente();
        $cliente->nombre=$request->get('nombre');
        $cliente->apellido=$request->get('apellido');
        $cliente->telefono=$request->get('telefono');
        $cliente->save();

        return redirect('clientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $clienteEliminar=Cliente::find($id);

        return view('cliente.delete')->with('clienteEliminado',$clienteEliminar);
    

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clienteEditar=Cliente::find($id);
        return view('cliente.edit')->with('datoCliente',$clienteEditar);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cliente=Cliente::find($id);
        $cliente->nombre=$request->get('nombre');
        $cliente->apellido=$request->get('apellido');
        $cliente->telefono=$request->get('telefono');
        $cliente->save();
        return redirect('clientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado=Cliente::find($id);
        $eliminado->delete();

        return redirect('clientes');

    }
}
