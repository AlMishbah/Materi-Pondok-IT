<!DOCTYPE html>
<html>
<head>
	<title>Evaluasi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">EVALUASI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Input Data <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form.php">Check Data Anda  </a>
	  </li>
	</ul>
  </div>
</nav>
<body>
	

	<h2>Data Siswa</h2>
	<br/>
	<table class="table">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIK</th>
			<th>Nilai</th>
		</tr>
		<?php 
		include 'conn.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nilai']; ?></td>
			</tr>
			<?php 
		}
		?>
		
	</table>
<form action="" method="post">
    <div class="form-group"></div>
    <select name="pilih" class="form-control">
      <option>Menu</option>
        <option value="hitung_data">Hitung Data</option>
        <option value="hitung_rata">Hitung Rata - rata</option>
        <option value="cari_nilai">Cari Nilai diatas 80</option>
        <option value="cari">Cari Nilai dibawah 65</option>
    </select>
    <button name="submit" class="btn btn-success">Submit</button>
</form>
<?php

if(isset($_POST['submit'])){
    $pilih = $_POST['pilih'];
    
    
    function hitung_data(){
        include 'conn.php';

        $query  = "SELECT SUM(nilai) AS jumlah from siswa";
        $sql    = $conn->query($query);
        $hasil  = mysqli_fetch_row($sql);
        echo "Jumlah Nilai : ". $hasil[0];
    }
    
    function hitung_rata(){
        include 'conn.php';

        $query  = "SELECT AVG(nilai) AS rata from siswa";
        $sql    = $conn->query($query);
        $hasil  = mysqli_fetch_row($sql);
        echo "Rata - rata Nilai : ". $hasil[0];
    }
    
    function cari_nilai(){
        include 'conn.php';
        $query  = "SELECT * from siswa WHERE nilai >= 80";
        $sql = $conn->query($query);
        $hasil  = mysqli_fetch_assoc($sql);
        print_r($hasil);
    }
    function cari(){
        include 'conn.php';
        $query  = "SELECT * from siswa WHERE nilai <= 65";
        $sql = $conn->query($query);
        $hasil  = mysqli_fetch_assoc($sql);
        print_r($hasil);
    }

    if($pilih  === "hitung_data"){
        hitung_data();
    }elseif($pilih  === "hitung_rata"){
        hitung_rata();
    }elseif ($pilih === "cari_nilai") {
        cari_nilai();
    }else{
        cari();
    }
    
}
?>

</body>
</html>