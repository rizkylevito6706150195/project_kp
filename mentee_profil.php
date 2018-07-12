<link rel="stylesheet" href="style.css">
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

<ul>
	<li><a href="mentee_home.php">Input Data</a>
	<li><a href="mentee_history.php">Lihat History</a>
	<li><a href="mentee_profil.php">Profil</a>
	<li style="float:right"><a href="logout.php">Logout</a>
</ul>




<?php
include ("connection.php");
session_start();
/* tes session */
/*echo $_SESSION['username'];*/

$sql = "SELECT * FROM profil WHERE username= '". $_SESSION['username']."'" ;
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>





<br>
<center><h2>Profil Anda</h2></center>
<br><br>

<?php
while ($row = mysqli_fetch_array($query))
	{
	echo "Nama\t:" . $row['nama'];
	echo "<br><br>";
	echo "Nippos\t:";$row['nippos'];
	echo "<br><br>";
	echo "Kantor\t:" . $row['kantor'];
	echo "<br><br>";
	echo "Tanggal mulai bekerja\t:" . $row['tgl_mulai_bekerja'];
	echo "<br><br>";
	echo "Pendidikan/jurusan\t:" . $row['pendidikan_jurusan'];
	echo "<br><br>";
	echo "Alamat email\t:" . $row['alamat_email'];
	echo "<br><br>";
	echo "No.Handphone\t:" . $row['no_hp'];
	}
?>

