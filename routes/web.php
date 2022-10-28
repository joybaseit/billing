<?php

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/newbill', [App\Http\Controllers\HomeController::class, 'new_bill'])->name('bill.new_bill');
Route::get('/list',[App\Http\Controllers\HomeController::class, 'list'])->name('bill.list');
Route::get('/downloadPDF/{id}',[App\Http\Controllers\HomeController::class, 'downloadPDF'])->name('bill.pdf');

Route::get('/add',[App\Http\Controllers\ProductsController::class, 'addcolour'])->name('addcolour');
Route::post('/add',[App\Http\Controllers\ProductsController::class, 'create'])->name('colour.create');
Route::post('/addcolour',[App\Http\Controllers\ProductsController::class, 'store'])->name('colour.store');
Route::post('/addbilling',[App\Http\Controllers\HomeController::class, 'store'])->name('bill.store');

