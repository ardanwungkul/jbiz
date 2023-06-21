<x-app-layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Domain Baru</h2>
            <form id="myForm" action="{{ route('domain.store') }}" method="post">
                @csrf


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

                <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 sm:gap-6">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="nama_domain"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Domain</label>
                        <input type="text" name="nama_domain" id="nama_domain"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Nama Domain" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="epp_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EPP
                            Code</label>
                        <input type="text" name="epp_code" id="epp_code"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan EPP Code" required="">
                    </div>
                    <div class="w-full">
                        <label for="pelanggan_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelanggan</label>
                        <div class="flex gap-2">
                            <div class="flex-auto relative">
                                <input autocomplete="off"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    type="text" id="search-input" placeholder="Search">

                                <div class="bg-gray-600 text-white text-sm z-10 absolute w-full rounded-lg mt-1"
                                    id="search-results">
                                </div>
                            </div>
                            {{-- <select id="pelanggan_id" name="pelanggan_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option>Pilih Pelanggan</option>
                                @foreach ($data as $item)
                                    <option class="max-h-5"
                                        title="
                                    @if (count($item->domain) > 0) {{ $item->domain[0]->nama_domain }} 
                                    @else
                                    Pelanggan Belum Memiliki Domain @endif
                                                "
                                        value="{{ $item->id }}">
                                        <div class="">
                                            <div>
                                                <p>
                                                    {{ $item->nama_pelanggan }}
                                                </p>
                                            </div>
                                        </div>
                                    </option>
                                @endforeach
                            </select> --}}

                            <button type="button" data-modal-target="pelangganModal" data-modal-toggle="pelangganModal"
                                class="px-3 bg-gray-700 rounded-lg border-gray-300 text-white">+</button>
                        </div>

                    </div>

                    <div class="w-full">
                        <label for="nameserver_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nameserver</label>
                        <div class="flex gap-2">
                            <select id="nameserver_id" name="nameserver_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Pilih Nameserver</option>
                                @foreach ($ns as $nameserver)
                                    <option value="{{ $nameserver->id }}">{{ $nameserver->nameserver1 }} -
                                        {{ $nameserver->nameserver2 }}</option>
                                @endforeach
                            </select>
                            <button type="button" data-modal-target="nameserverModal"
                                data-modal-toggle="nameserverModal"
                                class="px-3 bg-gray-700 rounded-lg border-gray-300 text-white">+</button>
                        </div>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tanggal_mulai"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" id="tanggalMulai" onchange="setExpiredDate()"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tanggal_expired"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Expired</label>
                        <input type="date" name="tanggal_expired" id="tanggalExpired"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>

                    <div class="col-span-2 sm:col-span-1 hidden">
                        <label for="lokasi_domain"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Domain</label>
                        <input type="text" name="lokasi_domain" id="lokasi_domain"
                            class="bg-gray-50 border capitalize border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="-">
                    </div>
                    <div class="col-span-2 sm:col-span-1 hidden">
                        <label for="status_domain"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Domain</label>
                        <select id="status_domain" name="status_domain"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="Aktif">Pilih Status Domain</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1 hidden">
                        <label for="hosting"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hosting</label>
                        <input type="text" name="hosting" id="hosting" value="-"
                            class=" capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-2 sm:col-span-1 hidden">
                        <label for="kapasitas_hosting"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kapasitas
                            hosting</label>
                        <input type="number" name="kapasitas_hosting" id="kapasitas_hosting" value="0"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-2 sm:col-span-1 hidden">
                        <label for="tanggal_hosting"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Hosting</label>
                        <input type="date" name="tanggal_hosting" id="tanggal_hosting" value="2000-01-01"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-2 sm:col-span-1 hidden">
                        <label for="lokasi_hosting"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Hosting</label>
                        <input type="text" name="lokasi_hosting" id="lokasi_hosting" value="-"
                            class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-2 sm:col-span-1 hidden">
                        <label for="paket_website"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paket Website</label>
                        <input type="text" name="paket_website" id="paket_website" value="-"
                            class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-2 sm:col-span-1 hidden">
                        <label for="jumlah_email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Email</label>
                        <input type="number" name="jumlah_email" id="jumlah_email" value="0"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-2 hidden">
                        <label for="keterangan_domain"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <textarea id="keterangan_domain" name="keterangan_domain" rows="8"
                            class=" capitalize block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Deskripsi / Keterangan ">-</textarea>
                    </div>
                </div>
                <input class="hidden" type="text" name="pelanggan_id" id="hidden-input">
                <button type="submit"
                    class=" bg-white p-3 rounded shadow-sm focus:outline-none hover:bg-indigo-700inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center bg-primary-700 focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Tambah Domain
                </button>
            </form>
            @include('components.modal.addPelangganModal')
            @include('components.modal.addNameserverModal')
        </div>
    </section>
    <script>
        function setExpiredDate() {
            var tanggalMulai = document.getElementById("tanggalMulai").value;
            var tanggalExpired = document.getElementById("tanggalExpired");

            if (tanggalMulai) {
                var date = new Date(tanggalMulai);
                date.setDate(date.getDate() + 365);

                var formattedDate = date.toISOString().substring(0, 10);

                tanggalExpired.value = formattedDate;
            } else {
                tanggalExpired.value = "";
            }
        }
    </script>


    <script>
        $(document).ready(function() {
            $('#search-input').keyup(function() {
                var query = $(this).val();
                if (query.length >= 2) {
                    $.ajax({
                        url: '{{ route('domain.searchPelanggan') }}',
                        data: {
                            query: query
                        },
                        success: function(response) {
                            var results = response;

                            $('#search-results').empty();
                            $.each(results, function(index, result) {
                                $('#search-results').append(
                                    '<p title="" class="search-item hover:bg-gray-500 px-3 py-1 rounded-lg" title="" data-id="' +
                                    result.id + '">' + result.nama_pelanggan +
                                    '</p>'
                                );
                            });
                        }
                    });
                } else {
                    $('#search-results').empty();
                }
            });

            $('#search-results').on('click', '.search-item', function() {
                selectedId = $(this).data('id'); // Ubah nilai variabel selectedId
                var selectedNama = $(this).text();
                $('#search-input').val(selectedNama);
                $('#hidden-input').val(selectedId);
                $('#search-results').empty();
            });
        });
    </script>


</x-app-layout>
