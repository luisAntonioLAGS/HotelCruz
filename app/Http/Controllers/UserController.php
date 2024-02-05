<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function infoEmpleado()
    {
        $resultados = \DB::table('users as u')
            ->join('Empleado as e', 'e.ClaveEmpleado', '=', 'u.clave_empleado')
            ->join('Puesto as ps', 'ps.ID', '=', 'e.Puesto')
            ->select('u.clave_empleado as ClaveEmpleado', 'u.rol', DB::raw('CONCAT(e.Nombre, " ", e.ApellidoPaterno, " ", e.ApellidoMaterno) as NombreEmpleado'), 'ps.Nombre', 'u.email', 'u.estatus as EstatusUsuario', 'e.Estatus as EstatusEmpleado')
            ->get();

        // Hacer algo con los resultados, como pasarlo a la vista
        return view('tu.vista', ['resultados' => $resultados]);
    }
}
