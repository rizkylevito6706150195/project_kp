<link rel="stylesheet" href="style.css">


<div id="mynavigation">
<ul class="navigaton">
	<li><a href="mentor_home.php">Input Data</a>
	<li><a href="mentor_logbook.php">Input Logbook</a>
	<li><a href="mentor_history.php">Lihat History</a>
	<li><a href="mentor_profil.php">Profil</a>
	<li style="float:right"><a href="fungsi/logout.php">Logout</a>
</ul>
</div>


<br>
<center><h2>Penginputan Data Mentoring</h2></center>
<br><br>

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
include ("fungsi/connection.php");
$_SESSION['status'] = "";

if(isset($_GET['pilihan'])){
	if($_GET['pilihan'] == "kosong"){
		echo "<center><h5 style='color:red'>Anda belum memilih form</h5><br>";
	}
}
?>

<center>
<form action="fungsi/mentor_combobox_proses.php" method="post">
<select name="pilihan" onchange="handleSelect(this)">
	<option value="" selected>Silahkan pilih form</option>
    <option value="form1"> Form 1 (Personal Detail) </option>
    <option value="form2"> Form 2 (Kuesioner)</option>
	<option value="form3"> Form 3 </option>
	<option value="form4"> Form 4 (Evaluasi) </option>
</select>
<input type="submit" name="Submit" value="submit">