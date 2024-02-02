<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('my_place', [\App\Http\Controllers\MyPlaceController::class, 'index']);
Route::get('posts', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('posts/create', [\App\Http\Controllers\PostController::class, 'create']);
Route::get('posts/update', [\App\Http\Controllers\PostController::class, 'update']);
Route::get('posts/delete', [\App\Http\Controllers\PostController::class, 'delete']);
