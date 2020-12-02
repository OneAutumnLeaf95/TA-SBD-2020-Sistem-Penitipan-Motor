<html>

<head>
    <title>Data Kendaraan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Data Kendaraan</h2>
    <table width='100%' border=1 class='table'>
        <tr>
            <th>Plat Nomor</th>
            <th>Merk</th>
            <th>Jenis</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include_once("config.php");
        if(isset($_GET['cari'])){
		    $cari = $_GET['cari'];
            $result = mysqli_query($mysqli, "SELECT * FROM kendaraan WHERE Plat_Nomor like '%".$cari."%'");
        }else{
        $result = mysqli_query($mysqli, "SELECT * FROM kendaraan");
        }
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data['Plat_Nomor'] . "</td>";
            echo "<td align='center'>" . $user_data['Merk'] . "</td>";
            echo "<td align='center'>" . $user_data['Jenis'] . "</td>";
            echo "<td align='center'><a href='edit_kendaraan.php?id=$user_data[Plat_Nomor]'>Edit</a></td>";
            echo "<td align='center'><a href='delete_kendaraan.php?id=$user_data[Plat_Nomor]'>Delete</a></td></tr>";
        }
        ?>
    </table>
    <br>
    
    </br>
    <form action="data_kendaraan.php" method="get">
	    <label>Cari Plat Nomor :</label>
	    <input type="text" name="cari">
	    <input type="submit" value="Cari">
    </form>

    <?php 
        if(isset($_GET['cari'])){
	    $cari = $_GET['cari'];
	    echo "<b>Hasil pencarian : ".$cari."</b>";
        }
    ?>
    <br>
    
    </br>
    <br>
    <button><a href="add_kendaraan.php">Tambah Data Kendaraan</a></button>
    <button><a href="index.php">Lihat Data Penitipan</a></button>
    <button><a href="data_pemilik.php">Lihat Data Pemilik</a></button>
    <button><a href="join.php">Tampilan join</a></button>
</body>

</html>
