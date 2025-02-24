<div>
  {{-- Star Hero Section --}}
    <section>
      <div class="masthead relative pt-48 pb-12  xl:pt-60 sm:pb-16 lg:pb-32 xl:pb-48 2xl:pb-56">
    
        <div class="relative">
            <div class="px-6 mx-auto sm:px-8 lg:px-12 max-w-7xl">
                <div class="w-full lg:w-2/3 xl:w-1/2">
                    <p class=" tracking-tighter text-white">
                        <span class="font-semibold text-6xl"><span id="auto-type"></span></span>
                    </p>
                    <p class="mt-10 text-base leading-7 text-white text-opacity-70">Dari taburan kecil di atas kopi,
                      campuran dalam kue, hingga bahan rahasia dalam masakan favoritmu, kayu manis menghadirkan sentuhan
                      istimewa yang tak terlupakan. Rasakan kelembutan, kehangatan, dan manfaat luar biasa dalam setiap
                      kepingan kayu manis pilihan kami.</p>
    
                    <div class="flex items-center mt-5 space-x-3 sm:space-x-4">
                        <a
                            href="/#about"
                            title=""
                            class="
                                inline-flex
                                items-center
                                justify-center
                                px-5
                                py-2
                                font-sans
                                text-base
                                font-semibold
                                transition-all
                                duration-200
                                bg-blue-600
                                rounded-full
                                sm:leading-8
                                text-white
                                sm:text-lg
                                focus:ring-offset-secondary
                            "
                            role="button"
                        >
                            
                        Lihat Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
  {{-- End Hero Section --}}

    {{-- About Us --}}

    <section id="about">
      <div class="container mt-5">
        <div class="row flex items-center" >
              <div class="col-md-5" data-aos="fade-up-right">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-5xl">Rasakan Hangatnya
                  Kelezatan Kayu Manis dalam Setiap Olahan!</h1>
              <p class="mt-4 text-xl text-gray-500">Taburan kecil di atas kopi, campuran dalam kue,
                  hingga bahan rahasia dalam masakan favoritmu, kayu manis menghadirkan sentuhan istimewa yang
                  tak terlupakan.</p>
              </div>
  
              <div class="col-md-5 offset-md-1">
                <div class="flex items-center space-x-6 lg:space-x-8">
                  <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                      <div data-aos="fade-up-left"
                          class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                          <img src="{{url('img/about.jpg')}}" alt=""
                              class="size-full object-cover">
                      </div>
                      <div data-aos="fade-up-left" class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{url('img/1.jpg')}}" alt=""
                              class="size-full object-cover">
                      </div>
                  </div>
                  <div data-aos="fade-up-left" class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{url('img/2.jpg')}}" alt=""
                              class="size-full object-cover">
                      </div>
                      <div data-aos="fade-up-left" class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{url('img/3.jpg')}}" alt=""
                              class="size-full object-cover">
                      </div>
                      <div data-aos="fade-up-left" class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{url('img/4.jpeg')}}" alt=""
                              class="size-full object-cover">
                      </div>
                  </div>
                  <div data-aos="fade-up-left" class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{url('img/5.jpg')}}" alt=""
                              class="size-full object-cover">
                      </div>
                      <div data-aos="fade-up-left" class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{url('img/gardening.jpg')}}" alt=""
                              class="size-full object-cover">
                      </div>
                  </div>
              </div>
              </div>
        </div>
      </div>
    </section>

    {{-- About Us --}}
  
    {{-- Our Porduct --}}
    <section class="py-20 ">
      <div class="container">
        <div class="row mt-5">
          <div class="col">
            <div class="max-w-xl mx-auto">
              <div class="text-center ">
                <div class="relative flex flex-col items-center"data-aos="fade-up">
                  <h1 class="text-5xl font-bold text-gray-900"> Produk Unggulan<span class="text-blue-500"> Manizz
                    </span> </h1>
                  <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                    <div class="flex-1 h-2 bg-blue-200">
                    </div>
                    <div class="flex-1 h-2 bg-blue-400">
                    </div>
                    <div class="flex-1 h-2 bg-blue-600">
                    </div>
                  </div>
                </div>
                <p class="mb-12 text-base text-center text-gray-500">
                 
                </p>
              </div>
            </div>
          </div>
        </div>

          <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="owl-carousel owl-theme">
                  @foreach ($products as $product)
                      <div class="item"data-aos="fade-up">  
                            <div class="rounded overflow-hidden border">
                              
                                    <a href="/products"></a>
                                    <div class="relative">
                                        <a href="/products">
                                            <img class="w-full"
                                                src="{{url('storage', $product->images[0])}}"
                                                alt="Sunset in the mountains">
                                            <div
                                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                            </div>
                                        </a>
                                        <a href="/products">
                                            <div
                                                class="absolute bottom-0 left-0 bg-indigo-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                                Photos
                                            </div>
                                        </a>
          
                                        <a href="/products">
                                            <div
                                                class="text-sm absolute top-0 right-0 bg-indigo-600 px-4 text-white rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                                <span class="font-bold">27</span>
                                                <small>March</small>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="px-6 py-4">
          
                                        <a href="#"
                                            class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">
                                            {{$product -> name}}</a>
                                        <p class="text-gray-500 text-sm">
                                            {{$product -> description}}
                                        </p>
                                    </div>
                                    <div class="px-2 py-3 flex flex-row justify-between">
                                        <span href="#" class=" text-base font-reguler text-gray-900 mr-1 flex flex-row items-center">
                                            
                                            <span class="ml-1">{{Number::currency($product->price, 'IDR')}}</span></span>
                                           <a href="/product" class="btn px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Beli Sekarang
                                           </a>
                                    </div>
                                  </div>
                      </div>
                  @endforeach
                </div>
            </div>
        </div>
      </div>
      
    </section>
    {{-- Our Porduct --}}


  {{-- Star Brand Section --}}
    <section class="py-15">
      <div class="max-w-xl mx-auto">
        <div class="text-center ">
          <div class="relative flex flex-col items-center"data-aos="fade-up">
            <h1 class="text-5xl font-bold "> Browse Popular<span class="text-blue-500"> Brands
              </span> </h1>
            <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
              <div class="flex-1 h-2 bg-blue-200">
              </div>
              <div class="flex-1 h-2 bg-blue-400">
              </div>
              <div class="flex-1 h-2 bg-blue-600">
              </div>
            </div>
          </div>
          <p class="mb-12 text-base text-center text-gray-500">
           
          </p>
        </div>
      </div>
      <div class=" ">
        <div class="flex flex-wrap gap-5 justify-center">
      
            @foreach ($brands as $brand)
            <div class="bg-white rounded-lg border-xl shadow-lg dark:bg-gray-800" data-aos="fade-up">
              <a href="/products?selected_brands[0]={{$brand -> id}}" wire:key="{{$brand -> id}}" class="">
                <img src="{{url('storage', $brand -> image)}}" alt="" class="object-cover w-full h-64 rounded-t-lg">
              </a>
              <div class="p-5 text-center">
                <a href="" class="text-2xl font-bold tracking-tight text-blue-600 ">
                  {{$brand -> name}}
                </a>
              </div>
            </div> 
            @endforeach
      
        </div>
      </div>
    </section>
    {{-- end Brand Section --}}
</div>