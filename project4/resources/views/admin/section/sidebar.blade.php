<nav class="sb-sidenav accordion sb-sidenav" id="sidenavAccordion" style="background-color: rgb(206, 199, 199)">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link mt-2" href="{{ url('admin/dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            {{-- <a class="nav-link mt-2" href="{{ url('admin/surat-masuk') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-envelope-open"></i></div>
                Upload Surat Masuk
            </a>
            <a class="nav-link mt-2" href="{{ url('admin/surat-keluar') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                Upload Surat Keluar
            </a> --}}
            <a class="nav-link mt-2" href="{{ url('admin/upload') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-upload"></i></div>
                Upload Ragulasi
            </a>
            {{-- <a class="nav-link mt-2" href="{{ url('admin/perubahan') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-upload"></i></div>
                Upload Perubahan
            </a> --}}
            <a class="nav-link mt-2" href="{{ url('admin/user') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                user
            </a>
            <a class="nav-link mt-2" href="{{ url('logout') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                Logout
            </a>



        </div>
    </div>
    <div class="sb-sidenav-footer" style="background-color: rgb(0, 0, 0)">
        <div class="small" style="color: white">Logged in as:</div>
        <P style="color: white">ADMIN|REGULASI</P>
    </div>
</nav>
