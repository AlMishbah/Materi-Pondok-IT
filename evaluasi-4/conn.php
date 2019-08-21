<?php

$conn = mysqli_connect ("localhost","root", "", "evaluasi");

//Cek Koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi gagal".mysqli_connect_error();
}