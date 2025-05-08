<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Layouts</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/index')?>">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Layouts</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Update Data Staff</h5>

          <!-- Form Update Data Staff -->
          <form class="row g-3" action="<?php echo base_url('Staff/update')?>" method="POST">
          <input type="hidden" name="IdEdit" value="<?php echo $data_staff['ID_staff']?>">
            <div class="col-md-6">
              <label for="IDSupplier" class="form-label">ID Staff</label>
              <input type="text" name="idStaff" class="form-control" value="<?php echo $data_staff['ID_staff']?>">
            </div>
            
            <div class="col-md-6">
              <label for="NamaStaff" class="form-label">Nama Staff</label>
              <input type="text" name="namaStaff" class="form-control" value="<?php echo $data_staff['nama_staff']?>">
            </div>

            <div class="col-md-6">
              <label for="AlamatStaff" class="form-label">No. Hp</label>
              <input type="text" name="noHP" class="form-control" placeholder="081234567890" value="<?php echo $data_staff['no_hp_staff']?>">
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End Form Update Data Staff -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->