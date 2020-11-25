<x-user-layout>
    <x-hero type="simple">
        Contact us
    </x-hero>
    <div class="container mx-auto py-32">
        <div class="max-w-2xl mx-auto">
            <form action="{{route('form-contact')}}" method="POST" class="mx-6">
                <label class="block mb-4" for="name">
                    <span class="text-gray-700">Name</span>
                    <input class="form-input mt-1 block w-full" placeholder="Enter Your name"
                           required type="text" id="name" name="name">
                </label>
                <label class="block mb-4" for="email">
                    <span class="text-gray-700">Email</span>
                    <input class="form-input mt-1 block w-full" placeholder="Enter email"
                           required type="email" id="email" name="email">
                </label>
                <label class="block mb-4" for="postal_code">
                    <span class="text-gray-700">Postal code</span>
                    <input class="form-input mt-1 block w-full" placeholder="Enter Postal code"
                           type="text" id="postal_code" name="postal_code">
                </label>
                <label class="block mb-4" for="phone">
                    <span class="text-gray-700">Phone</span>
                    <input class="form-input mt-1 block w-full" placeholder="Enter phone" required type="tel" id="phone"
                           id="phone">
                </label>

                <label class="block mb-4" for="message">
                    <span class="text-gray-700">Message</span>
                    <textarea class="form-textarea mt-1 block w-full" rows="3"
                              placeholder="What's on your mind"></textarea>
                </label>

                <button type="submit"
                        class="py-3 px-8 border-2 border-green-800 text-green-800 hover:bg-green-800 hover:text-white focus:outline-none">
                    Send message
                </button>
            </form>


        </div>
    </div>
</x-user-layout>

