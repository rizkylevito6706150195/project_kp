<link rel="stylesheet" href="style.css">


<div id="mynavigation">
<ul class="navigaton">
	<li><a href="mentee_home.php">Input Data</a>
	<li><a href="mentee_history.php">Lihat History</a>
	<li><a href="mentee_profil.php">Profil</a>
	<li style="float:right"><a href="logout.php">Logout</a>
</ul>
</div>



<br>
<center><h2>Penginputan Data Mentoring</h2></center>
<br><br>

<?php
include ("connection.php");
session_start();

/* validasi halaman tanpa login */
if(!isset($_SESSION['username']))
{
    // belum login
    header('Location: index.php');
    exit();
}
?>

<?php
include ("connection.php");
$_SESSION['status'] = "";

if(isset($_GET['pilihan'])){
	if($_GET['pilihan'] == "kosong"){
		echo "<center><h5 style='color:red'>Anda belum memilih form</h5><br>";
	}
}
?>

<center>
<form action="z_pilih_form.php" method="post">
<select name="pilihan" onchange="handleSelect(this)">
	<option value="" selected>Silahkan pilih form</option>
    <option value="datadiri"> Form Data Diri </option>
    <option value="formdua"> Form 2 </option>
</select>
<input type="submit" name="Submit" value="submit">







