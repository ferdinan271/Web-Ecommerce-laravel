<div class="container py-5 min-vh-100">
    <div class="bg-white p-5 rounded">
        <h1 class="text-4xl fw-bold text-secondary">My Orders</h1>
    <div class="card mt-4 shadow">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Produk</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status Pembayaran</th>
                            <th scope="col">Status Pembayaran</th>
                            <th scope="col">Harga</th>
                            <th scope="col" class="text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td class="fw-bold">{{$order->id}}</td>
                            <td>{{$order->created_at->format('d-m-Y')}}</td>
                            <td><span class="badge bg-warning text-dark">{{$order->status}}</span></td>
                            <td><span class="badge bg-success">{{$order->payment_status}}</span></td>
                            <td>{{Number::currency($order->grand_total,'IDR')}}</td>
                            <td class="text-end">
                                <a href="/my-orders/{{$order->id}}" class="btn btn-success ">lihat Selengkapnya</a>
                            </td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{$orders->links()}}
            </div>
        </div>
    </div>
    </div>
</div>
