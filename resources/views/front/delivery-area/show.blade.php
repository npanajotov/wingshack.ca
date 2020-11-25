<x-user-layout>
    <x-hero type="map">
        Delivery Area
    </x-hero>
    <div class="container mx-auto py-32">
        <h1 class="text-4xl font-bold mb-6 px-6">Delivery Area</h1>
        <div class="location-list">
            @foreach($locations as $location)
                <div class="location-item flex flex-col justify-between items-center mb-12 px-10 py-5 md:flex-row">
                    <div class="w-32 mb-6 md:w-40 md:mb-0">
                        <img src="{{asset('/img/locations/'. $location['logo'])}}" alt="{{$location['name']}}">
                    </div>
                    <div class="text-center text-gray-600 mb-4 md:mb-0">
                        <h3 class="font-bold"><i class="fa fa-clock"></i> Every day</h3>
                        <p>{{$location['working_hours']['from']}} - {{$location['working_hours']['to']}}</p>
                    </div>
                    <div class="flex justify-center md:grid md:grid-cols-2">
                        @if($location['skipDishes'])
                            <a href="{{$location['skipDishes']}}" target="_blank">
                                <img src="{{asset('/img/icons/skipthedishes.svg')}}" class="w-16" alt="Skip the dishes Icon">
                            </a>
                        @endif
                        @if($location['uberEats'])
                            <a href="{{$location['uberEats']}}" target="_blank">
                                <img src="{{asset('/img/icons/uber.svg')}}" class="w-16" alt="Uber Icon">
                            </a>
                        @endif
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</x-user-layout>

