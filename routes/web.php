<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'Home'])->name('Home');
Route::get('/work', [PublicController::class, 'Work'])->name('work');
Route::get('/work/{slug}', [PublicController::class, 'WorkDetail'])->name('work-detail');
Route::get('/journal', [PublicController::class, 'Journal'])->name('journal');
Route::get('/journal/{slug}', [PublicController::class, 'JournalDetail'])->name('journal-detail');
Route::get('/about-us', [PublicController::class, 'AboutUs'])->name('about-us');
Route::get('/teams', [PublicController::class, 'Teams'])->name('teams');
Route::get('/cms-login', [AuthController::class, 'login'])->name('cms-login');

Route::middleware(['authMiddleware'])->group(function(){
    Route::get('/cms-login', [AuthController::class, 'login'])->name('login');
    Route::post('/cms-login', [AuthController::class, 'loginAction'])->name('login-action');
});

Route::middleware(['verifiedAdmin'])->group(function(){
    Route::prefix('/admin')->group(function(){
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin-cms-logout');
        Route::get('/project', [ProjectController::class, 'Project'])->name('admin-cms-project-list');
        Route::get('/project/create', [ProjectController::class, 'ProjectCreate'])->name('admin-cms-project-create');
        Route::post('/project', [ProjectController::class, 'ProjectStore'])->name('admin-cms-project-store');
        Route::get('/project/{id}/edit', [ProjectController::class, 'ProjectEdit'])->name('admin-cms-project-edit');
        Route::patch('/project/{id}/update', [ProjectController::class, 'ProjectUpdate'])->name('admin-cms-project-update');
        Route::delete('/project/{id}', [ProjectController::class, 'ProjectDelete'])->name('admin-cms-project-delete');
        Route::get('/contact', [CmsController::class, 'Contact'])->name('admin-cms-contact');
        Route::put('/contact', [CmsController::class, 'UpdateContact'])->name('admin-cms-contact-update');
        Route::get('/home', [CmsController::class, 'Home'])->name('admin-cms-home');
        Route::get('/blog/create', [BlogController::class, 'BlogCreate'])->name('admin-cms-blog-create');
        Route::get('/blog', [BlogController::class, 'Blog'])->name('admin-cms-blog-list');
        Route::post('/blog', [BlogController::class, 'BlogStore'])->name('admin-cms-blog-store');
        Route::get('/blog/{id}/edit', [BlogController::class, 'BlogEdit'])->name('admin-cms-blog-edit');
        Route::patch('/blog/{id}/update', [BlogController::class, 'BlogUpdate'])->name('admin-cms-blog-update');
        Route::delete('/blog/{id}', [BlogController::class, 'BlogDelete'])->name('admin-cms-blog-delete');
        Route::post('/asset/image-upload', [ImageUploadController::class, 'storeImage'])->name('admin-image-upload');
    });
});

