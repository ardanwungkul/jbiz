<x-app-layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Domain</h2>
            <form action="{{ route('domain.update', $domain->id) }}" method="post">
                @csrf
                @method('PUT')
             
                @if (count($errors)>0)
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    @foreach ($errors->all() as $error)
                    <li><span class="block sm:inline">{{$error}}</span></li>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                    @endforeach
                  </div>

                @endif

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nama_domain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Domain</label>
                        <input  type="text" value="{{$domain->nama_domain}}" name="nama_domain" id="nama_domain" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan Nama Domain" required="">
                    </div>
                    <div class="w-full">
                        <label for="epp_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EPP Code</label>
                        <input type="text" value="{{$domain->epp_code}}" name="epp_code" id="epp_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan EPP Code" required="">
                    </div>
                    <div class="w-full">
                        <label for="lokasi_domain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Domain</label>
                        <input  type="text" value="{{$domain->lokasi_domain}}" name="lokasi_domain" id="okasi_domain" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan Lokasi Domain" required="">
                    </div>
                    <div class="w-full">
                        <label for="tanggal_mulai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                        <input type="date" value="{{$domain->tanggal_mulai}}" name="tanggal_mulai" id="tanggal_mulai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="">
                    </div>
                    <div>
                        <label for="tanggal_expired" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Expired</label>
                        <input type="date" value="{{$domain->tanggal_expired}}" name="tanggal_expired" id="tanggal_expired" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="">
                    </div> 
                  
                    <div>
                        <label for="status_domain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Domain</label>
                        <select id="status_domain" name="status_domain" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="" > {{$domain->status_domain}} </option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>

                        </select>
                    </div>
                    <div class="w-full">
                        <label for="hosting" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hosting</label>
                        <input  type="text" value="{{$domain->hosting}}"  name="hosting" id="hosting" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="">
                    </div>
                    <div class="w-full">
                        <label for="kapasitas_hosting" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kapasitas hosting</label>
                        <input type="number" value="{{$domain->kapasitas_hosting}}" name="kapasitas_hosting" id="kapasitas_hosting" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="">
                    </div>
                    <div class="w-full">
                        <label for="tanggal_hosting" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Hosting</label>
                        <input type="date" value="{{$domain->tanggal_hosting}}" name="tanggal_hosting" id="tanggal_hosting" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="">
                    </div> 
                    <div class="w-full">
                        <label for="lokasi_hosting" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Hosting</label>
                        <input type="text" value="{{$domain->lokasi_hosting}}" name="lokasi_hosting" id="lokasi_hosting" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="">
                    </div>
                    <div class="w-full">
                        <label for="paket_website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paket Website</label>
                        <input  type="text" value="{{$domain->paket_website}}" name="paket_website" id="paket_website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="">
                    </div>
                    <div class="w-full">
                        <label for="jumlah_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Email</label>
                        <input type="number" value="{{$domain->jumlah_email}}" name="jumlah_email" id="jumlah_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="">
                    </div>
                    <div class="w-full">
                        <label for="pelanggan_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
                        <select id="pelanggan_id" value="{{$domain->pelanggan_id}}" name="pelanggan_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected disabled>Pilih User</option>
                            @foreach ($data as $item)
                            <option value="{{$item->id}}"
                                {{$domain->pelanggan_id === $item->id ? 'selected' : '' }}>
                                {{$item->nama_pelanggan}}</option>
                            @endforeach
                        </select>
                    </div>
                  
                    
                    <div class="sm:col-span-2 ">
                        <label for="keterangan_domain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <textarea id="keterangan_domain" name="keterangan_domain" rows="8" class=" h-40 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{$domain->keterangan_domain}}</textarea>
                    </div>
                </div>
                <button type="submit" class="  bg-indigo-500 text-white p-3 rounded shadow-sm focus:outline-none hover:bg-indigo-700inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center bg-primary-700 focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Simpan
                </button>
            </form>
        </div>
      </section>

      

</x-app-layout>
