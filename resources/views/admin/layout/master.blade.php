<!doctype html>
<html lang="en">
    <head>
  @include('admin.layout.partials.head')
@stack('headincludes')
</head>
  <body >
    <script src="{{asset('admin/dist/js/demo-theme.min.js?1692870487')}}"></script>
    <div class="page">
      <!-- Sidebar -->
     @include('admin.layout.partials.sidebar')
      <!-- Navbar -->
     @include('admin.layout.partials.header')
     @yield('content')
    </div>
    @yield('modals')
@include('admin.layout.partials.Modals.reportModal')

@stack('scripts')

   @include('admin.layout.partials.footer')


  </body>
</html>
