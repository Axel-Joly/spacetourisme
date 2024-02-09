<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\TechnologyController;
use \App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Session;
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
// language
$local = Session::get('locale');
// language selection
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get("/destination",function(){
    return redirect("/destination/".__('moon'));
});
Route::get("/destination/".__('{name}'),[DestinationsController::class, 'show']);

// CREW
Route::get("/".__('crew'),function(){
    return redirect("/".__('crew')."/douglas_hurley");
 }); 
Route::get("/crew",function(){
    return redirect("/crew/douglas_hurley");
});
Route::get("/crew/{name}",[CrewController::class, 'show']);
Route::get("/".__('crew')."/{name}",[CrewController::class, 'show']);
// TECHNOLOGY
Route::get("/".__('technology'),function(){
    return redirect("/".__('technology')."/douglas_hurley");
 }); 
Route::get("/technology",function(){
    return redirect("/technology/douglas_hurley");
});
Route::get("/technology/{name}",[TechnologyController::class, 'show']);
Route::get("/".__('technology')."/{name}",[TechnologyController::class, 'show']);

//    +----------------------------------------------+
//    |                /BACKSPACE                     |
//    +----------------------------------------------+

Route::prefix('/backspace')->middleware('auth')->group(function () {
    Route::get('/',function(){
        return view('back.backspace');
    })->name('backspace');
    Route::prefix('/destination')->group(function () {
        Route::get('/',[DestinationsController::class, 'index']);
        Route::get('/ajout',[DestinationsController::class, 'create']);
        Route::post('/ajout',[DestinationsController::class, 'store']);
        Route::get('/{name}',[DestinationsController::class, 'edit']);
        Route::patch('/{name}', [ProfileController::class, 'update']);
        Route::delete('/{name}', [ProfileController::class, 'destroy']);
    });
    Route::prefix('/crew')->group(function () {
        Route::get('/',[DestinationsController::class, 'index']);
        Route::get('/add',[DestinationsController::class, 'create']);
        Route::post('/add',[DestinationsController::class, 'store']);
        Route::get('/{name}',[DestinationsController::class, 'edit']);
        Route::patch('/{name}', [ProfileController::class, 'update']);
        Route::delete('/{name}', [ProfileController::class, 'destroy']);
    });
    Route::prefix("/".__('crew'))->group(function () {
        Route::get('/',[DestinationsController::class, 'index']);
        Route::get('/ajout',[DestinationsController::class, 'create']);
        Route::post('/ajout',[DestinationsController::class, 'store']);
        Route::get('/{name}',[DestinationsController::class, 'edit']);
        Route::patch('/{name}', [ProfileController::class, 'update']);
        Route::delete('/{name}', [ProfileController::class, 'destroy']);
    });
    Route::prefix('/technology')->group(function () {
        Route::get('/',[DestinationsController::class, 'index']);
        Route::get('/add',[DestinationsController::class, 'create']);
        Route::post('/add',[DestinationsController::class, 'store']);
        Route::get('/{name}',[DestinationsController::class, 'edit']);
        Route::patch('/{name}', [ProfileController::class, 'update']);
        Route::delete('/{name}', [ProfileController::class, 'destroy']);
    });
    Route::prefix("/".__('technology'))->group(function () {
        Route::get('/',[DestinationsController::class, 'index']);
        Route::get('/ajout',[DestinationsController::class, 'create']);
        Route::post('/ajout',[DestinationsController::class, 'store']);
        Route::get('/{name}',[DestinationsController::class, 'edit']);
        Route::patch('/{name}', [ProfileController::class, 'update']);
        Route::delete('/{name}', [ProfileController::class, 'destroy']);
    });
});

require __DIR__.'/auth.php';