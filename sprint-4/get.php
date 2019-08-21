<!DOCTYPE html>
<html>
<head>
	<title>Tugas 1</title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>

</head>

	<p>
		<h3>Input Data</h3>
	</p>
<form action="index.php" method="GET" class="form-group">
  <div class="form-group">
    <label>Nama Kurir</label>
    <input type="text" name="kurir" placeholder="Masukkan Nama" class="form-control">
  </div>
  <div class="form-group">
	<label>Nama Pengirim</label>
  <input type="text" name="pengirim" placeholder="Masukkan Nama" class="form-control">
  </div>
  <div class="form-group">
  <label>Asal barang</label>
  <input type="text" name="asal" placeholder="Masukkan Alamat" class="form-control">
  </div>
  <div class="form-group">
  <label>Tujuan Barang</label>
  <input type="text" name="tujuan" placeholder="Masukkan Barang" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Submit Data</button>
</form>

<?php
$kurir = $_GET['kurir'];
$pengirim = $_GET['pengirim'];
$asal = $_GET['asal'];
$tujuan = $_GET['tujuan'];


?>
<table class="table table-striped">
	<tr>
		<th>Nama Kurir</th>
		<th>Nma Pengirim</th>
        <th>Asal Barang</th>
        <th>Tujuan Barang</th>
	</tr>
	<tr>
		<td><?= $kurir ?></td>
		<td><?= $pengirim ?></td>
		<td><?= $asal ?></td>
		<td><?= $tujuan ?></td>
	</tr>

</html>