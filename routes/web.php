<?php

use App\Filament\Resources\ArtikelResource;
use App\Livewire\AboutPage;
use App\Livewire\ArtikelDetailPage;
use App\Livewire\ArtikelPage;
use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckOutPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\PostDetail;
use App\Livewire\PostsDetail;
use App\Livewire\Posts;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\SkillDetailPage;
use App\Livewire\SkillPage;
use App\Livewire\SuccessPage;
use App\Livewire\SuccessState;
use App\Models\CategoryPost;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/generate', function(){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
 });

Route::middleware('auth')->group(function (){
    Route::get('/checkout', CheckOutPage::class);
    Route::get('/my-orders', MyOrdersPage::class)->name('my-orders');
    Route::get('/my-orders/{order_id}', MyOrderDetailPage::class);
        
    Route::get('/success', SuccessPage::class)->name('success');
    Route::get('/successState', SuccessState::class)->name('successState');
    Route::get('/cancel', CancelPage::class)->name('cancle');

    
});
Auth::routes();


Route::get('/', HomePage::class);
Route::get('/about', AboutPage::class);
Route::get('/skill', SkillPage::class);
Route::get('/skill-detail', SkillDetailPage::class);
Route::get('/products', ProductsPage::class)->name('product');
Route::get('/products/{slug}', ProductDetailPage::class)->name('product.show');
Route::get('/cart', CartPage::class);
Route::get('/artikel', ArtikelPage::class);
Route::get('/artikel/{slug}', ArtikelDetailPage::class);
Route::get('/posts-detail', PostDetail::class);




