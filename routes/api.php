<?php

use App\Http\Controllers\ApiEprescriptionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/signup', [ApiEprescriptionController::class, 'signup'])->name('signup')->middleware('custom.headers');
Route::post('/signin', [ApiEprescriptionController::class, 'singin'])->name('singin')->middleware('custom.headers');
Route::post('/send-epriscription', [ApiEprescriptionController::class, 'sendEprescription'])->name('sendEprescription');
Route::get('/pdf/{id}', [ApiEprescriptionController::class, 'pdf'])->name('pdf')->middleware('custom.headers');

Route::options('send-epriscription', function () {
  return response()->json([], 204);
});

Route::get('/get-text', function () {
  return response()->json([
    'message' => 'Hello, this is your text response from the API!'
  ]);
});
