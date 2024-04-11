<?php

namespace App\Livewire\Info;

use App\Livewire\Traits\IsPage;
use Livewire\Component;

class VersionsIndex extends Component
{
    use IsPage;

    public function mount()
    {
        $this->title = 'Versões do ' . config('app.name');
        $this->links = [
            [
                'title' => 'Home',
                'route' => route('home'),
            ],
            [
                'title' => 'Versões',
            ]
        ];
    }

    public function render()
    {
        return view('livewire.info.versions-index');
    }
}
