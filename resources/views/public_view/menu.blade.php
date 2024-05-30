@extends('public_view/layouts/layouts')

@section('content')

    <section class="story relative mt-28">
        <img class="w-full" src="{{ asset('assets/public_dist/image/menu-typo.png') }}" >
        <h2 class="absolute -top-10 left-10 lg:left-12 text-6xl font-extrabold text-primary mt-24 ml-6">Our Menu</h2>
        <div class="grid grid-cols-12 lg:grid-cols-9 justify-center mt-36">
            <div class="col-start-2 col-end-12 lg:col-start-4 lg:col-end-7">
                <div class="relative self-center bg-orange-400 rounded-full p-0.5 flex">
                    <a class="bg-primary border-gray-200 shadow-sm flex justify-center relative w-1/3 rounded-full py-2 text-sm font-medium text-white whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-cool-indigo-300 focus:z-10 sm:w-1/3 sm:px-8 ml-0.5" href="/?price=free&amp;type=template">Coffee</a>
                    <a class="border-transparent bg-orange-400 hover:text-white flex justify-center relative w-1/3 rounded-full py-2 text-sm font-medium text-white whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-cool-indigo-400 focus:z-10 sm:w-1/3 sm:px-8" href="/?price=free&amp;type=all">Non Coffee</a>
                    <a class="border-transparent bg-orange-400 hover:text-white ml-0.5 flex justify-center relative w-1/3 rounded-full py-2 text-sm font-medium text-white whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-cool-indigo-300 focus:z-10 sm:w-1/3 sm:px-8" href="/?price=free&amp;type=kit">Food</a>
                </div>
            </div>
        </div>

        <div class="container relative overflow-hidden flex flex-wrap mt-24">
            <div class="w-full lg:w-3/4 px-4 pr-4 mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2">

                    @foreach($menu as $m)
                    <div class="col-span-1 my-3 mx-3">
                    <img class="w-full h-64 object-cover mb-4 rounded-lg" src="{{ asset('storage/produk/'.$m->file) }}" alt="Image Description">

                        <div class="lg:mx-4">
                            <div class="flex flex-row items-start justify-between gap-2">
                                <h5 class="font-medium text-2xl mb-1 tracking-wide break-normal">{{ $m->nama }}</h5>
                                <span style="margin-top: 0.15rem !important;" class="text-xl text-primary whitespace-nowrap">Rp 30000</span>
                            </div>
                            <p class="text-sm mt-3 font-extralight text-justify">
                                {!! $m->deskripsi !!}
                            </p>
                        </div>
                    </div>
                    @endforeach

                    <!-- Repeat the above structure for each item -->

                </div>
            </div>
        </div>

    </section>
    <!-- STORY UPALA FINISH -->

@endsection