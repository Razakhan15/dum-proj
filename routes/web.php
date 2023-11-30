<?php

use App\Http\Controllers\CustomController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'register']);
Route::get('/customer', [CustomController::class, 'index']);
Route::get('/customer/view', [CustomController::class, 'view'])->name('customer.view');
Route::get('/customer/delete/{id}', [CustomController::class, 'delete'])->name('customer.delete');
Route::get('/customer/forceDelete/{id}', [CustomController::class, 'forceDelete'])->name('customer.forceDelete');
Route::get('/customer/edit/{id}', [CustomController::class, 'edit'])->name('customer.edit');
Route::get('/customer/restore/{id}', [CustomController::class, 'restore'])->name('customer.restore');
Route::post('/customer/update/{id}', [CustomController::class, 'update'])->name('customer.update');
Route::post('/customer', [CustomController::class, 'store']);
Route::get('/customer/trash', [CustomController::class, 'trash'])->name('customer.trash');

// Route::get('/',[DemoController::class, 'index']);
