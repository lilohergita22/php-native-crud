<?php 

require_once('function/helper.php');

session_start();


$page = isset($_GET['page']) ? ($_GET['page']) : false;

if ($_SESSION['id'] == null) {
    header("location: " . BASE_URL);
    exit();
}


 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/bg.jpg">
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/style01.css' ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD-LIL0HERGITA</title>
  </head>
  <body>
  	<!-- navbar -->
  	<nav class="navbar navbar-expand-lg navbar-dark bg-nav">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">CRUD-LIL0HERGITA</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#"> </a>
	        </li>
	        <li class="nav-item" class="justify-content-end">
	          <a class="nav-link" href="<?= BASE_URL . 'dashboard.php?page=create' ?>"> Add | </a>
	        </li>
	        <li class="nav-item" class="justify-content-end logout-bg">
	          <a class="nav-link" href="<?= BASE_URL . 'process/process_logout.php' ?>"> Logout</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<!-- navbar -->


	<!-- content -->
	<div class="content">
		<div class="container">
			<div class="sub-menu mt-5">
				<?php 
				$filename = "page/$page.php";

				if (file_exists($filename)) {
					include_once($filename);
				}else{
					echo "404";
				}


				 ?>
			</div>
		</div>
	</div>
	<!-- content -->

















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
