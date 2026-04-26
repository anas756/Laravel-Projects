<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inscriptionController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', [inscriptionController::class, 'create']);
Route::post('/handleForm', [inscriptionController::class, 'store']);