<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/buku',[BukuController::class, 'index']);

Route::get('/buku/create', [BukuController::class.'create'])->name('buku.create');
Route::post('/buku',[BukuController::class,'store'])->name('buku.store');

Route::get('/buku/edit/{id}', [BukuController::class.'edit'])->name('buku.edit');
Route::put('/buku/{id}', [BukuController::class.'update'])->name('buku.update');


Route::post('/buku/delete/(id)',[Bukucontroller::class,'destroy'])->name('buku.destroy');

Route::get('/', function() { return view('welcome');});
