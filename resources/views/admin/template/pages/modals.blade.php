@extends('admin.layout.master')
@section('content')

<div class="page-wrapper">
  <!-- Page header -->
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Modals
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
          <div class="btn-list">
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-simple">
              Simple modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-large">
              Large modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-small">
              Small modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-full-width">
              Full width modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-scrollable">
              Scrollable modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-report">
              Modal with form
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-success">
              Success modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-danger">
              Danger modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-team">
              Modal with simple form
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  @include('admin.layout.partials.modals')



@include('admin.layout.partials.footer')
  </div>
  @endsection
