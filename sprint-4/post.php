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
<form action="post.php" method="POST" class="form-group">
  <div class="form-group">
    <label>Nama Barang</label>
    <input type="text" name="barang" placeholder="Masukkan Nama" class="form-control">
  </div>
  <div class="form-group">
	<label>Harga</label>
  <input type="text" name="harga" placeholder="Masukkan Nama" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Submit Data</button>
</form>

<?php
$barang = $_POST['barang'];
$harga = $_POST['harga'];
?>
<table class="table table-striped">
	<tr>
		<th>Nama Barang</th>
		<th>Harga</th>

	</tr>
	<tr>
		<td><?= $barang ?></td>
		<td><?= $harga ?></td>
	</tr>

</html>