<x-app-layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Domain Baru</h2>
            <form id="myForm" action="{{ route('domain.store') }}" method="post">
                @csrf
                <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 sm:gap-6">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="nama_domain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Domain</label>
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
                    <div class="col-span-2 sm:col-span-1">
                        <label for="pelanggan_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelanggan</label>
                        <div class="flex gap-2">
                            <div class="flex-auto relative">
                                <input autocomplete="off"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    type="text" id="search-input" placeholder="Search">

                                <div class="dark:bg-gray-600 bg-blue-900 text-white text-sm z-10 absolute w-full rounded-lg mt-1"
                                    id="search-results">
                                </div>
                            </div>


                            <button type="button" data-modal-target="pelangganModal" data-modal-toggle="pelangganModal"
                                class="px-3 dark:bg-gray-700 bg-blue-900 rounded-lg border-gray-300 text-white">+</button>
                        </div>

                    </div>

                    <div class="col-span-2 sm:col-span-1">
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
                                class="px-3 dark:bg-gray-700 bg-blue-900 rounded-lg border-gray-300 text-white">+</button>
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
                    class="dark:bg-gray-600 text-gray-200 p-3 rounded shadow-sm focus:outline-none bg-blue-900 hover:bg-blue-700 dark:hover:bg-gray-500 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900">
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
            var selectedId = null;

            $('#search-input').on('input', function() {
                var query = $(this).val();
                if (query.length >= 2) {
                    // Lakukan permintaan pencarian
                    $.ajax({
                        url: '{{ route('domain.searchPelanggan') }}',
                        data: {
                            query: query
                        },
                        success: function(response) {
                            var results = response;

                            $('#search-results').empty();
                            if (results.length > 0) {
                                $.each(results, function(index, result) {
                                    var title = result.domain[0] ? result.domain[0]
                                        .nama_domain : 'Belum Memiliki Domain';
                                    $('#search-results').append(
                                        '<p title="Nama Domain : ' + title +
                                        ' &#013; No Hp : ' + result.no_hp +
                                        '" class="search-item hover:bg-blue-800 dark:hover:bg-gray-500 px-3 py-1 rounded-lg" data-id="' +
                                        result.id + '">' + result.nama_pelanggan +
                                        '</p>'
                                    );
                                });
                            } else {
                                $('#search-input').data('no-match',
                                    true);
                            }
                        }
                    });
                } else {
                    $('#search-results').empty();
                }
            });

            $('#search-input').on('blur', function() {
                var noMatch = $(this).data('no-match');
                if (noMatch) {
                    $('#search-input').val('');
                    $('#hidden-input').val('');
                    $('#search-results').empty();
                }
                $(this).removeData('no-match'); // Menghapus data 'no-match'
            });

            $('#search-results').on('click', '.search-item', function() {
                selectedId = $(this).data('id');
                var selectedNama = $(this).text();
                $('#search-input').val(selectedNama);
                $('#hidden-input').val(selectedId);
                $('#search-results').empty();
            });
        });
    </script>


</x-app-layout>
