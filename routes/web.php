<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\HrefMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index']) -> middleware(HrefMiddleware::class);;

// Route::resource('users', UserController::class);
Route::resources(['users'=> UserController::class]);
Route::get('users', [UserController::class, 'index']) ->name('users.index') -> middleware(HrefMiddleware::class);
// Route::get('/users/create', [UserController::class, 'create']) ->name('users.create');
// Route::post('users',[UserController::class, 'store']) -> name('users.store') -> middleware(UserMiddleware::class);
// Route::get('/users/{user}/edit',[UserController::class, 'edit']) ->name('users.edit');
// Route::delete('/users/{user}', [UserController::class, 'destroy']) ->name('users.destroy');
