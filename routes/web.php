<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/'] , function(){

Route::get('/' , [CrudController::class , 'index'])->name('crud.index');
Route::get('/create' , [CrudController::class , 'create'])->name('crud.create');
Route::post('/' , [CrudController::class , 'store'])->name('crud.store');
Route::get('/{crud}/edit' , [CrudController::class , 'edit'])->name('crud.edit');
Route::put('/{crud}' , [CrudController::class , 'update'])->name('crud.update');
Route::delete('/{crud}' , [CrudController::class , 'destroy'])->name('crud.destroy');
Route::get('/export' , [CrudController::class , 'export'])->name('crud.export');



});
