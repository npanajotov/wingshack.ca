@props([
'type' => 'simple',
'image' => '',
'text' => '',
])

@if($type == 'simple')
    <div class="bg-white py-32 text-center justify-center">
        <h2 class="text-4xl text-green-800 font-bold">{{$slot}}</h2>
    </div>
@elseif($type == 'sauces')
    <div class="bg-white py-32 text-center justify-center" style="background: url({{$image}});
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: auto;
        -webkit-background-size: cover;
        -o-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;">
        <h2 class="text-4xl text-white font-bold" style="text-shadow: 2px 2px 0px rgba(0, 0, 0, 1);">{{$slot}}</h2>
        <div class="w-full md:w-4/12 mx-auto">
            <h3 class="text-2xl text-white font-bold" style="text-shadow: 2px 2px 0px rgba(0, 0, 0, 1);">{{$text}}</h3>
        </div>
    </div>
@elseif($type == 'home')
    <div class="h-screen flex items-center justify-center" style="background: url({{$image}}) top center no-repeat;
        background-size: auto;
        -webkit-background-size: cover;
        -o-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;">
        <div class="container text-center">
            <h2 class="text-2xl md:text-6xl text-white font-bold" style="text-shadow: 2px 2px 0px rgba(0, 0, 0, 1);">
                No gimmicks. Just great wings and a kicking dessert!
            </h2>
        </div>
    </div>
@elseif($type == 'map')
    <div class="bg-white py-32 text-center justify-center">
        <h2 class="text-4xl text-green-800 font-bold">{{$slot}}</h2>
    </div>
@endif
