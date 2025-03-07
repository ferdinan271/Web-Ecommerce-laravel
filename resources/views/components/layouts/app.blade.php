<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Carosel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  {{-- Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  {{-- Flowbite --}}
  {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> --}}


  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  {{-- Aos --}}
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <title>{{ $title ?? 'Page Title' }}</title>

  <link rel="shortcut icon" type="image/png/jpg" href="img/logocinamon.png">

  @livewireStyles

  <style>
    .btn-success,
    .bg-success{
      background-color: #597E52 !important
    }
    .text-success{
      color: #597E52 !important
    }
  body{
    font-family: 'Poppins', sans-serif;
  }
  .masterabout{
    background: url('img/1about.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  height: 100%;
  }
.masthead {
  padding-top: 18rem;
  padding-bottom: 18rem;
  background: url('img/banner1a.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  height: 100%;
}
#about{
  margin-top: 5rem;
}
#product{
  margin-top: 5rem;
}
  </style>

  <script src="boostrap.bundle.min.js"></script>

</head>

<body style="background-color: #F1E4C2">
  @livewire('partials.navbar')
  {{-- <main class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto"> --}}
  <main>
    {{ $slot }}
  </main>
  @livewire('partials.footer')
  @livewireScripts
  
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <x-livewire-alert::scripts />
</body>

  {{-- Boostrap --}}
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  {{-- Flowbite --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}

   {{-- Jquery --}}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   {{-- Carousel --}}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  
  {{-- Midtrans --}}
  <script src="
  https://cdn.jsdelivr.net/npm/midtrans-payment@1.4.2/src/midtrans.min.js
  "></script>
  {{-- AOS --}}
  <script>
    AOS.init();
  </script>
  {{-- Auto Type --}}

  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
      var typed = new Typed("#auto-type",{
        strings: ["Keaslian Rasa,<br>Hangatkan Suasana"],
        typeSpeed: 90,
        startDelay: 40,
        loop:false,
      })
    </script>

   <script>
    $('.owl-carousel').owlCarousel({
autoplay:true,
autoplayTimeout:2500,
autoplayHoverPause:true,
videoHeight:100,

loop:true,
margin:15,
nav:true,
responsive:{
    0:{
        items:1
    },
    800:{
        items:3
    },
    1400:{
        items:4
    }
}
})
</script>
</html>