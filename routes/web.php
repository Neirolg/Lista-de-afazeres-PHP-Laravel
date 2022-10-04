<?php
use Illuminate\Support\Facades\Auth;
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


Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/', 'App\Http\Controllers\LoginController@index')->name("auth.login");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('todo', 'App\Http\Controllers\TodosController');

