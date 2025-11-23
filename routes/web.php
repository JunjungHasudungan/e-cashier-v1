<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\CashierController; //register alamat
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


    // membuat middleware baru
    Route::middleware(['auth', 'verified'])->group(function(){
        // ROUTE FOR ADMIN
        Route::get('dashboard-admin', [AdminController::class, 'index'])
            ->name('dashboard-admin');

         Route::get('create-product', [AdminController::class, 'create'])
            ->name('create-product');

        Route::post('store-product', [AdminController::class, 'store'])
            ->name('store-product');

        Route::delete('delete-product/{productId}', [AdminController::class, 'deleteProduct'])
            ->name('delete-product');

        Route::get('restock-product/{productId}',  [AdminController::class, 'restockProduct'])
            ->name('restock-product');

        // route untuk edit product
        // "product/2/edit"
        Route::get('product/{productId}/edit',  [AdminController::class, 'editProduct'])
            ->name('product');

        Route::put('update-product/{productId}',  [AdminController::class, 'updateProduct'])
            ->name('update-product');

        // ROUTE FOR CASHIER
        Route::get('dashboard-cashier', [CashierController::class, 'index'])
            ->name('dashboard-cashier');

        Route::get('list-products', [CashierController::class, 'getListProduct'])->name('list-products');


        Route::get('example-getListProduct', [CashierController::class, 'exampleGetListProduct'])
            ->name('example-getListProduct');

            
        // url route mengirim data store order product dari front end ke back-end
        Route::post('store-order-product', [CashierController::class, 'exampleStoreOrderProduct'])->name('store-order-product');


        // Route::get('dashboard-cashier', [CashierController::class, 'index'])
        //     ->name('dashboard-cashier');
    });
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
