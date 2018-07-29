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



//untuk history
date_default_timezone_set("ASIA/JAKARTA");
$tanggal	= date("l, Y-m-d, H:i:s");

if(empty($jawaban1) or empty($jawaban2) or empty($jawaban3) or empty($jawaban4) or empty($jawaban5) or empty($jawaban6) or empty($jawaban7) or empty($jawaban8) or empty($jawaban9) or empty($jawaban10) or empty($jawaban11)){
	/*echo "anda belum melengkapi semua form"; 
	$kembali = 'form1.php';
	echo "<br><br>"; 
	echo "<a href='".$kembali."'>Kembali</a>";
	die;*/
	
	/* simpan data jika validasi gagal */
	$_SESSION['jawaban1'] 	= $jawaban1;
	$_SESSION['jawaban2']	= $jawaban2;
	$_SESSION['jawaban3'] 	= $jawaban3;
	$_SESSION['jawaban4'] 	= $jawaban4;
	$_SESSION['jawaban5'] 	= $jawaban5;
	$_SESSION['jawaban6'] 	= $jawaban6;
	$_SESSION['jawaban7'] 	= $jawaban7;
	$_SESSION['jawaban8'] 	= $jawaban8;
	$_SESSION['jawaban9'] 	= $jawaban9;
	$_SESSION['jawaban10'] 	= $jawaban10;
	$_SESSION['jawaban11'] 	= $jawaban11;
	
	header("location:../mentor_form3.php?pesan=error1");
	die;
}



$sql = "INSERT INTO data_form_mentor (username, nomor_form, jawaban1, jawaban2, jawaban3, jawaban4, jawaban5, jawaban6, jawaban7, jawaban8, jawaban9, jawaban10, jawaban11) 
		VALUES ('$username', '3', '$jawaban1', '$jawaban2', '$jawaban3', '$jawaban4', '$jawaban5', '$jawaban6', '$jawaban7', '$jawaban8', '$jawaban9', '$jawaban10', '$jawaban11')";
$query = mysqli_query($conn, $sql);

$sql2 = "INSERT INTO history_mentor (nomor_form, judul_form, status, tanggal, username) 
		VALUES ('3', 'Form 3', 'selesai', '$tanggal', '$username')";
$query = mysqli_query($conn, $sql2);



if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

unset($_SESSION["jawaban1"]);
unset($_SESSION["jawaban2"]);
unset($_SESSION["jawaban3"]);
unset($_SESSION["jawaban4"]);
unset($_SESSION["jawaban5"]);
unset($_SESSION["jawaban6"]);
unset($_SESSION["jawaban7"]);
unset($_SESSION["jawaban8"]);
unset($_SESSION["jawaban9"]);
unset($_SESSION["jawaban10"]);
unset($_SESSION["jawaban11"]);

echo "Input berhasil";

?>
<br><br>
<a href="../mentor_home.php">Klik disini untuk melanjutkan</a>