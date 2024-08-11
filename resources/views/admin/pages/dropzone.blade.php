@extends('admin.layout.master')

@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Dropzone
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="row row-cards">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Basic Usage</h3>
                <form class="dropzone dz-clickable" id="dropzone-default" action="./" autocomplete="off" novalidate="">

                <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div></form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Multiple File Upload</h3>
                <form class="dropzone dz-clickable" id="dropzone-multiple" action="./" autocomplete="off" novalidate="">

                <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div></form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Custom Dropzone</h3>
                <form class="dropzone dz-clickable" id="dropzone-custom" action="./" autocomplete="off" novalidate="">

                  <div class="dz-message">
                    <h3 class="dropzone-msg-title">Your text here</h3>
                    <span class="dropzone-msg-desc">Your custom description here</span>
                  </div>
                </form>
              </div>
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
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
                  Sponsor
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-lg-auto mt-3 mt-lg-0">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item">
                Copyright © 2023
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



@push('headincludes')
<link href="{{asset('admin/dist/libs/dropzone/dist/dropzone.css?1692870487')}}" rel="stylesheet"/>

@endpush


  @push('scripts')
  <script src="{{asset('admin/dist/libs/dropzone/dist/dropzone-min.js?1692870487')}}" defer></script>
  <!-- Tabler Core -->
  <script src="{{asset('admin/dist/js/tabler.min.js?1692870487')}}" defer></script>
  <script src="{{asset('admin/dist/js/demo.min.js?1692870487')}}" defer></script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      new Dropzone("#dropzone-default")
    })
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      new Dropzone("#dropzone-multiple")
    })
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      new Dropzone("#dropzone-custom")
    })
  </script>

  @endpush

