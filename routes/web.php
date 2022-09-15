<?php

use App\Http\Controllers\EmilyController;
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

Route::get('/', [EmilyController::class, 'index'])->name("home");
Route::get('/posts/{id}', [EmilyController::class, 'show'])->whereNumber('id');
Route::get('/about', [EmilyController::class, 'about']);

// Route::get('about', function () {
//     return view('about');
// });
