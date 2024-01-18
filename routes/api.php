<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/Gamrot/55248/People', [PeopleController::class, 'index']);
Route::get('/Gamrot/55248/People/{id}', [PeopleController::class, 'show']);
Route::post('/Gamrot/55248/People', [PeopleController::class, 'store']);
Route::put('/Gamrot/55248/People/{id}', [PeopleController::class, 'update']);
Route::delete('/Gamrot/55248/People/{id}', [PeopleController::class, 'destroy']);
