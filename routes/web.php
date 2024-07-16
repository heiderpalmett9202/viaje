<?php
namespace App\Http\Controllers;
use App\Models\Viajero;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');



});
Route::get('viajeros/listar',[ViajeroController::class,'listar'])->name('viajero.listar');
Route::get('viajeros/create',[ViajeroController::class,'create']);
Route::post('viajeros/store',[ViajeroController::class,'store'])->name('viajero.store');
Route::put('viajeros/{viajero}',[ViajeroController::class,'update'])->name('viajero.update');
Route::get('viajeros/{viajero}/editar',[ViajeroController::class,'edit'])->name('viajero.edit');
Route::delete('viajeros/{viajero}',[ViajeroController::class,'destroy'])->name('viajero.destroy');
