<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Middleware\CustomerMiddleware;
use App\Http\Middleware\HrefMiddleware;
use App\Http\Controllers\CommentController;

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

Route::get('/', [CustomerController::class, 'index']) -> middleware(HrefMiddleware::class)->middleware('auth');

// Route::resource('users', UserController::class);
Route::resources(['customers'=> CustomerController::class]);
Route::get('customers', [CustomerController::class, 'index']) ->name('customers.index') -> middleware(HrefMiddleware::class);
// Route::get('/users/create', [UserController::class, 'create']) ->name('users.create');
// Route::post('users',[UserController::class, 'store']) -> name('users.store') -> middleware(UserMiddleware::class);
// Route::get('/users/{user}/edit',[UserController::class, 'edit']) ->name('users.edit');
// Route::delete('/users/{user}', [UserController::class, 'destroy']) ->name('users.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('comments',CommentController::class)->only(['store', 'update', 'destroy'])->middleware('auth');

