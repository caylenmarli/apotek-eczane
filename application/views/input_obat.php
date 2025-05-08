  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Input Obat</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/index') ?>">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Obat</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Input Data Obat</h5>

              <!-- Form Input Data Obat -->
              <form class="row g-3" action="<?php echo base_url('Obat/insert') ?>" method="POST">
                <div class="col-md-6">
                  <label for="IDObat" class="form-label">ID Obat</label>
                  <input type="text" name="idObat" class="form-control">
                </div>

                <div class="col-md-6">
                  <label for="NamaObat" class="form-label">Nama Obat</label>
                  <input type="text" name="namaObat" class="form-control">
                </div>

                <div class="col-md-6">
                  <label for="StokObat" class="form-label">Stok Obat</label>
                  <input type="text" name="stok" class="form-control">
                </div>

                <div class="col-md-6">
                  <label for="HargaObat" class="form-label">Harga Obat</label>
                  <input type="text" name="harga" class="form-control" placeholder="20000">
                </div>

                <div class="col-md-4">
                  <label for="inputState" class="form-label">ID Supplier</label>
                  <select id="inputState" name="idSupp" class="form-select">
                    <option selected>(nama supplier)</option>
                    <?php foreach ($supplier as $s) : ?>

                      <option value="<?php echo $s['ID_supplier'] ?>"><?php echo $s['nama_supplier'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Form Input Data Obat -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->