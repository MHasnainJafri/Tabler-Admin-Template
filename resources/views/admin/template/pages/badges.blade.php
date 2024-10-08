@extends('admin.layout.master')
@section('content')







<div class="page-wrapper">
  <!-- Page header -->
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Badges
          </h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Page body -->
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h1>Example heading <span class="badge">New</span></h1>
              <h2>Example heading <span class="badge">New</span></h2>
              <h3>Example heading <span class="badge">New</span></h3>
              <h4>Example heading <span class="badge">New</span></h4>
              <h5>Example heading <span class="badge">New</span></h5>
              <h6>Example heading <span class="badge">New</span></h6>
            </div>
          </div>
        </div>
        <div class="col-8">
          <div class="row row-cards">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="badges-list">
                    <span class="badge bg-blue">Blue</span>
                    <span class="badge bg-azure">Azure</span>
                    <span class="badge bg-indigo">Indigo</span>
                    <span class="badge bg-purple">Purple</span>
                    <span class="badge bg-pink">Pink</span>
                    <span class="badge bg-red">Red</span>
                    <span class="badge bg-orange">Orange</span>
                    <span class="badge bg-yellow">Yellow</span>
                    <span class="badge bg-lime">Lime</span>
                    <span class="badge bg-green">Green</span>
                    <span class="badge bg-teal">Teal</span>
                    <span class="badge bg-cyan">Cyan</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="badges-list">
                    <span class="badge bg-blue-lt">Blue</span>
                    <span class="badge bg-azure-lt">Azure</span>
                    <span class="badge bg-indigo-lt">Indigo</span>
                    <span class="badge bg-purple-lt">Purple</span>
                    <span class="badge bg-pink-lt">Pink</span>
                    <span class="badge bg-red-lt">Red</span>
                    <span class="badge bg-orange-lt">Orange</span>
                    <span class="badge bg-yellow-lt">Yellow</span>
                    <span class="badge bg-lime-lt">Lime</span>
                    <span class="badge bg-green-lt">Green</span>
                    <span class="badge bg-teal-lt">Teal</span>
                    <span class="badge bg-cyan-lt">Cyan</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="badges-list">
                    <span class="badge badge-outline text-blue">Blue</span>
                    <span class="badge badge-outline text-azure">Azure</span>
                    <span class="badge badge-outline text-indigo">Indigo</span>
                    <span class="badge badge-outline text-purple">Purple</span>
                    <span class="badge badge-outline text-pink">Pink</span>
                    <span class="badge badge-outline text-red">Red</span>
                    <span class="badge badge-outline text-orange">Orange</span>
                    <span class="badge badge-outline text-yellow">Yellow</span>
                    <span class="badge badge-outline text-lime">Lime</span>
                    <span class="badge badge-outline text-green">Green</span>
                    <span class="badge badge-outline text-teal">Teal</span>
                    <span class="badge badge-outline text-cyan">Cyan</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="dropdown-menu dropdown-menu-demo dropdown-menu-arrow">
            <a class="dropdown-item" href="#">
              Action
              <span class="badge bg-primary ms-auto">12</span>
            </a>
            <a class="dropdown-item" href="#">
              Another action
              <span class="badge bg-green ms-auto"></span>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-lg-9">
          <div class="row row-cards">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="btn-list">
                    <button class="btn">Blue badge <span class="badge bg-blue ms-2">1</span></button>
                    <button class="btn">Azure badge <span class="badge bg-azure ms-2">2</span></button>
                    <button class="btn">Indigo badge <span class="badge bg-indigo ms-2">3</span></button>
                    <button class="btn">Purple badge <span class="badge bg-purple ms-2">4</span></button>
                    <button class="btn">Pink badge <span class="badge bg-pink ms-2">5</span></button>
                    <button class="btn">Red badge <span class="badge bg-red ms-2">6</span></button>
                    <button class="btn">Orange badge <span class="badge bg-orange ms-2">7</span></button>
                    <button class="btn">Yellow badge <span class="badge bg-yellow ms-2">8</span></button>
                    <button class="btn">Lime badge <span class="badge bg-lime ms-2">9</span></button>
                    <button class="btn">Green badge <span class="badge bg-green ms-2">10</span></button>
                    <button class="btn">Teal badge <span class="badge bg-teal ms-2">11</span></button>
                    <button class="btn">Cyan badge <span class="badge bg-cyan ms-2">12</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="btn-list">
                    <button class="btn position-relative">Blue badge <span class="badge bg-blue badge-notification badge-pill">1</span></button>
                    <button class="btn position-relative">Azure badge <span class="badge bg-azure badge-notification badge-pill">2</span></button>
                    <button class="btn position-relative">Indigo badge <span class="badge bg-indigo badge-notification badge-pill">3</span></button>
                    <button class="btn position-relative">Purple badge <span class="badge bg-purple badge-notification badge-pill">4</span></button>
                    <button class="btn position-relative">Pink badge <span class="badge bg-pink badge-notification badge-pill">5</span></button>
                    <button class="btn position-relative">Red badge <span class="badge bg-red badge-notification badge-pill">6</span></button>
                    <button class="btn position-relative">Orange badge <span class="badge bg-orange badge-notification badge-pill">7</span></button>
                    <button class="btn position-relative">Yellow badge <span class="badge bg-yellow badge-notification badge-pill">8</span></button>
                    <button class="btn position-relative">Lime badge <span class="badge bg-lime badge-notification badge-pill">9</span></button>
                    <button class="btn position-relative">Green badge <span class="badge bg-green badge-notification badge-pill">10</span></button>
                    <button class="btn position-relative">Teal badge <span class="badge bg-teal badge-notification badge-pill">11</span></button>
                    <button class="btn position-relative">Cyan badge <span class="badge bg-cyan badge-notification badge-pill">12</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="btn-list">
                    <button class="btn position-relative">Blue badge <span class="badge bg-blue badge-notification badge-blink"></span></button>
                    <button class="btn position-relative">Azure badge <span class="badge bg-azure badge-notification badge-blink"></span></button>
                    <button class="btn position-relative">Indigo badge <span class="badge bg-indigo badge-notification badge-blink"></span></button>
                    <button class="btn position-relative">Purple badge <span class="badge bg-purple badge-notification badge-blink"></span></button>
                    <button class="btn position-relative">Pink badge <span class="badge bg-pink badge-notification badge-blink"></span></button>
                    <button class="btn position-relative">Red badge <span class="badge bg-red badge-notification badge-blink"></span></button>
                    <button class="btn position-relative">Orange badge <span class="badge bg-orange badge-notification badge-blink"></span></button>
                    <button class="btn position-relative">Yellow badge <span class="badge bg-yellow badge-notification badge-blink"></span></button>
                    <button class="btn position-relative">Lime badge <span class="badge bg-lime badge-notification badge-blink"></span></button>
                    <button class="btn position-relative">Green badge <span class="badge bg-green badge-notification badge-blink"></span></button>
                    <button class="btn position-relative">Teal badge <span class="badge bg-teal badge-notification badge-blink"></span></button>
                    <button class="btn position-relative">Cyan badge <span class="badge bg-cyan badge-notification badge-blink"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@include('admin.layout.partials.footer')
  </div>
  @endsection
