<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [testController::class, 'index'])->name(name:'home');
Route::get('/blog', [testController::class, 'blog'])->name(name:'blog');
Route::get('/about', [testController::class, 'about'])->name(name:'about');
Route::get('/contact', [testController::class, 'contact'])->name(name:'contact');
Route::get('/details/{joy}', [testController::class, 'detail'])->name(name:'detail');
Route::post('/full-name', [UserController::class, 'fullName'])->name(name:'full-name');

