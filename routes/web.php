<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReporterController;
use App\Models\Categories;
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

Route::get('/', function () {
    return view('welcome');
});

//Admin
Route::group(['prefix' => 'admin'], function () {
      Route::get('/dashboard',[AdminController::class , 'index'])->name('admin.dashboard');

    // Category Controller
      Route::resource('categories', CategoryController::class);
});

//Reporters
Route::group(['prefix' => 'reporter'], function () {
      Route::get('/dashboard',[ReporterController::class , 'index'])->name('reporter.dashboard');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
