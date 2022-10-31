<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
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
//PostsController
Route::get('/posts', [\App\Http\Controllers\PostsController::class, 'index'])->name('post.index');
Route::post('/posts', [\App\Http\Controllers\PostsController::class, 'store'])->name('post.store');
Route::get('/posts/create', [\App\Http\Controllers\PostsController::class, 'create'])->name('post.create');
Route::get('/posts/{post}', [\App\Http\Controllers\PostsController::class, 'show'])->name('post.show');
Route::patch('/posts/{post}', [\App\Http\Controllers\PostsController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}', [\App\Http\Controllers\PostsController::class, 'destroy'])->name('post.delete');

Route::get('/posts/{post}/edit', [\App\Http\Controllers\PostsController::class, 'edit'])->name('post.edit');

Route::get('/posts/update', [\App\Http\Controllers\PostsController::class, 'update']);
Route::get('/posts/delete', [\App\Http\Controllers\PostsController::class, 'delete']);
Route::get('/posts/andelete', [\App\Http\Controllers\PostsController::class, 'andelete']);
Route::get('/posts/first_or_create', [\App\Http\Controllers\PostsController::class, 'FirstOrCreate']);
Route::get('/posts/update_or_create', [\App\Http\Controllers\PostsController::class, 'UpdateOrCreate']);
//AnotherController
Route::get('/main', [\App\Http\Controllers\MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');




