<header class="bg-green-800" x-data="{open: false}">
    <div class="container mx-auto flex items-center justify-between" @click.away="open = false">
        <div class="logo justify-start">
            <a href="{{route('home')}}">
                <img src="{{asset('/img/logo-white.svg')}}" class="w-32 transform -rotate-12" alt="Wing Shack Logo">
            </a>
        </div>
        <nav class="justify-end hidden lg:block">
            <ul class="uppercase text-white list-none">
                <li class="inline px-3"><a href="{{route('home')}}#menu">Menu</a></li>
                <li class="inline px-3"><a href="{{route('delivery-area')}}">Delivery Area</a></li>
                <li class="inline px-3"><a href="{{route('sauces')}}">Sauces</a></li>
                <li class="inline px-3"><a href="{{route('about-us')}}">About us</a></li>
                <li class="inline px-3"><a href="{{route('join-the-club')}}">Join the club</a></li>
                <li class="inline pl-3"><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
        <div class="lg:hidden absolute right-6">
            <button @click="open = ! open">
                {{-- Hamburger Icon --}}
                <svg x-show="! open" viewBox="0 0 20 20" width="20">
                    <g stroke="none"
                       stroke-width="1"
                       fill="none"
                       fill-rule="evenodd"
                    >
                        <g fill="white">
                            <path
                                d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"></path>
                        </g>
                    </g>
                </svg>

                {{-- Close Icon --}}
                <svg x-show="open" viewBox="0 0 20 20" width="20">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g fill="white">
                            <polygon id="Combined-Shape"
                                     points="10 8.58578644 2.92893219 1.51471863 1.51471863 2.92893219 8.58578644 10 1.51471863 17.0710678 2.92893219 18.4852814 10 11.4142136 17.0710678 18.4852814 18.4852814 17.0710678 11.4142136 10 18.4852814 2.92893219 17.0710678 1.51471863 10 8.58578644"></polygon>
                        </g>
                    </g>
                </svg>
            </button>
        </div>

        <nav x-show="open">
            <ul class="uppercase text-white list-none border-t-2 border-green-600 absolute bg-green-800 w-full mt-10 left-0 text-right">
                <li class="px-6 py-2"><a href="{{route('home')}}#menu">Menu</a></li>
                <li class="px-6 py-2"><a href="{{route('delivery-area')}}">Delivery Area</a></li>
                <li class="px-6 py-2"><a href="{{route('sauces')}}">Sauces</a></li>
                <li class="px-6 py-2"><a href="{{route('about-us')}}">About us</a></li>
                <li class="px-6 py-2"><a href="{{route('join-the-club')}}">Join the club</a></li>
                <li class="px-6 py-2 pb-4"><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>

    </div>
</header>
