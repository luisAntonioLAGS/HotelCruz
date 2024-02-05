<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navegacion extends Controller
{
    public function inicio()
    {
        return view("usuario.home");
    }
    public function habitaciones()
    {
        return view("usuario.habitaciones");
    }
    public function concepto()
    {
        return view("usuario.concepto");
    }
    public function juchitan()
    {
        return view("usuario.juchitan");
    }
    public function contacto()
    {
        return view("usuario.contacto");
    }
    public function salones()
    {
        return view("usuario.salones");
    }
    public function reservar()
    {
        return view("usuario.reservar");
    }
    public function login()
    {
        return view("empleado.login");
    }
    public function registro()
    {
        return view("empleado.registro");
    }
    public function dashboard()
    {
        return view("recepcionista.vistarecepcion");
    }
    public function reservaciones()
    {
        return view("recepcionista.reservaciones");
    }
    public function clientes()
    {
        return view("recepcionista.clientes");
    }
    public function registrocliente()
    {
        return view("recepcionista.registrocliente");
    }
    public function checkin($id)
    {
        return view("recepcionista.checkin", compact('id'));
    }
    public function checkout($id)
    {
        return view("recepcionista.checkout", compact('id'));
    }
    public function entradaempleado($claveempleado)
    {
        return view("admin.entradaempleado", compact('claveempleado'));
    }
    public function salidaempleado($claveempleado)
    {
        return view("admin.salidaempleado", compact('claveempleado'));
    }
    public function generarbaja($claveempleado)
    {
        return view("admin.generarbaja", compact('claveempleado'));
    }
    public function asignarusuario($claveempleado)
    {
        return view("admin.asignarusuario", compact('claveempleado'));
    }
    public function principal()
    {
        return view("admin.principal");
    }
    public function empleados()
    {
        return view("admin.empleados");
    }
    public function alta()
    {
        return view("admin.alta");
    }
    public function asistencias()
    {
        return view("admin.asistencias");
    }
    public function clientesadmin()
    {
        return view("admin.clientesadmin");
    }
    public function vistaempleado()
    {
        return view("empleado.vistaempleado");
    }
   /*  public function alberca()
    {
        return view("Recepcionista.alberca");
    } */
}
