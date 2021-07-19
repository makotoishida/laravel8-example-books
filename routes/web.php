<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;

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

Route::get('/dashboard', function () {
  $bookCount = Book::all()->count();
  return view('dashboard', compact('bookCount'));
})->middleware(['auth'])->name('dashboard');

Route::resources([
  'books' => BookController::class,
]);


require __DIR__.'/auth.php';
