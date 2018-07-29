<?php
include ("connection.php");
session_start();


/* validasi halaman tanpa login */
if ($_SESSION['status'] = ''){
header("Location:./index.php");
}

$username	= $_SESSION['username'];

$jawaban1	= $_POST['jawaban1'];
$jawaban2	= $_POST['jawaban2'];
$jawaban3	= $_POST['jawaban3'];
$jawaban4	= $_POST['jawaban4'];
$jawaban5	= $_POST['jawaban5'];
$jawaban6	= $_POST['jawaban6'];
$jawaban7	= $_POST['jawaban7'];
$jawaban8	= $_POST['jawaban8'];
$jawaban9	= $_POST['jawaban9'];
$jawaban10	= $_POST['jawaban10'];
$jawaban11	= $_POST['jawaban11'];
$jawaban12	= $_POST['jawaban12'];


//untuk history
date_default_timezone_set("ASIA/JAKARTA");
$tanggal	= date("l, d-m-Y, H:i:s");

if(empty($jawaban1) or empty($jawaban2) or empty($jawaban3) or empty($jawaban4) or empty($jawaban5) or empty($jawaban6) or empty($jawaban7) or empty($jawaban8) or empty($jawaban9) or empty($jawaban10) or empty($jawaban11) or empty($jawaban12)){
	

	header("location:../mentor_form2.php?pesan=error1");
	die;
}


$sql = "INSERT INTO data_form_mentor (username, nomor_form, jawaban1, jawaban2, jawaban3, jawaban4, jawaban5, jawaban6, jawaban7, jawaban8, jawaban9, jawaban10, jawaban11, jawaban12) 
		VALUES ('$username', '2', '$jawaban1', '$jawaban2', '$jawaban3', '$jawaban4', '$jawaban5', '$jawaban6', '$jawaban7', '$jawaban8', '$jawaban9', '$jawaban10', '$jawaban11', '$jawaban12')";
$query = mysqli_query($conn, $sql);

$sql2 = "INSERT INTO history_mentor (nomor_form, judul_form, status, tanggal, username) 
		VALUES ('2', 'Kuesioner', 'selesai', '$tanggal', '$username')";
$query = mysqli_query($conn, $sql2);



if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo "Input berhasil";

?>
<br><br>
<a href="../mentor_home.php">Klik disini untuk melanjutkan</a>