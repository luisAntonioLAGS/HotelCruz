<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Principal;
use App\Models\User;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    public function index()
    {
        $infoEmpleados = \DB::table('users as u')
        ->join('Empleado as e', 'e.ClaveEmpleado', '=', 'u.clave_empleado')
        ->join('Puesto as ps', 'ps.ID', '=', 'e.Puesto')
        ->select('u.clave_empleado as ClaveEmpleado', 'u.rol', \DB::raw('CONCAT(e.Nombre, " ", e.ApellidoPaterno, " ", e.ApellidoMaterno) as NombreEmpleado'), 'ps.Nombre as NombrePuesto', 'u.email', 'u.estatus as EstatusUsuario', 'e.Estatus as EstatusEmpleado')
        ->orderByDesc('u.created_at')
        ->limit(50)
        ->get();    

        $principal = Principal::all(); // Puedes omitir esto si no lo necesitas directamente en la vista

        return view('admin.principal', compact('principal', 'infoEmpleados'));
    }

    public function indexrecepcionista()
    {
        $infoDash = \DB::table('view_detalle_reservacion')
        ->select('NombreCliente', 'PisoHabitacion', 'NoHabitacion', 'EstatusValidacion', 'FechaInicio', 'FechaFin')
        ->orderByDesc('FechaFin')
        ->limit(20)
        ->get();    

        $principal = Principal::all(); // Puedes omitir esto si no lo necesitas directamente en la vista

        return view('recepcionista.vistarecepcion', compact('principal', 'infoDash'));
    }
}
