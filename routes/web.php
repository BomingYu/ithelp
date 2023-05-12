<?php

use App\Http\Controllers\articleController;
use Illuminate\Support\Facades\Route;


Route::resource('articles', articleController::class);

Route::get('/index',[articleController::class,'index'])->name('root');
Route::get('/',function(){
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
