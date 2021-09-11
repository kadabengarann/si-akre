<li class="nav-header">ADMIN</li>
<li class="nav-item">
    <a href="/"
        class="nav-link {{ request()->is('h') ? 'active' : '' }} {{ request()->is('h') ? 'nav-gray' : '' }}">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>
            Data IAPS Prodi
        </p>
    </a>
</li>
<li class="nav-item {{ request()->is('lkps/*/0*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/0*') ? 'active' : '' }}">
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
    </ul>
</li>
