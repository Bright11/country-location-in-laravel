<?php

use App\Http\Controllers\locationController;
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

Route::get('/',[locationController::class,'index'])->name('index');
Route::get('userlocation_javascript',[locationController::class,'userlocation_javascript'])->name('userlocation_javascript');
