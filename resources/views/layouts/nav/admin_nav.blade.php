<li class="nav-header">ADMIN</li>
<li class="nav-item">
    <a href="/admin/iaps"
        class="nav-link {{ request()->is('admin/iaps*') ? 'active' : '' }} {{ request()->is('admin/iaps*') ? 'nav-gray' : '' }}">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>
            Data IAPS Prodi
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="/audit-log"
        class="nav-link {{ request()->is('audit-log*') ? 'active' : '' }} {{ request()->is('audit-log*') ? 'nav-gray' : '' }}">
        <i class="nav-icon fas fa-history"></i>
        <p>
            Log
        </p>
    </a>
</li>
<li class="nav-item {{ request()->is('prodi*') || request()->is('user*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('prodi*') || request()->is('user*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cog"></i>
        <p>Pengaturan
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('lkps/*/001') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>User</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('lkps/*/002') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/prodi" class="nav-link {{ request()->is('prodi*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Prodi</p>
            </a>
        </li>
    </ul>
</li>
