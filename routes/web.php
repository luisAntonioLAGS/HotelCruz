<?php

use App\Http\Controllers\AlbercaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\navegacion;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ReservacionController;
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
Route::get("/", [navegacion::class, "inicio"])->name("inicio");
Route::get("/habitaciones", [navegacion::class, "habitaciones"])->name("habitaciones");
Route::get("/concepto", [navegacion::class, "concepto"])->name("concepto");
Route::get("/juchitan", [navegacion::class, "juchitan"])->name("juchitan");
Route::get("/salones", [navegacion::class, "salones"])->Name("salones");
Route::get("/contacto", [navegacion::class, "contacto"])->name("contacto");
Route::get("/reservar", [navegacion::class, "reservar"])->name("reservar");

Route::get("/registro", [navegacion::class, "registro"])->name("registro");

//SESSION
Route::group(['middleware' => 'guest'], function () {
   Route::get("/login", [navegacion::class, "login"])->name("login");
   Route::post('/login', [AuthController::class, 'login'])->name('login');
});


// Rutas para Admin
Route::group(['middleware' => ['auth', 'role:admin']], function () {
   Route::delete("/logout", [AuthController::class, "logout"])->name("logout");
   Route::get("/principal", [PrincipalController::class, "index"])->name("principal");
   Route::get("/empleados", [EmpleadoController::class, "empleados"])->name("empleados");
   Route::get("/generarbaja/{claveempleado}", [navegacion::class, "generarbaja"])->name("generarbaja");
   Route::post("/generarbajapost", [EmpleadoController::class, "generarbajapost"])->name("generarbajapost");
   //Route::get("/generaralta", [EmpleadoController::class, "generaralta"])->name("generaralta");
   Route::get("/asignarusuario/{claveempleado}", [navegacion::class, "asignarusuario"])->name("asignarusuario");
   Route::get("/alta", [EmpleadoController::class, "alta"])->name("alta");
   Route::post("/altaempleado", [EmpleadoController::class, "altaempleado"])->name("altaempleado");
   Route::get("/entradaempleado/{claveempleado}", [navegacion::class, "entradaempleado"])->name("entradaempleado");
   Route::post("/entradaempleadopost", [EmpleadoController::class, "entradaempleadopost"])->name("entradaempleadopost");
   Route::post("/registrarusuario", [EmpleadoController::class, "registrarusuario"])->name("registrarusuario");
   Route::post("/salidaempleadopost", [EmpleadoController::class, "salidaempleadopost"])->name("salidaempleadopost");
   Route::get("/salidaempleado/{claveempleado}", [navegacion::class, "salidaempleado"])->name("salidaempleado");
   Route::get("/asistencias", [EmpleadoController::class, "asistencias"])->name("asistencias");
   Route::get("/clientesadmin", [ClienteController::class, "clientesadmin"])->name("clientesadmin");
});

// Rutas para Recepcionista
Route::group(['middleware' => ['auth', 'role:recepcionista']], function () {
   Route::delete("/logoutrecep", [AuthController::class, "logoutrecep"])->name("logoutrecep");
   Route::get("/dashboard", [PrincipalController::class, "indexrecepcionista"])->name("dashboard");
   Route::get("/alberca", [AlbercaController::class, "index"])->name("alberca");
   Route::get('/reservaciones', [ReservacionController::class, 'index'])->name('reservaciones');
   Route::post('/reservaciones', [ReservacionController::class, 'registroreservacion'])->name('reservaciones');
   Route::get("/clientes", [ClienteController::class, "index"])->name("clientes");
   Route::get('/checkin/{id}', [navegacion::class, 'checkin'])->name('checkin');
   Route::post('/checkinpost', [ReservacionController::class, 'checkinpost'])->name('checkinpost');
   Route::get('/checkout/{id}', [navegacion::class, 'checkout'])->name('checkout');
   Route::post('/checkoutpost', [ReservacionController::class, 'checkoutpost'])->name('checkoutpost');
   Route::post('/registroalbercapost', [AlbercaController::class, 'registroalbercapost'])->name('registroalbercapost');
   Route::get("/registrocliente", [ReservacionController::class, "registrocliente"])->name("registrocliente");
   Route::get("/registroalberca", [AlbercaController::class, "registroalberca"])->name("registroalberca");
   Route::get("/vistaempleado", [navegacion::class, "vistaempleado"])->name("vistaempleado");
});
