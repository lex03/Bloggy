<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/newpost', \App\Http\Livewire\PostCreate::class);

Route::get('/createdraft', \App\Http\Livewire\DraftCreate::class);

Route::get('/viewpost', \App\Http\Livewire\CommentInput::class);

Route::get('/myblogs', \App\Http\Livewire\MyBlogs::class);

Route::get('/blog/{id}', [BlogController::class, 'urlFetch']);

Route::get('/editblog/{id}', \App\Http\Livewire\EditBlog::class);
