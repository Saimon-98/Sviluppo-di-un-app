<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Possibile registare le route API per l'app.
| Caricate da RouteServiceProvider all'interno di un gruppo
| a cui è assegnato il middleware api.
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Ogni rotta definita utilizza il metodo Route::<tipo_di_richiesta> 
 * per specificare il tipo di richiesta HTTP che la rotta deve gestire
 * e fornisce il percorso dell'endpoint API insieme 
 * al nome del controller e al nome del metodo del controller.
 */

Route::get('products', [ProductsController::class, 'index'])->name('products.index');
Route::get('products/{product}', [ProductsController::class, 'show'])->name('products.show');
Route::post('products', [ProductsController::class, 'store'])->name('products.store');
Route::put('products/{product}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('products/{product}', [ProductsController::class, 'destroy'])->name('products.destroy');

/**
 * 'ProductsController::class' specifica il nome della classe del controller (ProductsController).
 * 'index', 'show', 'store', 'update', e 'destroy' specificano i nomi 
 * dei metodi all'interno del controller (index, show, store, update, destroy), 
 * che corrispondono alle azioni CRUD standard.
 */