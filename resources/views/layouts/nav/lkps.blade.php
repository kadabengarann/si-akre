<li class="nav-header">LKPS</li>
<li class="nav-item {{ request()->is('lkps/*/1*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/1*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>1. Identitas Pengusul
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/101" class="nav-link {{ request()->is('lkps/*/101') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Identitas Pengusul</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/102" class="nav-link {{ request()->is('lkps/*/102') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Program Studi di UPPS</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-header">KRITERIA KINERJA</li>
<li class="nav-item {{ request()->is('lkps/*/2*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/2*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>
            2. Tata Pamong, Tata Kelola, dan Kerjasama
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/211" class="nav-link {{ request()->is('lkps/*/21*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>a. Kerjasama</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/3*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/3*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>
            3. Mahasiswa
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/311" class="nav-link {{ request()->is('lkps/*/31*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>a. Jumlah Calon Mahasiswa Baru</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/321" class="nav-link {{ request()->is('lkps/*/32*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>b. Layanan dan Kualitas Layanan Kepada mahasiswa</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/331" class="nav-link {{ request()->is('lkps/*/33*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>c. Kegiatan Mahasiswa </p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/4*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/4*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>
            4. Sumber Daya Manusia
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/411" class="nav-link {{ request()->is('lkps/*/411') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>4. a</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/412" class="nav-link {{ request()->is('lkps/*/412') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>4. b</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/413" class="nav-link {{ request()->is('lkps/*/413') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>4. c</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/414" class="nav-link {{ request()->is('lkps/*/414') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>4. d</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/415" class="nav-link {{ request()->is('lkps/*/415') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>4. e</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/416" class="nav-link {{ request()->is('lkps/*/416') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>4. f</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/417" class="nav-link {{ request()->is('lkps/*/417') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>4. g</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/418" class="nav-link {{ request()->is('lkps/*/418') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>4. h</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/5*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/5*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>5. Keuangan, Sarana, dan Prasarana
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/511" class="nav-link {{ request()->is('lkps/*/511') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>5. a</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/512" class="nav-link {{ request()->is('lkps/*/512') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>5. b</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/513" class="nav-link {{ request()->is('lkps/*/513') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>5. c</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/514" class="nav-link {{ request()->is('lkps/*/514') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>5. d</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/515" class="nav-link {{ request()->is('lkps/*/515') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>5. e</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/516" class="nav-link {{ request()->is('lkps/*/516') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>5. f</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/517" class="nav-link {{ request()->is('lkps/*/517') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>5. g</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/518" class="nav-link {{ request()->is('lkps/*/518') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>5. h</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/6*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/6*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>6. Pendidikan
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/611" class="nav-link {{ request()->is('lkps/*/611') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>6. a</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/612" class="nav-link {{ request()->is('lkps/*/612') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>6. b</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/613" class="nav-link {{ request()->is('lkps/*/613') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>6. c</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/614" class="nav-link {{ request()->is('lkps/*/614') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>6. e</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/615" class="nav-link {{ request()->is('lkps/*/615') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>6. f</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/616" class="nav-link {{ request()->is('lkps/*/616') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>6. g</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/617" class="nav-link {{ request()->is('lkps/*/617') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>6. h</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/618" class="nav-link {{ request()->is('lkps/*/618') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>6. i</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/7*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/7*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>7. Penelitian
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/711" class="nav-link {{ request()->is('lkps/*/711') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>7. a</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/8*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/8*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>8. Pengabdian kepada Masyarakat (PkM)
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/811" class="nav-link {{ request()->is('lkps/*/811') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>8. a</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/9*') ? 'menu-open' : '' }}  mb-5">
    <a href="" class="nav-link {{ request()->is('lkps/*/9*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>
            9. Luaran dan Capaian Tridharma
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/911" class="nav-link {{ request()->is('lkps/*/911') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>9. a</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/912" class="nav-link {{ request()->is('lkps/*/912') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>9. b</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/913" class="nav-link {{ request()->is('lkps/*/913') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>9. c</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/914" class="nav-link {{ request()->is('lkps/*/914') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>9. d</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/915" class="nav-link {{ request()->is('lkps/*/915') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>9. e</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/916" class="nav-link {{ request()->is('lkps/*/916') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>9. f</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/917" class="nav-link {{ request()->is('lkps/*/917') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>9. g</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/918" class="nav-link {{ request()->is('lkps/*/918') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>9. h</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/919" class="nav-link {{ request()->is('lkps/*/919') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>9. i</p>
            </a>
        </li>
    </ul>
</li>
