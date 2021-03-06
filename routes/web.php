<?php

use App\Http\Controllers\CustomerController;
use App\Models\Role;
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


Route::get('/', [CustomerController::class, 'customers'])->name('customers');
Route::post('/customers', [CustomerController::class, 'addCustomer'])->name('add.customer');
Route::post('/customers/{id}', [CustomerController::class, 'editCustomer'])->name('edit.customer');
Route::delete('/user/delete/{id}', [CustomerController::class, 'deleteUser'])->name('delete.user');
Route::post('/assign-operation', [CustomerController::class, 'assignOperation'])->name('assign.operation');