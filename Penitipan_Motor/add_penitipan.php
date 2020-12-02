<html>

<head>
    <title>Penitipan Motor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Tambah Data Penitipan</h2>

    <div class="kotak">
        <form action="add_penitipan.php" method="post" class="form_login">
            <br>
            <label>Kedatangan</label>
            <input type="text" name="Kedatangan" class="form_login">
            </br>
            <br>
            <label>Pengambilan</label>
            <input type="text" name="Pengambilan" class="form_login">
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
        $kedatangan = $_POST['Kedatangan'];
        $pengambilan = $_POST['Pengambilan'];
        $plat_nomor = $_POST['Plat_Nomor'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO penitipan(Kedatangan, Pengambilan, Plat_Nomor) VALUES('$kedatangan', '$pengambilan', '$plat_nomor')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
        header("Location: index.php");
    }
    ?>
</body>

</html>
