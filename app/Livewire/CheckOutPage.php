<?php

    namespace App\Livewire;

    use App\Helpers\CartManagement;
    use App\Models\Address;
    use App\Models\Order;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Auth as FacadesAuth;
    use Livewire\Component;
use Midtrans\Snap;

    class CheckOutPage extends Component
    {
        public $first_name;
        public $last_name;
        public $phone;
        public $street_address;
        public $city;
        public $state;
        public $zip_code;
        public $payment_method;


        public function placeOrder(){
          
            $this->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'phone' => 'required',
                'street_address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip_code' => 'required',
                'payment_method' => 'required',
            ]);

            $cart_items = CartManagement::getCartItemsFromCookie();

            $line_items = [];

            foreach($cart_items as $item){
                $line_items[] = [
                    'price_data' =>[
                        'currency' => 'idr',
                        'unit_amount' => $item['unit_amount'] * 100,
                        'product_data' =>[
                            'name' => $item['name'],
                        ]
                        ],
                    'quantity' => $item['quantity'],
                ];
            }
        $user = Auth::id();

        $order = new Order();
        $order->user_id = $user;
        $order->grand_total = CartManagement::calculateGrandTotal($cart_items);
        $order->payment_method = $this->payment_method;
        $order->payment_status = 'pending';
        $order->status = 'new';
        $order->currency = 'idr';
        $order->shipping_method = 'none';
        $order->    notes = 'Order Placed by'. $user;

        $address = new Address();
        $address -> first_name = $this -> first_name;
        $address -> last_name = $this -> last_name;
        $address -> phone = $this -> phone;
        $address -> street_address = $this -> street_address;
        $address -> city = $this -> city;
        $address -> state = $this -> state;
        $address -> zip_code = $this -> zip_code;

        $redirect_url = '';

        
        if($this->payment_method == 'cod'){
                
            $redirect_url = route('success');
                            
        }else{
            $token = 'm5BGbStsymaP588HPyoo';
            $nama = $address -> first_name;
            $no_wa = $address->phone;
            $pesan = 'Halo ' .$nama .' Silahkan Kirimkan Bukti Transfer Ke Admin Maniz Untuk Melanjutkan Pembayaran :D';
        

                $curl = curl_init();

                curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.fonnte.com/send',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('target' => $no_wa,'message' => $pesan),
                CURLOPT_HTTPHEADER => array(
                    'Authorization:'.$token
                ),
                ));

                $response = curl_exec($curl);
                curl_close($curl);
                $redirect_url = route('successState');
        }
            
        $order->save();
        $address->order_id = $order->id;
        $address ->save();
        $order->items()->createMany($cart_items);
        CartManagement::clearCartItems();
        return redirect($redirect_url);
    }


        public function render()
        {
            $cart_items = CartManagement::getCartItemsFromCookie();
            $grand_total = CartManagement::calculateGrandTotal($cart_items);
            return view('livewire.check-out-page',[
                'cart_items' => $cart_items,
                'grand_total'=> $grand_total,

            ]);
        }
    }
