<div>
  {{-- Star Hero Section --}}
    <section>
      <div class="masthead relative pt-48 pb-12  xl:pt-60 sm:pb-16 lg:pb-32 xl:pb-48 2xl:pb-56">
    
        <div class="relative">
            <div class="px-6 mx-auto sm:px-8 lg:px-12 max-w-7xl">
                <div class="w-full lg:w-2/3 xl:w-1/2">
                    <h1 class="font-sans text-4xl font-normal italic tracking-tight text-white text-opacity-70">Maniz</h1>
                    <p class=" tracking-tighter text-white">
                        <span class="font-sans font-normal text-7xl">Jelajahi Keajaiban</span><br />
                        <span class="font-serif italic font-normal text-8xl">Kayu Manis</span>
                    </p>
                    <p class="mt-12 font-sans text-base font-normal leading-7 text-white text-opacity-70">Di Maniz, kami percaya bahwa kayu manis bukan hanya rempah, tetapi juga warisan alam yang kaya manfaat. Kami hadir untuk memberikan informasi menarik serta menghadirkan produk kayu manis terbaik untuk Anda.</p>
    
                    <div class="flex items-center mt-5 space-x-3 sm:space-x-4">
                        <a
                            href="#"
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
                            <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.0416 4.9192C7.37507 4.51928 6.5271 4.99939 6.5271 5.77669L6.5271 18.2232C6.5271 19.0005 7.37507 19.4806 8.0416 19.0807L18.4137 12.8574C19.061 12.469 19.061 11.5308 18.4137 11.1424L8.0416 4.9192Z" />
                            </svg>
                            Tentang Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
  {{-- End Hero Section --}}

    {{-- About Us --}}
    <div class="container  py-20">
      <div class="row">
        <div class="col">
          <div class="max-w-xl mx-auto">
            <div class="text-center ">
              <div class="relative flex flex-col items-center" data-aos="fade-up">
                <h1 class="text-5xl font-bold text-gray-900"> Tentang <span class="text-blue-500">Kami
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
             
            </div>
          </div>
        </div>
      </div>
      
      <div class="row d-flex justify-content-center align-items-center mt-20">
        <div class="col-md-4"data-aos="fade-up-right">
          <div
          class=" md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
          <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Tempat Terbaik untuk  
              <br class="hidden lg:inline-block">Memiliki Kayu Manis Berkualitas
          </h1>
          <p class="mb-8 leading-relaxed">Maniz adalah platform yang menghubungkan Anda dengan dunia kayu manis. Kami menyajikan artikel informatif dan menyediakan berbagai produk kayu manis berkualitas langsung dari sumber terbaik.</p>
          <div class="flex justify-center">
              <button class="inline-flex text-white bg-blue-600 border-0 py-2 px-6 focus:outline-none hover:bg-blue-800 rounded text-lg">Belanja Sekarang</button>
              <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Baca Artikel</button>
          </div>
      </div>
      </div>
      <div class="col-md-6" data-aos="fade-up-left">
          <div class="">
            <img class="object-cover object-center rounded" alt="hero" src="{{url('img/gardening.jpg')}}">
          </div>
      </div>
    </div>

    </div>                                
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
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
                  Pariatur
                  numquam, odio quod nobis ipsum ex cupiditate?
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
                              
                                    <a href="#"></a>
                                    <div class="relative">
                                        <a href="#">
                                            <img class="w-full"
                                                src="{{url('storage', $product->images[0])}}"
                                                alt="Sunset in the mountains">
                                            <div
                                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                            </div>
                                        </a>
                                        <a href="#!">
                                            <div
                                                class="absolute bottom-0 left-0 bg-indigo-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                                Photos
                                            </div>
                                        </a>
          
                                        <a href="!#">
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
                                            <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Beli Sekarang</button>
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
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
            Pariatur
            numquam, odio quod nobis ipsum ex cupiditate?
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