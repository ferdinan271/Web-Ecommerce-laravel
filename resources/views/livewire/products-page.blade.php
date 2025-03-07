<div class="container py-4">
    <section class="py-4 p-3 bg-light rounded">
        <div class="container py-4">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-3">
                    <!-- Categories -->
                    <div class="p-3 mb-4 bg-white border rounded">
                        <h2 class="h5 fw-bold text-dark">Kategori</h2>
                        <div class="border-bottom border-danger w-25 mb-3"></div>
                        <ul class="list-unstyled">
                            @foreach ($categories as $category)
                            <li class="mb-2">
                                <div class="form-check">
                                    <input type="checkbox" wire:model.live="selected_categories" id="{{$category->slug}}" value="{{$category->id}}" class="form-check-input">
                                    <label class="form-check-label text-dark" for="{{$category->slug}}">{{$category->name}}</label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Brands -->
                    <div class="p-3 mb-4 bg-white border rounded">
                        <h2 class="h5 fw-bold text-dark">Brand</h2>
                        <div class="border-bottom border-danger w-25 mb-3"></div>
                        <ul class="list-unstyled">
                            @foreach ($brands as $brand)
                            <li class="mb-2">
                                <div class="form-check">
                                    <input type="checkbox" wire:model.live="selected_brands" id="{{$brand->slug}}" value="{{$brand->id}}" class="form-check-input">
                                    <label class="form-check-label text-dark" for="{{$brand->slug}}">{{$brand->name}}</label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-9">
                    <!-- Sorting -->
                    <div class="d-flex justify-content-between bg-white p-3 rounded mb-3">
                        <select class="form-select w-auto">
                            <option value="">Sort by latest</option>
                            <option value="">Sort by Price</option>
                        </select>
                    </div>

                    <!-- Product List -->
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-md-4 mb-4">
                            <div class="card border">
                                <a href="/products/{{$product->slug}}">
                                    <img src="{{url('storage', $product->images[0])}}" class="card-img-top" alt="{{$product->name}}" style="height: 16rem">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-dark">{{$product->name}}</h5>
                                    <p class="card-text text-success">{{Number::currency($product->price, 'IDR')}}</p>
                                    <div class="d-flex justify-content-center">
                                        <a wire:click.prevent='addToCart({{$product->id}})' href="#" class="btn btn-outline-primary">
                                            <i class="bi bi-cart3"></i>
                                            <span wire:loading.remove wire:target='addToCart({{$product->id}})'>Add to Cart</span>
                                            <span wire:loading wire:target='addToCart({{$product->id}})'>Adding...</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="row d-flex justify-content-end mt-4">
                        <div class="col-md-4">
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
