@extends('public_view/layouts/layouts')

@section('content')


<!-- About Content START -->
<div style="margin: 150px; margin-bottom: -20px" class="lg:text-6xl text-5xl font-bold mb-4 text-transparent bg-gradient-to-br from-primary to-state bg-clip-text text-left">About</div>
<main class="container mx-auto mt-4 p-6">
    <section id="about" class="flex flex-col md:flex-row items-center bg-white rounded-lg mb-10">
        <div class="w-full md:w-1/2 p-4">
            <img src="{{ asset('assets/public_dist/image/about.png') }}" alt="Descriptive Alt Text" class="rounded-lg shadow-md">
        </div>
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-orange-500 text-7xl font-normal font-['Great Vibes'] leading-[86.40px] text-center">Story of</h2>
            <h2 class="lg:text-6xl text-5xl font-bold mb-4 text-transparent bg-gradient-to-br from-primary to-state bg-clip-text text-center">Upala Coffee</h2>
            <p class="text-lg leading-relaxed text-center">Hadir di sekitar akhir bulan Januari 2022, datangnya Upala turut meramaikan kedai kopi di sepanjang Jalan Kayu Putih Tengah yang terbilang masih sedikit jumlahnya. Upala di kelola oleh 3 orang sahabat yang ingin mencoba bisnis coffee shop dan masih dalam satu naungan dengan Perpaduan Group. </p>
        </div>
    </section>

    <!-- Upala Founder START -->
    <section id="founders" class="mt-10">
        <h2 class="lg:text-6xl text-5xl font-bold mb-6 text-transparent bg-gradient-to-br from-primary to-state bg-clip-text text-center">Upala Founder</h2>
        <div class="flex flex-wrap justify-center gap-6">
            <!-- Card 1 -->
            <div class="max-w-xs rounded-lg overflow-hidden shadow-lg bg-white">
                <img class="w-full" src="{{ asset('assets/public_dist/image/founder1.png') }}" alt="Founder 1">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-bold mb-2">Nama Founder 1</h3>
                    <p class="text-gray-700">CEO & Co-Founder</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="max-w-xs rounded-lg overflow-hidden shadow-lg bg-white">
                <img class="w-full" src="{{ asset('assets/public_dist/image/founder2.jpg') }}" alt="Founder 2">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-bold mb-2">Nama Founder 2</h3>
                    <p class="text-gray-700">COO & Co-Founder</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="max-w-xs rounded-lg overflow-hidden shadow-lg bg-white">
                <img class="w-full" src="{{ asset('assets/public_dist/image/founder3.png') }}" alt="Founder 3">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-bold mb-2">Nama Founder 3</h3>
                    <p class="text-gray-700">CTO & Co-Founder</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Upala Founder END -->

</main>
<!-- About Content END -->

@endsection
