<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RecipeCardController;
use App\Http\Controllers\RecipeCostsController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SupplierItemController;


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

Route::resource('Brands', BrandsController::class);
Route::resource('Inventory', InventoryController::class);
Route::resource('Menu', MenuController::class);
Route::resource('RecipeCard', RecipeCardController::class);
Route::resource('RecipeCosts', RecipeCostsController::class);
Route::resource('Supplier', SupplierController::class);
Route::resource('SupplierItem', SupplierItemController::class);

Route::get('/', function () {
    return view('index');
});

Route::get('/readme', function () {
    return view('readme');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
