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
Route::get("/destination/{id}",[DestinationsController::class, 'show'])->name('destination.id');

// CREW
// dd(__('crew'));
Route::get("/".__('crew'),function(){
    return redirect("/".__('crew')."/douglas_hurley");
 }); 
Route::get("/crew",function(){
    return redirect("/crew/douglas_hurley");
});
Route::get("/crew/{crew}",[CrewController::class, 'show']);
Route::get("/".__('crew')."/{crew}",[CrewController::class, 'show']);
// TECHNOLOGY
Route::get("/".__('technology'),function(){
    return redirect("/".__('technology')."/douglas_hurley");
 }); 
Route::get("/technology",function(){
    return redirect("/technology/douglas_hurley");
});
Route::get("/technology/{technology}",[TechnologyController::class, 'show']);
Route::get("/".__('technology')."/{technology}",[TechnologyController::class, 'show']);

//    +----------------------------------------------+
//    |                /BACKSPACE                    |
//    +----------------------------------------------+

Route::prefix('/backspace')->middleware('auth')->group(function () {
    Route::get('/',function(){
        return view('back.backspace');
    })->name('backspace');
    Route::prefix('/destination')->group(function () {
        Route::get('/',[DestinationsController::class, 'index'])->name('destination.index');
        Route::get('/add',[DestinationsController::class, 'create'])->name('destination.create');
        Route::post('/add',[DestinationsController::class, 'store'])->name('destination.store');
        Route::get('/{destination}/view',[DestinationsController::class, 'view'])->name('destination.view');
        Route::get('/{destination}/edit',[DestinationsController::class, 'edit'])->name('destination.edit');
        Route::patch('/{destination}/edit', [DestinationsController::class, 'update'])->name('destination.update');
        Route::get('/{destination}/delete',[DestinationsController::class, 'delete'])->name('destination.delete');
        Route::delete('/{destination}/destroy', [DestinationsController::class, 'destroy'])->name('destination.destroy');
    });
    Route::prefix('/crew')->group(function () {
        Route::get('/',[CrewController::class, 'index'])->name('crew.index');
        Route::get('/add',[CrewController::class, 'create'])->name('crew.create');
        Route::post('/add',[CrewController::class, 'store'])->name('crew.store');
        Route::get('/{crew}/view',[CrewController::class, 'view'])->name('crew.view');
        Route::get('/{crew}/edit',[CrewController::class, 'edit'])->name('crew.edit');
        Route::patch('/{crew}/edit', [CrewController::class, 'update'])->name('crew.update');
        Route::delete('/{crew}/edit', [CrewController::class, 'destroy'])->name('crew.destroy');
    });
    Route::prefix('/technology')->group(function () {
        Route::get('/',[TechnologyController::class, 'index'])->name('technology.index');
        Route::get('/add',[TechnologyController::class, 'create'])->name('technology.create');
        Route::post('/add',[TechnologyController::class, 'store'])->name('technology.store');
        Route::get('/{technology}',[TechnologyController::class, 'edit'])->name('technology.edit');
        Route::patch('/{technology}', [TechnologyController::class, 'update'])->name('technology.update');
        Route::delete('/{technology}', [TechnologyController::class, 'destroy'])->name('technology.delete');
    });
    
});
//Route::resource('destinations', DestinationsController::class)->middleware('auth');

require __DIR__.'/auth.php';