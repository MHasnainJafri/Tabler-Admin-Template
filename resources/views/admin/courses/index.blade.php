@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <x-admin.pageheader page_heading="Course Management" record_create_heading="Create Course" />
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <x-admin.datatable :head="['id', 'thumbnail', 'title', 'cateory', 'user', 'status']" :actionRoute="route('admin.courses.bulkAction')" />
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
                customAjax.post('{{ route('admin.courses.store') }}', formData, response => {
                    customAjax.Alert(response.msg, 'success');
                    $('#create').find('button[data-bs-dismiss="offcanvas"]').click();
                    redrawDataTable();
                }, xhr => customAjax.fieldsValidator("#createForm", xhr));

            });
            $('#EditForm').click(function() {
                var formData = $('#editForm').serialize();
                const edit_id = localStorage.getItem('edit_id');
                customAjax.put(`/admin/courses/${edit_id}`, formData, response => {
                    customAjax.Alert(response.msg, 'success');
                    $('#create').find('button[data-bs-dismiss="offcanvas"]').click();
                    redrawDataTable();
                }, xhr => customAjax.fieldsValidator("#editForm", xhr));

            });

            table = new customDataTable('#datatable', '/admin/courses/datatable');
            table.column([{
                    data: 'id',
                    orderable: true
                },
                {
                    data: 'thumbnail',
                    orderable: false,
                    render: function(data, type, row) {

                        return `<image src="${data}" class="img-thumbnail rounded" width="100px" height="100px" />`;
                    }
                },
                {
                    data: 'title',
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
                    data: 'category.name',
                    orderable: true,

                },
                {
                    data: 'user.name',
                    orderable: true,

                },
                {
                    data: 'status',
                    orderable: true,
                    render: function(data, type, row) {
                        // Set your desired maximum length
                        if (data == 'pending') {
                            return `<span class="badge bg-yellow text-yellow-fg">${data}</span>`;
                        } else if(data == 'blocked') {
                            return `<span class="badge bg-red text-red-fg">${data}</span>`;
                        }
                        else {
                            return `<span class="badge bg-green text-green-fg">${data}</span>`;
                        }
                    }



                },
                {
                    "data": null,
                    orderable: false,
                    render: function(data, type, row) {

                        return `
                        <button class="btn btn-info" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button" aria-controls="offcanvasEnd" onclick='editform(${JSON.stringify(row)})'>
                          Edit
                        </button>
                        <button class="btn btn-danger"  onclick="table.deleteRecord('/admin/courses/${row.id}', this)">Delete</button>

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


<script src="{{asset('admin/dist/libs/tinymce/tinymce.min.js?1692870487')}}" defer></script>


     <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        let options = {
          selector: '#tinymce-mytextarea',
          height: 300,
          menubar: false,
          statusbar: false,
      		license_key: 'gpl',
          plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor',
            'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
          ],
          toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat',
          content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
        }
        if (localStorage.getItem("tablerTheme") === 'dark') {
          options.skin = 'oxide-dark';
          options.content_css = 'dark';
        }
        tinyMCE.init(options);
      })
      // @formatter:on

</script>
@endsection
