<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BackController;
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
// language selection
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
// home page
Route::get('/', function () {
    return view('pages.index'); 
})->name('home');


// destination
Route::get('/destination', function(){
    return redirect('/destination/'.'moon');
});

Route::get('/destination/{name}',[PageController::class,'destination']);
// crew
Route::get('/crew', function(){
    return redirect('/crew/'.'douglas_hurley');
});

Route::get('/crew/{name}',[PageController::class,'crew']);
// technology

Route::get('/technology', function(){
    return redirect('/technology/'.'launcher');
});

Route::get('/technology/{name}',[PageController::class,'technology']);

//--------------------------backspace----------------------------------
// -------------------------_________----------------------------------
Route::get('/login',[BackController::class,'login']);

Route::get('/backspace',[BackController::class,'backspace']);


