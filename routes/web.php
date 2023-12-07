<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/article/{slug}', [App\Http\Controllers\BlogController::class, 'detail'])->name('detail.article');
Route::get('/articles', [App\Http\Controllers\BlogController::class, 'articles'])->name('articles');
Route::get('/apropos', [App\Http\Controllers\BlogController::class, 'apropos'])->name('apropos');
Route::get('/contact', [App\Http\Controllers\BlogController::class, 'contact'])->name('contact');
Route::post('/envoyer/contact', [App\Http\Controllers\BlogController::class, 'envoyercontact'])->name('envoyer.contact');
Route::post('/envoyer/newsletter', [App\Http\Controllers\BlogController::class, 'newsletterenvoyer'])->name('newsletter.envoyer');

Route::post('/sendcomment', [App\Http\Controllers\BlogController::class, 'sendcomment'])->name('sendcomment');

