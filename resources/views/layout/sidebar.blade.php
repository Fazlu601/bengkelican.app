<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @can('supplier')
                    <a class="nav-link" href="/supplier">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard Supplier
                    </a>
                @endcan
                @cannot('supplier')       
                    <a class="nav-link" href="/">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">TRANSAKSI</div>
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                        Tambah Transaksi
                    </a>
                    <a class="nav-link" href="/transaksi/pemesanan_barang">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Pemesanan Barang
                    </a>
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Riwayat Penjualan
                    </a>
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Riwayat Service
                    </a>
                    <div class="sb-sidenav-menu-heading">DATA & LAPORAN</div>
                    <a class="nav-link" href="/data/pelanggan">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Data Pelanggan
                    </a>
                    <a class="nav-link" href="/data/karyawan">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Data Karyawan
                    </a>
                    <a class="nav-link" href="/data/barang">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Data Barang
                    </a>
                    <a class="nav-link" href="/data/service">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Data Services
                    </a>
                @endcannot
            </div>
        </div>
    </nav>
</div>



