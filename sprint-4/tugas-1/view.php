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

<?php 
$sql = "SELECT * FROM barang";
$conn = new PDO('mysql:host=localhost; dbname=jne', 'root', '');
$stm = $conn->prepare($sql);
$stm->execute();
$getData = $stm->fetchAll(PDO::FETCH_ASSOC);

?>

<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nama Kurir</th>
		<th>Nama Pengirim</th>
		<th>Nama Barang</th>
		<th>Asal Barang</th>
		<th>Tujuan Barang</th>
		<th>Harga</th>
		<th>Action</th>
	</tr>
	<?php foreach ($getData as $key => $value) { ?>
		<tr>
			<td><?= $value['id'] ?></td>
			<td><?= $value['nama_kurir'] ?></td>
			<td><?= $value['nama_pengirim'] ?></td>
			<td><?= $value['nama_barang'] ?></td>
			<td><?= $value['asal_barang'] ?></td>
			<td><?= $value['tujuan_barang'] ?></td>
			<td><?= $value['harga'] ?></td>
			<td>
              <a href="update.php?id=<?= $value ['id'] ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Anda yakin akan menghapusnya?')" href="delete.php?id=<?= $value['id'] ?>" class='btn btn-danger'>Delete</a>
            </td>
		</tr>
	<?php } ?>
</table>