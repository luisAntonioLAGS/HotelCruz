<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbercaController extends Controller
{
  public function index(Request $request)
  {
    $alberca = \DB::table('ReservacionServicios')
      ->select('NombreCliente', 'Fecha', 'PrecioServicio', 'Pago', 'Cambio', 'FechaRegistro')
      ->get();

    return view('recepcionista.alberca', compact('alberca'));
  }

  public function registroalberca()
  {
    $servicio = \DB::table('Servicio')
      ->select('ClaveServicio', 'Servicio', 'PrecioDia')
      ->where('ClaveServicio', 'S-0001')
      ->get();

    return view('recepcionista.registroalberca', compact('servicio'));
  }

  public function registroalbercapost(Request $request)
  {
    try {
      $request->validate([
        'nombre' => 'required',
        'fecha' => 'required|date',
        'pago' => 'required|numeric',
        'cambio' => 'required|numeric',
        'precio' => 'required|numeric'
      ]);

      // Asumiendo que tienes los datos necesarios para la inserción en la tabla Habitacion
      \DB::table('ReservacionServicios')->insert([
        'NombreCliente' => $request->nombre,  // Reemplaza con los nombres y valores reales
        'Fecha' => $request->fecha,
        'ClaveServicio' => 'S-0001',
        'PrecioServicio' => $request->precio,
        'Pago' => $request->pago,
        'Cambio' => $request->cambio,
        'DiasServicio' => 1,
        'TotalServicio' => $request->precio,
        'FechaRegistro' => date('Y-m-d H:i:s'),
      ]);

      return redirect()->route('alberca')->with('success', 'Registro realizado con éxito.');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Error en el registro: ' . $e->getMessage());
    }
  }
}
