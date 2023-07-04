<x-app-layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Domain</h2>
            <form action="{{ route('domain.update', $domain->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nama_domain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Domain</label>
                        <input type="text" value="{{ $domain->nama_domain }}" name="nama_domain" id="nama_domain"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Nama Domain" required="">
                    </div>
                    <div class="w-full">
                        <div class="flex">
                            <div class="flex-auto">
                                <label for="epp_code"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EPP
                                    Code</label>
                                <input type="text" value="{{ $domain->epp_code }}" name="epp_code" id="epp_code"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Masukan EPP Code" required="">
                            </div>
                            <div class="ml-3 flex-auto">
                                <label for="epp_code"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tampilkan
                                    EPP</label>
                                <select name="hidden_epp"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="{{ $domain->hidden_epp }}" disabled selected></option>
                                    <option value="hidden">Hide</option>
                                    <option value="sh">Show</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="lokasi_domain"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Domain</label>
                        <input type="text" value="{{ $domain->lokasi_domain }}" name="lokasi_domain"
                            id="okasi_domain"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Lokasi Domain" required="">
                    </div>
                    <div class="w-full">
                        <label for="tanggal_mulai"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                        <input type="date" value="{{ $domain->tanggal_mulai }}" name="tanggal_mulai"
                            id="tanggal_mulai"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div>
                        <label for="tanggal_expired"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Expired</label>
                        <input type="date" value="{{ $domain->tanggal_expired }}" name="tanggal_expired"
                            id="tanggal_expired"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>

                    <div>
                        <label for="status_domain"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Domain</label>
                        <select id="status_domain" name="status_domain"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected=""> {{ $domain->status_domain }} </option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>

                        </select>
                    </div>
                    <div class="w-full">
                        <label for="hosting"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hosting</label>
                        <input type="text" value="{{ $domain->hosting }}" name="hosting" id="hosting"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="w-full">
                        <label for="kapasitas_hosting"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kapasitas
                            hosting</label>
                        <input type="number" value="{{ $domain->kapasitas_hosting }}" name="kapasitas_hosting"
                            id="kapasitas_hosting"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="w-full">
                        <label for="tanggal_hosting"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Hosting</label>
                        <input type="date" value="{{ $domain->tanggal_hosting }}" name="tanggal_hosting"
                            id="tanggal_hosting"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="w-full">
                        <label for="lokasi_hosting"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Hosting</label>
                        <input type="text" value="{{ $domain->lokasi_hosting }}" name="lokasi_hosting"
                            id="lokasi_hosting"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="w-full">
                        <label for="paket_website"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paket Website</label>
                        <input type="text" value="{{ $domain->paket_website }}" name="paket_website"
                            id="paket_website"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="w-full">
                        <label for="jumlah_email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Email</label>
                        <input type="number" value="{{ $domain->jumlah_email }}" name="jumlah_email"
                            id="jumlah_email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="w-full">
                        <label for="pelanggan_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
                        <select id="pelanggan_id" value="{{ $domain->pelanggan_id }}" name="pelanggan_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected disabled>Pilih User</option>
                            @foreach ($data as $item)
                                <option value="{{ $item->id }}"
                                    {{ $domain->pelanggan_id === $item->id ? 'selected' : '' }}>
                                    {{ $item->nama_pelanggan }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="sm:col-span-2 ">
                        <label for="keterangan_domain"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <textarea id="keterangan_domain" name="keterangan_domain" rows="8"
                            class=" h-40 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $domain->keterangan_domain }}</textarea>
                    </div>
                </div>
                <button type="submit"
                    class="  dark:bg-gray-600 bg-blue-900 text-white p-3 rounded shadow-sm focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-500 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center bg-primary-700 focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Simpan
                </button>
            </form>
        </div>
    </section>



</x-app-layout>
