<x-app-layout>
    <div class="mx-4 pt-3">
        <a href="{{ route('domain.create') }}"
            class=" w-full bg-gray-600 text-gray-300 p-3 rounded text-xs sm:text-sm shadow-sm focus:outline-none hover:bg-g"
            id="createNewProduct">Tambah Domain</a>
        <div class=" relative overflow-x-auto mt-4 rounded">
            <table class="data-table text-center stripe hover responsive text-sm ">
                <thead class="bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
                    <tr>
                        <th>No</th>
                        <th>Nama Domain</th>
                        <th>Tanggal Expired</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>



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
                paginate: false,
                // pageLength: 50,
                serverSide: true,
                lengthChange: false,
                responsive: true,
                render: {
                    'display': 'display'
                },
                language: {
                    'search': '',
                    'searchPlaceholder': 'Search for items'
                },
                info: false,
                ajax: "{{ route('domain.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'nama_domain',
                        name: 'nama_domain',
                        render: function(data, type, full, meta) {
                            return '<a href="/domain/' + full.slug + ' ">' + full
                                .nama_domain +
                                '</a>';
                        }
                    },
                    {
                        data: 'tanggal_expired',
                        name: 'tanggal_expired'
                    },
                    {
                        orderable: false,
                        render: function(data, type, row, meta) {
                            var expirationDate = row.tanggal_expired;
                            var today = <?php echo json_encode($today); ?>;
                            if (today >= expirationDate) {
                                return 'Expired';
                            } else {
                                return 'Aktif';
                            }
                        }

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
                    url: "{{ route('domain.store') }}",
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
                    url: "{{ route('domain.store') }}" + '/' + product_id,
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
