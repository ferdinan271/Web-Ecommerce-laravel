<?php

namespace App\Livewire;

use App\Models\artikel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


#[Title('Artikel  ')]

    

class ArtikelPage extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        // $artikelQuery = artikel::where('is_active', 1)->get();


        return view('livewire.artikel-page',[
            
            'artikels' => artikel::paginate(3),

        ]);
    }
}
