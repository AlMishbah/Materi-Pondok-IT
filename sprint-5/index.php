<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autoload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<body>
  <div class="container-fluid pt-3">
  <div class="row">
  <div class="col-sm">
  <strong>Input Persegi</strong>
  <form action="index.php" method="POST">
      <label>Sisi</label>
      <input class="form-control" name="sisi1" type="number" placeholder="masukkan sisinya">
      <label>Sisi</label>
      <input class="form-control" name="sisi2" type="number" placeholder="masukkan sisinya"> <br>
  <button type="submit" name="submit_persegi" class="btn btn-success btn-sm">Hitung</button>
  </form>
  </div>
  <br>
  <div class="col-sm">
  <strong>Input Segitiga</strong>
  <form action="index.php" method="POST">
      <label>Alas</label>
      <input class="form-control" name="alas" type="number" placeholder="masukkan alasnya">
      <label>Tinggi</label>
      <input class="form-control" name="tinggi" type="number" placeholder="masukkan tingginya">
 <br>
  <button type="submit" name="submit_segitiga" class="btn btn-success btn-sm">Hitung</button>
  </form>
  </div>
  </div>
  </div>
  <br>
  
  <strong>Input Persegi Panjang</strong>
  <form action="index.php" method="POST">
      <label>Panjang</label>
      <input class="form-control" name="panjang" type="number" placeholder="masukkan panjangnya">
      <label>Lebar</label>
      <input class="form-control" name="lebar" type="number" placeholder="masukkan lebarnya"> <br>
  <button type="submit" name="submit_persegiP" class="btn btn-success btn-sm">Hitung</button>
  </form>
<?php
spl_autoload_register(function($class) {
   require_once('class/'.$class.'.php'); 
});

if (isset($_POST['submit_persegi'])) {
    $obp = new persegi();
    $ambil_p = $obp->rumus_persegi($_POST);
} elseif (isset($_POST['submit_segitiga'])) {
    $obs = new segitiga();
    $ambil_s = $obs->rumus_segitiga($_POST);
    
} elseif (isset($_POST['submit_persegiP'])) {
    $obpp = new persegi_panjang();
    $ambil_pp = $obpp->rumus_persegiP($_POST);
}

?>
<?php
if (isset($ambil_p) == true) { ?>
<h3>Luas Persegi = <?php print_r($ambil_p) ?></h3>
<?php } ?>
<?php
if (isset($ambil_s) == true) { ?>
<h3>Luas Segitiga = <?php print_r($ambil_s) ?></h3>
<?php } ?>
<?php
if (isset($ambil_pp) == true) { ?>
<h3>Luas Persegi Panjang = <?php print_r($ambil_pp) ?></h3>
<?php } ?>
</body>
</html>