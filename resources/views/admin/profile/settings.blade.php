@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Account Settings
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="row g-0">
                    <div class="col-12 col-md-3 border-end">
                        <div class="card-body">
                            <h4 class="subheader">Business settings</h4>
                            <div class="list-group list-group-transparent">
                                <a href="./settings.html"
                                    class="list-group-item list-group-item-action d-flex align-items-center active">My
                                    Account</a>
                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">My
                                    Notifications</a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">Connected
                                    Apps</a>
                                <a href="./settings-plan.html"
                                    class="list-group-item list-group-item-action d-flex align-items-center">Plans</a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">Billing &
                                    Invoices</a>
                            </div>
                            <h4 class="subheader mt-4">Experience</h4>
                            <div class="list-group list-group-transparent">
                                <a href="#" class="list-group-item list-group-item-action">Give Feedback</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 d-flex flex-column">
                        <div class="card-body">
                            <h2 class="mb-4">My Account</h2>
                            <h3 class="card-title">Profile Details</h3>
                            <div class="row align-items-center">
                                <div class="col-auto"><span class="avatar avatar-xl"
                                        style="background-image: url(./static/avatars/000m.jpg)"></span>
                                </div>
                                <div class="col-auto"><a href="#" class="btn">
                                        Change avatar
                                    </a></div>
                                <div class="col-auto"><a href="#" class="btn btn-ghost-danger">
                                        Delete avatar
                                    </a></div>
                            </div>
                            <h3 class="card-title mt-4">Business Profile</h3>
                            <div class="row g-3">
                                <div class="col-md">
                                    <div class="form-label">Name</div>
                                    <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control" value="Tabler">
                                </div>
                                <div class="col-md">
                                    <div class="form-label">Email</div>
                                    <input type="text" name="email" value="{{auth()->user()->email}}" class="form-control" value="560afc32">
                                </div>
                                {{-- <div class="col-md">
                                    <div class="form-label">Location</div>
                                    <input type="text" class="form-control" value="Peimei, China">
                                </div> --}}
                            </div>
                            <h3 class="card-title mt-4">Email</h3>
                            <p class="card-subtitle">This contact will be shown to others publicly, so choose it
                                carefully.</p>
                            <div>
                                <div class="row g-2">
                                    <div class="col-auto">
                                        <input type="text" class="form-control w-auto"
                                            value="paweluna@howstuffworks.com">
                                    </div>
                                    <div class="col-auto"><a href="#" class="btn">
                                            Change
                                        </a></div>
                                </div>
                            </div>
                            <h3 class="card-title mt-4">Password</h3>
                            <p class="card-subtitle">You can set a permanent password if you don't want to use temporary
                                login codes.</p>
                            <div>
                                <a href="#" class="btn">
                                    Set new password
                                </a>
                            </div>
                            <h3 class="card-title mt-4">Public profile</h3>
                            <p class="card-subtitle">Making your profile public means that anyone on the Dashkit network
                                will be able to find
                                you.</p>

                                <h3 class="card-title mt-4">2 Factor Authentication</h3>

                            <div>
                                <label class="form-check form-switch form-switch-lg">
                                    <input class="form-check-input" type="checkbox"
                                    @if (auth()->user()->two_factor_secret)
                                    @checked(true)
                                    @endif
                                    onchange="document.getElementById('2faform').submit()"
                                    >
                                    <span class="form-check-label form-check-label-on">

                                        2FA enabled


                                    </span>
                                    <span class="form-check-label form-check-label-off">

                                        2FA disabled

                                    </span>
                                </label>
                            </div>
















                                                @if (session('status') == "two-factor-authentication-disabled")
                                                    <div class="alert alert-success" role="alert">
                                                        Two factor Authentication has been disabled.
                                                    </div>
                                                @endif

                                                @if (session('status') == "two-factor-authentication-enabled")
                                                    <div class="alert alert-success" role="alert">
                                                        Two factor Authentication has been enabled.
                                                    </div>
                                                @endif


                                                <form method="POST" action="/user/two-factor-authentication" id="2faform">
                                                    @csrf

                                                    @if (auth()->user()->two_factor_secret)
                                                        @method('DElETE')

                                                        <div class="pb-5">
                                                            {!! auth()->user()->twoFactorQrCodeSvg() !!}
                                                        </div>









                                                        <div class="col-12">
                                                            <div class="card">
                                                              <div class="card-header">
                                                                <h3 class="card-title">Recovery Codes</h3>
                                                              </div>
                                                              <div class="list-group list-group-flush">
                                                                {{-- <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                                                  The current link item
                                                                </a> --}}
                                                                @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)

                                                                <a href="javascript:void(0);" class="list-group-item list-group-item-action" onclick="copyCode('{{ $code }}')">{{ $code }}</a>

                                                            @endforeach

                                                              </div>
                                                            </div>
                                                          </div>








                                                    @endif
                                                </form>
                                            </div>







                        </div>
                        <div class="card-footer bg-transparent mt-auto">
                            <div class="btn-list justify-content-end">
                                <a href="#" class="btn">
                                    Cancel
                                </a>
                                <a href="#" class="btn btn-primary">
                                    Submit
                                </a>
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
@section('js')
<script>
    function copyCode(code) {
        var tempInput = document.createElement('input');
        tempInput.value = code;
        document.body.appendChild(tempInput);

        tempInput.select();
        document.execCommand('copy');

        document.body.removeChild(tempInput);


    }
</script>
@endsection
