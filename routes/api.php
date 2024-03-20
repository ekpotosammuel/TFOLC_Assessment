<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// Route::get('/', function () {
//     return view('Auth.register');
// });

// Route::get('/login', [RegisterController::class, 'loginForm'])->name('login/form');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [RegisterController::class, 'login']);
// Route::get('/logout', [RegisterController::class, 'logout']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/logout', [RegisterController::class, 'logout']);
});

// Route::group(['middleware' => 'auth:sanctum'], function () {
//     Route::view('/dashboard', "dashboard"); //Home Page
// });
