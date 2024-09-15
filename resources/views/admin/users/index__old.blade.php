@extends('admin.layout.master')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">

<div class="page-wrapper">
  <!-- Page header -->
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Datatables
          </h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Page body -->
  <div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="card-body">



          <div class="card-body border-bottom py-3">
            <div class="d-flex">
              <div class="text-muted">
                Show
                <div class="mx-2 d-inline-block">
                  <input type="text" class="form-control form-control-sm" id="per-page-count" value="8" size="3"
                    aria-label="Invoices count">
                </div>
                entries
              </div>
              <div class="ms-auto text-muted">
                Search:
                <div class="ms-2 d-inline-block">
                  <input type="text" class="form-control form-control-sm " id="search-input"
                    aria-label="Search invoice">
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">

            <table class="table card-table table-vcenter text-nowrap datatable " id="datatable">
              <thead>
                <tr>
                  <th><button class="table-sort" data-sort="sort-city">Name</button></th>
                  <th><button class="table-sort" data-sort="sort-type">Email</button></th>
                  <th><button class="table-sort" data-sort="sort-progress">Actoins</button></th>
                </tr>
              </thead>
              <tbody>


              </tbody>
            </table>
          </div>

          <div class="card-footer d-flex align-items-center">
            <p class="m-0 text-muted" id="pageinfo">Showing <span>1</span> to <span>8</span> of <span>16</span> entries
            </p>
            <ul class="pagination m-0 ms-auto" id="pagination">
              {{-- <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                  <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M15 6l-6 6l6 6"></path>
                  </svg>
                  prev
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  next
                  <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 6l6 6l-6 6"></path>
                  </svg>
                </a>
              </li> --}}
            </ul>
          </div>






        </div>
      </div>
    </div>
  </div>



  {{-- =====================================================CANVAS --}}
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
    <div class="offcanvas-header">
      <h2 class="offcanvas-title" id="offcanvasEndLabel">Edit User</h2>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">



      <form action="{{route('admin.users.store')}}" method="post" id="EditForm">
        @csrf
        <div class="row">
          <div class="col-md-6 col-xl-12">

            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Please enter your name">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="text" class="form-control" name="email" placeholder="Please Enter Your Password">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control" value="" autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="input-group-link">Show password</a>
                </span>
              </div>
            </div>

          </div>
        </div>

      </form>














      <div class="mt-3">
        <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">
          Close
        </button>
      </div>
    </div>
  </div>


  <script>
    $(document).ready(function() {
      var table=new customDataTable('#datatable','/admin/userslist');
      table.column( [
        { data: 'name' },
            { data: 'email',orderable:false},
            { "data": null,orderable:false,
      render: function (data, type,row) {

        return  `  <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button" aria-controls="offcanvasEnd" onclick='editform(${JSON.stringify(row)})'>
                                  Edit
                                </a>
                                <a class="dropdown-item" href="#" onclick="delete_confirm_modal('/url',contextref=null)">
                                  Delete
                                </a>
                              </div>
                            </span>
                          </td>`;

      }
    },
      // Add more columns as needed
    ]);

    table.draw();


    });



    function editform(row) {

    // Assuming there is a form with fields having the same names as the keys in the row object
    const form = document.getElementById('EditForm'); // Replace 'yourFormId' with the actual ID of your form

    // Iterate over the keys of the row object
    Object.keys(row).forEach(key => {
        // Find the corresponding field in the form
        const field = form.elements[key];

        // If the field exists, assign the value from the row object
        if (field) {
            field.value = row[key];
        }
    });

    // Additional code for displaying the form or doing other actions if needed
    // ...
}


  </script>
  {{-- =====================================================CANVAS ends --}}
  @include('admin.layout.partials.footer')
</div>
@endsection
