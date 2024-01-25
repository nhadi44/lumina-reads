<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Offcanvas extends Component
{
    public $header;
    public $menus;

    public function render()
    {
        return view('livewire.guest.offcanvas');
    }

    public function mount()
    {
        $this->header = "Lumina Reads";
        $this->menus = [
            [
                'name' => 'Menu 1'
            ],
            [
                'name' => 'Menu 2'
            ],
            [
                'name' => 'Menu 3'
            ]
        ];
    }
}
