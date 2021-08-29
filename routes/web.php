<?php

use App\Http\Controllers\PersonController;
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
*/Route::get('/',[PersonController::class,'index']);
Route::post('/add',[PersonController::class,'add']);
Route::post('/update',[PersonController::class,'update'])->name('person.update');
Route::post('/delete',[PersonController::class,'delete'])->name('person.delete');