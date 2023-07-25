<ul class="menu">
    <li class="sidebar-title">Menu</li>
    <!-- Authentication Links -->
    @guest
        @if (Route::has('login'))
            <li class="sidebar-item">
                <a href="{{ route('login') }}" class='sidebar-link'>
                    <i class="bi bi-door-open"></i>
                    <span>Login</span>
                </a>
            </li>
        @endif
    @else
        <li class="sidebar-item">
            <a href="/" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item {{ Auth()->user()->isAdmin == 0 ? 'd-none' : '' }}">
            <a href="/user" class='sidebar-link'>
                <i class="bi bi-people"></i>
                <span>User</span>
            </a>
        </li>
        <li class="sidebar-item has-sub {{ Auth()->user()->isAdmin == 1 ? 'd-none' : '' }}">
            <a href="#" class="sidebar-link">
                <i class="bi bi-file-text"></i>
                <span>Arsip</span>
            </a>
            <ul class="submenu ">
                {{-- <li class="submenu-item ">
                    <a href="/category">Jenis Arsip</a>
                </li> --}}
                <li class="submenu-item ">
                    <a href="{{ route('type.index') }}">Sifat Surat</a>
                </li>
                <li class="submenu-item ">
                    <a href="/document">Data Arsip</a>
                </li>
            </ul>
        </li>


        <li class="sidebar-item {{ Auth()->user()->isAdmin == 0 ? 'd-none' : '' }}">
            <a href="/backup" class='sidebar-link'>
                <i class="bi bi-layer-backward"></i>
                <span>Backup Dokumen</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a href="/reportDocument" class='sidebar-link'>
                <i class="bi bi-calendar2"></i>
                <span>Laporan</span>
            </a>
        </li>


        {{-- <li class="sidebar-item  has-sub">
            <a href="#" class="sidebar-link">
                <i class="bi bi-calendar2"></i>
                <span>Laporan</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="/reportUser">Akun</a>
                </li>
                <li class="submenu-item ">
                    <a href="/reportDocument">Dokumen</a>
                </li>
            </ul>
        </li> --}}

        <li class="sidebar-item active">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
                class='sidebar-link'>
                <i class="bi bi-door-closed"></i> <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    @endguest
</ul>
</ul>
