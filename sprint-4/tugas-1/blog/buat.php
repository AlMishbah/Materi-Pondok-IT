<?php
session_start();
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>AlMishbah</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="portfolio, AlMishbah" name="keywords">
  <meta content="Portfolio milik roihan mishbahul anam" name="description">

  <!-- Favicons -->
  <link href="img/a.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style-sky-blue.css" rel="stylesheet">


  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
      </section>
  <!--/ Section Services End /-->
<p><h2> Blog Baru </h2></p>
<form method="post" action="buat.php">
  <div class="form-group">
    <label>Judul</label>
    <input type="text" class="form-control" name="judul">
  </div>
  <div class="form-group">
    <label>PHP</label>
    <input type="radio" name="kategori" id="PHP" value="1">
    <label>Java</label>
    <input type="radio" name="kategori" id="java" value="2">
  </div>
  <div class="form-group">
    <label>Isi</label>
    <textarea class="form-control" rows="10" name="isi"></textarea>
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  <a href="home.php" class="btn btn-danger">Cancel</a>
</form>
<?php

if(isset($_POST['submit'])){

    $judul 	= $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori 	= $_POST['kategori'];
    $id = $_SESSION['id'];
	

	$sql = "INSERT INTO artikel(judul, isi, tanggal, id_user, id_kategori) VALUES(?, ?,now(), ?, ?)";
	
	$dbConnect = new PDO('mysql:host=localhost;dbname=blog', "root", '');
	$statement =$dbConnect->prepare($sql);
	$statement->execute(([$judul, $isi, $id, $kategori]));
    header('location: home.php');
}
?>
</body>
</html>