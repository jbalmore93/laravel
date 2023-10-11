<?php

use App\Http\Controllers\CategoriaController;
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

Route::get('/', function () {
    return view('Home');
});
Route::get('/Categoria', [CategoriaController::class,'index'])->name('categoria.index');
Route::get('/edit/{categoria}', [CategoriaController::class,'edit'])->name('categoria.edit');
Route::get('/show/{categoria}', [CategoriaController::class,'show'])->name('categoria.show');
Route::delete('/destroy/{categoria}',[CategoriaController::class,'destroy'])->name('categoria.destroy');
Route::post('/store',[CategoriaController::class,'store'])->name('categoria.store');
Route::get('/Create',[CategoriaController::class,'create'])->name('categoria.create');
Route::put('/update/{categoria}',[CategoriaController::class,'update'])->name('categoria.update');

