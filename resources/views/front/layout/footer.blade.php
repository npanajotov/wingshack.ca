<footer class="bg-green-900 text-white py-24">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row justify-around items-center mb-16">
            <div class="logo text-center mb-6 md:mb-0">
                <img src="{{asset('/img/logo-white.svg')}}" class="w-40" alt="Wing Shack logo">

                <a href="mailto:{{config('info.email')}}">{{config('info.email')}}</a>
            </div>

            <div class="working-hours text-center mb-6 md:mb-0">
                <h4 class="uppercase mb-4">WE ARE OPEN <br> EVERY DAY</h4>
                <h5 class="font-bold">{{config('info.working_time.from')}} AM - {{config('info.working_time.to')}}
                    PM</h5>
            </div>

            <div class="menu mb-6 md:mb-0">
                <h4 class="uppercase mb-4">Menu</h4>
                <ul>
                    <li><a href="{{route('home')}}#menu">Wings</a></li>
                    <li><a href="{{route('home')}}#menu">Dessert</a></li>
                    <li><a href="{{route('home')}}#menu">Drinks</a></li>
                </ul>
            </div>

            <div class="pages text-center mb-6 md:mb-0">
                <h4 class="uppercase mb-4">Pages</h4>
                <ul>
                    <li class="uppercase"><a href="{{route('contact')}}">Contact us</a></li>
                    <li class="uppercase"><a href="{{route('about-us')}}">About us</a></li>
                    <li class="uppercase"><a href="{{route('join-the-club')}}">Join The Club</a></li>
                </ul>
            </div>
        </div>
        <hr class="border-0 bg-green-600 h-px mb-6">
        <p class="text-center md:text-left">
            <em class="text-gray-400 ">© {{date('Y')}} Wing Shack </em>
        </p>
    </div>
</footer>
