@extends('admin.layout.master')

@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Offcanvas
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
            <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasStart" role="button" aria-controls="offcanvasStart">
              Toggle start offcanvas
            </a>
            <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button" aria-controls="offcanvasEnd">
              Toggle end offcanvas
            </a>
            <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasTop" role="button" aria-controls="offcanvasTop">
              Toggle top offcanvas
            </a>
            <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasBottom" role="button" aria-controls="offcanvasBottom">
              Toggle bottom offcanvas
            </a>
          </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
          <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasStartLabel">Start offcanvas</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
            </div>
            <div class="mt-3">
              <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">
                Close
              </button>
            </div>
          </div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
          <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasEndLabel">End offcanvas</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
            </div>
            <div class="mt-3">
              <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">
                Close
              </button>
            </div>
          </div>
        </div>
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
          <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasTopLabel">Top offcanvas</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
            </div>
            <div class="mt-3">
              <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">
                Close
              </button>
            </div>
          </div>
        </div>
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
          <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasBottomLabel">Bottom offcanvas</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
            </div>
            <div class="mt-3">
              <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer footer-transparent d-print-none">
      <div class="container-xl">
        <div class="row text-center align-items-center flex-row-reverse">
          <div class="col-lg-auto ms-lg-auto">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary" rel="noopener">Documentation</a></li>
              <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
              <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
              <li class="list-inline-item">
                <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                  <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                  Sponsor
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-lg-auto mt-3 mt-lg-0">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item">
                Copyright &copy; 2023
                <a href="." class="link-secondary">Tabler</a>.
                All rights reserved.
              </li>
              <li class="list-inline-item">
                <a href="./changelog.html" class="link-secondary" rel="noopener">
                  v1.0.0-beta20
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
@endsection

@section('modals')
@endsection

@push('headincludes')
@endpush

@push('scripts')

@endpush
