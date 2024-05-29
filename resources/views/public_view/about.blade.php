@extends('public_view/layouts/layouts')

@section('content')


<!-- About Content START -->
<div style="margin: 150px; margin-bottom: -20px; margin-left: 80px;" class="lg:text-6xl text-5xl font-bold mb-4 text-transparent bg-gradient-to-br from-primary to-state bg-clip-text text-left">About</div>
<main class="container mx-auto mt-4 p-6">
    <section id="about" class="flex flex-col md:flex-row items-center">
        <div class="w-full md:w-1/2 p-4">
            <img src="{{ asset('assets/public_dist/image/about.png') }}" style="margin-left: 40px;" alt="about upala">
        </div>
        <div class="w-full md:w-1/2 p-4" style="margin-right: 40px; margin-top: -200px;">
            <h2 style="margin-left: 250px; transform: translateY(37%);"><img src="{{ asset('assets/public_dist/image/story of.png') }}" alt=""></h2>
            <h2 class="lg:text-6xl text-5xl font-bold mb-4 text-transparent bg-gradient-to-br from-primary to-state bg-clip-text text-center">Upala Coffee</h2>
            <p class="text-lg leading-relaxed text-justify">Hadir di sekitar akhir bulan Januari 2022, datangnya Upala turut meramaikan kedai kopi di sepanjang Jalan Kayu Putih Tengah yang terbilang masih sedikit jumlahnya. Upala di kelola oleh 3 orang sahabat yang ingin mencoba bisnis coffee shop dan masih dalam satu naungan dengan Perpaduan Group. </p>
        </div>
    </section>

<!-- Upala Founder START -->
<section id="founders" class="mt-10">
    <h2 style="margin-left: 50px; transform: translateY(37%);"><img src="{{ asset('assets/public_dist/image/upala of.png') }}" alt=""></h2>
    <h2 class="lg:text-6xl text-5xl font-bold mb-6 text-transparent bg-gradient-to-br from-primary to-state bg-clip-text text-left" style="margin-left: 55px;">Founder</h2>
    <div class="flex flex-wrap justify-center gap-6">
        <!-- Card 1 -->
        <div class="relative w-[420px] h-[312px] bg-white rounded-tl-[100px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-[100px] shadow border border-gray-400 overflow-visible">
            <img class="absolute top-[-50px] left-0 right-0 mx-auto w-[200px] h-auto object-cover" src="{{ asset('assets/public_dist/image/founder1.png') }}" alt="Founder 1">
            <div class="absolute inset-0 bg-black bg-opacity-0 flex flex-col justify-center items-center p-4">
                <h3 class="text-xl font-bold mb-2 text-white text-opacity-90 text-center">Nama Founder 1</h3>
                <p class="text-white text-opacity-90 text-center">CEO & Co-Founder</p>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="relative w-[420px] h-[312px] bg-white rounded-tl-[100px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-[100px] shadow border border-gray-400 overflow-visible">
            <img class="absolute top-[-50px] left-0 right-0 mx-auto w-[200px] h-auto object-cover" src="{{ asset('assets/public_dist/image/founder2.jpg') }}" alt="Founder 2">
            <div class="absolute inset-0 bg-black bg-opacity-0 flex flex-col justify-center items-center p-4">
                <h3 class="text-xl font-bold mb-2 text-white text-opacity-90 text-center">Nama Founder 2</h3>
                <p class="text-white text-opacity-90 text-center">COO & Co-Founder</p>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="relative w-[420px] h-[312px] bg-white rounded-tl-[100px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-[100px] shadow border border-gray-400 overflow-visible">
            <img class="absolute top-[-50px] left-0 right-0 mx-auto w-[200px] h-auto object-cover" src="{{ asset('assets/public_dist/image/founder3.png') }}" alt="Founder 3">
            <div class="absolute inset-0 bg-black bg-opacity-0 flex flex-col justify-center items-center p-4">
                <h3 class="text-xl font-bold mb-2 text-white text-opacity-90 text-center">Nama Founder 3</h3>
                <p class="text-white text-opacity-90 text-center">CTO & Co-Founder</p>
            </div>
        </div>
    </div>
</section>
<!-- Upala Founder END -->





</main>
<!-- About Content END -->

@endsection
