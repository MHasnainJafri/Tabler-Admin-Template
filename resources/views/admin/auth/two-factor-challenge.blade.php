@extends('admin.layout.guest')
@section('content')
<div class="page page-center " id="twofa">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark">
          <img src="{{asset('admin/static/logo.svg')}}" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a>
      </div>

      <form method="POST" action="{{ route('two-factor.login') }}">
        @csrf

        <div class="card-body">
          <h2 class="card-title card-title-lg text-center mb-4">{{ __('Two factor Challenge') }}</h2>
          <p class="my-4 text-center">Please confirm your account by entering the authorization code </strong>.</p>
          <div class="my-5">
            <div class="row g-4">
                <input id="code" type="code" class="form-control @error('code') is-invalid @enderror" name="code" required autocomplete="current-code">
                @error('code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
          </div>
          <div class="my-4">
            {{-- <label class="form-check">
              <input type="checkbox" class="form-check-input">
              Dont't ask for codes again on this device
            </label> --}}
          </div>
          <div class="form-footer">
            <div class="btn-list flex-nowrap">
              <a href="{{route('login')}}" class="btn w-100">
                Cancel
              </a>
              <button type="submit" class="btn btn-primary w-100">
                Verify
              </button>
            </div>
          </div>
        </div>
      </form>
      <div class="text-center text-secondary mt-3">
        If you don't have authenticator app then,  <a href="#" onclick="togglecard()">enter recovery code</a>
      </div>
    </div>
  </div>




















  <div class="page page-center " id="recovery" style="display: none">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark">
          <img src="{{asset('admin/static/logo.svg')}}" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a>
      </div>

      <form method="POST" action="{{ route('two-factor.login') }}">
        @csrf
        <div class="card-body">
          <h2 class="card-title card-title-lg text-center mb-4">{{ __('Two factor Recovery Code') }}</h2>
          <p class="my-4 text-center">Please confirm your account by entering the authorization code </strong>.</p>
          <div class="my-5">
            <div class="row g-4">


                <label for="recovery_code" class="col-md-4 col-form-label text-md-right">{{ __('Recovery Code:') }}</label>


                    <input id="recovery_code" type="recovery_code" class="form-control @error('recovery_code') is-invalid @enderror" name="recovery_code" required autocomplete="current-recovery_code">

                    @error('recovery_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror





            </div>
          </div>
          <div class="my-4">
            {{-- <label class="form-check">
              <input type="checkbox" class="form-check-input">
              {{ __('Please enter your recovery code to login.') }}
            </label> --}}
          </div>
          <div class="form-footer">
            <div class="btn-list flex-nowrap">
              <a href="{{route('login')}}" class="btn w-100">
                Cancel
              </a>
              <button type="submit" class="btn btn-primary w-100">
                Verify
              </button>
            </div>
          </div>
        </div>
      </form>
      <div class="text-center text-secondary mt-3">
        If you  have authenticator app then,  <a href="#" onclick="togglecard()">try 2FA code</a>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
<script>
    function togglecard(){
        $('#recovery').toggle();
        $('#twofa').toggle();
    }
    </script>

@endsection
