<x-user-layout>
    <x-hero type="simple">
        Join the club
    </x-hero>
    <div class="container mx-auto py-32">
        <div class="max-w-2xl mx-auto bg-green-800 text-white">
            <div class="py-6 mx-6">
                <p class="uppercase mb-6">
                    Sign up for our eclub newsletter and be the first to find out what’s new on the WING SHACK menu and
                    hear about our latest promotions.
                </p>
                <form action="{{route('form-join-the-club')}}" method="POST">
                    <label class="block mb-4" for="email">
                        <span class="text-white">Email</span>
                        <input class="form-input mt-1 block w-full" placeholder="Enter email"
                               required type="email" id="email" name="email">
                    </label>
                    <label class="block mb-4" for="name">
                        <span class="text-white">First and Lastname</span>
                        <input class="form-input mt-1 block w-full" placeholder="Enter First and Lastname"
                               required type="text" id="name" name="name">
                    </label>

                    <label class="block mb-4" for="postal_code">
                        <span class="text-white">Postal code</span>
                        <input class="form-input mt-1 block w-full" placeholder="Enter Postal code"
                               type="text" id="postal_code" name="postal_code">
                    </label>
                    <label for="age" class="block mb-4">
                        <span class="text-white">Age</span>

                        <select name="age" id="age" class="form-input mt-1 block w-full text-gray-600">
                            <option value="" disabled selected>Select Age</option>
                            <option value="1">18-25</option>
                            <option value="2">26-35</option>
                            <option value="3">36-50</option>
                            <option value="4">50+</option>
                        </select>
                    </label>

                    <button type="submit"
                            class="mt-3 py-3 px-8 border-2 bg-white text-green-800 hover:bg-green-100 focus:outline-none">
                      Join the club
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-user-layout>

