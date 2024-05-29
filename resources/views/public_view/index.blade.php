@extends('public_view/layouts/layouts')

@section('content')
    <!-- HERO SECTION START -->
    <section id="home" class=" relative pt-36 h-[845px] bg-cover bg-center" style="background-image: url({{ asset('assets/public_dist/image/banner.png') }});">
        <div class="container">
            <div class="w-full h-full flex items-center justify-center margin-50">
            <!-- Content goes here -->
            <div class="text-center text-white">
                <p class="text-sm mb-2">Jatiwaringin located at Jl. Gamprit Raya No.29,.</p>
                <h1 class="lg:text-6xl text-5xl font-bold mb-4 text-transparent bg-gradient-to-br from-primary to-state bg-clip-text">Welcome to <br> UPALA COFFEE</h1>
                <p class="lg:text-base text-sm mb-24">Objek wisata kuliner dan tempat nongkrong yang nyaman dan<br>Instagramable di Bekasi</p>
                <div class="flex items-center justify-center">
                    <a href="#menu" class="bg-cover bg-center bg-no-repeat text-white py-2 px-6 rounded-full flex items-center justify-center animate-spin-slow" style="background-image: url('dist/image/spin.png'); width: 100px; height: 100px;">
                      <i class="fas fa-arrow-down text-xl"></i>
                    </a>
                  </div>
            </div>
        </div>
        <img class="absolute start-0 bottom-0" src="{{ asset('assets/public_dist/image/typografi.png') }}" >
        </div>
        
    </section>
    <!-- HERO SECTION FINISH -->

    <!-- TOP MENU SECTION START -->
    <section id="top-menu" class="relative">
        <div class="container mx-auto">
            <h2 class="text-5xl text-center font-extrabold text-primary">TOP MENU</h2>
        </div>
        <div class="relative mt-8 flex justify-between items-start">
            <!-- Image positioned on the left -->
            <img class="z-10 w-60 lg:w-[400px] h-auto" src="{{ asset('assets/public_dist/image/pelangi.png') }}" alt="">

            <!-- Slider main container positioned on the right with half-width of the container -->
            <div class="flex-1 ml-auto w-1/2">
                <div class="swiper-container h-52 relative">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper space-x-4">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="bg-white w-full h-52 shadow-lg rounded-lg">
                                <!-- Content of the first card -->
                                <img src="{{ asset('assets/public_dist/image/card1.png') }}" alt="Image 1" class="w-full rounded-lg h-full object-cover">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white w-full h-52 shadow-lg rounded-lg">
                                <!-- Content of the second card -->
                                <img src="{{ asset('assets/public_dist/image/card2.png') }}" alt="Image 2" class="w-full rounded-lg h-full object-cover">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white w-full h-52 shadow-lg rounded-lg">
                                <!-- Content of the third card -->
                                <img src="{{ asset('assets/public_dist/image/card2.png') }}" alt="Image 3" class="w-full rounded-lg h-full object-cover">
                            </div>
                        </div>     
                        <div class="swiper-slide">
                            <div class="bg-white w-full h-52 shadow-lg rounded-lg">
                                <!-- Content of the third card -->
                                <img src="{{ asset('assets/public_dist/image/card2.png') }}" alt="Image 3" class="w-full rounded-lg h-full object-cover">
                            </div>
                        </div>                    
                        <div class="swiper-slide">
                            <div class="bg-white w-full h-52 shadow-lg rounded-lg">
                                <!-- Content of the third card -->
                                <img src="{{ asset('assets/public_dist/image/card2.png') }}" alt="Image 3" class="w-full rounded-lg h-full object-cover">
                            </div>
                        </div>     
                        <div class="swiper-slide">
                            <div class="bg-white w-full h-52 shadow-lg rounded-lg">
                                <!-- Content of the third card -->
                                <img src="{{ asset('assets/public_dist/image/card2.png') }}" alt="Image 3" class="w-full rounded-lg h-full object-cover">
                            </div>
                        </div>     
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TOP MENU SECTION FINISH -->

    <!-- STORY UPALA START -->
    <section class="story relative mt-14">
        <img class="w-full" src="{{ asset('assets/public_dist/image/story-typo.png') }}" >
        <h2 class="absolute top-0 left-12 text-5xl font-extrabold text-primary mt-11 ml-6">STORY UPALA</h2>
        <div class="container relative overflow-hidden flex flex-wrap mt-24">
            <div class="w-full px-4 mb-10 lg:w-1/2 pl-4">
                <img class="w-full h-auto" src="{{ asset('assets/public_dist/image/upala-toko.png') }}" >
            </div>
            <div class="w-full px-4 lg:w-1/2 pr-4">
                <p class="text-lg leading-relaxed">
                    Hadir di sekitar akhir bulan Januari 2022, datangnya Upala turut meramaikan kedai kopi di sepanjang Jalan Kayu Putih Tengah yang terbilang masih sedikit jumlahnya. Upala di kelola oleh 3 orang sahabat yang ingin mencoba bisnis coffee shop dan masih dalam satu naungan dengan Perpaduan Group.
                </p>
                <a href="#" class="inline-block mt-4 px-6 py-2 bg-primary text-white rounded-full">Read More</a>
            </div>
        </div>
    </section>
    <!-- STORY UPALA FINISH -->

@endsection



