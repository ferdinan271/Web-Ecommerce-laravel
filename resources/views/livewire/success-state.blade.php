<section class="container py-5">
    <div class="card shadow p-4">
        <h2 class="mb-4 fw-semibold ms-3">Kami Telah Menghubungi Anda</h2>
        

        <div class="alert alert-warning">
            <strong>Note:</strong> Silahkan Konfirmasi Pembelian Anda Melalui Pesan Yang Telah Kami Kirim 
        </div>

        <div class="row border-bottom pb-3 mb-4">
            <div class="col-md-3">
                <p class="mb-1 text-muted">Order Number:</p>
                <p class="fw-bold">{{$order->id}}</p>
            </div>
            <div class="col-md-3">
                <p class="mb-1 text-muted">Date:</p>
                <p class="fw-bold">{{$order->created_at->format('d-m-Y')}}</p>
            </div>
            <div class="col-md-3">
                <p class="mb-1 text-muted">Total:</p>
                <p class="fw-bold ">{{Number::currency($order->grand_total, 'IDR')}}</p>
            </div>
            <div class="col-md-3">
                <p class="mb-1 text-muted">Payment Method:</p>
                <p class="fw-bold">{{$order->payment_method == 'cod' ? 'Cash on Delivery' : 'Transfer'}}</p>
            </div>
        </div>

        <h4 class="fw-bold">Order Details</h4>
        <ul class="list-group mb-4">
            <li class="list-group-item d-flex justify-content-between">
                <span>Subtotal</span>
                <span>{{Number::currency($order->grand_total, 'IDR')}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between fw-bold">
                <span>Total Keseluruahn</span>
                <span>{{Number::currency($order->grand_total, 'IDR')}}</span>
            </li>
        </ul>

        
       

        <div class="d-flex justify-content-center mt-4 gap-3">
            <a href="/products" class="btn btn-outline-success">Go back shopping</a>
            <a href="/my-orders" class="btn btn-success">View My Orders</a>
        </div>
    </div>
</section>