<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\publiccontroller;
use App\Http\Controllers\CreateDiaryController;
use App\Http\Controllers\privateController;
use App\Http\Controllers\show;

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
Route::get('/private', function () {
    return view('private');
});
Route::get('/public', function () {
    return view('public');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::view('addprivate','addprivate');
Auth::routes();

Route::get('/', [App\Http\Controllers\publiccontroller::class, 'public'])->name('welcome');
Route::post('check', [App\Http\Controllers\publiccontroller::class, 'check']);
Route::get('/private', [App\Http\Controllers\HomeController::class, 'fun'])->name('private');
Auth::routes();

Route::get('/', [App\Http\Controllers\publiccontroller::class, 'public'])->name('welcome');
Route::get('add-diary', [App\Http\Controllers\CreateDiaryController::class, 'adddiary']);
Route::post('save-diary', [App\Http\Controllers\CreateDiaryController::class, 'storediary']);
Route::get('showpublic', [App\Http\Controllers\show::class, 'showdata']);
Route::get('addprivate', [App\Http\Controllers\privateController::class, 'adddiary']);
Route::post('saveprivate', [App\Http\Controllers\privateController::class, 'storeprivatediary']);
Route::get('showprivate', [App\Http\Controllers\privateController::class, 'showdata']);
Route::get('delete/{id}', [App\Http\Controllers\privateController::class, 'deleteData']);
Route::get('edit/{id}', [App\Http\Controllers\privateController::class, 'editData']);
Route::post('edit', [App\Http\Controllers\privateController::class, 'updateData']);


