<li class="nav-header">LKPS</li>
<li class="nav-item {{ request()->is('lkps/*/0*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/0*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>Identitas Pengusul
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/001" class="nav-link {{ request()->is('lkps/*/001') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Identitas Pengusul</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/002" class="nav-link {{ request()->is('lkps/*/002') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Program Studi di UPPS</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-header">KRITERIA KINERJA</li>
<li class="nav-item {{ request()->is('lkps/*/1*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/1*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>
            2. Tata Pamong, Tata Kelola, dan Kerjasama
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/111" class="nav-link {{ request()->is('lkps/*/11*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>a. Kerjasama</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/2*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/2*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>
            3. Mahasiswa
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/211" class="nav-link {{ request()->is('lkps/*/21*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>a. Jumlah Calon Mahasiswa Baru</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/221" class="nav-link {{ request()->is('lkps/*/22*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>b. Layanan dan Kualitas Layanan Kepada mahasiswa</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/231" class="nav-link {{ request()->is('lkps/*/23*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>c. Kegiatan Mahasiswa </p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/3*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/3*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>
            3. Sumber Daya Manusia
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ request()->is('lkps/*/31*') ? 'menu-open' : '' }}">
            <a href="" class="nav-link {{ request()->is('lkps/*/31*') ? 'nav-gray' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    a. Profil Dosen
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/lkps/view/311" class="nav-link {{ request()->is('lkps/*/311') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>3.a.1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/312" class="nav-link {{ request()->is('lkps/*/312') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>3.a.2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/313" class="nav-link {{ request()->is('lkps/*/313') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>3.a.3</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/314" class="nav-link {{ request()->is('lkps/*/314') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>3.a.4</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/315" class="nav-link {{ request()->is('lkps/*/315') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>3.a.5</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item {{ request()->is('lkps/*/32*') ? 'menu-open' : '' }}">
            <a href="" class="nav-link {{ request()->is('lkps/*/32*') ? 'nav-gray' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    b. Kinerja Dosen
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/lkps/view/321" class="nav-link {{ request()->is('lkps/*/321') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>3.b.1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/322" class="nav-link {{ request()->is('lkps/*/322') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>3.b.2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/323" class="nav-link {{ request()->is('lkps/*/323') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>3.b.3</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/324" class="nav-link {{ request()->is('lkps/*/324') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>3.b.4</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/325" class="nav-link {{ request()->is('lkps/*/325') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>3.b.5</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/326" class="nav-link {{ request()->is('lkps/*/326') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>3.b.6</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/327" class="nav-link {{ request()->is('lkps/*/327') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>3.b.7</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/4*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/4*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>4. Keuangan, Sarana, dan Prasarana
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/411" class="nav-link {{ request()->is('lkps/*/41*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>a. Penggunaan Dana</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/5*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/5*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>5. Pendidikan
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/511" class="nav-link {{ request()->is('lkps/*/51*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>a. Kurikulum</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/521" class="nav-link {{ request()->is('lkps/*/52*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>b. Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/531" class="nav-link {{ request()->is('lkps/*/53*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>c. Kepuasan Mahasiswa</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/6*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/6*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>6. Penelitian
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/611" class="nav-link {{ request()->is('lkps/*/61*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>a. Penelitian DTPS yang Melibatkan Mahasiswa</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/621" class="nav-link {{ request()->is('lkps/*/62*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>b Penelitian DTPS yang menjadi rujukan tema tesis/disertasi</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/7*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/7*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>7. Pengabdian kepada Masyarakat (PkM)
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/711" class="nav-link {{ request()->is('lkps/*/71*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>PkM DTPS yang melibatkan mahasiswa</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ request()->is('lkps/*/8*') ? 'menu-open' : '' }}  mb-5">
    <a href="" class="nav-link {{ request()->is('lkps/*/8*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>
            8. Luaran dan Capaian Tridharma
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/lkps/view/811" class="nav-link {{ request()->is('lkps/*/81*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>a. Capaian Pembelajaran</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/821" class="nav-link {{ request()->is('lkps/*/82*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>b. Prestasi Mahasiswa</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lkps/view/831" class="nav-link {{ request()->is('lkps/*/83*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>c. Efektivitas dan Produktivitas Pendidikan</p>
            </a>
        </li>

        <li class="nav-item {{ request()->is('lkps/*/84*') ? 'menu-open' : '' }}">
            <a href="" class="nav-link {{ request()->is('lkps/*/84*') ? 'nav-gray' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    d. Daya Saing Lulusan
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/lkps/view/841" class="nav-link {{ request()->is('lkps/*/841') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>8.d.1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/842" class="nav-link {{ request()->is('lkps/*/842') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>8.d.2</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item {{ request()->is('lkps/*/85*') ? 'menu-open' : '' }}">
            <a href="" class="nav-link {{ request()->is('lkps/*/85*') ? 'nav-gray' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    e. Kinerja Lulusan
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/lkps/view/851" class="nav-link {{ request()->is('lkps/*/851') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>8.e.1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/852" class="nav-link {{ request()->is('lkps/*/852') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>8.e.2</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item {{ request()->is('lkps/*/86*') ? 'menu-open' : '' }}">
            <a href="" class="nav-link {{ request()->is('lkps/*/86*') ? 'nav-gray' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    f. Luaran Penelitian dan PkM Mahasiswa
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/lkps/view/861" class="nav-link {{ request()->is('lkps/*/861') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>8.f.1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/862" class="nav-link {{ request()->is('lkps/*/862') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>8.f.2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/863" class="nav-link {{ request()->is('lkps/*/863') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>8.f.3</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lkps/view/864" class="nav-link {{ request()->is('lkps/*/864') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>8.f.4</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>
