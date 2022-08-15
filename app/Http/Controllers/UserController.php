<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Role;


class UserController extends Controller
{
    /**
     * is Dashboard
     *
     */
    public function index()
    {
        $user = Auth::user();
        return view('user.index', [
            'title' => 'User Dashboard',
            'isUser' => $user->hasRole('user'),
        ]);
    }

    public function links()
    {
        $user = Auth::user();
        return view('user.link-user.index', [
            'title' => 'User Links',
            'isUser' => $user->hasRole('user'),
        ]);
    }
}
