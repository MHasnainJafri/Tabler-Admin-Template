@extends('admin.layout.master')

@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Tabs
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="row row-cards">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                  <li class="nav-item">
                    <a href="#tabs-home-1" class="nav-link active" data-bs-toggle="tab">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-profile-1" class="nav-link" data-bs-toggle="tab">Profile</a>
                  </li>
                  <li class="nav-item ms-auto">
                    <a href="#tabs-settings-1" class="nav-link" title="Settings" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/settings -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active show" id="tabs-home-1">
                    <h4>Home tab</h4>
                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                  </div>
                  <div class="tab-pane" id="tabs-profile-1">
                    <h4>Profile tab</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                  </div>
                  <div class="tab-pane" id="tabs-settings-1">
                    <h4>Settings tab</h4>
                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs flex-row-reverse" data-bs-toggle="tabs">
                  <li class="nav-item">
                    <a href="#tabs-home-2" class="nav-link active" data-bs-toggle="tab">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-profile-2" class="nav-link" data-bs-toggle="tab">Profile</a>
                  </li>
                  <li class="nav-item me-auto">
                    <a href="#tabs-settings-2" class="nav-link" title="Settings" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/settings -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active show" id="tabs-home-2">
                    <h4>Home tab</h4>
                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                  </div>
                  <div class="tab-pane" id="tabs-profile-2">
                    <h4>Profile tab</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                  </div>
                  <div class="tab-pane" id="tabs-settings-2">
                    <h4>Settings tab</h4>
                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                  <li class="nav-item">
                    <a href="#tabs-home-3" class="nav-link active" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                      Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-profile-3" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                      Profile</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active show" id="tabs-home-3">
                    <h4>Home tab</h4>
                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                  </div>
                  <div class="tab-pane" id="tabs-profile-3">
                    <h4>Profile tab</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                  <li class="nav-item">
                    <a href="#tabs-home-4" class="nav-link active" data-bs-toggle="tab">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-profile-4" class="nav-link" data-bs-toggle="tab">Profile</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">
                        Action
                      </a>
                      <a class="dropdown-item" href="#">
                        Another action
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active show" id="tabs-home-4">
                    <h4>Home tab</h4>
                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                  </div>
                  <div class="tab-pane" id="tabs-profile-4">
                    <h4>Profile tab</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                  <li class="nav-item">
                    <a href="#tabs-home-5" class="nav-link active" data-bs-toggle="tab">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-profile-5" class="nav-link" data-bs-toggle="tab">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-activity-5" class="nav-link" data-bs-toggle="tab">Activity</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active show" id="tabs-home-5">
                    <h4>Home tab</h4>
                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                  </div>
                  <div class="tab-pane" id="tabs-profile-5">
                    <h4>Profile tab</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                  </div>
                  <div class="tab-pane" id="tabs-activity-5">
                    <h4>Activity tab</h4>
                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                  <li class="nav-item">
                    <a href="#tabs-home-6" class="nav-link active" data-bs-toggle="tab">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-profile-6" class="nav-link" data-bs-toggle="tab">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-activity-6" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active show" id="tabs-home-6">
                    <h4>Home tab</h4>
                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                  </div>
                  <div class="tab-pane" id="tabs-profile-6">
                    <h4>Profile tab</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                  <li class="nav-item">
                    <a href="#tabs-home-7" class="nav-link active" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                      Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-profile-7" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                      Profile</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-activity-7" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12h4l3 8l4 -16l3 8h4" /></svg>
                      Activity</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active show" id="tabs-home-7">
                    <h4>Home tab</h4>
                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                  </div>
                  <div class="tab-pane" id="tabs-profile-7">
                    <h4>Profile tab</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                  </div>
                  <div class="tab-pane" id="tabs-activity-7">
                    <h4>Activity tab</h4>
                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                  <li class="nav-item">
                    <a href="#tabs-home-8" class="nav-link active" data-bs-toggle="tab">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-profile-8" class="nav-link" data-bs-toggle="tab">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-activity-8" class="nav-link" data-bs-toggle="tab">Activity</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="tabs-home-8">
                    <h4>Home tab</h4>
                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                  </div>
                  <div class="tab-pane fade" id="tabs-profile-8">
                    <h4>Profile tab</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                  </div>
                  <div class="tab-pane fade" id="tabs-activity-8">
                    <h4>Activity tab</h4>
                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                  </div>
                </div>
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
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                  Sponsor
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-lg-auto mt-3 mt-lg-0">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item">
                Copyright &copy; 2023
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

@section('modals')
@endsection

@push('headincludes')
@endpush

@push('scripts')

@endpush
