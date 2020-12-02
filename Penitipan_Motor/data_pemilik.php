<html>

<head>
    <title>Identitas Pemilik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Identitas Pemilik</h2>
    <table width='100%' border=1 class='table'>
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>ID Penitipan</th>
            <th>Plat Nomor</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include_once("config.php");
        if(isset($_GET['cari'])){
		    $cari = $_GET['cari'];
            $result = mysqli_query($mysqli, "SELECT * FROM pemilik WHERE Nama like '%".$cari."%'");
        }else{
        $result = mysqli_query($mysqli, "SELECT * FROM pemilik ORDER BY ID_Penitipan ASC");
        }
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data['NIK'] . "</td>";
            echo "<td align='center'>" . $user_data['Nama'] . "</td>";
            echo "<td align='center'>" . $user_data['Alamat'] . "</td>";
            echo "<td align='center'>" . $user_data['ID_Penitipan'] . "</td>";
            echo "<td align='center'>" . $user_data['Plat_Nomor'] . "</td>";
            echo "<td align='center'><a href='edit_pemilik.php?id=$user_data[ID_Penitipan]'>Edit</a></td>";
            echo "<td align='center'><a href='delete_pemilik.php?id=$user_data[ID_Penitipan]'>Delete</a></td></tr>";
        }
        ?>
    </table>
    <br>
    
    </br>
    <form action="data_pemilik.php" method="get">
	    <label>Cari Nama :</label>
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
    <button><a href="add_pemilik.php">Tambah data Pemilik</a></button>
    <button><a href="index.php">Lihat Data Penitipan</a></button>
    <button><a href="data_kendaraan.php">Lihat Data Kendaraan</a></button>
    <button><a href="join.php">Tampilan join</a></button>
</body>

</html>
