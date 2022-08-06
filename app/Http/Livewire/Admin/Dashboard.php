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


    public function render()
    {
        $this->users_count = User::count();
        $this->links = LinkUser::with('user')->count();
        return view('livewire.admin.dashboard');
    }
}
