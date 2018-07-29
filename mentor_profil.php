<link rel="stylesheet" href="style.css">


<div id="mynavigation">
<ul class="navigaton">
	<li><a href="mentor_home.php">Input Data</a>
	<li><a href="mentor_logbook.php">Input Logbook</a>
	<li><a href="mentor_history.php">Lihat History</a>
	<li><a href="mentor_profil.php">Profil</a>
	<li style="float:right"><a href="logout.php">Logout</a>
</ul>
</div>

<?php
include ("fungsi/connection.php");
session_start();

/* validasi halaman tanpa login */
if(!isset($_SESSION['username']))
{
    // belum login
    header('Location: index.php');
    exit();
}

/* validasi level user */
if($_SESSION['level'] != 'mentor')
{
	header('Location: index.php');
    exit();
}
?>


<?php

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

