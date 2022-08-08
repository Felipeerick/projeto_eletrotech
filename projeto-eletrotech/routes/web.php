<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ClienteController,

};

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client/index', [ClienteController::class, 'index'])->name('client.index');

Route::get('/client/create', [ClienteController::class, 'create'])->name('client.create');

Route::post('/client/store', [ClienteController::class, 'store'])->name('client.store');

Route::get('/client/{id}/show',[ClienteController::class, 'show'])->name('client.show');

Route::delete('/client/{id}/destroy',[ClienteController::class, 'destroy'])->name('client.destroy');

Route::get('/client/{id}/edit', [ClienteController::class, 'edit'])->name('client.edit');

Route::put('/client/{id}/update', [ClienteController::class, 'update'])->name('client.update');