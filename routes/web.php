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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tarifs', [App\Http\Controllers\MyController::class, 'tarifs'])->name('tarifs');
Route::get('/galerie', [App\Http\Controllers\MyController::class, 'galerie'])->name('galerie');
Route::get('/contact', [App\Http\Controllers\MyController::class, 'contact'])->name('contact');
Route::post('/envoyer/contact', [App\Http\Controllers\MyController::class, 'envoyercontact'])->name('envoyer.contact');

