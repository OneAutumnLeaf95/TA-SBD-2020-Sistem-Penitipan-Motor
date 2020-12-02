<html>

<head>
    <title>Identitas Pemilik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Tambah Data Pemilik</h2>

    <div class="kotak">
        <form action="add_pemilik.php" method="post" class="form_login">
            <br>
            <label>NIK</label>
            <input type="text" name="NIK" class="form_login">
            </br>
            <br>
            <label>Nama</label>
            <input type="text" name="Nama" class="form_login">
            </br>
            <br>
            <label>Alamat</label>
            <input type="text" name="Alamat" class="form_login">
            </br>
            <br>
            <label>ID Penitipan</label>
            <input type="text" name="ID_Penitipan" class="form_login">
            </br>
            <br>
            <label>Plat Nomor</label>
            <input type="text" name="Plat_Nomor" class="form_login">
            </br>
            <br>
            <input type="submit" name="Submit" class="submit" value="Simpan"></td>
            </br>

        </form>

    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $nik = $_POST['NIK'];
        $nama = $_POST['Nama'];
        $alamat = $_POST['Alamat'];
        $id_penitipan = $_POST['ID_Penitipan'];
        $plat_nomor = $_POST['Plat_Nomor'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pemilik(NIK, Nama, Alamat, ID_Penitipan, Plat_Nomor) VALUES('$nik', '$nama', '$alamat', '$id_penitipan', '$plat_nomor')");

        // Show message when user added
        echo "User added successfully. <a href='data_pemilik.php'>View Users</a>";
        header("Location: data_pemilik.php");
    }
    ?>
</body>

</html>
