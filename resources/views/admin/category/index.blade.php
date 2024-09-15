@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <x-admin.pageheader page_heading="Category Management" record_create_heading="Create Category" />
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <x-admin.datatable :head="['id', 'icon', 'title', 'courses']" :actionRoute="route('admin.categories.bulkAction')" />
                    </div>
                </div>
            </div>
        </div>
        @include($path . '.edit')
        @include($path . '.create')
        @include('admin.layout.partials.footer')
    </div>
@endsection

@section('js')
    <script>
        var table;
        var customAjax;
        $(document).ready(function() {
            customAjax = new CustomAjax();
            $('#submitForm').click(function() {
                var formData = new FormData($('#createForm')[
                0]); // Use FormData to capture all form data, including files
                customAjax.post('{{ route('admin.categories.store') }}', formData, response => {
                    customAjax.Alert(response.msg, 'success');
                    $('#create').find('button[data-bs-dismiss="offcanvas"]').click();
                    redrawDataTable();
                }, xhr => customAjax.fieldsValidator("#createForm", xhr), {
                    contentType: false, // Disable the default content type setting for FormData
                    processData: false // Prevent jQuery from processing the data
                });
            });

            $('#EditForm').click(function() {
                var formData = new FormData($('#editForm')[
                0]); // Use FormData to capture all form data, including files
                const edit_id = localStorage.getItem('edit_id');
                customAjax.put(`/admin/categories/${edit_id}`, formData, response => {
                    customAjax.Alert(response.msg, 'success');
                    $('#create').find('button[data-bs-dismiss="offcanvas"]').click();
                    redrawDataTable();
                }, xhr => customAjax.fieldsValidator("#editForm", xhr), {
                    contentType: false,
                    processData: false
                });
            });


            table = new customDataTable('#datatable', '/admin/categories/datatable');
            table.column([{
                    data: 'id',
                    orderable: true
                },
                {
                    data: 'icon',
                    orderable: false,
                    render: function(data, type, row) {

                        return `<image src="${data}" class="img-thumbnail rounded" width="100px" height="100px" />`;
                    }
                },
                {
                    data: 'name',
                    orderable: true,
                    render: function(data, type, row) {
                        const maxLength = 40; // Set your desired maximum length
                        if (data.length > maxLength) {
                            return data.substr(0, maxLength) + '...';
                        } else {
                            return data;
                        }
                    }


                },

                {
                    data: 'courses_count',
                    orderable: true,

                },

                {
                    "data": null,
                    orderable: false,
                    render: function(data, type, row) {

                        return `
                        <button class="btn btn-info" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button" aria-controls="offcanvasEnd" onclick='editform(${JSON.stringify(row)})'>
                          Edit
                        </button>
                        <button class="btn btn-danger"  onclick="table.deleteRecord('/admin/categories/${row.id}', this)">Delete</button>

                  `;
                    }
                },

            ]);
            table.draw();

        });

        function redrawDataTable() {
            table.draw();
        }



        function editform(row) {
            customAjax.showeditform(row)

        }
    </script>
@endsection
