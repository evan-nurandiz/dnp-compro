<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CmsController;
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

Route::get('/', function () {
    return view('web/welcome');
});
Route::get('/work', [PublicController::class, 'Work'])->name('work');
Route::get('/work/{slug}', [PublicController::class, 'WorkDetail'])->name('work-detail');
Route::get('/cms-login', [AuthController::class, 'login'])->name('cms-login');

Route::middleware(['authMiddleware'])->group(function(){
    Route::get('/cms-login', [AuthController::class, 'login'])->name('login');
    Route::post('/cms-login', [AuthController::class, 'loginAction'])->name('login-action');
});

Route::middleware(['verifiedAdmin'])->group(function(){
    Route::prefix('/admin')->group(function(){
        Route::get('/project', [ProjectController::class, 'Project'])->name('admin-cms-project-list');
        Route::get('/project/create', [ProjectController::class, 'ProjectCreate'])->name('admin-cms-project-create');
        Route::post('/project', [ProjectController::class, 'ProjectStore'])->name('admin-cms-project-store');
        Route::get('/project/{id}/edit', [ProjectController::class, 'ProjectEdit'])->name('admin-cms-project-edit');
        Route::patch('/project/{id}/update', [ProjectController::class, 'ProjectUpdate'])->name('admin-cms-project-update');
        Route::delete('/project/{id}', [ProjectController::class, 'ProjectDelete'])->name('admin-cms-project-delete');
        Route::get('/contact', [CmsController::class, 'Contact'])->name('admin-cms-contact');
        Route::put('/contact', [CmsController::class, 'UpdateContact'])->name('admin-cms-contact-update');
    });
});

