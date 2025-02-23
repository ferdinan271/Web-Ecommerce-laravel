<?php

use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckOutPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\SuccessPage;
use App\Models\CategoryPost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function (){
    Route::get('/checkout', CheckOutPage::class);
    Route::get('/my-orders', MyOrdersPage::class);
    Route::get('/my-orders/{order}', MyOrderDetailPage::class);
    
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, ])->name('home');



Route::get('/', HomePage::class);
Route::get('/categories', CategoriesPage::class);
Route::get('/products', ProductsPage::class);
Route::get('/products/{slug}', ProductDetailPage::class)->name('product.show');
Route::get('/cart', CartPage::class);

Route::get('/success', SuccessPage::class)->name('success');
Route::get('/cancel', CancelPage::class)->name('cancle');


Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Article', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function(Post $post){
        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user){
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Articles by '. 
    $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function(CategoryPost $category){
    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => ' Articles in '. $category->name, 
    'posts' => $category->posts]);
});

