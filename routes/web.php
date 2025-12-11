<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

Route::get('/', [DocumentController::class, 'index']);
Route::post('/submit', [DocumentController::class, 'submit']);

Route::get('/admin', [DocumentController::class, 'admin']);

Route::delete('/admin/document/{id}', [DocumentController::class, 'delete'])
    ->name('document.delete');
// Route::get('/', function () {
//     return view('welcome');

// });
