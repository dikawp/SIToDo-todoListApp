@php
    $currentRouteName = Route::currentRouteName();
@endphp

@vite(['resources/sass/sidebar.scss', 'resources/js/app.js'])
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="" class="">
              <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <h5 class="mt-3">Home</h5>
              <li class="sidebar-item">
                <a class="sidebar-link nav-link @if($currentRouteName == 'dashboard') text-primary @endif" href="{{ route ('dashboard') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
                <h5 class="mt-3">Task Management</h5>
              <li class="sidebar-item">
                <a class="sidebar-link nav-link @if($currentRouteName == 'workspace') text-primary @endif" href="{{ route ('workspace') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-article"></i>
                  </span>
                  <span class="hide-menu">Workspaces</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link nav-link @if($currentRouteName == 'task') text-primary @endif" href="{{ route ('task') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-alert-circle"></i>
                  </span>
                  <span class="hide-menu">Tasks</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <!--  Sidebar End -->
      <!--  Main wrapper -->
      <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
          <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
              <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                  <i class="ti ti-menu-2"></i>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                  <i class="ti ti-bell-ringing"></i>
                  <div class="notification bg-primary rounded-circle"></div>
                </a>
              </li> --}}
            </ul>
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                    {{ Auth::user()->name }}
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                        aria-expanded="false">
                            <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                        <div class="message-body">
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="ti ti-mail fs-6"></i>
                                <p class="mb-0 fs-3">My Account</p>
                            </a>
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="ti ti-list-check fs-6"></i>
                                <p class="mb-0 fs-3">My Task</p>
                            </a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  class="btn btn-outline-primary mx-3 mt-2 d-block">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        </div>
                    </li>
                </ul>
            </div>
          </nav>
        </header>
        <!--  Header End -->
        <div class="container-fluid">
            @yield('content')
            @stack('scripts')
        </div>
      </div>
    </div>

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
  </body>




{{-- <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary z-3">
                <i class="bi bi-arrow-left-right fs-5"></i>
            </button>
        </div>
        <div class="p-4">
            <a href="{{ route ('dashboard') }}" class="navbar-brand me-5"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt=""></a>
            <ul class="list-unstyled components mt-5">

                <li>
                    <a href="{{ route ('dashboard') }}" class="nav-link @if($currentRouteName == 'dashboard') text-primary @endif"><i class="bi bi-speedometer"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{ route ('workspace') }}" class="nav-link @if($currentRouteName == 'workspace') text-primary @endif"><i class="bi bi-person-workspace"></i> Workspace</a>
                </li>
                <li>
                    <a href="{{ route ('task') }}" class="nav-link @if($currentRouteName == 'task') text-primary @endif"><i class="bi bi-person-lines-fill"></i> Task</a>
                </li>
                <li>
                    <a class="text-danger text-decoration-none" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-left"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="px-4">
        <nav class="navbar bg-light border-bottom">
            <div class="container-fluid">
                <p></p>
                <a href="" class="fs-5 py-2 nav-link text-warning @if($currentRouteName == 'profile') text-white @endif">
                    <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                </a>
            </div>
          </nav>

    </div>
</div> --}}



