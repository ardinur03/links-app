<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Role;


class UserController extends Controller
{

    public function index()
    {

        $user = Auth::user();

        $data = [
            'user' => $user,
            'isUser' => $user->hasRole('user'),
        ];

        return view('user.index', $data);
    }
}
