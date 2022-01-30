<?php 

$process = isset($_GET['process']) ? ($_GET['process']) : false;

 ?>

<?php if ($process == 'failed') : ?>
  <div class="alert alert-danger" role="alert">
    Sorry, all data must be filled in !
  </div>
<?php endif; ?>




<h3>Input Data</h3>

<div class="row">
  <div class="col-sm-6">
    <form method="POST" action="<?= BASE_URL . 'process/process_add.php' ?>">
      <div class="mb-3">
        <label for="nama" class="form-label">Name</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter your Name">
      </div>
      <div class="mb-3">
        <label for="noid" class="form-label">ID Number</label>
        <input type="number" class="form-control" id="noid" name="noid" placeholder="Enter your ID Number">
      </div>
      <div class="mb-3">
        <label for="nohp" class="form-label">Telephone</label>
        <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Enter your Telephone">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Adress</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Adress</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter your Address">
      </div>

      <button type="submit" class="btn btn-sub" style="background-color: #00ccff; color: #fff;">Submit</button>
    </form>
  </div>
  <div class="col-sm-3 justify-content-center text-center mt-5">
    <img src="assets/p1.jpg" style="width: 100%; border-radius: 10px;">
  </div>
  <div class="col-sm-3 justify-content-center text-center mt-5">
    <img src="assets/p2.jpg" style="width: 100%; border-radius: 10px;">
  </div>
</div>