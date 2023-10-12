<li class="sidebar-item">
    <a class="sidebar-link  {{request()->is('peternak/dashboard') ? 'active' :''}}" href="{{url('peternak/dashboard')}}" aria-expanded="false">
        <span>
            <i class="ti ti-layout-dashboard"></i>
        </span>
        <span class="hide-menu">Dashboard</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link {{request()->is('peternak/ternak*') ? 'active' :''}}" href="{{url('peternak/ternak')}}" aria-expanded="false">
        <span>
            <i class="ti ti-article"></i>
        </span>
        <span class="hide-menu">Ternak</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link  {{request()->is('peternak/penjualan*') ? 'active' :''}}" href="{{url('peternak/penjualan')}}" aria-expanded="false">
        <span>
            <i class="ti ti-article"></i>
        </span>
        <span class="hide-menu">Penjualan</span>
    </a>
</li>