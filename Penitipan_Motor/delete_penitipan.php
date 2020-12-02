<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_penitipan = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM penitipan WHERE ID_Penitipan=$id_penitipan");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location: index.php");

?>