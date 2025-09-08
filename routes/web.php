<?php

use App\Http\Controllers\Admin\ForumController;
// use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

//Exclui o forum
Route::delete('/forum/{id}', [ForumController::class, 'destroy'])->name('forum.destroy');


//Edita o forum
Route::put('/forum/{id}', [ForumController::class, 'update'])->name('forum.update');
Route::get('/forum/{id}/edit', [ForumController::class, 'edit'])->name('forum.edit');


//cadastra no forum
Route::post('/forum/create', [ForumController::class, 'store'])->name('forum.store');
Route::get('/forum/create', [ForumController::class, 'create'])->name('forum.create');

//mostra as informações detalhadas do forum
Route::get('/forum/{id}', [ForumController::class, 'show'])->name('forum.show');

//Exibi no forum
Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');

// Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});

