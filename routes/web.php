<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});
//
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->name('dashboard');

//ruta inicio
Route::inertia('/proveedores', 'Proveedores/Proveedores')->name('proveedores');
Route::inertia('/', 'Inicio/InicioPrincipal')->name('inicio');
Route::inertia('/nosotros', 'Nosotros/Nosotros')->name('nosotros');
Route::inertia('/empresa', 'QueHacemos/QueHacemosPrinc')->name('empresa');
//Route::inertia('/empresa', 'Empresa/Empresa')->name('empresa');
Route::inertia('/contacto', 'Contacto/Contacto')->name('contacto');
Route::inertia('/novedades', 'Novedades/Novedades')->name('novedades');
Route::inertia('/vistanoticias', 'Novedades/VistaNoticia')->name('vista-noticias');
Route::inertia('/centrales', 'Centrales/Centrales')->name('centrales');

