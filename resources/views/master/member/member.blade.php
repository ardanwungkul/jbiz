<x-app-layout>

    @if (count($pelanggans) > 0)
    @else
        <div id="informational-banner" tabindex="1"
            class="flex justify-between w-full md:p-4 p-2 border-b border-gray-200 md:flex-row bg-gray-50 dark:bg-gray-600 dark:border-gray-600">
            <div class=" md:mr-4 self-center">
                <h2 class=" text-sm md:text-base font-semibold text-gray-300">Anda Belum Melakukan Registrasi Data !!
                </h2>
            </div>
            <div class="flex items-center flex-shrink-0">
                <a href="{{ route('member.create') }}"
                    class="inline-flex px-3 py-2 mr-2 text-xs font-medium rounded-lg bg-gray-300  ">Registrasi
                    <svg class="h-4 w-4 ml-1.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z">
                        </path>
                    </svg></a>
                <button data-dismiss-target="#informational-banner" type="button"
                    class=" md:relative md:top-auto md:right-auto flex-shrink-0 inline-flex justify-center items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close banner</span>
                </button>
            </div>
        </div>
    @endif




    <div class="py-4 px-4 md:mx-auto mx-5 mt-5 rounded-xl max-w-2xl lg:pb-6 lg:pt-4 bg-gray-600">
        <div id="accordion-open" data-accordion="open">
            <h2 id="accordion-open-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 text-sm md:text-base font-medium text-left border border-b-0 rounded-t-xl border-gray-700 text-gray-400 bg-gray-800">
                    <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg>Profile Information </span>

                </button>
            </h2>
            <div id="accordion-open-body-1" data-accordion="open" class="mb-5"
                aria-labelledby="accordion-open-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 rounded-b-xl">

                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-2">
                        <div class="grid grid-cols-4 col-span-2 ">
                            <label for="alamat"
                                class="col-span-1 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                            <input disabled type="text"
                                value="{{ count($pelanggans) > 0 ? $pelanggans[0]->nama_pelanggan : '-' }}"
                                name="alamat" id="alamat"
                                class="col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="">
                        </div>
                        <div class="grid grid-cols-4 col-span-2 ">
                            <label for="alamat"
                                class="col-span-1 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                            <input disabled type="text"
                                value="{{ count($pelanggans) > 0 ? $pelanggans[0]->alamat : '-' }}" name="alamat"
                                id="alamat"
                                class="col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="">
                        </div>
                        <div class="grid grid-cols-4 col-span-2 ">
                            <label for="alamat"
                                class="col-span-1 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No
                                Hp</label>
                            <input disabled type="text"
                                value="{{ count($pelanggans) > 0 ? $pelanggans[0]->no_hp : '-' }}" name="alamat"
                                id="alamat"
                                class="col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="">
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="mt-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 text-sm md:text-base font-medium text-left border rounded-t-xl border-gray-700 text-gray-400 bg-gray-800"
                    data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                    aria-controls="accordion-open-body-2">
                    <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg>Domain Info</span>

                </button>
            </h2>

            <div class=" shadow-md p-5 bg-gray-900 rounded-b-xl">
                <div class="rounded-t-xl overflow-hidden">
                    <table class="w-full text-sm text-left text-gray-400">
                        <thead class="text-xs uppercase bg-gray-700 text-gray-200 text-center">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Domain
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Expired
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($domains as $item)
                                <tr
                                    class="hover:bg-gray-700 border-b dark:bg-gray-900 dark:border-gray-700 text-center">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->nama_domain }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $item->tanggal_expired }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <a href="/domain/{{ $item->id }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
