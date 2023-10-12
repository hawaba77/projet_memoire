<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    return view('/layouts.index');
});
Route::get('/humanite', function () {
    return view('/layouts.humanite');
});
Route::get('/education', function () {
    return view('/layouts.education');
});
Route::get('/business', function () {
    return view('/layouts.business');
});
Route::get('/santé', function () {
    return view('/layouts.santé');
});
Route::get('/sport', function () {
    return view('/layouts.sport');
});
Route::get('/agriculture', function () {
    return view('/layouts.agriculture');
});
Route::get('/admin-dashboard', function () {
    return view('/dashboard');
});
Route::get('/projets', function () {
    return view('/layouts.projets');
});
Route::get('/contributeurs', function () {
    return view('/layouts.contributeurs');
});

Route::resource('products', ProductController::class);

Route::resource('layouts.project',  'ProjetsController::');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
