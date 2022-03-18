    <li class="nav-header">MATRIKS PENILAIAN</li>
    <li class="nav-item">
        <a href="/matriks/101{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/101') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                A. Kondisi Eksternal dan Profil
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/301{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/301') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.1 Visi, Misi, Tujuan dan Strategi
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/302{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/302') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.2 Tata Pamong, Tata Kelola, dan Kerjasama
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/303{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/303') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.3 Mahasiswa
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/304{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/304') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.4 Sumber Daya Manusia </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/305{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/305') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.5 Keuangan, Sarana dan Prasarana </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/306{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/306') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.6 Pendidikan </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/307{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/307') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.7 Penelitian </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/308{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/308') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.8 Pengabdian Kepada Masyarakat </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/309{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/309') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.9 Luaran dan Capaian Tridharma </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/401{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/401') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                D. Suplemen PS Sarjana TI </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/501{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/501') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                E. Analisis dan Penetapan Program </p>
        </a>
    </li>
