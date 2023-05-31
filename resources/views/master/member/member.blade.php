<x-app-layout>




    <div class="py-4 px-4 mx-auto mt-5 rounded-xl max-w-2xl lg:pb-6 lg:pt-4 bg-gray-600">
        <div id="accordion-open" data-accordion="open">
            <h2 id="accordion-open-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl  dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 bg-gray-800"
                    data-accordion-target="#accordion-open-body-1" aria-expanded="true"
                    aria-controls="accordion-open-body-1">
                    <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg>Profile </span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-open-body-1" data-accordion="open" class="mb-5"
                aria-labelledby="accordion-open-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 rounded-b-xl">

                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-2">
                        <div class="grid grid-cols-4 col-span-2 ">
                            <label for="alamat"
                                class="col-span-1 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                            <input disabled type="text" value="{{ $pelanggans[0]->nama_pelanggan }}" name="alamat"
                                id="alamat"
                                class="col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="">
                        </div>
                        <div class="grid grid-cols-4 col-span-2 ">
                            <label for="alamat"
                                class="col-span-1 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                            <input disabled type="text" value="{{ $pelanggans[0]->alamat }}" name="alamat"
                                id="alamat"
                                class="col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="">
                        </div>
                        <div class="grid grid-cols-4 col-span-2 ">
                            <label for="alamat"
                                class="col-span-1 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No
                                Hp</label>
                            <input disabled type="text" value="{{ $pelanggans[0]->no_hp }}" name="alamat"
                                id="alamat"
                                class="col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="">
                        </div>
                    </div>
                </div>
            </div>
            <h2 id="accordion-open-heading-2" class="mt-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border rounded-t-xl border-gray-200  dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 bg-gray-800"
                    data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                    aria-controls="accordion-open-body-2">
                    <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg>Domain Info</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-open-body-2" data-accordion="open" aria-labelledby="accordion-open-heading-2">
                <div class="p-5 border border-t-0 rounded-b-xl border-gray-200 dark:border-gray-700  dark:bg-gray-900">
                    <div class="grid grid-cols-4 col-span-2">
                        <label for="status_domain"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Daftar
                            Domain</label>
                        <select onchange="location = this.value;" id="status_domain" name="status_domain"
                            class="col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected disabled>Lihat Semua Daftar Domain</option>
                            @foreach ($domains as $item)
                                <option value="/domain/{{ $item->id }}">{{ $item->nama_domain }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-4 col-span-2">
            <button onclick="history.back()"
                class=" col-end-5 bg-gray-900 text-white rounded shadow-sm focus:outline-none inline-flex justify-center items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center">
                Kembali
            </button>
        </div>

</x-app-layout>
