@extends('public_view/layouts/layouts')

@section('content')

    <!-- STORY UPALA START -->
    <section class="story relative mt-14">
        <img class="w-full" src="{{ asset('assets/public_dist/image/menu-typo.png') }}" >
        <h2 class="absolute top-0 left-12 text-5xl font-extrabold text-primary mt-11 ml-6">Our Menu</h2>
        <div class="grid grid-cols-9 justify-center">
            <div class="col-start-4 col-end-7">
                <div class="relative self-center bg-gray-100 rounded-lg p-0.5 flex">
                    <a class="border-transparent hover:text-gray-900 flex justify-center relative w-1/3 rounded-lg py-2 text-sm font-medium text-gray-700 whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-cool-indigo-400 focus:z-10 sm:w-1/3 sm:px-8" href="/?price=free&amp;type=all">All</a>
                    <a class="bg-white border-gray-200 shadow-sm flex justify-center relative w-1/3 rounded-lg py-2 text-sm font-medium text-gray-700 whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-cool-indigo-300 focus:z-10 sm:w-1/3 sm:px-8 ml-0.5" href="/?price=free&amp;type=template">Templates</a>
                    <a class="border-transparent hover:text-gray-900 ml-0.5 flex justify-center relative w-1/3 rounded-lg py-2 text-sm font-medium text-gray-700 whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-cool-indigo-300 focus:z-10 sm:w-1/3 sm:px-8" href="/?price=free&amp;type=kit">UI kits</a>
                </div>
            </div>
        </div>

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