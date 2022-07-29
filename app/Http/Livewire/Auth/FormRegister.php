<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class FormRegister extends Component
{
    public $isCrud = false;

    public function mount($isCrud = false)
    {
        return $this->isCrud = $isCrud;
    }

    public function render()
    {
        return view('livewire.auth.form-register');
    }
}
