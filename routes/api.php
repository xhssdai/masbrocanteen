<?php

use App\Http\Controllers\TenantController;
use App\Http\Controllers\TransactionController;
use App\Models\Customer;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); 

Route::get('/test/{id}', function($id){
    return response()->json(Customer::with('food')->findOrFail($id));
});

Route::get('/tenant', [TenantController::class, 'getTenant']);
Route::get('/tenant/{id}', [TenantController::class, 'getFood']);
Route::post('/transaction', [TransactionController::class, 'store']);
