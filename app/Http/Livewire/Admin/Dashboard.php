<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\LinkUser;
use App\Models\User;

class Dashboard extends Component
{

    //    ta = [
    //         'title' => 'Dashboard',
    //         'users_count' => User::count(),
    //         'links' => LinkUser::with('user')->count(),
    //     ]; $da

    public $title = 'Dashboard';
    public $users_count = 0;
    public $links = 0;
    public $users_count_today = 0;
    public $get_user_id_today = 0;
    public $get_name = '';
    public $get_username = '';
    public $users = [];

    public function render()
    {
        $this->users_count = User::count();
        $this->links = LinkUser::with('user')->count();
        $this->users_count_today = User::whereDate('created_at', today())->count();
        $this->get_user_id_today = User::whereDate('created_at', today())->first();
        $this->get_name = $this->get_user_id_today->name ?? '';
        $this->get_username = $this->get_user_id_today->username ?? '';
        $this->users = User::orderBy('created_at', 'desc')->take(5)->get();
        return view('livewire.admin.dashboard');
    }
}
