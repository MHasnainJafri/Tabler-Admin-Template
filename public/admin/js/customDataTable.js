class customDataTable {
    constructor(tableId, ajaxUrl) {
        this.tableId = tableId;
        this.ajaxUrl = ajaxUrl;
        this.columns = null;
        this.selectedRows = []; // Array to store selected row IDs
    }

    column(columns) {
        this.columns = columns;
    }


    draw() {
        var table = $(this.tableId).DataTable({
            "processing": true,
            "serverSide": true,
            "order": [[0, "desc"]],
            "autoWidth": false,
            processing: true,
            "bDestroy": true,
            'language': {
                'loadingRecords': '&nbsp;',
                'processing': '<div class="spinner"></div>',
            },
            columnDefs: [
                { orderable: false, targets: 1 },
                { orderable: false, targets: 2 },
            ],
            "ajax": {
                "url": this.ajaxUrl,
                "type": "get",
            },
            "columns": [{
                data: null,
                orderable: false,
                render: function (data, type, row) {
                    return `<input type="checkbox" class="table_checkbox" id="row_checkbox_${row.id}" data-row-id="${row.id}" />`;
                }
            }, ...this.columns],
            "drawCallback": function (settings) {
                var pageInfo = table.page.info();
                $('#pageinfo span:eq(0)').text(pageInfo.start + 1);
                $('#pageinfo span:eq(1)').text(pageInfo.end);
                $('#pageinfo span:eq(2)').text(pageInfo.recordsTotal);
            },
            "initComplete": function () {
                var searchInput = $('#search-input');
                var perPageSelect = $('#per-page-count');
                $('#datatable_info').remove();
                $('#datatable_paginate').remove();
                $('#datatable_length').remove();
                $('#datatable_filter').remove();

                searchInput.on('keyup change', function () {
                    table.search(this.value).draw();
                });

                perPageSelect.on('change', function () {
                    table.page.len(this.value).draw();
                });

                let customPagination = $('#pagination');

                customPagination.on('click', 'a.page-link', function (e) {
                    e.preventDefault();
                    var page = $(this).text();
                    table.page(parseInt(page) - 1).draw('page');
                });

                table.on('draw', function () {
                    var total_pages = table.page.info().pages;
                    var current_page = table.page.info().page;
                    customPagination.empty();

                    $('<li class="page-item ' + (current_page == 0 ? 'disabled' : '') + '"><a class="page-link" href="#" tabindex="-1" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>prev</a></li>').appendTo(customPagination);

                    for (var i = 1; i <= total_pages; i++) {
                        if (i == table.page.info().page + 1) {
                            $('<li class="page-item active"><a class="page-link" href="#">' + i + '</a></li>').appendTo(customPagination);
                        } else {
                            $('<li class="page-item"><a class="page-link" href="#">' + i + '</a></li>').appendTo(customPagination);
                        }
                    }

                    $('<li class="page-item ' + (current_page == total_pages - 1 ? 'disabled' : '') + '"><a class="page-link" href="#">next<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg></a></li>').appendTo(customPagination);
                });

                // Attach the event listener for checkboxes
                this.handleCheckboxClicks();
            }.bind(this) // Bind 'this' to keep context inside initComplete
        });

        table.on('page', function () {
            var info = table.page.info();
            console.log(info);
            $('#pageInfo').html('Showing page: ' + info.page + ' of ' + info.pages);
        });
    }

    // Function to handle checkbox clicks and manage selected rows
    handleCheckboxClicks() {
        $(document).on('change', '.table_checkbox', (e) => {
            var checkbox = $(e.target);
            var rowId = checkbox.data('row-id');
            if (checkbox.is(':checked')) {
                // Add row ID to selectedRows array
                this.selectedRows.push(rowId);
            } else {
                // Remove row ID from selectedRows array
                this.selectedRows = this.selectedRows.filter(id => id !== rowId);
            }
            console.log('Selected Rows:', this.selectedRows);
        });
    }

    editform(rowData) {

        console.log('Edit Form:', rowData);
    }


    checkAllRecord(me) {
        // If the main checkbox is checked (Select All)
        if ($(me).is(':checked')) {
            $('.table_checkbox').each((index, element) => {
                // Check all checkboxes
                $(element).prop('checked', true);

                // Get the row ID from the data attribute
                let rowId = $(element).data('row-id');

                // Add the row ID to the selectedRows array if it's not already there
                if (!this.selectedRows.includes(rowId)) {
                    this.selectedRows.push(rowId);
                }
            });
        } else {
            // If the main checkbox is unchecked, uncheck all and clear the selectedRows array
            $('.table_checkbox').prop('checked', false);
            this.selectedRows = [];
        }
        console.log(this.selectedRows);
    }


     deleteRecord(route, contextref = null) {
        customAjax.delete_confirm_modal(route,{} ,this.draw())
    }

     bulkAction(action, route) {
        if (action == 'delete') {
            this.DeleteRecords(route);
        } else if (action == 'edit') {
            this.EditRecords(route);
        } else {
            alert("Select an Action");
        }


    }


     DeleteRecords(route) {
        if(this.selectedRows.length == 0){
            Swal.fire(
                'Failed!',
                'Please select at least one row',
                'error'
            );
            return ;
        }

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn bg-gradient-danger',
                cancelButton: 'btn bg-gradient-success'
            },
            buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                customAjax.post(route, {
                    'action': 'delete',
                    'ids': this.selectedRows}, ()=>this.draw(), response =>swalWithBootstrapButtons.fire(
                                        'Failed!',
                                        response.msg,
                                        'error'
                                    )
                        );




                // $.ajax({
                //     url: route,
                //     type: 'DELETE',
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     },
                //     success: function (data) {
                //         if (data.status == 200) {
                //             swalWithBootstrapButtons.fire(
                //                 'Deleted!',
                //                 data.msg,
                //                 'success'
                //             );
                //         } else {
                //             swalWithBootstrapButtons.fire(
                //                 'Failed!',
                //                 data.msg,
                //                 'error'
                //             );
                //         }
                //     },
                //     error: function (data) {
                //         console.log('Error:', data);
                //     }
                // });
            }
        })

    }


    // For handling individual checkboxes









    showLoading(msg) {
        Swal.fire({
            title: 'Hold On !',
            html: msg,
            allowOutsideClick: false,
            showConfirmButton: false,
            willOpen: () => {
                Swal.showLoading()
            },
        });
    }
}

var multipleCheckBoxSelect = [];





