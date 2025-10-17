<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/upload', [FileUploadController::class, 'showUploadForm'])
    ->name('file.upload');
Route::post('/upload', [FileUploadController::class, 'upload'])
    ->name('file.upload.post');