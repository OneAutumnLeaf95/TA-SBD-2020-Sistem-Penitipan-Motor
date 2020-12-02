<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id_penitipan = $_POST['ID_Penitipan'];
    $kedatangan = $_POST['Kedatangan'];
    $pengambilan = $_POST['Pengambilan'];
    $plat_nomor = $_POST['Plat_Nomor'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE penitipan SET ID_Penitipan='$id_penitipan', Kedatangan='$kedatangan', Pengambilan='$pengambilan', Plat_Nomor='$plat_nomor' WHERE ID_Penitipan=$id_penitipan");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php

$id_penitipan = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM penitipan WHERE ID_Penitipan = $id_penitipan ");
while ($user_data = mysqli_fetch_array($result)) {
    $kedatangan = $user_data['Kedatangan'];
    $pengambilan = $user_data['Pengambilan'];
    $plat_nomor = $user_data['Plat_Nomor'];
}
?>

<html>

<head>
    <title>Edit Penitipan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Edit Data Penitipan</h2>

    <div class="kotak">
        <form action="edit_penitipan.php" method="post" class="form_login">
        <input type="hidden" name="ID_Penitipan" class="form_login" value=<?php echo $id_penitipan; ?>>
            <br>
            <label>Kedatangan</label>
            <input type="text" name="Kedatangan" class="form_login" value="<?php echo $kedatangan; ?>">
            </br>
            <br>
            <label>Pengambilan</label>
            <input type="text" name="Pengambilan" class="form_login" value="<?php echo $pengambilan; ?>">
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
