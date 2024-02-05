<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    //
    public function altaempleado(Request $request)
    {
        $request->validate([
            'claveEmpleado' => 'required|unique:Empleado,ClaveEmpleado',
            'curp' => 'required|unique:Empleado,Curp',
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'email' => 'required|email|unique:Empleado,Correo',
            'telefono' => 'required|integer',
            'nss' => 'required|integer',
            'puesto' => 'required|integer',
        ]);
        // Obtener los datos del formulario
        $data = $request->all();

        // Insertar en la base de datos
        \DB::table('Empleado')->insert([
            'ClaveEmpleado' => $data['claveEmpleado'],
            'Curp' => $data['curp'],
            'Nombre' => $data['nombre'],
            'ApellidoPaterno' => $data['apellidoPaterno'],
            'ApellidoMaterno' => $data['apellidoMaterno'],
            'Correo' => $data['email'],
            'Telefono' => $data['telefono'],
            'NSS' => $data['nss'],
            'Puesto' => $data['puesto'],
            'Estatus' => 'ALTA'
        ]);

        // Redireccionar o realizar otras acciones después de la inserción
        return redirect()->route('alta')->with('success', 'Empleado agregado exitosamente');
    }

    public function alta()
    {
        $puestos = \DB::table('Puesto')
            ->select('ID', 'Nombre')
            ->where('Estatus', 'ACTIVO') // Corrección aquí
            ->get();

        return view('admin.alta', compact('puestos'));
    }

    public function empleados(Request $request)
    {
        $search = $request->input('search');

        $empleados = \DB::table('view_empleados') // Reemplaza 'Empleado' con el nombre real de tu tabla
            ->when($search, function ($query) use ($search) {
                $query->where('ClaveEmpleado', 'like', "%{$search}%")
                    ->orWhere('Curp', 'like', "%{$search}%")
                    ->orWhere('NombreCompleto', 'like', "%{$search}%")
                    ->orWhere('Telefono', 'like', "%{$search}%")
                    ->orWhere('Correo', 'like', "%{$search}%")
                    ->orWhere('NSS', 'like', "%{$search}%")
                    ->orWhere('NombrePuesto', 'like', "%{$search}%")
                    ->orWhere('Estatus', 'like', "%{$search}%");
            })
            ->get();

        return view('admin.empleados', compact('empleados'));
    }

    public function generarbajapost(Request $request)
    {
        try {
            $request->validate([
                // Validaciones para Cliente
                'claveempleado' => 'required',
            ]);

            // Actualizar el estatus de la habitación a DISPONIBLE
            \DB::table('Empleado')
                ->where('ClaveEmpleado', $request->claveempleado)
                ->where('Estatus', 'ALTA')
                ->update(['Estatus' => 'BAJA']);

            return redirect()->route('empleados')->with('success', 'Baja realizada con éxito.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error en la baja: ' . $th->getMessage());
        }
    }

    public function asistencias()
    {
        $asistencias = \DB::table('view_asistencias_hoy')->get();

        return view('admin.asistencias', compact('asistencias'));
    }

    public function entradaempleadopost(Request $request)
    {
        try {
            $request->validate([
                'claveempleado' => 'required',
                'horaentrada' => 'required|date_format:H:i',
            ]);

            $fechaActual = date('Y-m-d');
            $claveEmpleado = $request->claveempleado;

            // Verificar si ya existe un registro para el mismo empleado y la misma fecha
            $asistenciaExistente = \DB::table('Asistencia')
                ->where('ClaveEmpleado', $claveEmpleado)
                ->where('Fecha', $fechaActual)
                ->where('Estatus', "Entrada")
                ->first();

            if (!$asistenciaExistente) {
                // Ya hay un registro, actualiza el estatus a 'Salida'
                // Insertar en la base de datos
                \DB::table('Asistencia')->insert([
                    'ClaveEmpleado' => $request->claveempleado,
                    'Fecha' => date('Y-m-d'),
                    'Hora' => $request->horaentrada,
                    'Estatus' => 'Entrada',
                    'FechaRegistro' => date('Y-m-d H:i:s')
                ]);
            } else {
                return redirect()->back()->with('error', 'Esta entrada ya se ha registrado esta entrada con anterioridad');
            } /* else {
                // No hay registro, inserta uno nuevo con estatus 'Entrada'
                \DB::table('Asistencia')->insert([
                    'ClaveEmpleado' => $claveEmpleado,
                    'Fecha' => $fechaActual,
                    'Hora' => $request->horaentrada,
                    'Estatus' => 'Entrada',
                    'FechaRegistro' => date('Y-m-d H:i:s')
                ]);
            } */

            return redirect()->route('empleados')->with('success', 'Asistencia agregada exitosamente');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error en la entrada: ' . $th->getMessage());
        }
    }

    public function salidaempleadopost(Request $request)
    {
        try {
            $request->validate([
                'claveempleado' => 'required',
                'horasalida' => 'required|date_format:H:i',
            ]);

            $fechaActual = date('Y-m-d');
            $claveEmpleado = $request->claveempleado;

            // Verificar si ya existe un registro para el mismo empleado y la misma fecha
            $asistenciaExistente = \DB::table('Asistencia')
                ->where('ClaveEmpleado', $claveEmpleado)
                ->where('Fecha', $fechaActual)
                ->where('Estatus', "Salida")
                ->first();

            if (!$asistenciaExistente) {
                // Ya hay un registro, actualiza el estatus a 'Salida'
                // Insertar en la base de datos
                \DB::table('Asistencia')->insert([
                    'ClaveEmpleado' => $request->claveempleado,
                    'Fecha' => date('Y-m-d'),
                    'Hora' =>  $request->horasalida,
                    'Estatus' => 'Salida',
                    'FechaRegistro' => date('Y-m-d H:i:s')
                ]);
            } else {
                return redirect()->back()->with('error', 'Esta salida ya se ha registrado esta entrada con anterioridad');
            } /* else {
                // No hay registro, inserta uno nuevo con estatus 'Entrada'
                \DB::table('Asistencia')->insert([
                    'ClaveEmpleado' => $claveEmpleado,
                    'Fecha' => $fechaActual,
                    'Hora' => $request->horaentrada,
                    'Estatus' => 'Entrada',
                    'FechaRegistro' => date('Y-m-d H:i:s')
                ]);
            } */

            return redirect()->route('empleados')->with('success', 'Asistencia agregada exitosamente');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error en la salida: ' . $th->getMessage());
        }
    }

    public function registrarusuario(Request $request)
    {
        try {
            $request->validate([
                'claveempleado' => 'required',
                'rol' => 'required|in:admin,recepcionista',
                'correo' => 'required|email',
                'password' => 'required',
                'confirmPassword' => 'required|same:password'
            ]);

            $claveEmpleado = $request->claveempleado;

            // Verificar si ya existe un registro para el mismo empleado y la misma fecha
            $usuarioExistente = \DB::table('users')
                ->where('clave_empleado', $claveEmpleado)
                ->first();

            if (!$usuarioExistente) {
                // Ya hay un registro, actualiza el estatus a 'Salida'
                // Insertar en la base de datos
                \DB::table('Asistencia')->insert([
                    'ClaveEmpleado' => $request->claveempleado,
                    'Fecha' => date('Y-m-d'),
                    'Hora' =>  $request->horasalida,
                    'Estatus' => 'Salida',
                    'FechaRegistro' => date('Y-m-d H:i:s')
                ]);
            } else {
                return redirect()->back()->with('error', 'El usuario ingresado ya cuenta con un registro.');
            } /* else {
                // No hay registro, inserta uno nuevo con estatus 'Entrada'
                \DB::table('Asistencia')->insert([
                    'ClaveEmpleado' => $claveEmpleado,
                    'Fecha' => $fechaActual,
                    'Hora' => $request->horaentrada,
                    'Estatus' => 'Entrada',
                    'FechaRegistro' => date('Y-m-d H:i:s')
                ]);
            } */

            return redirect()->route('empleados')->with('success', 'Usuario asignado exitosamente');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error en la asignacion: ' . $th->getMessage());
        }
    }
}
