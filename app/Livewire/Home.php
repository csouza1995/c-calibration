<?php

namespace App\Livewire;

use App\Livewire\Traits\IsPage;
use Livewire\Component;

class Home extends Component
{
    use IsPage;

    public function mount()
    {
        $this->title = 'Home';
        $this->links = [
            [
                'title' => 'Home',
                'route' => route('home'),
            ]
        ];
    }

    public function render()
    {
        return view('livewire.home');
    }
}
