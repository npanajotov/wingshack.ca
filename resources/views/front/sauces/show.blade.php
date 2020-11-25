<x-user-layout>
    <x-hero type="sauces" image="{{asset('/img/banners/banner1.jpg')}}"
            text="Made from scratch and full of flavour. Dipping or tossing, our line-up of saucy sides can't beat">
        GET SAUCED!
    </x-hero>

    <div class="container mx-auto py-32">
        <h1 class="text-4xl font-bold mb-6 px-6">Flavours</h1>
        <div class="sauces-list">
            <div class="sauce-item flex flex-col justify-between items-center mb-12 px-10 py-5 md:flex-row">
                <div class="w-24 md:w-48">
                    <img src="{{asset('/img/sauces/garlic_parmesan.png')}}" alt="Garlic parmesan sauce">
                </div>

                <div class="text-center">
                    <h3 class="text-3xl">Garlic parmesan </h3>
                    <p>Strong and tasty garlic and rich cheese</p>
                </div>

                <div class="w-16 md:w-32">
                    <img src="{{asset('/img/icons/pepper-1.svg')}}" alt="Sauces strong icon">
                </div>
            </div>

            <div class="sauce-item flex flex-col justify-between items-center mb-12 px-10 py-5  md:flex-row">
                <div class="w-24 md:w-48">
                    <img src="{{asset('/img/sauces/lemon_pepper.png')}}" alt="Lemon pepper sauce">
                </div>
                <div class="text-center">
                    <h3 class="text-3xl">Lemon pepper</h3>
                    <p>Our unique blend of crisp citrus and black pepper flavour.</p>
                </div>
                <div class="w-16 md:w-32">
                    <img src="{{asset('/img/icons/pepper-2.svg')}}" alt="Sauces strong icon">
                </div>
            </div>

            <div class="sauce-item flex flex-col justify-between items-center mb-12 px-10 py-5  md:flex-row">
                <div class="w-24 md:w-48">
                    <img src="{{asset('/img/sauces/chipotle_lime.png')}}" alt="Chipotle lime sauce">
                </div>
                <div class="text-center">
                    <h3 class="text-3xl">Chipotle Lime</h3>
                    <p>The hint of lime balances the spiciness</p>
                </div>
                <div class="w-16 md:w-32">
                    <img src="{{asset('/img/icons/pepper-3.svg')}}" alt="Sauces strong icon">
                </div>
            </div>

            <div class="sauce-item flex flex-col justify-between items-center mb-12 px-10 py-5  md:flex-row">
                <div class="w-24 md:w-48">
                    <img src="{{asset('/img/sauces/honey_bbq.png')}}" alt="Honey BBQ sauce">
                </div>
                <div class="text-center">
                    <h3 class="text-3xl">Honey BBQ</h3>
                    <p>Smoky flavour with a hint of sweetness</p>
                </div>
                <div class="w-16 md:w-32">
                    <img src="{{asset('/img/icons/pepper-4.svg')}}" alt="Sauces strong icon">
                </div>
            </div>

            <div class="sauce-item flex flex-col justify-between items-center mb-12 px-10 py-5  md:flex-row">
                <div class="w-24 md:w-48">
                    <img src="{{asset('/img/sauces/bbq.png')}}" alt="BBQ sauce">
                </div>
                <div class="text-center">
                    <h3 class="text-3xl">BBQ</h3>
                    <p>Big, bold flavour that's smoky and sweet.</p>
                </div>
                <div class="w-16 md:w-32">
                    <img src="{{asset('/img/icons/pepper-5.svg')}}" alt="Sauces strong icon">
                </div>
            </div>

            <div class="sauce-item flex flex-col justify-between items-center mb-12 px-10 py-5  md:flex-row">
                <div class="w-24 md:w-48">
                    <img src="{{asset('/img/sauces/bbq_bourbon.png')}}" alt="BBQ Bourbon sauce">
                </div>
                <div class="text-center">
                    <h3 class="text-3xl">BBQ Bourbon</h3>
                    <p>Sweet tangy and a full of flavour</p>
                </div>
                <div class="w-16 md:w-32">
                    <img src="{{asset('/img/icons/pepper-6.svg')}}" alt="Sauces strong icon">
                </div>
            </div>

            <div class="sauce-item flex flex-col justify-between items-center mb-12 px-10 py-5  md:flex-row">
                <div class="w-24 md:w-48">
                    <img src="{{asset('/img/sauces/buffalo_hot.png')}}" alt="Buffalo hot sauce">
                </div>
                <div class="text-center">
                    <h3 class="text-3xl">Buffalo hot</h3>
                    <p>Traditional buffalo style. A blend ofcayenne peppers with a tangy vinegar base</p>
                </div>
                <div class="w-16 md:w-32">
                    <img src="{{asset('/img/icons/pepper-7.svg')}}" alt="Sauces strong icon">
                </div>
            </div>

            <div class="sauce-item flex flex-col justify-between items-center mb-12 px-10 py-5  md:flex-row">
                <div class="w-24 md:w-48">
                    <img src="{{asset('/img/sauces/buffalo_butter.png')}}" alt="Buffalo butter sauce">
                </div>
                <div class="text-center">
                    <h3 class="text-3xl">Buffalo butter</h3>
                    <p>Made with the right amount of spice</p>
                </div>
                <div class="w-16 md:w-32">
                    <img src="{{asset('/img/icons/pepper-8.svg')}}" alt="Sauces strong icon">
                </div>
            </div>
        </div>
    </div>
</x-user-layout>

