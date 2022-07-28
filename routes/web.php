<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
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

    echo 'Hello Everyone 👋';
});

// Route::get('/give-role', function () {
//     $user = Auth::user();
//     $role = Role::find(2);
//     $user->givePermissionTo('add link'); # => memberi permission ke user

// });

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', function () {
        echo '<h1>Dashboard</h1>';
    });

    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});

// Route::group(['middleware' => ['role:user', '']], function () {
//     //
// });

// $user = Auth::user();
//     // $user->givePermissionTo('edit link', 'hapus link');  => memberi permission ke user
//     // dd($user->hasPermissionTo('hapus link')); // => cek permission user boolean
//     dd($user->hasPermissionTo('add link'));
//     // $role = Role::findOrFail(1);
//     // dd($user->can('add link'));
//     // $role->givePermissionTo('add link', 'edit link', 'hapus link');

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::resource('users', UserController::class);
});
