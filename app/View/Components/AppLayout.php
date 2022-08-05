<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{

    public $title;
    public $isUser;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = 'Link App', $isUser = false)
    {
        $this->title = $title;
        $this->isUser = $isUser;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app');
    }
}
