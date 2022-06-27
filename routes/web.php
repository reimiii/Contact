<?php

use App\Http\Controllers\ContactController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::resource('/contact', ContactController::class);
//
Route::get('/', [
    ContactController::class,
    'index'
])->name('contact');

Route::get('/contact/create', [
    ContactController::class,
    'create'
])->name('contact.create');

Route::post('/contact', [
    ContactController::class,
    'store'
])->name('contact.store');

Route::get('/contact/{contact:first_name}', [
    ContactController::class,
    'show'
])->name('contact.show');

Route::get('/contact/{contact:first_name}/edit', [
    ContactController::class,
    'edit'
])->name('contact.edit');

Route::put('/contact/{contact:first_name}', [
    ContactController::class,
    'update'
])->name('contact.update');

Route::delete('/contact/{contact:first_name}', [
    ContactController::class,
    'delete'
])->name('contact.delete');
