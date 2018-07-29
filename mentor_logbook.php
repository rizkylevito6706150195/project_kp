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



<br>
<center><h2>Penginputan Logbook Mentor</h2></center>
<br><br><br><br><br>

<center>
<form action="fungsi/mentor_logbook.proses.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" name="upload" value="Upload">
</form>
</center>