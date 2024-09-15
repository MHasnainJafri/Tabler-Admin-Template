@props(['head'=>null,'actionRoute'=>null])

<div class="card-body border-bottom py-3">
    <div class="d-flex">
        <div class="text-muted">
           {{-- bulk action selec  --}}
            {{-- <select name="actions" id="actions" class="form-select form-control form-select-sm">
                <option value="none" disabled selected>Bulk Actions</option>
                <option value="delete">Delete</option>
            </select> --}}




            <div class="dropdown">
                <a href="#" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                    Bulk Actions
                </a>
                <div class="dropdown-menu">
                  <span class="dropdown-header">All Actions</span>
                  <a class="dropdown-item" href="javascript:void(0);" onclick="table.bulkAction('delete','{{$actionRoute}}')">
                    <svg  xmlns="http://www.w3.org/2000/svg" class="icon text-red mr-2"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                    Delete
                  </a>
                  {{-- <a class="dropdown-item" href="javascript:void(0);"
                  onclick="bulkAction('edit','{{$actionRoute}}')"
                  >
                    <svg  xmlns="http://www.w3.org/2000/svg" class="icon text-twitter mr-2"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                    Edit
                  </a> --}}
                </div>
              </div>

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
                <th>
                    <input type="checkbox" onclick="table.checkAllRecord(this)">
                </th>
                @foreach ($head as $h)
                <th><button class="table-sort" data-sort="{{$h}}">{{$h}}</button></th>

                @endforeach

                <th><button class="table-sort">Actions</button></th>
            </tr>
        </thead>
        <tbody>


        </tbody>
    </table>
</div>

<div class="card-footer d-flex align-items-center">
    <div class="text-muted">
        Show
        <div class="mx-2 d-inline-block">
            <input type="text" class="form-control form-control-sm" id="per-page-count"
                value="8" size="3" aria-label="Invoices count">
        </div>
        entries
    </div>

    <ul class="pagination m-0 ms-auto" id="pagination">

    </ul>
</div>
<p class="m-0 text-muted" id="pageinfo">Showing <span>1</span> to <span>8</span> of
    <span>16</span> entries
</p>
