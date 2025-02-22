<?php

namespace App\Livewire;

use app\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Product-Page')]
class ProductsPage extends Component
{
    use WithPagination;

    #[Url]
    public $selected_categories= [];

    #[Url]
    public $selected_brands= [];

    // add product to cart method
    public function addToCart($product_id){
        dd($product_id);
        // $total_count = CartManagement::addItemToCart($product_id);

        // $this->dispatch('update-cart-count',total_count: $total_count)->to(Navbar::class);
    }
    
    public function render()
    {
        $productQuery = Product::query()->where('is_active',1);

        if(!empty($this-> selected_categories)){
            $productQuery->whereIn('category_id', $this-> selected_categories);
        }
        if(!empty($this-> selected_brands)){
            $productQuery->whereIn('brand_id', $this-> selected_brands);
        }

        return view('livewire.products-page',[
            'products' => $productQuery->paginate(6),
            'brands' => Brand::where('is_active',1)-> get(['id','name','slug']),
            'categories' => Category::where('is_active',1)-> get(['id','name','slug']),
        ]);
    }
}
