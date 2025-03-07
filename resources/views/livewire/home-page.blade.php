<div>
  <!-- Hero Section -->
  <div class="container-fluid masthead">
    <div class="row offset-md-1">
      <div class="col text-white col-md-6">
        <h1 class=" tracking-tighter text-white">
          <span class="fw-bold display-5"><span id="auto-type"></span></span>
      </h1>
      <p class="mt-10 text-base leading-7 text-white text-opacity-70">Dari taburan kecil di atas kopi,
        campuran dalam kue, hingga bahan rahasia dalam masakan favoritmu, kayu manis menghadirkan sentuhan
        istimewa yang tak terlupakan. Rasakan kelembutan, kehangatan, dan manfaat luar biasa dalam setiap
        kepingan kayu manis pilihan kami.</p>
        
      </div>
    </div>
  </div>
  <!-- End Hero Section -->

  <!-- About Us -->
  <section id="about">
    <div class="container-fluid py-5">
      <div class="row align-items-center justify-content-center">
  
          <div class="col-md-5" data-aos="fade-up-right" data-aos-duration="1000">
              <h1 class=" display-5 fw-bold text-dark ">Rasakan Hangatnya Kelezatan
                  <span class="position-relative text-success">
                      <svg aria-hidden="true" viewBox="0 0 418 42" class="position-absolute top-50 start-0 w-100  opacity-50" preserveAspectRatio="none" style="height: 0.58em;" fill="currentColor">
                          <path d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.780 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.540-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.810 23.239-7.825 27.934-10.149 28.304-14.005 .417-4.348-3.529-6-16.878-7.066Z"></path>
                      </svg>
                      <span class="position-relative">Kayu Manis</span>
                  </span>
              </h1>
              <p class="mt-4  ">
                  Taburan kecil di atas kopi, campuran dalam kue, hingga bahan rahasia dalam masakan favoritmu, kayu manis menghadirkan sentuhan istimewa yang tak terlupakan.
              </p>
              <div class="d-flex align-items-center mt-3">
                  <a href="/about" class="btn btn-success rounded-pill px-4 py-2  fw-semibold">
                      Ketahui Lebih Banyak Tentang Kami
                  </a>
              </div>
          </div>
  
          <div class="col-md-4 offset-md-1" data-aos="fade-up-left" data-aos-duration="2000">
              <img src="img/about1.png" class="rounded img-fluid" alt="Kayu Manis">
          </div>
  
      </div>
  </div>
  
  </section>
  <!-- End About Us -->

  <!-- Our Products -->
  <section id="product" class="py-5">
    <div class="container">
      <div class="text-center">
        <div class="position-relative d-flex flex-column align-items-center" data-aos="fade-up">
            <h1 class="display-5 fw-bold text-dark"> Produk  <span class="text-success">Unggulan</span> </h1>
            <div class="d-flex w-25 mt-2 mb-4 overflow-hidden rounded">
                <div class="flex-fill bg-success bg-opacity-25" style="height: 5px;"></div>
                <div class="flex-fill bg-success bg-opacity-50" style="height: 5px;"></div>
                <div class="flex-fill bg-success" style="height: 5px;"></div>
            </div>
        </div>
    </div>
      <div class="row d-flex justify-content-center ">
        <div class="col-md-11">
          <div class="owl-carousel owl-theme">
            @foreach ($products as $product)
            <div class="item" data-aos="fade-up">
              <div class="card border">
                <a href="/products">
                  <img src="{{ url('storage', $product->images[0]) }}" class="card-img-top" alt="{{ $product->name }}">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-success fw-bold">{{ $product->name }}</h5>
                  <p class="card-text text-muted">{{Str::limit ($product->description,100) }}</p>
                  <div class="d-flex justify-content-between align-items-center mt-5 mb-3">
                    <span class="text-dark fw-bold">{{ Number::currency($product->price, 'IDR') }}</span>
                    <a href="/products" class="btn btn-success">Beli Sekarang</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Products -->

  <!-- Brand Section -->
  {{-- <section class="py-5">
    <div class="container text-center" data-aos="fade-up">
      <h1 class="fw-bold text-dark">Browse Popular <span class="text-primary">Brands</span></h1>
      <div class="d-flex justify-content-center my-3">
        <div class="bg-primary rounded-pill" style="width: 40px; height: 5px;"></div>
      </div>
    </div>
    <div class="container">
      <div class="row g-4 justify-content-center">
        @foreach ($brands as $brand)
        <div class="col-md-3" data-aos="fade-up">
          <div class="card border-0 shadow">
            <a href="/products?selected_brands[0]={{$brand->id}}">
              <img src="{{ url('storage', $brand->image) }}" class="card-img-top" alt="{{ $brand->name }}">
            </a>
            <div class="card-body text-center">
              <a href="#" class="h5 text-primary fw-bold">{{ $brand->name }}</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section> --}}
  <!-- End Brand Section -->
</div>