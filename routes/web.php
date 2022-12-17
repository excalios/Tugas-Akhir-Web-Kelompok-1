<?php

use App\Http\Controllers\CategoryListController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
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
Route::get('/detail', DetailController::class)->name('detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
