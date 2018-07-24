<?php
include ("connection.php");
session_start();


/* validasi halaman tanpa login */
if ($_SESSION['status'] = ''){
header("Location:./index.php");
}

$username	= $_SESSION['username'];

$jawaban1	= $_POST['nama'];
$jawaban2	= $_POST['nippos'];
$jawaban3	= $_POST['judulproject'];
$jawaban4	= $_POST['jawaban4'];
$jawaban5	= $_POST['jawaban5'];
$jawaban6	= $_POST['jawaban6'];
$jawaban7	= $_POST['jawaban7'];
$jawaban8	= $_POST['jawaban8'];
$jawaban9	= $_POST['jawaban9'];
$jawaban10	= $_POST['jawaban10'];
$jawaban11	= $_POST['jawaban11'];
$jawaban12	= $_POST['jawaban12'];
$jawaban13	= $_POST['form2pilihan'];
$jawaban14	= $_POST['jawaban14'];
$jawaban15	= $_POST['jawaban15'];
$jawaban16	= $_POST['jawaban16'];
$jawaban17	= $_POST['jawaban17'];
$jawaban18	= $_POST['jawaban18'];
$jawaban19	= $_POST['jawaban19'];


//untuk history
date_default_timezone_set("ASIA/JAKARTA");
$tanggal	= date("l, Y-m-d, H:i:s");





if(empty($jawaban1) or empty($jawaban2) or empty($jawaban3) or empty($jawaban4) or empty($jawaban5) or empty($jawaban6) or empty($jawaban7) or empty($jawaban8) or empty($jawaban9)
	or empty($jawaban10) or empty($jawaban11) or empty($jawaban12) or empty($jawaban13) or empty($jawaban14) or empty($jawaban15) or empty($jawaban16) or empty($jawaban17) or empty($jawaban18) or empty($jawaban19)){

	//simpan data jika validasi gagal
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
	$_SESSION['jawaban12'] 	= $jawaban12;
	
	$_SESSION['jawaban14'] 	= $jawaban14;
	$_SESSION['jawaban15'] 	= $jawaban15;
	$_SESSION['jawaban16'] 	= $jawaban16;
	$_SESSION['jawaban17'] 	= $jawaban17;
	$_SESSION['jawaban18'] 	= $jawaban18;
	$_SESSION['jawaban19'] 	= $jawaban19;
	
	header("location:../mentee_form2.php?pesan=error1");
	die;
}

if(!is_numeric($jawaban2)){
	header("location:../mentee_form2.php?pesan=error2");
	die;
}

$sql = "INSERT INTO data_form_mentee (username, nomor_form, jawaban1, jawaban2, jawaban3, jawaban4, jawaban5, jawaban6, jawaban7, jawaban8, jawaban9, jawaban10, jawaban11, jawaban12, jawaban13, jawaban14, jawaban15, jawaban16, jawaban17, jawaban18, jawaban19) 
		VALUES ('$username', '2', '$jawaban1', '$jawaban2', '$jawaban3', '$jawaban4', '$jawaban5', '$jawaban6', '$jawaban7', '$jawaban8', '$jawaban9', '$jawaban10', '$jawaban11', '$jawaban12', '$jawaban13', '$jawaban14', '$jawaban15', '$jawaban16', '$jawaban17', '$jawaban18', '$jawaban19')";
$query = mysqli_query($conn, $sql);

$sql2 = "INSERT INTO history_mentee (nomor_form, judul_form, status, tanggal, username) 
		VALUES ('2', 'Form 2', 'selesai', '$tanggal', '$username')";
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
unset($_SESSION["jawaban12"]);

unset($_SESSION["jawaban14"]);
unset($_SESSION["jawaban15"]);
unset($_SESSION["jawaban16"]);
unset($_SESSION["jawaban17"]);
unset($_SESSION["jawaban18"]);
unset($_SESSION["jawaban19"]);

echo "Input berhasil";

?>
<br><br>
<a href="../mentee_home.php">Klik disini untuk melanjutkan</a>