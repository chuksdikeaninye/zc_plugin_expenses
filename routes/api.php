<?php

use App\Http\Controllers\SidebarAPI;
use App\Http\Controllers\ExpenseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExpenseController;

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


// Auth Endpoints

// Expense List Routes
Route::group(['middleware' => 'api', 'prefix' => 'v1'], function(){
	Route::get("/expenses", [ExpenseController::class, 'index']);
	Route::get("/expenses/{id}", [ExpenseController::class, 'show']);
	Route::post("/expenses", [ExpenseController::class, 'store']);
    Route::delete('/expense/delete', [ExpenseController::class, 'delete_expense']);
    Route::post('/expense/update', [ExpenseController::class, 'update_expense']);
});

// Rooms Endpoints

// Organization Endpoints






