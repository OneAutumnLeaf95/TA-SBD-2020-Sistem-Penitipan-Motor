<html>

<head>
    <title>TABEL JOIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'>Tabel Pemilik & Kendaraan</h2>
    <table width='100%' border=1 class='table'>
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>ID Penitipan</th>
            <th>Merk</th>
            <th>Jenis</th>
        </tr>
        <?php
        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT A.NIK, A.Nama, A.Alamat, A.ID_Penitipan, B.Merk, B.Jenis FROM pemilik A INNER JOIN kendaraan B ON A.Plat_Nomor = B.Plat_Nomor");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data['NIK'] . "</td>";
            echo "<td align='center'>" . $user_data['Nama'] . "</td>";
            echo "<td align='center'>" . $user_data['Alamat'] . "</td>";
            echo "<td align='center'>" . $user_data['ID_Penitipan'] . "</td>";
            echo "<td align='center'>" . $user_data['Merk'] . "</td>";
            echo "<td align='center'>" . $user_data['Jenis'] . "</td>";
        }
        ?>
    </table>
    <h2 line-height='50%'>Tabel Pemilik & Penitipan</h2>
    <table width='100%' border=1 class='table'>
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Plat Nomor</th>
            <th>Kedatangan</th>
            <th>Pengambilan</th>
        </tr>
        <?php
        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT A.NIK, A.Nama, A.Alamat, A.Plat_Nomor, C.Kedatangan, C.Pengambilan FROM pemilik A INNER JOIN penitipan C ON A.ID_Penitipan = C.ID_Penitipan");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data['NIK'] . "</td>";
            echo "<td align='center'>" . $user_data['Nama'] . "</td>";
            echo "<td align='center'>" . $user_data['Alamat'] . "</td>";
            echo "<td align='center'>" . $user_data['Plat_Nomor'] . "</td>";
            echo "<td align='center'>" . $user_data['Kedatangan'] . "</td>";
            echo "<td align='center'>" . $user_data['Pengambilan'] . "</td>";
        }
        ?>
    </table>

    <br>
    <button><a weight='50px' href="index.php">Kembali</a></button>

</body>

</html>
