<?php

use App\Http\Controllers\DifficultyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(DifficultyController::class)->group(function ()
{
Route::get('/difficulties', 'getAll');
Route::get('/difficulties/{id}', 'getSingle');
});
