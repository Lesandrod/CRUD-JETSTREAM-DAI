<?php

use App\Http\Livewire\Estudiantes;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    /*Rutas de estudiantes*/
    Route::get('/estudiantes',Estudiantes::class) 
    ->name('estudiantes');
   
    
    /*Rutas de dashboard*/
    Route::get('/dashboard', function () {
        return view('dashboard');})
        ->name('dashboard');
});
