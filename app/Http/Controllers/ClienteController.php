<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');

        $clientes = Cliente::when($search, function ($query) use ($search) {
            $query->where('ClaveCliente', 'like', "%{$search}%")
                ->orWhere('Curp', 'like', "%{$search}%")
                ->orWhere('NombreCompleto', 'like', "%{$search}%")
                ->orWhere('Edad', 'like', "%{$search}%")
                ->orWhere('Telefono', 'like', "%{$search}%")
                ->orWhere('Estatus', 'like', "%{$search}%");
        })->get();

        return view('recepcionista.clientes', compact('clientes'));
    }

    public function clientesadmin(Request $request)
    {
        $search = $request->input('search');

        $clientes = Cliente::when($search, function ($query) use ($search) {
            $query->where('ClaveCliente', 'like', "%{$search}%")
                ->orWhere('Curp', 'like', "%{$search}%")
                ->orWhere('NombreCompleto', 'like', "%{$search}%")
                ->orWhere('Edad', 'like', "%{$search}%")
                ->orWhere('Telefono', 'like', "%{$search}%")
                ->orWhere('Estatus', 'like', "%{$search}%");
        })->get();

        return view('admin.clientesadmin', compact('clientes'));
    }
    

}
