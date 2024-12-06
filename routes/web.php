<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\exampleControler;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('acceuil.index');
});

Route::get('/', function () {
    return view('acceuil.index');
});

Route::get('/example', function () {
    return view('example');
});
Route::get('/user', [exampleControler::class,'user']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//-----------------------------------------------------------------------------------
//my own paths
Route::get('/messages', function () {
    return view('messages.index');});

    Route::get('/conversation', function () {
        return view('messages.conversation');});

        Route::get('/notification', function () {
            return view('notification.index');});

            Route::get('/amies', function () {
                return view('amies.index');});
        
    

require __DIR__.'/auth.php';
