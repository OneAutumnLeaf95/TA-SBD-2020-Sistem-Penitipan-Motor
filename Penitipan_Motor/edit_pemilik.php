<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $nik = $_POST['NIK'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $id_penitipan = $_POST['ID_Penitipan'];
    $plat_nomor = $_POST['Plat_Nomor'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE pemilik SET NIK='$nik', Nama='$nama', Alamat='$alamat', ID_Penitipan='$id_penitipan', Plat_Nomor='$plat_nomor' WHERE ID_Penitipan=$id_penitipan");

    // Redirect to homepage to display updated user in list
    header("Location: data_pemilik.php");
}
?>
<?php

$id_penitipan = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pemilik WHERE ID_Penitipan = $id_penitipan ");
while ($user_data = mysqli_fetch_array($result)) {
    $nik = $user_data['NIK'];
    $nama = $user_data['Nama'];
    $alamat = $user_data['Alamat'];
    $id_penitipan = $user_data['ID_Penitipan'];
    $plat_nomor = $user_data['Plat_Nomor'];


}
?>
<html>

<head>
    <title>Edit Identitas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Edit Data Pemilik</h2>

    <div class="kotak">
        <form action="edit_pemilik.php" method="post" class="form_login">
            
            <br>
            <label>NIK</label>
            <input type="text" name="NIK" class="form_login" value="<?php echo $nik; ?>">
            </br>
            <br>
            <label>Nama</label>
            <input type="text" name="Nama" class="form_login" value="<?php echo $nama; ?>">
            </br>
            <br>
            <label>Alamat</label>
            <input type="text" name="Alamat" class="form_login" value="<?php echo $alamat; ?>">
            </br>
            <br>
            <label>ID Penitipan</label>
            <input type="text" name="ID_Penitipan" class="form_login" value="<?php echo $id_penitipan; ?>">
            </br>
            <br>
            <label>Plat Nomor</label>
            <input type="text" name="Plat_Nomor" class="form_login" value="<?php echo $plat_nomor; ?>">
            </br>

            <br>
            <input type="submit" name="update" class="submit" value="update">
            </br>
        </form>
    </div>
</body>
</html>
