<?php

use App\Models\ArticleModel;
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

Route::get('/', function(){
    return view('index', [
        'articles' => ArticleModel::all()
    ]);
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class,'getDashboard'])->name('dashboard');

Route::get('/create/draft', [App\Http\Controllers\DraftController::class, 'index'])->name('create_draft');
Route::post('/create/draft/img/{id}',[App\Http\Controllers\DraftController::class, 'uploadImage'])->name('upload_draft_image');
Route::get('/create/draft/img/{id}', [App\Http\Controllers\DraftController::class, 'getImage'])->name('get_uploaded_image');

Route::get('/view/article/{id}', [App\Http\Controllers\ArticleController::class, 'viewArticle'])->name('view_article');
Route::post('/create/article', [App\Http\Controllers\ArticleController::class, 'createArticle'])->name('create_article');
Route::get('/delete/article/{id}',[App\Http\Controllers\ArticleController::class, 'deleteArticle'])->name('delete_article');
