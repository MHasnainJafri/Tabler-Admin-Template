@extends('admin.layout.guest')
@section('content')


<div class="page page-center">
  <div class="container container-tight py-4">
    <div class="text-center mb-4">
      <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
    </div>
    <div class="card card-md">
      <div class="card-body">
        <h2 class="mb-3">Your free trial period has expired!</h2>
        <p class="text-muted mb-4">
          If you want to continue to benefit from Tabler, it's time to upgrade your plan.
        </p>
        <ul class="list-unstyled space-y">
          <li class="row g-2">
            <span class="col-auto"><!-- Download SVG icon from http://tabler-icons.io/i/check -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1 text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
            </span>
            <span class="col">
              <strong class="d-block">Over 800+ productions</strong>
              <span class="d-block text-muted">Unlimited movies, TV shows and more.</span>
            </span>
          </li>
          <li class="row g-2">
            <span class="col-auto"><!-- Download SVG icon from http://tabler-icons.io/i/check -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1 text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
            </span>
            <span class="col">
              <strong class="d-block">Watch everywhere</strong>
              <span class="d-block text-muted">Watch on smart TVs, PlayStation, Xbox, Apple TV, Blu-ray players and more.</span>
            </span>
          </li>
          <li class="row g-2">
            <span class="col-auto"><!-- Download SVG icon from http://tabler-icons.io/i/check -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1 text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
            </span>
            <span class="col">
              <strong class="d-block">Personalize</strong>
              <span class="d-block text-muted">Choose your own style, watch what you like.</span>
            </span>
          </li>
        </ul>
        <div class="my-4">
          <a href="#" class="btn btn-primary w-100">
            Upgrade to a paid plan
          </a>
        </div>
        <p class="text-muted">
          If you need to get a trial extension please feel free to <a href="#">contact us</a>.
        </p>
      </div>
    </div>
  </div>
</div>


  @endsection
