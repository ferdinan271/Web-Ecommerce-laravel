<?php

namespace App\Livewire;

use App\Models\artikel;
use Livewire\Component;

class ArtikelPage extends Component
{
    public function render()
    {
        $artikel = artikel::where('is_active', 1)->get();
        return view('livewire.artikel-page',[
            
            'artikel' => $artikel,

        ]);
    }
}
