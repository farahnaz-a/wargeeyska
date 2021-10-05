<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FaviconController;
use App\Http\Controllers\FooterAboutController;
use App\Http\Controllers\FooterContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ReporterController;
use App\Http\Controllers\SubCategoryController;
use App\Models\Blog;
use App\Models\FooterAbout;
use App\Models\FooterContact;
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
//Frontend About
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
//blog_read
Route::get('/blog/read/{id}', [FrontendController::class, 'blog_read'])->name('frontend.blog_read');

//Admin
Route::group(['prefix' => 'admin'], function () {
      Route::get('/dashboard',[AdminController::class , 'index'])->name('admin.dashboard');
    // Category Controller
      Route::resource('categories', CategoryController::class);
    // SubCategory Controller
      Route::resource('subcategories', SubCategoryController::class);
    // About Controller
      Route::resource('about', AboutController::class);
    // logo Controller
      Route::resource('logo', LogoController::class);
    // favicon Controller
      Route::resource('favicon', FaviconController::class);
    // footer about Controller
      Route::resource('footer_about', FooterAboutController::class);
    // footer controller Controller
      Route::resource('footer_contact', FooterContactController::class);
    // Reporters Blog Controller
      Route::get('/reporter/blogs', [AdminBlogController::class, 'index'])->name('reporter.blog');
      Route::post('/reporter/blogs/access', [AdminBlogController::class, 'published'])->name('reporter.blog_published');
      Route::get('/reporter/blogs/access/{id}', [AdminBlogController::class, 'details'])->name('reporter.blog_details');
      Route::get('/reporter/blogs/delete/{id}', [AdminBlogController::class, 'delete'])->name('reporter.blog_delete');
});

//Reporters
Route::group(['prefix' => 'reporter', 'middleware' => 'checkReporter'], function () {
      Route::get('/dashboard',[ReporterController::class , 'index'])->name('reporter.dashboard');
      
      // Trash Controller
      Route::get('/blogs/trash', [BlogController::class, 'rejected'])->name('blog.trash');

      Route::get('/blog/delete/{id}', [BlogController::class, 'p_delete'])->name('blog.delete');  
      Route::get('/blog/restore/{id}', [BlogController::class, 'restore'])->name('blog.restore');  


      // Blog Controller
      Route::resource('blogs', BlogController::class);
      
     
      // Subcategory
      Route::post('blog_subcategories', [BlogController::class,'subcategories'])->name('blog.subcategories');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
