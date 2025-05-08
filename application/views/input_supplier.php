<main id="main" class="main">

  <div class="pagetitle">
    <h1>Input Supplier </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/index') ?>">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Supplier</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Input Data Supplier</h5>

            <!-- Form Input Data Obat -->
            <form class="row g-3" action="<?php echo base_url('Supplier/insert')?>" method="POST">
              <div class="col-md-6">
                <label for="IDSupplier" class="form-label">ID Supplier</label>
                <input type="text" name="idSupp" class="form-control">
              </div>

              <div class="col-md-6">
                <label for="NamaSupplier" class="form-label">Nama Supplier</label>
                <input type="text" name="namaSupp" class="form-control">
              </div>

              <div class="col-md-6">
                <label for="AlamatSupplier" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Jl. AA">
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- End Form Input Data Supplier -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->