<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SuccessPage extends Component
{
    public function render()
    {
        $user = Auth::id();
        $latest_order = Order::with('address')->where('user_id',$user)->latest()->first();
        
        return view('livewire.success-page',[
            'order' => $latest_order,
        ]);
    }
}
