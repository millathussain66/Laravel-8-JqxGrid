<?php

use App\Http\Controllers\HomeController;
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


// For Final Grid System
Route::get('home',[HomeController::class,'index'])->name('home');
Route::any('home/grid',[HomeController::class,'grid'])->name('grid');


Route::any('home/grid/from/',[HomeController::class,'from'])->name('from');
