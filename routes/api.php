<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleDetailController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\RechargeTarjetController;
use App\Http\Controllers\Api\VideogameAPIController;
use App\Http\Controllers\Api\DeveloperAPIController;
use App\Http\Controllers\Api\SupplierAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Rutas de graficos
Route::get('/graphicDetails', [SaleDetailController::class, 'graphicSaleDetail']);
Route::get('/graphicPromotions', [PromotionController::class, 'graphicPromotion']);
Route::get('/graphicRechargeTarjets', [RechargeTarjetController::class, 'graphicRechargeTarjet']);

//Rutas de API hechas por nosotros
//Videojuegos
Route::prefix('videogames')->group(function () {
    Route::get('/', [VideogameAPIController::class, 'index']);  // Listar videojuegos
    Route::post('/', [VideogameAPIController::class, 'store']); // Crear videojuego
    Route::get('/{id}', [VideogameAPIController::class, 'show']); // Mostrar un videojuego
    Route::put('/{id}', [VideogameAPIController::class, 'update']); // Actualizar videojuego
    Route::delete('/{id}', [VideogameAPIController::class, 'destroy']); // Eliminar videojuego
});

//Proveedores
Route::prefix('suppliers')->group(function () {
    Route::get('/', [SupplierAPIController::class, 'index']);  // Listar proveedores
    Route::post('/', [SupplierAPIController::class, 'store']); // Crear proveedor
    Route::get('/{id}', [SupplierAPIController::class, 'show']); // Mostrar un proveedor
    Route::put('/{id}', [SupplierAPIController::class, 'update']); // Actualizar proveedor
    Route::delete('/{id}', [SupplierAPIController::class, 'destroy']); // Eliminar proveedor
});

//Desarrolladores
Route::prefix('developers')->group(function () {
    Route::get('/', [DeveloperAPIController::class, 'index']);  // Listar desarroll
    Route::post('/', [DeveloperAPIController::class, 'store']); // Crear desarroll
    Route::get('/{id}', [DeveloperAPIController::class, 'show']); // Mo
    Route::put('/{id}', [DeveloperAPIController::class, 'update']); // Actualizar desarroll
    Route::delete('/{id}', [DeveloperAPIController::class, 'destroy']); // Eliminar desarroll
});