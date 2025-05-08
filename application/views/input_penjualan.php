<main id="main" class="main">

<div class="pagetitle">
  <h1>Input Penjualan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/index')?>">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Penjualan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Input Data Penjualan</h5>

          <!-- Form Input Data Obat -->
          <form class="row g-3" action="<?php echo base_url('Penjualan/insert')?>" method="POST">
            <div class="col-md-6">
              <label for="IDPenjualan" class="form-label">ID Penjualan</label>
              <input type="text" name="idJual" class="form-control">
            </div>

            <div class="col-md-6">
              <label for="TanggalJual" class="form-label">Tanggal Jual</label>
              <input type="date" name="tanggal" class="form-control">
            </div>

            <div class="col-md-6">
              <label for="JumlahTerjual" class="form-label">Jumlah Terjual</label>
              <input type="text" name="jumlah" class="form-control">
            </div>

            <div class="col-md-6">
              <label for="TotalBayar" class="form-label">Total Bayar</label>
              <input type="text" name="total" class="form-control" placeholder="20000">
            </div>

            <div class="col-md-4">
              <label for="inputState" class="form-label">ID Staff</label>
              <select id="inputState" name="idStaff" class="form-select">
              <option selected>(nama staff)</option>
              <?php foreach ($staff as $s) : ?>
                    <option value="<?php echo $s['ID_staff'] ?>"><?php echo $s['nama_staff'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">ID Obat</label>
              <select id="inputState" name="idObat" class="form-select">
              <option selected>(nama obat)</option>
                <?php foreach ($obat as $o) : ?>
                    <option value="<?php echo $o['ID_obat'] ?>"><?php echo $o['nama_obat'] ?></option>
                <?php endforeach; ?>
              </select>
              </select>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End Form Input Data Penjualan -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->