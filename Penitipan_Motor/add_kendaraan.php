<html>

<head>
    <title>Identitas Kendaraan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Tambah Data Kendaraan</h2>

    <div class="kotak">
        <form action="add_kendaraan.php" method="post" class="form_login">
            <br>
            <label>Plat Nomor</label>
            <input type="text" name="Plat_Nomor" class="form_login">
            </br>
            <br>
            <label>Merk</label>
            <input type="text" name="Merk" class="form_login">
            </br>
            <br>
            <label>Jenis</label>
            <input type="text" name="Jenis" class="form_login">
            </br>
            <br>
            <input type="submit" name="Submit" class="submit" value="Simpan"></td>
            </br>

        </form>

    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $plat_nomor = $_POST['Plat_Nomor'];
        $merk = $_POST['Merk'];
        $jenis = $_POST['Jenis'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kendaraan(Plat_Nomor, Merk, Jenis) VALUES('$plat_nomor', '$merk', '$jenis')");

        // Show message when user added
        echo "User added successfully. <a href='data_pemilik.php'>View Users</a>";
        header("Location: data_kendaraan.php");
    }
    ?>
</body>

</html>
