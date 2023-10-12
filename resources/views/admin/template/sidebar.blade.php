<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="" class="text-nowrap logo-img">
                <img src="{{asset('public/images/dark-logo.svg')}}" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>


                @if(auth()->user()->role == 'peternak')
                @include('peternak.sidebar')
                @else

                <li class="sidebar-item">
                    <a class="sidebar-link  {{request()->is('admin/dashboard') ? 'active' :''}}"
                        href="{{url('admin/dashboard')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link {{request()->is('admin/ternak*') ? 'active' :''}}"
                        href="{{url('admin/ternak')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Ternak</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link  {{request()->is('admin/penjualan*') ? 'active' :''}}"
                        href="{{url('admin/penjualan')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Penjualan</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link  {{request()->is('admin/verifikasi_akun*') ? 'active' :''}}"
                        href="{{url('admin/verifikasi_akun')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Verifikasi Akun</span>
                    </a>
                </li>

                @endif

            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>