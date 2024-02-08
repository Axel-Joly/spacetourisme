<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\TechnologyController;
use \App\Http\Middleware\Localization;

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

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get("/destination",function(){
    Redirect::route("destination",__('moon'));
});
Route::get("/destination/{name}",[DestinationsController::class, 'show']);

Route::get("/crew/{name}",[CrewController::class, 'show']);

Route::get("/technology/{name}",[TechnologyController::class, 'show']);


Route::get("/dashboard", function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
// ______________________________________________
// ______________________________________________
Route::get('/backspace',function(){
    return view('back.backspace');
})->middleware('auth')->name('backspace');

Route::get('/backspace/destination',[DestinationsController::class, 'index']);
Route::get('/backspace/crew',[CrewController::class, 'index']);
Route::get('/backspace/technology',[TechnologyController::class, 'index']);