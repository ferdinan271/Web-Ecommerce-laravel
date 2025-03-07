<div class="container py-5 ">
    <section class="bg-white p-5 rounded">
        <h1 class="fw-bold text-secondary ">Detail Pembelian</h1>

    <div class="row g-4 mt-4 ">
        <!-- Customer Card -->
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-light p-3 rounded me-3">
                        <i class="bi bi-person text-secondary fs-3"></i>
                    </div>
                    <div>
                        <p class="text-muted text-uppercase small mb-1">Pelanggan</p>
                        <h6 class="mb-0">{{$address->full_name}}</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Date Card -->
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-light p-3 rounded me-3">
                        <i class="bi bi-calendar text-secondary fs-3"></i>
                    </div>
                    <div>
                        <p class="text-muted text-uppercase small mb-1">Tanggal</p>
                        <h6 class="mb-0">{{$order_items[0]->created_at->format('d-m-Y')}}</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Status Card -->
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-light p-3 rounded me-3">
                        <i class="bi bi-truck text-secondary fs-3"></i>
                    </div>
                    <div>
                        <p class="text-muted text-uppercase small mb-1">Status Produk</p>
                        <span class="badge bg-warning text-dark">{{$order->status}}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Status Card -->
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-light p-3 rounded me-3">
                        <i class="bi bi-credit-card text-secondary fs-3"></i>
                    </div>
                    <div>
                        <p class="text-muted text-uppercase small mb-1">Status Pembelian</p>
                        <span class="badge bg-success">{{$order->payment_status}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Items & Summary -->
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="fw-bold text-secondary">Pesanan</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlab</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order_items as $item)
                                <tr>
                                    <td class="d-flex align-items-center">
                                        <img src="{{url('storage',$item->product->images[0])}}" class="img-thumbnail me-3" style="width: 50px; height: 50px;" alt="{{$item->product->name}}">
                                        <span>{{$item->product->name}}</span>
                                    </td>
                                    <td>{{Number::currency($item->unit_amount, 'IDR')}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>{{Number::currency($item->total_amount, 'IDR')}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Shipping Address -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold text-secondary">Alamat</h5>
                    <p>{{$address->street_address}}, {{$address->city}}, {{$address->state}}, {{$address->zip_code}}</p>
                    <p class="mb-0"><strong>Nomor Telepon:</strong> {{$address->phone}}</p>
                </div>
            </div>
        </div>

        <!-- Summary -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold text-secondary">Summary</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Subtotal</span>
                            <span>{{Number::currency($item->order->grand_total, 'IDR')}}</span>
                        </li>
                        
                        <li class="list-group-item d-flex justify-content-between fw-bold">
                            <span>Total Pembelian</span>
                            <span>{{Number::currency($item->order->grand_total, 'IDR')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
