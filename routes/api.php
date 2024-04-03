<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contacts', [ContactController::class, 'index']);

// Create a new contact
Route::post('/contacts', [ContactController::class, 'store']);

// Get a specific contact
Route::get('/contacts/{id}', [ContactController::class, 'show']);

// Update a contact
Route::put('/contacts/{id}', [ContactController::class, 'update']);

// Delete a contact
Route::delete('/contacts/{id}', [ContactController::class, 'destroy']);
