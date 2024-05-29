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
                <a href="#menu" class="relative text-white py-2 px-6 rounded-full flex items-center justify-center" style="width: 100px; height: 100px;">
                    <span class="absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full animate-spin-slow" style="background-image: url({{ asset('assets/public_dist/image/spin.png') }});"></span>
                    <i class="fas fa-arrow-down text-xl relative z-10"></i>
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
            <h2 class="text-5xl text-right font-extrabold text-primary">TOP MENU</h2>
        </div>
        <div class="relative mt-8 flex justify-between items-start">
            <!-- Image positioned on the left -->
            <img class="z-30 w-60 lg:w-[400px] h-auto bg-white" src="{{ asset('assets/public_dist/image/pelangi.png') }}" alt="">

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

    <!-- BERITA SECTION START -->
    <section id="top-menu" class="relative">
        <img class="w-full" src="{{ asset('assets/public_dist/image/news-typo.png') }}" >
        <h2 class="absolute top-10 right-24 text-[72px] font-extrabold text-primary mt-11 ml-6">Upala News</h2>
        <div class="container relative overflow-hidden flex flex-wrap mt-72 lg:mt-24 pt-5">
            <div class="w-full px-4 mb-10 lg:w-1/2 pl-4">
                <a href="">
                    <img class="w-full h-auto mb-4 " src="{{ asset('storage/publikasi/1716979508.png') }}" >
                    <h5 class="font-medium text-3xl mb-1 tracking-wide">Spesial Ramadhan</h5>
                    <span class="font-light tracking-wide"><i class="fa fa-calendar"></i> Ditambahkan pada: 2024-12-12</span>
                    <p class="text-md mt-3 font-extralight text-justify ">
                        Hadir di sekitar akhir bulan Januari 2022, datangnya Upala turut meramaikan kedai kopi di sepanjang Jalan Kayu Putih Tengah yang terbilang masih sedikit jumlahnya. Upala di kelola oleh 3 orang sahabat yang ingin mencoba bisnis coffee shop dan masih dalam satu naungan dengan Perpaduan Group.
                    </p>
                    <span class="inline-block py-2 text-primary">Read More</span>
                </a>

            </div>

            <style>
                .max200 {
                    max-width: 200px;
                }

                @media (max-width: 1024px) {
                    .max200 {
                        max-width: fit-content;
                    }
                }   
            </style>

            
            <div class="w-full lg:px-4 lg:w-1/2 pr-4 grid-cols-12">
                <div class="swiper-container grid-cols-12 col-span-12" style="max-width:fit-content;">

                    <div class="swiper-slide col-span-12">
                        
                        <a href="">
                            <div class="w-full px-4 mb-10 pl-4 flex flex-col lg:flex-row">
                                <img class="w-full h-auto mb-4 max200" src="{{ asset('storage/publikasi/1716979508.png') }}">
                                <div class="lg:ml-4">
                                    <h5 class="font-medium text-2xl mb-1 tracking-wide">Spesial Ramadhan</h5>
                                    <p class="text-sm mt-3 font-extralight text-justify">
                                        Hadir di sekitar akhir bulan Januari 2022, datangnya Upala turut meramaikan kedai kopi di sepanjang Jalan Kayu Putih Tengah yang terbilang masih sedikit jumlahnya. Upala di kelola oleh 3 orang sahabat yang ingin mencoba bisnis coffee shop dan masih dalam satu naungan dengan Perpaduan Group.
                                    </p>
                                    <span class="inline-block py-2 text-primary">Read More</span>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="w-full px-4 mb-10 pl-4 flex flex-col lg:flex-row">
                                <img class="w-full h-auto mb-4 max200" src="{{ asset('storage/publikasi/1716979508.png') }}">
                                <div class="lg:ml-4">
                                    <h5 class="font-medium text-2xl mb-1 tracking-wide">Spesial Ramadhan</h5>
                                    <p class="text-sm mt-3 font-extralight text-justify">
                                        Hadir di sekitar akhir bulan Januari 2022, datangnya Upala turut meramaikan kedai kopi di sepanjang Jalan Kayu Putih Tengah yang terbilang masih sedikit jumlahnya. Upala di kelola oleh 3 orang sahabat yang ingin mencoba bisnis coffee shop dan masih dalam satu naungan dengan Perpaduan Group.
                                    </p>
                                    <span class="inline-block py-2 text-primary">Read More</span>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="w-full px-4 mb-10 pl-4 flex flex-col lg:flex-row">
                                <img class="w-full h-auto mb-4 max200" src="{{ asset('storage/publikasi/1716979508.png') }}">
                                <div class="lg:ml-4">
                                    <h5 class="font-medium text-2xl mb-1 tracking-wide">Spesial Ramadhan</h5>
                                    <p class="text-sm mt-3 font-extralight text-justify">
                                        Hadir di sekitar akhir bulan Januari 2022, datangnya Upala turut meramaikan kedai kopi di sepanjang Jalan Kayu Putih Tengah yang terbilang masih sedikit jumlahnya. Upala di kelola oleh 3 orang sahabat yang ingin mencoba bisnis coffee shop dan masih dalam satu naungan dengan Perpaduan Group.
                                    </p>
                                    <span class="inline-block py-2 text-primary">Read More</span>
                                </div>
                            </div>
                        </a>
   
                        
                    </div>

                </div>
                <!-- <div class="grid grid-cols-12 flex justify-center">
                    <div class="col-span-4"></div>
                    <div class="col-span-4">
                        <a href="#" class="block mt-4 px-6 py-2 bg-primary text-white rounded-full text-center">Read More</a>
                    </div>
                    <div class="col-span-4"></div>
                </div> -->


            </div>


        </div>
    </section>
    <!-- BERITA SECTION FINISH -->

   <!-- TESTIMONIAL SECTION START -->
<section id="testimonials" class="relative mt-14">
    <div class="flex flex-wrap grid grid-cols-12">
        <!-- Photo Slider Column -->
        <div class="col-span-12 lg:col-span-5">
            <!-- <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/public_dist/image/upala-toko.png') }}" alt="Testimonial Image 1" class="w-full rounded-lg object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/public_dist/image/testimonial2.png') }}" alt="Testimonial Image 2" class="w-full rounded-lg object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/public_dist/image/testimonial3.png') }}" alt="Testimonial Image 3" class="w-full rounded-lg object-cover">
                    </div>
                </div>
            </div> -->
            <img class="w-auto h-auto mb-4" src="{{ asset('assets/public_dist/image/testimonial.png') }}">
        </div>
        
        <!-- Testimonial Text Column -->
        <div class="col-span-12 lg:col-span-7 px-4">
            <h2 class="text-6xl font-extrabold text-primary mb-4 tracking-wide">Yang Mereka Katakan <br> Tentang Upala</h2>
            <div class="flex items-center my-6 ">
                <span class="text-3xl font-bold">4.9</span>
                <i class="fas fa-star text-yellow-500 mx-2 text-3xl"></i>
                <span class="text-xl">/ 5.0</span>
            </div>
            <table class="w-3/4">
                <tr class="my-4 py-4">
                    <td class="pr-4">
                        <div class="grid grid-cols-12 flex items-end gap-5">
                            <div class="col-span-1 flex items-center">
                                <span class="text-lg">5</span>
                                <i class="fas fa-star text-yellow-500 ml-1"></i>
                            </div>
                            <div class="col-span-11 bg-rose-200 h-5 rounded-full mb-1.5">
                                <div class="bg-primary h-full rounded-full" style="width: 85%;"></div>
                            </div>
                        </div>
                    </td>
                    <td class="pr-4">
                        <div class="grid grid-cols-12 flex items-end gap-5">
                            <div class="col-span-1 flex items-center">
                                <span class="text-lg">2</span>
                                <i class="fas fa-star text-yellow-500 ml-1"></i>
                            </div>
                            <div class="col-span-11 bg-rose-200 h-5 rounded-full mb-1.5">
                                <div class="bg-primary h-full rounded-full" style="width: 85%;"></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="my-4 py-4">
                    <td class="pr-4">
                        <div class="grid grid-cols-12 flex items-end gap-5">
                            <div class="col-span-1 flex items-center">
                                <span class="text-lg">4</span>
                                <i class="fas fa-star text-yellow-500 ml-1"></i>
                            </div>
                            <div class="col-span-11 bg-rose-200 h-5 rounded-full mb-1.5">
                                <div class="bg-primary h-full rounded-full" style="width: 85%;"></div>
                            </div>
                        </div>
                    </td>
                    <td class="pr-4">
                        <div class="grid grid-cols-12 flex items-end gap-5">
                            <div class="col-span-1 flex items-center">
                                <span class="text-lg">1</span>
                                <i class="fas fa-star text-yellow-500 ml-1"></i>
                            </div>
                            <div class="col-span-11 bg-rose-200 h-5 rounded-full mb-1.5">
                                <div class="bg-primary h-full rounded-full" style="width: 85%;"></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="my-4 py-4">
                    <td class="pr-4">
                        <div class="grid grid-cols-12 flex items-end gap-5">
                            <div class="col-span-1 flex items-center">
                                <span class="text-lg">3</span>
                                <i class="fas fa-star text-yellow-500 ml-1"></i>
                            </div>
                            <div class="col-span-11 bg-rose-200 h-5 rounded-full mb-1.5">
                                <div class="bg-primary h-full rounded-full" style="width: 85%;"></div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="swiper-container my-4 pt-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-white p-4 mx-2 rounded-lg shadow-md">
                        <div class="flex justify-between items-center mb-2">
                            <h4 class="text-xl font-bold">John Doe</h4>
                            <span class="text-sm text-gray-500">1 hari lalu</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                        </div>
                        <p class="text-lg">Upala Coffee adalah tempat terbaik untuk menikmati kopi dan bersantai. Suasananya sangat nyaman dan Instagramable!</p>
                    </div>
                    <div class="swiper-slide bg-white p-4 mx-2 rounded-lg shadow-md">
                        <div class="flex justify-between items-center mb-2">
                            <h4 class="text-xl font-bold">Jane Smith</h4>
                            <span class="text-sm text-gray-500">2 hari lalu</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                        </div>
                        <p class="text-lg">Kopi yang enak dengan pelayanan yang ramah. Pasti akan datang lagi!</p>
                    </div>
                    <div class="swiper-slide bg-white p-4 mx-2 rounded-lg shadow-md">
                        <div class="flex justify-between items-center mb-2">
                            <h4 class="text-xl font-bold">Michael Brown</h4>
                            <span class="text-sm text-gray-500">3 hari lalu</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                        </div>
                        <p class="text-lg">Tempat yang sangat cozy dan makanan yang lezat. Highly recommended!</p>
                    </div>
                    <div class="swiper-slide bg-white p-4 mx-2 rounded-lg shadow-md">
                        <div class="flex justify-between items-center mb-2">
                            <h4 class="text-xl font-bold">Michael Brown</h4>
                            <span class="text-sm text-gray-500">3 hari lalu</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                        </div>
                        <p class="text-lg">Tempat yang sangat cozy dan makanan yang lezat. Highly recommended!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TESTIMONIAL SECTION FINISH -->



    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            var navmenu = document.getElementById('nav-menu');
            var hamburgerLines = document.querySelectorAll('.hamburger-line');

            if (window.scrollY > 650) {
                navbar.classList.add('text-black', 'bg-white');
                navmenu.classList.add('text-black', 'bg-white');
                navbar.classList.remove('text-white', 'bg-transparent');
                navmenu.classList.remove('text-white', 'bg-transparent');
                hamburgerLines.forEach(function(line) {
                    line.style.backgroundColor = 'black';
                });
            } else {
                navbar.classList.add('text-white', 'bg-transparent');
                navbar.classList.remove('text-black', 'bg-white');
                navmenu.classList.add('text-white', 'bg-transparent');
                navmenu.classList.remove('text-black', 'bg-white');
                hamburgerLines.forEach(function(line) {
                    line.style.backgroundColor = 'white';
                });
            }
        });


    </script>

@endsection



