@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <x-admin.pageheader page_heading="User Management" record_create_heading="Create User" />
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <x-admin.datatable :head="['id', 'name', 'email']" :actionRoute="route('admin.users.bulkAction')" />
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
                var formData = $('#createForm').serialize();
                customAjax.post('{{ route('admin.users.store') }}', formData, response => {
                    customAjax.Alert(response.msg, 'success');
                    $('#create').find('button[data-bs-dismiss="offcanvas"]').click();
                    redrawDataTable();
                }, xhr => customAjax.fieldsValidator("#createForm", xhr));

            });
            $('#EditForm').click(function() {
                var formData = $('#editForm').serialize();
                const edit_id = localStorage.getItem('edit_id');
                customAjax.put(`/admin/users/${edit_id}`, formData, response => {
                    customAjax.Alert(response.msg, 'success');
                    $('#create').find('button[data-bs-dismiss="offcanvas"]').click();
                    redrawDataTable();
                }, xhr => customAjax.fieldsValidator("#editForm", xhr));

            });

            table = new customDataTable('#datatable', '/admin/users/datatable');
            table.column([{
                    data: 'id',
                    orderable: true
                },
                {
                    data: 'name',
                    orderable: true
                },
                {
                    data: 'email',
                    orderable: true,

                }, {
                    "data": null,
                    orderable: false,
                    render: function(data, type, row) {

                        return `
                        <button class="btn btn-info" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button" aria-controls="offcanvasEnd" onclick='editform(${JSON.stringify(row)})'>
                          Edit
                        </button>
                        <button class="btn btn-danger"  onclick="table.deleteRecord('/admin/users/${row.id}', this)">Delete</button>

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
