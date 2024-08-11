@extends('admin.layout.guest')
@section('content')



<div class="page page-center">
  <div class="container container-tight py-4">
    <div class="text-center mb-4">
      <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
    </div>
    <div class="text-center">
      <div class="my-5">
        <h2 class="h1">Check your inbox</h2>
        <p class="fs-h3 text-muted">
          We've sent you a magic link to <strong>support@tabler.io</strong>.<br />
          Please click the link to confirm your address.
        </p>
      </div>
      <div class="text-center text-muted mt-3">
        Can't see the email? Please check the spam folder.<br />
        Wrong email? Please <a href="#">re-enter your address</a>.
      </div>
    </div>
  </div>
</div>

  @endsection
