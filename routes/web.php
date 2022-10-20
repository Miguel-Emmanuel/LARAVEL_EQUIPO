<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TablasController;
use App\Http\Requests\validar;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::name('alta_usuarios')->get('alta_usuarios', [TablasController::class, 'alta_usuarios']);
Route::name('registrar')->post('registrar_usuarios', [TablasController::class, 'ingresas']);
Route::name('lista_usuarios')->get('/', [TablasController::class, 'usuarios']);
Route::name('detalle_usuarios')->get('detalle_usuarios/{id}', [TablasController::class, 'detalle_usuarios']);
Route::name('borrar_usuarios')->get('borrar_usuarios/{id}', [TablasController::class, 'borrar_usuarios']);
Route::name('salvar_usuarios')->put('salvar_usuarios/{id}', [TablasController::class, 'salvar_usuarios']);
Route::name('editar_usuarios')->get('editar_usuarios/{id}', [TablasController::class, 'editar_usuarios']);
Route::name('lista_productos')->get('productos', [TablasController::class, 'productos']);
Route::name('lista_tipos')->get('tipos', [TablasController::class, 'tipos']);
Route::name('lista_tiendas')->get('tiendas', [TablasController::class, 'tiendas']);
