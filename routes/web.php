<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GroupListController;
use App\Http\Controllers\TemplateController;
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

Route::delete('unsubscribe-email/{email}', [EmailController::class, 'unsubscribe']);
Route::get('unsubscribe/{email}', [EmailController::class, 'unsubscribeIndex']);

Route::middleware('login')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    });
    // Route::get('groups/create', [GroupController::class, 'create']);
    Route::resource('groups', GroupController::class);

    Route::resource('group-list', GroupListController::class);
    Route::get('group-list/create/{id}', [GroupListController::class, 'create']);
    Route::post('group-list/store/{id}', [GroupListController::class, 'store']);

    Route::resource('email', EmailController::class);

    Route::post('email/send-email', [EmailController::class, 'sendEmail']);
    Route::resource('template', TemplateController::class);
});






// Route::resource('blabla',[blabla]);
