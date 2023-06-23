<x-app-layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Pelanggan Baru</h2>
            <form action="{{ route('pelanggan.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex justify-center">
                    <div class="relative">
                        <img id="fotoProfil" class="object-cover w-40 h-40"
                            src="{{ asset('storage/images/fotoProfil') }}/default_image.jpg" alt="">
                        <div class="absolute z-10 top-0  opacity-0 hover:opacity-100">
                            <label for="fotoProfilInput">
                                <div class="w-40 h-40 bg-black opacity-60 flex items-center">
                                    <p class="text-center w-full"><i class="fa-solid fa-pen"
                                            style="color: #ffffff;"></i>
                                    </p>
                                </div>
                                <input accept="image/*" type="file" name="image" class="hidden"
                                    id="fotoProfilInput" />
                            </label>
                        </div>
                        <script>
                            fotoProfilInput.onchange = evt => {
                                const [file] = fotoProfilInput.files
                                if (file) {
                                    fotoProfil.src = URL.createObjectURL(file)
                                }
                            }
                        </script>
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="col-span-2">
                        <label for="nama_pelanggan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Nama Pelanggan" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="alamat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="text" name="alamat" id="alamat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Alamat" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                            Hp</label>
                        <input type="text" name="no_hp" id="no_hp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Nomor Handphone" required="">
                    </div>

                    <div class="col-span-2 hidden">
                        <label for="link_history"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link History</label>
                        <input type="text" name="link_history" id="link_history"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="null" required="">
                    </div>
                    <div class="col-span-2 hidden">
                        <label for="link_history"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
                        <input type="text" name="user_id" id="user_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="1" required="">
                    </div>

                    {{-- <div class="col-span-2">
                        <label for="user_id "
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
                        <select id="user_id" name="user_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih User</option>
                            @foreach ($data as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}

                    <div class="col-span-2 hidden">
                        <label for="keterangan_pelanggan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <textarea name="keterangan_pelanggan" id="keterangan_pelanggan" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Deskripsi / Keterangan ">null</textarea>
                    </div>
                </div>
                <button type="submit"
                    class="  bg-gray-600 text-white p-3 rounded shadow-sm focus:outline-none hover:bg-gray-500 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center bg-primary-700 focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Simpan
                </button>
            </form>
        </div>
    </section>

</x-app-layout>
