<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$plat_nomor = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM kendaraan WHERE Plat_Nomor='$plat_nomor' ");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location: data_kendaraan.php");

?>