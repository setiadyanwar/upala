@extends('public_view/layouts/layouts')

@section('content')


<!-- About Content START -->
<section class="story relative mt-28">
    <img class="w-full" src="{{ asset('assets/public_dist/image/typo-about.png') }}" >
    <h2 class="absolute -top-10 left-10 lg:left-12 text-6xl font-extrabold text-primary mt-24 ml-6">About</h2>
</section>
        
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
        <div class="relative w-[420px] h-[312px] bg-white rounded-tl-[100px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-[100px] shadow border border-gray-400 overflow-hidden founder-card">
            <img class="w-full h-full object-cover" src="{{ asset('assets/public_dist/image/masmas.jpg') }}" alt="Founder 1">
            <div class="absolute inset-0 bg-black bg-opacity-0 flex flex-col justify-end p-4 founder-info">
                <h3 class="text-xl font-bold mb-2 text-white text-opacity-90 text-center">Ridho Fauzan Aziz</h3>
                <p class="text-white text-opacity-90 text-center">Manager</p>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="relative w-[420px] h-[312px] bg-white rounded-tl-[100px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-[100px] shadow border border-gray-400 overflow-hidden founder-card">
            <img class="w-full h-full object-cover" src="{{ asset('assets/public_dist/image/mas2.jpg') }}" alt="Founder 2">
            <div class="absolute inset-0 bg-black bg-opacity-0 flex flex-col justify-end p-4 founder-info">
                <h3 class="text-xl font-bold mb-2 text-white text-opacity-90 text-center">Ridho Fauzan Aziz</h3>
                <p class="text-white text-opacity-90 text-center">Manager</p>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="relative w-[420px] h-[312px] bg-white rounded-tl-[100px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-[100px] shadow border border-gray-400 overflow-hidden founder-card">
            <img class="w-full h-full object-cover" src="{{ asset('assets/public_dist/image/mas3.jpg') }}" alt="Founder 3">
            <div class="absolute inset-0 bg-black bg-opacity-0 flex flex-col justify-end p-4 founder-info">
                <h3 class="text-xl font-bold mb-2 text-white text-opacity-90 text-center">Ridho Fauzan Aziz</h3>
                <p class="text-white text-opacity-90 text-center">Manager</p>
            </div>
        </div>
    </div>
</section>
<!-- Upala Founder END -->

<style>
.founder-card:hover .founder-info {
    background: linear-gradient(to top, rgba(252, 99, 63, 0.8) 0%, rgba(252, 99, 63, 0.6) 5%, rgba(0, 0, 0, 0) 100%);
    background-opacity: 1;
    transition: background 0.3s ease;
}

</style>






</main>
<!-- About Content END -->

@endsection
