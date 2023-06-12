<x-app-layout>
    <div class="pt-3 mx-4 ">

        <a href="{{ route('pelanggan.create') }}"
            class="w-full bg-gray-600 text-gray-300 p-3 rounded shadow-sm focus:outline-none hover:bg-indigo-700 text-sm"
            id="createNewProduct">Tambah Pelanggan</a>
        <div class=" relative overflow-x-auto mt-4 rounded">
            <table class="data-table text-center stripe hover responsive text-sm">
                <thead class="bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Nomor Hp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
    <a></a>

    <script type="text/javascript">
        $(function() {
            // Pass Header Token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Render DataTable
            var table = $('.data-table').DataTable({
                processing: false,
                // pageLength: 50,
                serverSide: true,
                paginate: false,
                lengthChange: false,
                language: {
                    'search': '',
                    'searchPlaceholder': 'Search for items'
                },
                info: false,
                ajax: "{{ route('pelanggan.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },

                    {
                        data: 'nama_pelanggan',
                        name: 'nama_pelanggan',
                        render: function(data, type, full, meta) {
                            return '<a href="/pelanggan/' + full.id + ' ">' + full.nama_pelanggan +
                                '</a>';
                        }
                    },

                    {
                        data: 'no_hp',
                        name: 'no_hp'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            // Create Product Code
            $('#saveBtn').click(function(e) {
                e.preventDefault();
                $(this).html('Sending..');

                $.ajax({
                    data: $('#productForm').serialize(),
                    url: "{{ route('pelanggan.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {

                        $('#productForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        table.draw();

                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
            });

            // Delete Product Code
            $('body').on('click', '.deleteProduct', function() {

                var product_id = $(this).data("id");

                $.ajax({
                    type: "DELETE",
                    url: "{{ route('pelanggan.store') }}" + '/' + product_id,
                    success: function(data) {
                        table.draw();
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            });
        });
    </script>



</x-app-layout>
