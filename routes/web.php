<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
    return view('pages.index'); 
});
Route::get('/welcome', function () {
    return view('welcome'); 
});

Route::get('/toto', function () {
    echo "toto";
});


Route::get('/destination/{name}',[PageController::class,'destination']);



Route::get('/equipage/{name}',[PageController::class,'crew']);


Route::get('/technologie/{name}',[PageController::class,'technologie']);


