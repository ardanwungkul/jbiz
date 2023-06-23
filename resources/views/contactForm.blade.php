<x-app-layout>
    <div class="container-fluid grid lg:grid-rows-none lg:grid-cols-5 grid-rows-2 gap-10 lg:gap-0 p-10 bg-gray-900 ">
        <div class="lg:col-span-2 row-end-3 lg:row-span-full text-white ml-5">
            <div class="flex lg:items-center h-full">
                <div>
                    <h5 class="text-3xl font-extrabold mb-5 lg:text-start text-center">Contact Us</h5>
                    <div class="flex gap-2 my-3">
                        <i class="fa-solid fa-location-dot mt-1" style="color: #ffffff;"> </i>
                        <p class="text-sm">Komplek PU Blok B1 No.10, Buah Batu (Cipagalo Cipagalo Bojongsoang,
                            Kujangsari,
                            Kec.
                            Bandung Kidul, Kota Bandung, Jawa Barat 40287</p>
                    </div>
                    <div class="flex gap-2 my-3">
                        <i class="fa-solid fa-at self-center" style="color: #ffffff;"></i>
                        <p class="text-sm">Jasawebsite@gmail.com</p>
                    </div>
                    <div class="flex gap-2 my-3">
                        <i class="fa-solid fa-phone self-center" style="color: #ffffff;"></i>
                        <p class="text-sm">+6285721967684</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-3 row-span-1 bg-gradient-to-b from-gray-800 rounded-lg mx-0 lg:mx-32 ">
            <div class="w-full px-8 py-5 ">
                <h5 class="text-center text-white text-2xl mb-2 tracking-wider font-extrabold">Send Us a Message</h5>
                <div>
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ url('contact/send') }}">
                        {{ csrf_field() }}
                        <div class="mb-4">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="name" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Input Your Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="email-address-icon"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <div class="relative mb-4">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                        </path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="email-address-icon"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@email.com">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                message</label>
                            <textarea id="message" name="message" rows="4"
                                class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Leave a comment..."></textarea>
                        </div>
                        <button type="submit"
                            class="text-black tracking-wider bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
