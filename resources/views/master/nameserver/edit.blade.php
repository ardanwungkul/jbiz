<x-app-layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Nameserver Baru</h2>
            <form action="{{ route('nameserver.update', $nameserver->id) }}" method="post">
                @csrf
                @method('PUT')

                @if (count($errors) > 0)
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        @foreach ($errors->all() as $error)
                            <li><span class="block sm:inline">{{ $error }}</span></li>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path
                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                </svg>
                            </span>
                        @endforeach
                    </div>

                @endif

                <div class="grid gap-4 sm:grid-cols-5 sm:gap-6">
                    <div class="sm:col-span-5">
                        <label for="nameserver1"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nameserver 1</label>
                        <input value="{{ $nameserver->nameserver1 }}" type="text" name="nameserver1" id="nameserver1"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Nama Domain" required="">
                    </div>
                    <div class="sm:col-span-5">
                        <label for="nameserver2"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nameserver 2</label>
                        <input value="{{ $nameserver->nameserver2 }}" type="text" name="nameserver2" id="nameserver2"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Nama Domain" required="">
                    </div>
                    <div class="sm:col-span-5">
                        <label for="tanggal_ns"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Nameserver</label>
                        <input value="{{ $nameserver->tanggal_ns }}" type="date" name="tanggal_ns" id="tanggal_ns"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>

                    <div class="sm:col-span-5">
                        <label for="status_ns"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                            Nameserver</label>
                        <select id="status_ns" name="status_ns"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">{{ $nameserver->status_ns }}</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="sm:col-end-6 sm:col-span-2 bg-indigo-500 text-white p-3 rounded shadow-sm focus:outline-none hover:bg-indigo-700inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center bg-primary-700 focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Tambah Nameserver
                    </button>
                </div>
            </form>
        </div>
    </section>



</x-app-layout>
