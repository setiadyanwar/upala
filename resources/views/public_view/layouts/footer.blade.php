<footer class="bottom-0 left-0 w-full flex items-center z-10" style="padding-top: 3rem; margin-top: 9rem; background-color: #AA4128;">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
            <div class="lg:px-4 lg:col-span-4">
                <a href="#"><img src="{{ asset('assets/public_dist/image/logo-upala-white.png') }}" class="py-6 max-w-[120px] lg:max-w-full cursor-pointer" alt="logo-upala"></a>
                <p class="text-white">Upala Coffee <br> #SocialSpace</p>
            </div>
            <div class="lg:col-start-7 lg:col-span-6 px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    <div>
                        <h3 class="my-5 text-2xl tracking-wide text-white">Links</h3>
                        <ul class="text-white">
                            <li class="my-2"><a href="{{ route('public-home') }}" class="text-white font-extralight text-lg">Home</a></li>
                            <li class="my-2"><a href="{{ route('public-menu') }}" class="text-white font-extralight text-lg">Menu</a></li>
                            <li class="my-2"><a href="{{ route('public-about') }}" class="text-white font-extralight text-lg">About</a></li>
                            <li class="my-2"><a href="{{ route('public-kontak') }}" class="text-white font-extralight text-lg">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="my-5 text-2xl tracking-wide text-white">Resource</h3>
                        <ul class="text-white">
                            <li class="my-2"><a href="{{ route('public-home') }}" class="text-white font-extralight text-lg">Support Center</a></li>
                            <li class="my-2"><a href="{{ route('public-menu') }}" class="text-white font-extralight text-lg">Pricing</a></li>
                            <li class="my-2"><a href="{{ route('public-about') }}" class="text-white font-extralight text-lg">Careers</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="my-5 text-2xl tracking-wide text-white">Company</h3>
                        <p class="text-white">Jam Operasional :
                          <br>
- Kayu Putih<br>
12:00-00:00 | EVERYDAY<br>
-Jatiwaringin<br>
10:00-01:00 | EVERYDAY<br>
#SocialSpace</p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-gray-400 my-6">
        <div class="flex items-center justify-center">
            <span class="text-white text-lg my-12">
                © copyright upala coffee 2024. All Right Reserved
            </span>
        </div>
    </div>
</footer>
