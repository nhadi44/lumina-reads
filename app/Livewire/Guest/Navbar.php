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
                'url' => route('guest.homepage.index'),
                'is_active' => request()->routeIs('guest.homepage.index') ? true : false,
            ],
            [
                'name' => 'Kategori',
                'url' => route('guest.category.index'),
                'is_active' => request()->routeIs('guest.category.index') ? true : false,
            ],
            [
                'name' => 'Tentang Kami',
                'url' => '#',
                'is_active' => false,
            ],
            [
                'name' => 'Kontak',
                'url' => '#',
                'is_active' => false,
            ]
        ];
    }
}
