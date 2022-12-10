<?php
include_once("koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($con, "DELETE FROM wawasan WHERE id=$id");
 
header("Location:data-wawasan.php");
?>