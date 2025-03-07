<section class="py-5">
    <div class="container">
        <div class="col-lg-8 mx-auto border bg-light p-5 rounded">

            <main class="mt-4">

                <!-- Gambar Artikel -->
                <div class="text-center">
                    <img src="{{ url('storage', $artikel->image) }}" class="w-100 img-fluid rounded" style="height: 28em; object-fit: cover;" alt="{{ $artikel->title }}">
                </div>

                <!-- Judul Artikel -->
                <div class="mt-4 text-center">
                    <h2 class="fw-bold text-dark">{{ $artikel->title }}</h2>
                </div>

                <!-- Deskripsi Artikel -->
                <div class="mt-4 text-center">
                    <p class="text-muted fs-5">{{ $artikel->description }}</p>
                </div>

            </main>

        </div>
    </div>
</section>