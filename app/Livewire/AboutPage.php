<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Tentang Kami  ')]
class AboutPage extends Component
{
    public function render()
    {
        return view('livewire.about-page');
    }
}
