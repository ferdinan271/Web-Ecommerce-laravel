<div class="container py-4 min-vh-100">
    <div class="bg-white p-5 rounded">
        <h1 class="h4 fw-bold mb-4">Shopping Cart</h1>
        <div class="row">
            <!-- Bagian Produk -->
            <div class="col-md-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="table-responsive"> <!-- Tambahkan wrapper ini -->
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($cart_items as $item)
                                        <tr wire:key='{{ $item['product_id'] }}'>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img class="me-3" src="{{ url('storage', $item['image']) }}" 
                                                        alt="{{ $item['name'] }}" width="50">
                                                    <span>{{ $item['name'] }}</span>
                                                </div>
                                            </td>
                                            <td class="align-middle text-nowrap">
                                                {{ Number::currency($item['unit_amount'], 'IDR') }}
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <button wire:click='decreaseQty({{ $item['product_id'] }})' 
                                                        class="btn btn-outline-secondary btn-sm me-2">-</button>
                                                    <span class="text-center w-25">{{ $item['quantity'] }}</span>
                                                    <button wire:click='increaseQty({{ $item['product_id'] }})' 
                                                        class="btn btn-outline-secondary btn-sm ms-2">+</button>
                                                </div>
                                            </td>
                                            <td class="align-middle text-nowrap">
                                                {{ Number::currency($item['total_amount'], 'IDR') }}
                                            </td>
                                            <td class="align-middle">
                                                <button wire:click='removeItem({{ $item['product_id'] }})' 
                                                    class="btn btn-danger btn-sm">
                                                    <span wire:loading.remove wire:target='removeItem({{ $item['product_id'] }})'>
                                                        Hapus
                                                    </span>
                                                    <span wire:loading wire:target='removeItem({{ $item['product_id'] }})'>
                                                        Menghapus..
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>   
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center py-4 text-muted fw-bold">
                                                Anda Belum Memasukan Produk Ke Keranjang
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div> <!-- Tutup .table-responsive -->
                    </div>
                </div>
            </div>

            <!-- Bagian Ringkasan Pembayaran -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-semibold mb-3">Summary</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Total</span>
                            <span>{{ Number::currency($grand_total, 'IDR') }}</span>
                        </div>
                        <hr class="my-2">
                        <div class="d-flex justify-content-between mb-2 fw-bold">
                            <span>Total Keseluruhan</span>
                            <span>{{ Number::currency($grand_total, 'IDR') }}</span>
                        </div>
                        @if ($cart_items)
                            <a href="/checkout" class="btn btn-success w-100 mt-3">Checkout</a>
                        @endif  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
