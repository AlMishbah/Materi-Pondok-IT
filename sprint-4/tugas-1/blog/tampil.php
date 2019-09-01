<?php 
session_start();
include 'koneksi.php';
if ($_SESSION['id_user'] === null) {
  header("location:index.php");
}
$id = $_GET['id'];
$sqlReadData = "SELECT * FROM artikel INNER JOIN user ON artikel.id_user = user.id_user WHERE id_artikel = ?";
$dbConnect = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
$statementReadData = $dbConnect->prepare($sqlReadData);
$statementReadData->execute([$id]);
$getData = $statementReadData->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
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
</head>
<body>
<?php foreach ($getData as $key => $data):
               
?>
  <p  align = "center"><h3><?= $data['judul'] ?> </h3></p>
  <small>Penulis : <?= $data['username'] ?></small> || 
  <small><?= $data['tanggal'] ?></small>
  <hr>
  <p class="container"><?= $data['isi'] ?></p>

    <?php endforeach ?>
</body>
</html>