<?php

namespace App\Livewire;


use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Beranda  ')]
class HomePage extends Component
{
    public function render()
    {
        $brands = Brand::where('is_active', 1)->get();
        $productQuery = Product::query()->where('is_active',1);
        $categories = Category::where('is_active', 1)->get();
        return view('livewire.home-page',[ 
            'brands' => $brands,
            'products' => $productQuery->paginate(6),
            'categories' => $categories,
        ]);
    }
}
