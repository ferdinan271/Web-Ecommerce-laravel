<div class="container py-5">
    <section class="bg-white py-5 rounded">
        <div class="container-lg">

            <div class="row">
                <!-- Gambar Produk -->
                <div class="col-md-6 mb-4">
                    <div class="position-sticky" style="top: 10px;">
                        <img id="mainImage" src="{{ url('storage', $product->images[0]) }}" class="img-fluid rounded mb-3" alt="{{ $product->name }}">

                        <div class="d-flex flex-wrap">
                            @foreach ($product->images as $image)
                            <div class="p-1">
                                <img src="{{ url('storage', $image) }}" alt="{{ $product->name }}" class="img-thumbnail" style="height: 80px; cursor: pointer;" onclick="changeImage('{{ url('storage', $image) }}')">
                            </div>
                            @endforeach
                        </div>

                        
                    </div>
                </div>

                <!-- Detail Produk -->
                <div class="col-md-6">
                    <div class="ps-md-4">
                        <h2 class="mb-3 fw-bold text-success">{{ $product->name }}</h2>
                        <h1 class="fs-4 fw-bold text-dark">
                            <span>{{ Number::currency($product->price, 'IDR') }}</span>
                        </h1>
                        <p class="text-muted">{{ $product->description }}</p>

                        <!-- Input jumlah -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Quantity</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" wire:click="decreaseQty">-</button>
                                <input type="number" wire:model="quantity" class=" text-center" readonly>
                                <button class="btn btn-outline-secondary" wire:click="increaseQty">+</button>
                            </div>
                        </div>

                        <!-- Tombol Add to Cart -->
                        <button wire:click="addToCart({{ $product->id }})" class="btn btn-success ps-3 pe-3 ">
                            <span wire:loading.remove wire:target="addToCart({{ $product->id }})">Add to Cart</span>
                            <span wire:loading wire:target="addToCart({{ $product->id }})">Adding..</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>