<div class="container py-5">
    <h1 class="mb-4">Checkout</h1>
    <form wire:submit.prevent='placeOrder'>
        <div class="row g-4">
            <!-- Shipping Address -->
            <div class="col-lg-8">
                <div class="card shadow-sm p-4">
                    <h2 class="h4 mb-3">Shipping Address</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" wire:model='first_name'>
                            @error('first_name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" wire:model='last_name'>
                            @error('last_name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" wire:model='phone'>
                            @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" wire:model='street_address'>
                            @error('street_address') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" wire:model='city'>
                            @error('city') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control" id="state" wire:model='state'>
                            @error('state') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="zip" class="form-label">Kode Pos</label>
                            <input type="text" class="form-control" id="zip" wire:model='zip_code'>
                            @error('zip_code') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    
                    <h2 class="h4 mt-4">Select Payment Method</h2>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="payment_transfer" value="stripe" wire:model='payment_method'>
                        <label class="form-check-label" for="payment_transfer">Transfer</label>
                    </div>
                    @error('payment_method') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card shadow-sm p-4">
                    <h2 class="h4 mb-3">Order Summary</h2>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Subtotal</span>
                            <strong>{{ Number::currency($grand_total, 'IDR')}}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Taxes</span>
                            <strong>{{ Number::currency(0, 'IDR')}}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Shipping</span>
                            <strong>{{ Number::currency(0, 'IDR')}}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <span class="fw-bold">Grand Total</span>
                            <strong class="fw-bold">{{ Number::currency($grand_total, 'IDR')}}</strong>
                        </li>
                    </ul>
                </div>
                <button type="submit" class="btn btn-success w-100 mt-3">Place Order</button>
            </div>
        </div>
    </form>
</div>
