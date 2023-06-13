<x-app-layout>
    <section class="bg-white dark:bg-gray-900 pt-3 mx-3 ">
        <div class="pb-3 mx-auto mt-5 rounded-xl max-w-2xl lg:pb-6 bg-gray-600 ">
            <div class="grid gap-2 sm:grid-cols-2 sm:gap-2">
                {{-- header --}}

                <div
                    class=" sm:p-5 p-3 items-center justify-between flex col-span-2 font-medium text-left text-gray-500 rounded-t-xl bg-gray-800">

                    <div class="col-span-1">
                        <p class="text-white font-black font-sans tracking-widest text-lg flex-auto">
                            {{ $domain->pelanggan->nama_pelanggan }}</p>
                        <div class="w-full text-gray-500 text-sm">
                            {{ date('j \\ F Y', strtotime($domain->tanggal_mulai)) }} -
                            {{ date('j \\ F Y', strtotime($domain->tanggal_expired)) }}
                        </div>
                    </div>
                    <div class="flex justify-end self-center col-span-1">
                        @if ($today->gte($expirationDate))
                            <div class="flex gap-3 items-center mr-2">
                                <i class="fa-solid fa-circle-xmark fa-lg align-self-center" style="color: #ff0000;"></i>
                                <p class="text-white">Expired</p>
                            </div>
                        @else
                            <div class="flex gap-3 items-center p-3">
                                <i class="fa-solid fa-circle-check fa-lg" style="color: #00ff33;"></i>
                                <p class="text-white">Aktif </p>
                            </div>
                        @endif
                    </div>

                </div>
            </div>

            <div class="grid gap-2 sm:grid-cols-2 sm:gap-2 px-5 mt-5">
                <p class="text-white ml-1">Informasi Domain</p>
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-2 p-5 col-span-2 border border-gray-400 rounded">


                    <div class="sm:grid grid-cols-4 col-span-2 sm:mt-4 mt-0">
                        <label for="jumlah_email"
                            class="sm:col-span-1 w-full block text-sm font-medium text-gray-900 dark:text-white ">Nama
                            Domain</label>
                        <input disabled type="text" value="{{ $domain->nama_domain }}" name="jumlah_email"
                            id="jumlah_email"
                            class="col-span-3 bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>

                    <div class="sm:grid grid-cols-4 col-span-2">
                        <label for="nameserver_id"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Nameserver</label>
                        <input disabled type="text" value="{{ $domain->nameserver->nameserver1 }}"
                            name="nameserver_id" id="nameserver_id"
                            class="col-span-3 bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="sm:grid grid-cols-4 col-span-2">
                        <label for="nameserver_id"
                            class="block text-sm font-medium text-gray-900 dark:text-white"></label>
                        <input disabled type="text" value="{{ $domain->nameserver->nameserver2 }}"
                            name="nameserver_id" id="nameserver_id"
                            class="col-span-3 bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="sm:grid grid-cols-4 col-span-2 ">
                        <label for="epp_code"
                            class="col-span-1 block text-sm font-medium text-gray-900 dark:text-white">EPP
                            Code</label>
                        <input disabled type="text" value="{{ $domain->epp_code }}" name="epp_code" id="epp_code"
                            class="col-span-3 bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan EPP Code" required="">
                    </div>
                    <div class="sm:grid grid-cols-4 col-span-2">
                        <label for="lokasi_domain"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Lokasi
                            Domain</label>
                        <input disabled type="text" value="{{ $domain->lokasi_domain }}" name="lokasi_domain"
                            id="lokasi_domain"
                            class="col-span-3 bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Lokasi Domain" required="">
                    </div>
                    <div class="sm:grid grid-cols-4 col-span-2">
                        <label for="paket_website" class="block text-sm font-medium text-gray-900 dark:text-white">Paket
                            Website</label>
                        <input disabled type="text" value="{{ $domain->paket_website }}" name="paket_website"
                            id="paket_website"
                            class="col-span-3 bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="sm:grid grid-cols-4 col-span-2">
                        <label for="jumlah_email" class="block text-sm font-medium text-gray-900 dark:text-white">Jumlah
                            Email</label>
                        <input disabled type="text" value="{{ $domain->jumlah_email }}" name="jumlah_email"
                            id="jumlah_email"
                            class="col-span-3 bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>


                    <div class="sm:grid grid-cols-4 col-span-2">
                        <label for="keterangan_domain"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <textarea disabled id="keterangan_domain" name="keterangan_domain" rows="8"
                            class=" col-span-3 h-40 block p-2.5 w-full text-sm bg-gray-50 text-gray-400 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600  dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $domain->keterangan_domain }}</textarea>
                    </div>
                </div>
                <p class="text-white ml-1 mt-5">Informasi Hosting</p>
                <div class="grid gap-2 sm:grid-cols-2 sm:gap-2 p-5 col-span-2 border border-gray-400 rounded">
                    <div class="sm:grid grid-cols-4 col-span-2">
                        <label for="hosting"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Hosting</label>
                        <input disabled type="text" value="{{ $domain->hosting }}" name="hosting" id="hosting"
                            class="bg-gray-50 border col-span-3 border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="sm:grid grid-cols-4 col-span-2">
                        <label for="kapasitas_hosting"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Kapasitas
                            hosting</label>
                        <input disabled type="text" value="{{ $domain->kapasitas_hosting }}"
                            name="kapasitas_hosting" id="kapasitas_hosting"
                            class="col-span-3 bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="sm:grid grid-cols-4 col-span-2">
                        <label for="tanggal_hosting"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Hosting</label>
                        <input disabled type="date" value="{{ $domain->tanggal_hosting }}" name="tanggal_hosting"
                            id="tanggal_hosting"
                            class="col-span-3 bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="sm:grid grid-cols-4 col-span-2">
                        <label for="lokasi_hosting"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Lokasi
                            Hosting</label>
                        <input disabled type="text" value="{{ $domain->lokasi_hosting }}" name="lokasi_hosting"
                            id="lokasi_hosting"
                            class="col-span-3 bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                </div>



                <div class="sm:grid sm:grid-cols-4 col-span-2">
                    <button onclick="history.back()"
                        class=" col-end-5 bg-gray-900 text-white p-3 rounded shadow-sm focus:outline-none hover:bg-indigo-700inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center bg-primary-700 focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Kembali
                    </button>
                </div>
            </div>
            </form>
        </div>
    </section>

</x-app-layout>
