<section class="dark:bg-gray-100 dark:text-gray-800">
    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
  
    <a rel="noopener noreferrer" href="/posts-detail" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-50">
        <img src="{{url('img/banner.jpeg')}}" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
        <div class="p-6 space-y-2 lg:col-span-5">
            <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Mendapatkan Hasil Berkualitas dengan cara Budidaya berikut</h3>
            <span class="text-xs dark:text-gray-600">February 19, 2025</span>
            <p>Kayu manis, yang memiliki nama ilmiah Cinnamomum verum, merupakan salah satu rempah yang telah digunakan sejak zaman dahulu. Tanaman ini berasal dari pohon berdaun hijau yang tumbuh di daerah tropis seperti Sri Lanka, India, Indonesia, dan Madagaskar. </p>
        </div>
    </a>

        
        <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
           @foreach ($artikel as $tikel)
           <a rel="noopener noreferrer" href="/artikel/{{$tikel->slug}}" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="{{url('storage', $tikel -> image)}}">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{$tikel->title}}s</h3>
                <span class="text-xs dark:text-gray-600">January 21, 2021</span>
                <p>{{ Str::limit($tikel->description, 150) }}</p>
            </div>
        </a>
           @endforeach
        </div>
        <div class="flex justify-center">
            <button type="button" class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-gray-50 dark:text-gray-600">Load more posts...</button>
        </div>
    </div>
</section>