<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class Card extends Component
{
    // get data from parent component
    public $bookTitleChild;
    protected $lisneter = ['bookTitle'];

    public function dataFromParent($bookTitle)
    {
        $this->bookTitleChild = $bookTitle;
    }

    public function mount()
    {
        $this->dataFromParent($this->bookTitleChild);
    }

    public function render()
    {
        return view('livewire.card');
    }
}
