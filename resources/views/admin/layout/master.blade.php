<!doctype html>
<html lang="en">

<head>
    @include('admin.layout.partials.head')
    @stack('headincludes')
</head>

<body>
    <script src="{{ asset('admin/dist/js/demo-theme.min.js?1692870487') }}"></script>
    <div class="page">
        <!-- Sidebar -->
        @include('admin.layout.partials.sidebar')
        <!-- Navbar -->
        @include('admin.layout.partials.header')
        @yield('content')
    </div>




<!-- Progress Bar -->
<div id="progress-container">
    <div id="progress-bar"></div>
</div>







    @yield('modals')
    @include('admin.layout.partials.Modals.reportModal')

    @stack('scripts')

    @include('admin.layout.partials.footer')
    @yield('js')











	<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>

    <script src="{{ asset('/admin/js/customAjax.js') }}"></script>
    <script src="{{ asset('/admin/js/customDataTable.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script>
        $(document).ready(function() {
                    // Set up CSRF token for all jQuery AJAX requests
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                    });
                    @if (session('success'))
                        Swal.fire({
                            title: "Success",
                            text: "{!! addslashes(session('success')) !!}",
                            icon: "success"
                        });
                    @elseif (session('error'))
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "{!! addslashes(session('error')) !!}"
                        });
                    @endif
    </script>





    @auth
        {{-- <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
            <script>

              // Enable pusher logging - don't include this in production
              Pusher.logToConsole = true;

              var pusher = new Pusher('52f7a56faa61f70e6494', {
                cluster: 'ap2',
                authEndpoint: '/broadcasting/auth',
              });

              var channel = pusher.subscribe('private-chatify.'+"{{auth()->id()}}");

            channel.bind('messaging', function(data) {
               Swal.fire('you have recieved a new message!')
            }); --}}
        </script>
    @endauth







{{-- Custom script  --}}
<script src="{{ asset('/admin/js/custom.js') }}"></script>


</body>

</html>
