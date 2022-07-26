<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

Route::middleware('role:user')->get('/dashboard', function () {
    // $user = Auth::user();
    // $user->givePermissionTo('edit link', 'hapus link');  => memberi permission ke user
    // dd($user->hasPermissionTo('hapus link')); // => cek permission user boolean

    // $role = Role::findOrFail(1);
    // dd($user->can('add link'));
    // $role->givePermissionTo('add link', 'edit link', 'hapus link');

    echo '<h1>Dashboard</h1>';
});

Route::group(['middleware' => ['role:user', '']], function () {
    //
});

Route::middleware('role:admin')->get('/admin/dashboard', fn () => 'ADMIN DASHBOARD');
