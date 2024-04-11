<?php

namespace App\Livewire\Info;

use App\Livewire\Traits\IsPage;
use Livewire\Component;

class InstructionsIndex extends Component
{
    use IsPage;

    public function mount()
    {
        $this->title = 'Home';
        $this->links = [
            [
                'title' => 'Página Inicial',
                'route' => route('home'),
            ],
            [
                'title' => 'Instruções',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.info.instructions-index');
    }
}
