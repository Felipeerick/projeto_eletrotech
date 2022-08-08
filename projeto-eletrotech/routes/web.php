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

Route::get('/admin/index', [ClienteController::class, 'index'])->name('admin.index');

Route::get('/admin/create', [ClienteController::class, 'create'])->name('admin.create');

Route::post('/admin/store', [ClienteController::class, 'store'])->name('admin.store');

Route::get('/admin/{id}/show',[ClienteController::class, 'show'])->name('admin.show');

Route::delete('/admin/{id}/destroy',[ClienteController::class, 'destroy'])->name('admin.destroy');