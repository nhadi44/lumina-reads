<?php

namespace App\Livewire\Guest\Homepage;

use Livewire\Component;

class RecomendationBookSection extends Component
{
    public $bookTitle;

    public function mount()
    {
        $this->bookTitle = 'The Subtle Art of Not Giving a F*ck';
    }

    public function render()
    {
        return view('livewire.guest.homepage.recomendation-book-section');
    }
}
