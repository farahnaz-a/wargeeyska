<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ReporterController;
use App\Http\Controllers\SubCategoryController;

use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\FrontMatterParser;

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

Route::get('/', [FrontendController::class, 'index']);

//Admin
Route::group(['prefix' => 'admin'], function () {
      Route::get('/dashboard',[AdminController::class , 'index'])->name('admin.dashboard');

    // Category Controller
      Route::resource('categories', CategoryController::class);
    // SubCategory Controller
      Route::resource('subcategories', SubCategoryController::class);
});

//Reporters
Route::group(['prefix' => 'reporter'], function () {
      Route::get('/dashboard',[ReporterController::class , 'index'])->name('reporter.dashboard');

      // Blog Controller
      Route::resource('blogs', BlogController::class);

      // Subcategory Controller
      Route::post('blog_subcategories', [BlogController::class,'subcategories'])->name('blog.subcategories');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
