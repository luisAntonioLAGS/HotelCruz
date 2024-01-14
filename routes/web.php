<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\navegacion;
use Faker\Guesser\Name;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   // return view("welcome");
});
Route::get("/",[navegacion::class,"inicio"])-> name("inicio");
Route::get("/habitaciones",[navegacion::class,"habitaciones"])-> name("habitaciones");
Route::get("/concepto",[navegacion::class,"concepto"])-> name("concepto");
Route::get("/juchitan",[navegacion::class,"juchitan"]) -> name("juchitan");
Route::get("/salones",[navegacion::class,"salones"]) -> Name("salones");
Route::get("/contacto",[navegacion::class,"contacto"])-> name("contacto");
Route::get("/reservar",[navegacion::class,"reservar"])-> name("reservar");
Route::get("/login",[navegacion::class,"login"])-> name("login");
Route::get("/registro",[navegacion::class,"registro"])-> name("registro");
Route::get("/dashboard",[navegacion::class,"dashboard"])-> name("dashboard");
Route::get("/reservaciones",[navegacion::class,"reservaciones"])-> name("reservaciones");
Route::get("/clientes",[navegacion::class,"clientes"])-> name("clientes");
Route::get("/registrocliente",[navegacion::class,"registrocliente"])-> name("registrocliente");
Route::get("/principal",[navegacion::class,"principal"])-> name("principal");
Route::get("/empleados",[navegacion::class,"empleados"])-> name("empleados");
Route::get("/alta",[navegacion::class,"alta"])-> name("alta");
Route::get("/asistencias",[navegacion::class,"asistencias"])-> name("asistencias");
Route::get("/clientesadmin",[navegacion::class,"clientesadmin"])-> name("clientesadmin");
Route::get("/vistaempleado",[navegacion::class,"vistaempleado"])-> name("vistaempleado");
