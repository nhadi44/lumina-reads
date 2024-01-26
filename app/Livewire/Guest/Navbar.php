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
        $this->btnCreateAccountName = 'Mulai Sekarang';
        $this->menus = [
            [
                'name' => 'Beranda',
            ],
            [
                'name' => 'Kategori',
            ],
            [
                'name' => 'Tentang Kami',
            ],
            [
                'name' => 'Kontak',
            ]
        ];
    }
}
