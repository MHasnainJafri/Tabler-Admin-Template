@props(['head'])

<div class="card-body border-bottom py-3">
    <div class="d-flex">
        <div class="text-muted">
            Show
            <div class="mx-2 d-inline-block">
                <input type="text" class="form-control form-control-sm" id="per-page-count"
                    value="8" size="3" aria-label="Invoices count">
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
    <p class="m-0 text-muted" id="pageinfo">Showing <span>1</span> to <span>8</span> of
        <span>16</span> entries
    </p>
    <ul class="pagination m-0 ms-auto" id="pagination">

    </ul>
</div>
