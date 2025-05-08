  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/index') ?>">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <li><a class="dropdown-item" href="<?php echo base_url('Obat/input')?>">Input Obat</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('Obat/index')?>">Lihat Data Obat</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Obat <span>| Tables</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $totalobat ?></h6>
                      <span class="text-muted small pt-2 ps-1">Total Obat</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Pendapatan <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rp 
                        <?php
                        $total = 0;
                        foreach ($totalduit as $td):
                          $total += $td['total_bayar']; //ditambah sebesar
                        endforeach;
                        echo $total; ?></h6>
                      <span class="text-muted small pt-2 ps-1">Total Pendapatan</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-6">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <li><a class="dropdown-item" href="<?php echo base_url('Staff/input')?>">Input Staff</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('Staff/index')?>">Lihat Data Staff</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Staff <span>| Tables</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $totalstaff ?></h6>
                      <span class="text-muted small pt-2 ps-1">Total Staff</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-6">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <li><a class="dropdown-item" href="<?php echo base_url('Supplier/input')?>">Input Supplier</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('Supplier/index')?>">Lihat Data Supplier</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Supplier <span>| Tables</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $totalsupplier ?></h6>
                      <span class="text-muted small pt-2 ps-1">Total Supplier</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                <li><a class="dropdown-item" href="<?php echo base_url('Penjualan/input')?>">Input Penjualan</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('Penjualan/index')?>">Lihat Data Penjualan </a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Penjualan <span>| Tables</span></h5>

              <div class="activity">
                        <?php foreach($totaltahun as $tt): ?>
                <div class="activity-item d-flex">
                  <div class="activite-label"><?php echo $tt['tahun'] ?></div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                  <?php echo $tt['total'] ?> 
                  </div>
                </div><!-- End activity item--> 
                <?php endforeach; ?>

              </div>

            </div>
          </div><!-- End Recent Activity -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->