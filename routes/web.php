<?php

require __DIR__.'/auth.php';

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ClienteController,
    EmailController,
    OrderServiceController,
    PDFController,
};


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Emails
Route::post('/email', [EmailController::class, 'store'])->name('email.contact');

Route::middleware(['auth'])->group(function(){

//PDF
Route::get('/pdf/{id}', [PDFController::class, 'pdf'])->name('pdf');

//cliente

Route::get('/cliente/index', [ClienteController::class, 'index'])->name('cliente.index');

Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');

Route::post('/cliente/store', [ClienteController::class, 'store'])->name('cliente.store');

Route::get('/cliente/{id}/show',[ClienteController::class, 'show'])->name('cliente.show');

Route::delete('/cliente/{id}/destroy',[ClienteController::class, 'destroy'])->name('cliente.destroy');

Route::get('/cliente/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');

Route::put('/cliente/{id}/update', [ClienteController::class, 'update'])->name('cliente.update');

//Ordem de serviço

Route::get('/orderService/index',[OrderServiceController::class, 'index'])->name('orderService.index');

Route::get('/orderService/create',[OrderServiceController::class, 'create'])->name('orderService.create');

Route::post('/orderService/store',[OrderServiceController::class, 'store'])->name('orderService.store');

Route::get('/orderService/{id}/show',[OrderServiceController::class, 'show'])->name('orderService.show');

Route::get('/orderService/{id}/edit',[OrderServiceController::class, 'edit'])->name('orderService.edit');

Route::put('/orderService/{id}/update',[OrderServiceController::class, 'update'])->name('orderService.update');

Route::delete('/orderService/{id}/destroy}', [OrderServiceController::class, 'destroy'])->name('orderService.destroy');

});