<x-app-layout>
    <div class="mx-4 pt-3">
        <div class=" relative overflow-x-auto mt-4 rounded">

            <table class="data-table text-center stripe hover responsive text-sm ">
                <thead class="bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Email</th>
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
                language: {
                    'search': '',
                    'searchPlaceholder': 'Search for items'
                },
                info: false,
                ajax: "{{ route('user.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });


            // Delete Product Code
            $('body').on('click', '.deleteProduct', function() {

                var product_id = $(this).data("id");

                $.ajax({
                    type: "DELETE",
                    url: "{{ route('user.store') }}" + '/' + product_id,
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
