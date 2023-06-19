<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @can('supplier')
                    <a class="nav-link {{ request()->is('/supplier') ? 'text-light' : '' }}" href="/supplier">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard Supplier
                    </a>
                @endcan
                @cannot('supplier')       
                    <a class="nav-link {{ request()->is('/') ? 'text-light' : '' }}" href="/">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">TRANSAKSI</div>
                    {{-- <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                        Tambah Transaksi
                    </a> --}}
                    <a class="nav-link {{ request()->is('/transaksi/pemesanan_barang') ? 'text-light' : '' }}" href="/transaksi/pemesanan_barang">
                        <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                        Pemesanan Barang
                    </a>
                    {{-- <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Riwayat Penjualan
                    </a>
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Riwayat Service
                    </a> --}}
                    <div class="sb-sidenav-menu-heading">DATA & LAPORAN</div>
                    <a class="nav-link {{ request()->is('/data/pelanggan') ? 'text-light' : '' }}" href="/data/pelanggan">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Data Pelanggan
                    </a>
                    <a class="nav-link {{ request()->is('/data/karyawan') ? 'text-light' : '' }}" href="/data/karyawan">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Data Karyawan
                    </a>
                    <a class="nav-link {{ request()->is('/data/barang') ? 'text-light' : '' }}" href="/data/barang">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Data Barang
                    </a>
                    <a class="nav-link {{ request()->is('/data/service') ? 'text-light' : '' }}" href="/data/service">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Data Services
                    </a>
                    @can('admin')
                    <a class="nav-link {{ request()->is('/access') ? 'text-light' : '' }}" href="/access">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Pengguna
                    </a>
                    @endcan
                @endcannot
            </div>
        </div>
    </nav>
</div>



