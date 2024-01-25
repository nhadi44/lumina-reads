<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Navbar extends Component
{
    public $menus;
    public $btnCreateAccountName;
    public function render()
    {
        return view('livewire.guest.navbar');
    }

    // before render
    public function mount()
    {
        $this->btnCreateAccountName = 'Create an Account';
        $this->menus = [
            [
                'name' => 'Menu 1',
            ],
            [
                'name' => 'Menu 2',
            ],
            [
                'name' => 'Menu 3',
            ]
        ];
    }
}
