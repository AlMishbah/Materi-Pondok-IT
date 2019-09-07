<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evalusi 6</title>
</head>
<body>
    <h2>Input Persegi</h2>
    <form method="post" action="index.php">
        <label>Sisi 1</label>
        <input type="number" name="sisi1" placeholder="Masukan sisinya">
        <label>Sisi 2</label>
        <input type="number" name="sisi2" placeholder="Masukan sisinya">
        <input type="submit" value="Hitung" name="submit_p">
        <hr>
        <h2>Input Segitiga</h2>
        <label>Alas</label>
        <input type="number" name="alas" placeholder="Masukan alasnya">
        <label>Tinggi</label>
        <input type="number" name="tinggi" placeholder="Masukan tingginya">
        <input type="submit" value="Hitung" name="submit_s">
        <hr>
    </form>

<?php
spl_autoload_register(function($class) {
    require_once ('bangundatar/'.$class.'.php');
});

if (isset($_POST['submit_p'])) {
    $objp = new persegi();
    $getDataP = $objp->rumus_p($_POST);
} elseif (isset($_POST['submit_s'])) {
    $objs = new segitiga();
    $getDataS = $objs->rumus_s($_POST);
}
?>
<?php 
if (isset($getDataP) == true) { ?>
    <h3>Luas Persegi = <?php print_r($getDataP) ?></h3>
<?php } ?>
<?php
if (isset($getDataS) == true) { ?>
    <h3>Luas Segitiga = <?php print_r($getDataS) ?></h3>
<?php } ?>
</body>
</html>