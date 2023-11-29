<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController; 


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
    return view('/welcome');
});

Route::post('/', [RegisterController::class, 'store', 'show']); 
//Route::get('/', [RegisterController::class, 'show']); 


//hacer el index y dentro del index poner  lo que esta en la funcion show 