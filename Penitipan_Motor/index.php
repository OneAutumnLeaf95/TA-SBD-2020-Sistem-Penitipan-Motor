<html>

<head>
    <title>Penitipan Motor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
    <h2 align='center' line-height='50%'>Penitipan Motor</h2>
    <table width='100%' border=1 class='table'>
        <tr>
            <th>ID Penitipan</th>
            <th>Kedatangan</th>
            <th>Pengambilan</th>
            <th>Plat Nomor</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include_once("config.php");
        if(isset($_GET['cari'])){
		    $cari = $_GET['cari'];
            $result = mysqli_query($mysqli, "SELECT * FROM penitipan WHERE Plat_Nomor like '%".$cari."%'");
        }else{
        $result = mysqli_query($mysqli, "SELECT * FROM penitipan ORDER BY ID_Penitipan ASC");
        }
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data['ID_Penitipan'] . "</td>";
            echo "<td align='center'>" . $user_data['Kedatangan'] . "</td>";
            echo "<td align='center'>" . $user_data['Pengambilan'] . "</td>";
            echo "<td align='center'>" . $user_data['Plat_Nomor'] . "</td>";
            echo "<td align='center'><a href='edit_penitipan.php?id=$user_data[ID_Penitipan]'>Edit</a></td>";
            echo "<td align='center'><a href='delete_penitipan.php?id=$user_data[ID_Penitipan]'>Delete</a></td></tr>";
        }
        ?>
    </table>
    <br>
    
    </br>
    <form action="index.php" method="get">
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
    <button><a href="add_penitipan.php">Tambah data Penitipan</a></button>
    <button><a href="data_pemilik.php">Lihat Data Pemilik</a></button>
    <button><a href="data_kendaraan.php">Lihat Data Kendaraan</a></button>
    <button><a href="join.php">Tampilan join</a></button>
    </br>

</body>

</html>
