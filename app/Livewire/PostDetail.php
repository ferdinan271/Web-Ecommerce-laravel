<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Artikel  ')]
class PostDetail extends Component
{
    public function render()
    {
        return view('livewire.posts-detail');
    }
}
