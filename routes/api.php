<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductSaleController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PurchaseSupplierController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PreSaleController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TournamentClientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Rutas de usuarios
Route::get('/users', [UserController::class, 'index']);//Mostrar Usuarios
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);


// Rutas de categorías
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('{id}', [CategoryController::class, 'show']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::put('{id}', [CategoryController::class, 'update']);
    Route::delete('{id}', [CategoryController::class, 'destroy']);
    Route::get('search', [CategoryController::class, 'searchByName']);
});

//rutas de product

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('{id}', [ProductController::class, 'show']);
    Route::post('/', [ProductController::class, 'store']);
    Route::put('{id}', [ProductController::class, 'update']);
    Route::delete('{id}', [ProductController::class, 'destroy']);
    Route::get('search', [ProductController::class, 'searchByName']);
});


//rutas Sale


Route::prefix('sales')->group(function () {
    Route::get('/', [SaleController::class, 'index']);
    Route::get('{id}', [SaleController::class, 'show']);
    Route::get('sales/find-by-date', [SaleController::class, 'findByDate']);
    Route::post('/', [SaleController::class, 'store']);
    Route::put('{id}', [SaleController::class, 'update']);
    Route::delete('{id}', [SaleController::class, 'destroy']);
});


//rutes productSale


Route::prefix('product-sales')->group(function () {
    Route::get('/', [ProductSaleController::class, 'index']);
    Route::get('{productId}/{saleId}', [ProductSaleController::class, 'show']);
    Route::get('by-product/{productId}', [ProductSaleController::class, 'findByProductId']);
    Route::get('by-sale/{saleId}', [ProductSaleController::class, 'findBySaleId']);
    Route::post('/', [ProductSaleController::class, 'store']);
    Route::put('{productId}/{saleId}', [ProductSaleController::class, 'update']);
    Route::delete('{productId}/{saleId}', [ProductSaleController::class, 'destroy']);
    // Agrega aquí la ruta para buscar por nombre si es necesario
});

//Purchase


Route::prefix('purchases')->group(function () {
    Route::get('/', [PurchaseController::class, 'index']);
    Route::get('{id}', [PurchaseController::class, 'show']);
    Route::get('search', [PurchaseController::class, 'findByDate']);
    Route::post('/', [PurchaseController::class, 'store']);
    Route::put('{id}', [PurchaseController::class, 'update']);
    Route::delete('{id}', [PurchaseController::class, 'destroy']);
});

//Supplier


Route::prefix('suppliers')->group(function () {
    Route::get('/', [SupplierController::class, 'index']);
    Route::get('{id}', [SupplierController::class, 'show']);
    Route::get('search', [SupplierController::class, 'searchByName']);
    Route::post('/', [SupplierController::class, 'store']);
    Route::put('{id}', [SupplierController::class, 'update']);
    Route::delete('{id}', [SupplierController::class, 'destroy']);
});

//PurchaseSupplier


Route::prefix('purchase-suppliers')->group(function () {
    Route::get('/', [PurchaseSupplierController::class, 'index']);
    Route::get('{purchaseId}/{supplierId}', [PurchaseSupplierController::class, 'show']);
    Route::get('purchase/{purchaseId}', [PurchaseSupplierController::class, 'findByPurchaseId']);
    Route::get('supplier/{supplierId}', [PurchaseSupplierController::class, 'findBySupplierId']);
    Route::get('date', [PurchaseSupplierController::class, 'findByDate']);
    Route::post('/', [PurchaseSupplierController::class, 'store']);
    Route::put('{purchaseId}/{supplierId}', [PurchaseSupplierController::class, 'update']);
    Route::delete('{purchaseId}/{supplierId}', [PurchaseSupplierController::class, 'destroy']);
});

//client


Route::prefix('clients')->group(function () {
    Route::get('/', [ClientController::class, 'index']);
    Route::get('{id}', [ClientController::class, 'show']);
    Route::get('search/nombre', [ClientController::class, 'findByNombre']);
    Route::get('search/codigo', [ClientController::class, 'findByCodigo']);
    Route::post('/', [ClientController::class, 'store']);
    Route::put('{id}', [ClientController::class, 'update']);
    Route::delete('{id}', [ClientController::class, 'destroy']);
});

//preSale


Route::prefix('presales')->group(function () {
    Route::get('/', [PreSaleController::class, 'index']);
    Route::get('{id}', [PreSaleController::class, 'show']);
    Route::get('client/{clientId}', [PreSaleController::class, 'findByClientId']);
    Route::get('product/{productName}', [PreSaleController::class, 'findByProductName']);
    Route::post('/', [PreSaleController::class, 'store']);
    Route::put('{id}', [PreSaleController::class, 'update']);
    Route::delete('{id}', [PreSaleController::class, 'destroy']);
});

//tournament


Route::prefix('tournaments')->group(function () {
    Route::get('/', [TournamentController::class, 'index']);
    Route::get('{id}', [TournamentController::class, 'show']);
    Route::get('search-by-date', [TournamentController::class, 'findByDate']);
    Route::get('search-by-name', [TournamentController::class, 'findByName']);
    Route::post('/', [TournamentController::class, 'store']);
    Route::put('{id}', [TournamentController::class, 'update']);
    Route::delete('{id}', [TournamentController::class, 'destroy']);
});

//tournamentClient

Route::get('tournament-clients', [TournamentClientController::class, 'index']);
Route::get('tournament-clients/{tournamentId}/{clientId}', [TournamentClientController::class, 'show']);
Route::get('tournament-clients/tournament/{tournamentId}', [TournamentClientController::class, 'findByTournamentId']);
Route::get('tournament-clients/client/{clientId}', [TournamentClientController::class, 'findByClientId']);
Route::post('tournament-clients', [TournamentClientController::class, 'store']);
Route::put('tournament-clients/{tournamentId}/{clientId}', [TournamentClientController::class, 'update']);
Route::delete('tournament-clients/{tournamentId}/{clientId}', [TournamentClientController::class, 'destroy']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
