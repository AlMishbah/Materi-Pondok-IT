<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  
</head>
<body class="bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="ricon.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
  <a class="navbar-brand">Tugas<span class="sr-only">(current)</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Input Data </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view.php">Check Data Anda  </a>
      </li>
    </ul>
  </div>
</nav>


	<p>
		<h3>Input Data</h3>
	</p>
<form action="" method="POST" class="form-group">
  <div class="form-group">
    <label>Nama Kurir</label>
    <input type="text" name="nama_kurir" placeholder="Masukkan Nama Kurir" class="form-control">
  </div>
  <div class="form-group">
	<label>Nama Pengirim</label>
  <input type="text" name="nama_pengirim" placeholder="Masukkan Nama Pengirim" class="form-control">
  </div>
  <div class="form-group">
  <label>Nama Barang</label>
  <input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" class="form-control">
  </div>
  <div class="form-group">
  <label>Asal Barang</label>
  <input type="text" name="asal_barang" placeholder="Masukkan Asal Barang" class="form-control">
  </div>
  <div class="form-group">
  <label>Tujuan Barang</label>
  <input type="text" name="tujuan_barang" placeholder="Masukkan Tujuan Barang" class="form-control">
  </div>
  <div class="form-group">
  <label>Harga</label>
  <input type="text" name="harga" placeholder="Masukkan Harga" class="form-control">
  </div>
  <button type="submit" name="submit" class="btn btn-success">Submit Data</button>
</form>

<?php
if (isset($_POST['submit'])) {
	$kurir = $_POST['nama_kurir'];
	$pengirim = $_POST['nama_pengirim'];
	$barang = $_POST['nama_barang'];
	$asal = $_POST['asal_barang'];
	$tujuan = $_POST['tujuan_barang'];
	$harga = $_POST['harga'];

	$sql = "INSERT INTO barang (nama_kurir, nama_pengirim, nama_barang, asal_barang, tujuan_barang, harga) VALUES (?, ?, ?, ?, ?, ?)";
	$conn = new PDO('mysql:host=localhost; dbname=jne', 'root', '');
	$stm = $conn->prepare($sql);
	$stm->execute([($kurir), ($pengirim), ($barang), ($asal), ($tujuan), ($harga)]);
	header('location:view.php');

}
?>

</body>
</html>