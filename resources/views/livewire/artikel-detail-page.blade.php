    <section>
        <div class="container">

            <div class="max-w-screen-lg mx-auto">

                <main class="mt-10">
           
            
           
                <div class="md:mb-0 w-full mx-auto relative">
                    
                 
                        <img src="{{url('storage',$artikel->image)}}" class="w-full object-cover lg:rounded" style="height: 28em;"/>
                    
                    <div class="px-4 mt-5 lg:px-0 flex flex-col lg:flex-row justify-center lg:space-x-12">
                        <h2 class="text-4xl text-center font-semibold text-gray-800 leading-tight">
                           {{$artikel->title}}
                        </h2>
                        </div>
                </div>
            
                <div class="flex flex-col lg:flex-row justify-center lg:space-x-12">
            
                    <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                    <p class="pb-6 text-center">{{$artikel->description}}</p>
            
                    </div>
            
            
                </div>
                </main>
             
                <!-- main ends here -->
            
            
            </div>
        </div>
    </section>