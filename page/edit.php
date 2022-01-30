<?php 

require_once('function/helper.php');
require_once('function/koneksi.php');


$process = isset($_GET['process']) ? ($_GET['process']) : false;
if ($_SESSION["id"] == null) {
  header("location: " . BASE_URL);
  exit();
}

$id = isset($_GET['id']) ? ($_GET['id']) : false;
$pegawai = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id = $id"));
$error = isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;
?>

<!-- notifikasi -->
<?php if ($process == 'success') : ?>
  <div class="alert alert-success" role="alert">
    Data input successfully !
  </div>
<?php endif; ?>
<!-- notifikasi -->



<?php 
if ($error == 'true') : ?>
  <div class="alert alert-danger" role="alert">
    Sorry, all data must be filled in !
  </div>
<?php endif; ?>

<div class="row">
  <div class="col-sm-6">
    <form method="POST" action="<?= BASE_URL . 'process/process_edit.php' ?>">
      <input type="hidden" name="id" value="<?= $pegawai['id'] ?>">
      <div class="mb-3">
        <label for="nama" class="form-label">Name</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pegawai['nama'] ?>">
      </div>
      <div class="mb-3">
        <label for="noid" class="form-label">ID Number</label>
        <input type="number" class="form-control" id="noid" name="noid" value="<?= $pegawai['noid'] ?>">
      </div>
      <div class="mb-3">
        <label for="nohp" class="form-label">Telephone</label>
        <input type="number" class="form-control" id="nohp" name="nohp" value="<?= $pegawai['nohp'] ?>">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Adress</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $pegawai['email'] ?>">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pegawai['alamat'] ?>">
      </div>

      <button type="submit" class="btn btn-primary" style="background-color: #00ccff; color: #fff;">Submit</button>
    </form>
  </div>

  <div class="col-sm-3 justify-content-center text-center mt-5">
    <img src="assets/p1.jpg" style="width: 100%; border-radius: 10px;">
  </div>
  <div class="col-sm-3 justify-content-center text-center mt-5">
    <img src="assets/p2.jpg" style="width: 100%; border-radius: 10px;">
  </div>
</div>


