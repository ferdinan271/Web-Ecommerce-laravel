<?php

namespace App\Livewire;

use App\Models\artikel;
use Livewire\Component;

class ArtikelDetailPage extends Component
{
    public $slug;

    public function mount($slug){
        $this -> slug = $slug;
    }
    public function render()
    {
        return view('livewire.artikel-detail-page',[
            'artikel' => artikel::where('slug',$this->slug)->firstOrFail(),
        ]);
    }
}
