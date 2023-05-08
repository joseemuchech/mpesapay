<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\payments\mpesa\MpesaResponsesController;

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


Route::post('validation', [MpesaResponsesController::class, 'validation']);
Route::post('confirmation', [MpesaResponsesController::class, 'confirmation']);
Route::post('stkpush', [MPESAResponsesController::class, 'stkPush']);
Route::post('b2ccallback', [MPESAResponsesController::class, 'b2cCallback']);
// Route::post('transaction-status/result_url', [MPESAResponsesController::class, 'transactionStatusResponse']);
// Route::post('reversal/result_url', [MPESAResponsesController::class, 'transactionReversal']);






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
