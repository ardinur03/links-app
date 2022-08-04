<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\LinkUser;
use Livewire\Component;

class ShowUser extends Component
{

    public $users = [];

    public function mount($users)
    {
        $this->users = $users;
    }

    public function render()
    {
        return view('livewire.admin.user.show-user');
    }
}
