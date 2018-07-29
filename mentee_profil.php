<link rel="stylesheet" href="style.css">
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

<ul>
	<li><a href="mentee_home.php">Input Data</a>
	<li><a href="mentee_history.php">Lihat History</a>
	<li><a href="mentee_profil.php">Profil</a>
	<li style="float:right"><a href="fungsi/logout.php">Logout</a>
</ul>

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
if($_SESSION['level'] != 'mentee')
{
	header('Location: index.php');
    exit();
}
?>


<?php
include ("fungsi/connection.php");
/* tes session */
/*echo $_SESSION['username'];*/

$sql = "SELECT * FROM profil_mentee WHERE username= '". $_SESSION['username']."'" ;
		
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
	
	echo "Nippos\t:" . $row['nippos'];
	echo "<br><br>";
	
	echo "Tempat, tanggal lahir\t:" . $row['tempat_tanggal_lahir'];
	echo "<br><br>";
	
	echo "Jabatan saat ini\t:" . $row['jabatan_saat_ini'];
	echo "<br><br>";
	
	echo "Kantor\t:" . $row['kantor'];
	echo "<br><br>";
	
	echo "Tanggal mulai bekerja\t:" . $row['tgl_mulai_bekerja'];
	echo "<br><br>";
	
	echo "Jabatan yang pernah diduduki\t:" . $row['jabatan_yang_pernah_diduduki'];
	echo "<br><br>";
	
	echo "Pendidikan/jurusan\t:" . $row['pendidikan_jurusan'];
	echo "<br><br>";
	
	echo "Alamat email\t:" . $row['alamat_email'];
	echo "<br><br>";
	
	echo "No.Handphone\t:" . $row['no_hp'];
	echo "<br><br>";
	
	echo "Nama mentor\t:" . $row['nama_mentor'];
	}
?>

