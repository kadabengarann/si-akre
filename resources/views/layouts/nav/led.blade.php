    <li class="nav-header">LAPORAN EVALUASI DIRI</li>

    <li class="nav-item {{ request()->is('led/1*') ? 'menu-open' : '' }}"> <a href=""
            class="nav-link {{ request()->is('led/1*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                BAB I. Pendahuluan
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/led/111" class="nav-link {{ request()->is('led/11*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>A. Dasar Penyusunan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/led/121" class="nav-link {{ request()->is('led/12*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>B. Tim Penyusun dan Tanggungjawabnya
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/led/131" class="nav-link {{ request()->is('led/13*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>C. Mekanisme Kerja Penyusunan Evaluasi Diri
                    </p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item {{ request()->is('led/2*') ? 'menu-open' : '' }}"> <a href=""
            class="nav-link {{ request()->is('led/2*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                BAB II. Laporan Evaluasi Diri
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/led/211" class="nav-link {{ request()->is('led/21*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>A. Kondisi Eksternal</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/led/221" class="nav-link {{ request()->is('led/22*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>B. Profil Unit Pengelola Program Studi
                    </p>
                </a>
            </li>
            <li class="nav-item {{ request()->is('led/23*') ? 'menu-open' : '' }}">
                <a href="" class="nav-link {{ request()->is('led/23*') ? 'active' : '' }}"> <i
                        class="far fa-circle nav-icon"></i>
                    <p>C. Kriteria
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/led/231" class="nav-link {{ request()->is('led/231') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>C.1. Visi, misi, tujuan dan strategi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/232" class="nav-link {{ request()->is('led/232') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>C.2. Tata kelola, tata pamong, dan kerjasama
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
