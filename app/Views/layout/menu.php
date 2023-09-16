<header class="navbar-expand-md">
  <div class="collapse navbar-collapse" id="navbar-menu">
    <div class="navbar">
      <div class="container-xl">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?= site_url() ?>dashboard/index">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>
              </span>
              <span class="nav-link-title">
                Home
              </span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                  <path d="M12 12l8 -4.5" />
                  <path d="M12 12l0 9" />
                  <path d="M12 12l-8 -4.5" />
                  <path d="M16 5.25l-8 4.5" />
                </svg>
              </span>
              <span class="nav-link-title">
                Master
              </span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-columns">
                <div class="dropdown-menu-column">
                  <a class="dropdown-item" href="<?= site_url() ?>dashboard/master/s/supplier">
                    Data Supplier
                  </a>
                  <a class="dropdown-item" href="<?= site_url() ?>dashboard/master/c/satuan">
                    Data Satuan
                  </a>
                  <a class="dropdown-item" href="<?= site_url() ?>dashboard/master/c/category">
                    Data Kategori
                  </a>
                  <a class="dropdown-item" href="<?= site_url() ?>dashboard/master/c/location">
                    Data Lokasi
                  </a>
                  <a class="dropdown-item" href="<?= site_url() ?>dashboard/master/drug">
                    Data Obat
                  </a>
                  <a class="dropdown-item" href="<?= site_url() ?>dashboard/master/s/customer">
                    Data Pelanggan
                  </a>
                </div>
                <div class="dropdown-menu-column">
                  <a class="dropdown-item" href="<?= site_url() ?>dashboard/master/d/dokter">
                    Data Dokter
                  </a>
                  <a class="dropdown-item" href="<?= site_url() ?>dashboard/master/d/apoteker">
                    Data Apoteker
                  </a>
                  <a class="dropdown-item" href="#">
                    Import Supplier
                  </a>
                  <a class="dropdown-item" href="#">
                    Import Pelanggan
                  </a>
                  <a class="dropdown-item" href="#">
                    Import Obat
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-transaksi" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-transfer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M20 10h-16l5.5 -6"></path>
                  <path d="M4 14h16l-5.5 6"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                Transaksi
              </span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="https://tabler.io/docs" rel="noopener">
                Pembelian Obat
              </a>
              <a class="dropdown-item" href="https://tabler.io/docs" rel="noopener">
                Retur Pembelian Obat
              </a>
              <a class="dropdown-item" href="https://tabler.io/docs" rel="noopener">
                Setting Pajak Penjualan
              </a>
              <a class="dropdown-item" href="https://tabler.io/docs" rel="noopener">
                Setting Pajak Penjualan
              </a>
              <a class="dropdown-item" href="https://tabler.io/docs" rel="noopener">
                Penjualan Obat
              </a>
              <a class="dropdown-item" href="https://tabler.io/docs" rel="noopener">
                Retur Penjualan Obat
              </a>
            </div>
          </li>
        </ul>
        <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
          <form action="./" method="get" autocomplete="off" novalidate>
            <div class="input-icon">
              <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                  <path d="M21 21l-6 -6" />
                </svg>
              </span>
              <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>