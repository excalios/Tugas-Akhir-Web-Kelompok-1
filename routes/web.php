<?php

use App\Http\Controllers\Admin\ReleaseController as AdminReleaseController;
use App\Http\Controllers\CategoryListController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReleaseController;
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

Route::get('/', HomeController::class)->name('home');
Route::get('/news', [CategoryListController::class, 'news'])->name('news');
Route::get('/features', [CategoryListController::class, 'features'])->name('features');
Route::get('/guides', [CategoryListController::class, 'guides'])->name('guides');
Route::get('/reviews', [CategoryListController::class, 'reviews'])->name('reviews');
Route::get('/releases', [ReleaseController::class, 'index'])->name('releases');
Route::get('/releases/list/{title}', [ReleaseController::class, 'list'])->name('releases-list');
Route::get('/detail/{slug}', DetailController::class)->name('detail');

Route::prefix('admin')
    ->middleware(['auth'])
    ->group(function() {
        Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
        Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
        Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
        Route::put('/post/update/{id}', [PostController::class, 'update'])->name('post.update');
        Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
        Route::delete('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');
    });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
