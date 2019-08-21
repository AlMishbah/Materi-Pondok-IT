<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evaluasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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
  <h2>Selamat Datang Di Input Nilai Siswa</h2>
    <form method="post">
     <div class="form-group">
        <label>Nama</label>
         <input type="text" class="form-control" placeholder="Masukan nama" name="nama">
    <div class="form-group">
        <label>NIK</label>
        <input type="text" class="form-control"  placeholder="Masukan Nik" name="nik">
    </div>
    <div class="form-group">
        <label>Nilai</label>
        <input type="text" class="form-control" placeholder="Masukan Nilai" name="nilai">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

    <?php

include 'conn.php';

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $nilai = $_POST['nilai'];

        $result = mysqli_query($conn, "INSERT INTO siswa VALUES (null,'$nama', '$nik', '$nilai') ")or die(mysqli_error($conn));

        header('location:form.php');
    }

    ?>


</body>
</html>