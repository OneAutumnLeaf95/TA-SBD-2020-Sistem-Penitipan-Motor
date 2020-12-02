<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $plat_nomor = $_POST['Plat_Nomor'];
    $merk = $_POST['Merk'];
    $jenis = $_POST['Jenis'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE kendaraan SET Plat_Nomor='$plat_nomor', Merk='$merk', Jenis='$jenis' WHERE Plat_Nomor='$plat_nomor' ");

    // Redirect to homepage to display updated user in list
    header("Location: data_kendaraan.php");
}
?>
<?php

$plat_nomor = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM kendaraan WHERE Plat_Nomor='$plat_nomor' ");
while ($user_data = mysqli_fetch_array($result)) {
    $plat_nomor = $user_data['Plat_Nomor'];
    $merk = $user_data['Merk'];
    $jenis = $user_data['Jenis'];

}
?>
<html>

<head>
    <title>Edit Kendaraan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Edit Data Kendaraan</h2>

    <div class="kotak">
        <form action="edit_kendaraan.php" method="post" class="form_login">
            
            <br>
            <label>Plat Nomor</label>
            <input type="text" name="Plat_Nomor" class="form_login" value="<?php echo $plat_nomor; ?>">
            </br>
            <br>
            <label>Merk</label>
            <input type="text" name="Merk" class="form_login" value="<?php echo $merk; ?>">
            </br>
            <br>
            <label>Jenis</label>
            <input type="text" name="Jenis" class="form_login" value="<?php echo $jenis; ?>">
            </br>

            <br>
            <input type="submit" name="update" class="submit" value="update">
            </br>
        </form>
    </div>
</body>
</html>
