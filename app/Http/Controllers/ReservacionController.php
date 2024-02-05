<?php

namespace App\Http\Controllers;

use App\Models\Reservacion;
use Illuminate\Http\Request;

class ReservacionController extends Controller
{

  public function index()
  {
    $reservaciones = Reservacion::all(); // Obtén todas las reservaciones

    return view('recepcionista.reservaciones', compact('reservaciones'));
  }

  public function registrocliente()
  {
    $habitaciones = \DB::table('Habitacion')
      ->select('ID', 'NoHabitacion', 'PrecioNoche')
      ->where('Estatus', 'DISPONIBLE') // Corrección aquí
      ->get();

    return view('recepcionista.registrocliente', compact('habitaciones'));
  }

  public function registroreservacion(Request $request)
  {
    // Inicia una transacción
    \DB::beginTransaction();

    try {
      $request->validate([
        // Validaciones para Cliente
        'curp' => 'required',
        'nombre' => 'required',
        'apellidoPaterno' => 'required',
        'apellidoMaterno' => 'required',
        'telefono' => 'required|integer',
        'correo' => 'required|email',
        'fechaNacimiento' => 'required|date',
        'ciudad' => 'required',
        'estado' => 'required',
        'codigoPostal' => 'required',
        // Validaciones para Reservacion
        'habitacion' => 'required',
        'fechaEntrada' => 'required|date',
        'fechaSalida' => 'required|date',
        'cantidadPersonas' => 'required|integer'
      ]);

      // Verificar si la CURP ya existe en la tabla Cliente
      $cliente = \DB::table('Cliente')->where('Curp', $request->curp)->first();

      if ($cliente) {
        // La CURP ya existe, actualizamos los datos del cliente
        \DB::table('Cliente')->where('Curp', $request->curp)->update([
          'Nombre' => $request->nombre,
          'ApellidoPaterno' => $request->apellidoPaterno,
          'ApellidoMaterno' => $request->apellidoMaterno,
          'Telefono' => $request->telefono,
          'Correo' => $request->correo,
          'FechaNacimiento' => $request->fechaNacimiento,
          'Ciudad' => $request->ciudad,
          'Estado' => $request->estado,
          'CodigoPostal' => $request->codigoPostal,
        ]);

        // Obtener la ClaveCliente del cliente existente
        $claveCliente = $cliente->ClaveCliente;
      } else {
        // La CURP no existe, insertamos un nuevo cliente
        $claveCliente = 'C-' . time(); // Generar la ClaveCliente con el formato "C-tiempo"
        \DB::table('Cliente')->insert([
          'Curp' => $request->curp,
          'Nombre' => $request->nombre,
          'ApellidoPaterno' => $request->apellidoPaterno,
          'ApellidoMaterno' => $request->apellidoMaterno,
          'Telefono' => $request->telefono,
          'Correo' => $request->correo,
          'FechaNacimiento' => $request->fechaNacimiento,
          'Ciudad' => $request->ciudad,
          'Estado' => $request->estado,
          'CodigoPostal' => $request->codigoPostal,
          'ClaveCliente' => $claveCliente,
        ]);
      }

      // Registrar la reservación
      \DB::table('Reservacion')->insert([
        'ClaveCliente' => $claveCliente,
        'IDHabitacion' => $request->habitacion,
        'FechaInicio' => $request->fechaEntrada,
        'FechaFin' => $request->fechaSalida,
        'CantidadPersonas' => $request->cantidadPersonas,
        'EstatusValidacion' => 'PENDIENTE'
      ]);

      // Actualizar el estatus de la habitación a Ocupado
      \DB::table('Habitacion')->where('ID', $request->habitacion)->update(['estatus' => 'Ocupado']);

      // Commit de la transacción
      \DB::commit();

      return redirect()->route('registrocliente')->with('success', 'Reservación realizada con éxito.');
    } catch (\Exception $e) {
      // Rollback en caso de error
      \DB::rollBack();

      // Manejar el error según tus necesidades
      return redirect()->back()->with('error', 'Error en la reservación: ' . $e->getMessage());
    }
  }


  public function checkinpost(Request $request)
  {
    try {
      $request->validate([
        // Validaciones para Cliente
        'id' => 'required|integer',
        'horaEntrada' => 'required|date_format:H:i',
      ]);

      // Actualizar el campo HoraCheckEntrada y EstatusValidacion
      Reservacion::where('Folio', $request->id)
        ->where('EstatusValidacion', 'PENDIENTE') // Asegurarse de que el estatus sea PENDIENTE
        ->update([
          'HoraCheckEntrada' => $request->horaEntrada,
          'EstatusValidacion' => 'EN CURSO',
        ]);
      return redirect()->route('reservaciones')->with('success', 'Reservación realizada con éxito.');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Error en la entrada: ' . $e->getMessage());
    }
  }


  public function checkoutpost(Request $request)
  {
    try {
      $request->validate([
        // Validaciones para Cliente
        'id' => 'required|integer',
        'horaSalida' => 'required|date_format:H:i',
      ]);

      // Actualizar el campo HoraCheckSalida y EstatusValidacion
      Reservacion::where('Folio', $request->id)
        ->where('EstatusValidacion', 'EN CURSO') // Asegurarse de que el estatus sea EN CURSO
        ->update([
          'HoraCheckSalida' => $request->horaSalida,
          'EstatusValidacion' => 'CONCLUIDO',
        ]);

      // Obtener la información de la reservación
      $reservacion = Reservacion::where('Folio', $request->id)->first();

      // Actualizar el estatus de la habitación a DISPONIBLE
      \DB::table('Habitacion')
        ->where('ID', $reservacion->IDHabitacion)
        ->update(['Estatus' => 'DISPONIBLE']);

      return redirect()->route('reservaciones')->with('success', 'Check-out realizado con éxito.');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Error en el check-out: ' . $e->getMessage());
    }
  }
}
