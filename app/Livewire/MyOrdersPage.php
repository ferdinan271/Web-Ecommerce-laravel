<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class MyOrdersPage extends Component
{
    use WithPagination;
    public function render()
    {
        $user = Auth::id();
        $my_orders = Order::where('user_id',$user)->latest()->paginate(5);
        return view('livewire.my-orders-page',[
            'orders' => $my_orders,
        ]);
    }
}
