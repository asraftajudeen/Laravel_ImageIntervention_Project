<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

Route::get('/',[ImageUploadController::class,"ImageUploadForm"]);
Route::post('/',[ImageUploadController::class,"ImageUpload"]);
