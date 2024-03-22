<?php

use App\Http\Controllers\DifficultyController;
use App\Http\Controllers\LanguageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(DifficultyController::class)->group(function () {
    Route::get('/difficulties', 'getAll');
    Route::get('/difficulties/{id}', 'find');
});

Route::controller(LanguageController::class)->group(function () {
    Route::get('/languages', 'getAll');
    Route::get('/languages/{id}', 'find');

});

Route::controller(\App\Http\Controllers\ContinentController::class)->group(function () {
    Route::get('/continents', 'getAll');
    Route::get('/continents/{id}', 'find');

});

Route::controller(\App\Http\Controllers\FriendController::class)->group(function ()
{
    Route::get('/friends', 'getAll');
    Route::get('/friends/{id}', 'find');
});
