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

Route::get('/', function () {

    $getAll = \App\Models\User::withCount('links')->findOrFail(12);
    return view('welcome', [
        'users' => $getAll,
    ]);
});

Route::get('/dashboard', fn () => 'dashboard');
