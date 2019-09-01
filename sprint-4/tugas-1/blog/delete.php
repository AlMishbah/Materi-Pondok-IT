<?php

$id = $_GET['id'];
$delete = "DELETE FROM artikel WHERE id_artikel= :id";
$dbConnect = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
$statementReadData = $dbConnect->prepare($delete);
$statementReadData->execute([':id' => $id]);
header('location:home.php');

