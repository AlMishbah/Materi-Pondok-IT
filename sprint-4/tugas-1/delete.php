<?php

$id = $_GET['id'];
$sql = "DELETE FROM barang WHERE id= :id";
$conn = new PDO ('mysql:host=localhost; dbname=jne', 'root', '');
$stm = $conn->prepare($sql);
$stm->execute([':id' => $id]);
header('location:view.php');

?>