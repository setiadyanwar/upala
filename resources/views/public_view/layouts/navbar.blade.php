
<!-- Header START -->
<header id="navbar" class="z-50 {{ isset($navcolor) ? $navcolor : 'bg-white' }}  fixed z-50 top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="#"><img src="{{ asset('assets/public_dist/image/logo.png') }}" class="py-6 max-w-[120px] lg:max-w-full cursor-pointer" alt="logo-upala"></a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
                <nav id="nav-menu" class="hidden absolute py-5  shadow-lg rounded-lg w-full right-4 top-full 
                lg:block lg:static lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block ml-auto lg:flex text-right">
                        <li class="group"><a href="{{ route('public-home') }}" class="text-lg py-2 mx-5 flex group-hover:text-primary active-link">Home</a></li>
                        <li class="group"><a href="{{ route('public-menu') }}" class="text-lg py-2 mx-5 flex group-hover:text-primary">Menu</a></li>
                        <li class="group"><a href="{{ route('public-about') }}" class="text-lg py-2 mx-5 flex group-hover:text-primary">Tentang Kami</a></li>
                        <li class="group"><a href="{{ route('public-kontak') }}" class="text-lg py-2 mx-5 flex group-hover:text-primary">Kontak</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header END -->
