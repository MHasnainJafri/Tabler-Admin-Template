@extends('admin.layout.guest')
@section('content')



<div class="page page-center">
  <div class="container container-tight py-4">
    <div class="text-center mb-4">
      <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{asset('admin/static/logo.svg')}}" height="36" alt=""></a>
    </div>
    <div class="text-center">
      <div class="my-5">
        <h2 class="h1">Verify Your Email Address</h2>

        <p class="fs-h3 text-muted">
          We've sent you a magic link to your email.<br />
          Please click the link to confirm your address.
        </p>

      </div>
      <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
        @csrf
        <div class="text-center text-muted mt-3">
            Can't see the email? Please check the spam folder.<br />
            Wrong email? Please
             <a type="submit" href="#">re-enter your address</a>.
          </div>
    </form>

    </div>
  </div>
</div>

  @endsection
