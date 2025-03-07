<section class=" text-dark py-4">
    <div class="container bg-light rounded p-3">
        <!-- Artikel Utama -->
        <a href="/posts-detail" class="row align-items-center text-decoration-none text-dark  "  >
            <div class="col-lg-7">
                <img src="{{ url('img/banner.jpeg') }}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-lg-5 p-4 ">
                <h3 class="fs-2 fw-bold text-success">Mendapatkan Hasil Berkualitas dengan cara Budidaya berikut</h3>
                <span class="text-muted d-block small mb-2">February 19, 2025</span>
                <p>Kayu manis, yang memiliki nama ilmiah Cinnamomum verum, merupakan salah satu rempah yang telah digunakan sejak zaman dahulu. Tanaman ini berasal dari pohon berdaun hijau yang tumbuh di daerah tropis seperti Sri Lanka, India, Indonesia, dan Madagaskar.</p>
            </div>
        </a>

        <!-- Daftar Artikel -->
        <div class="row mt-4">
            @foreach ($artikels as $artikel)
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="/artikel/{{$artikel->slug}}" class="card border-0 shadow-sm text-decoration-none text-dark">
                    <img src="{{ url('storage', $artikel->image) }}" class="card-img-top rounded" alt="{{$artikel->title}}">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-success">{{$artikel->title}}</h5>
                        <span class="text-muted small d-block mb-2">January 21, 2025</span>
                        <p class="card-text">{{ Str::limit($artikel->description, 150) }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <!-- Tombol Load More -->
        <div class="row d-flex justify-content-end mt-4 me-5">
            <div class="col-md-4">
                {{$artikels->links()}}
            </div>
        </div>
    </div>
</section>
