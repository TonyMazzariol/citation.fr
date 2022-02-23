<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\AuthorController;

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

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/', [MainController::class, 'index'])->name('Home');

Route::get('/quotes', [QuotesController::class, 'quotes'])->name('Quotes');

Route::get('/authors', [AuthorsController::class, 'authors'])->name('Authors');

Route::get('/authors/{id}', [AuthorController::class, 'author'])->name('Author');


require __DIR__.'/auth.php';
