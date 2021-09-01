<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login-process', [AuthController::class, 'loginProcess']);

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register-process', [AuthController::class, 'registerProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('login')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    });
    // Route::get('groups/create', [GroupController::class, 'create']);
    Route::resource('groups', GroupController::class);
});






// Route::resource('blabla',[blabla]);
