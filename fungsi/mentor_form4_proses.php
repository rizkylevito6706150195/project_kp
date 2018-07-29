<?php
include ("connection.php");
session_start();


/* validasi halaman tanpa login */
if ($_SESSION['status'] = ''){
header("Location:./index.php");
}

$username	= $_SESSION['username'];

$data1x	= $_POST['tanggal'];			$data1 = date("d-m-Y", strtotime($data1x));
$data2	= $_POST['namamentor'];
$data3	= $_POST['namamentee'];

$jawaban1	= $_POST['jawaban1'];
$jawaban2	= $_POST['jawaban2'];
$jawaban3	= $_POST['jawaban3'];
$jawaban4	= $_POST['jawaban4'];
$jawaban5	= $_POST['jawaban5'];
$jawaban6	= $_POST['jawaban6'];


//untuk history
date_default_timezone_set("ASIA/JAKARTA");
$tanggal	= date("l, d-m-Y, H:i:s");





if(empty($data1) or empty($data2) or empty($data3) 
	or empty($jawaban1) or empty($jawaban2) or empty($jawaban3) or empty($jawaban4) or empty($jawaban5) or empty($jawaban6)){

	//simpan data jika validasi gagal
	$_SESSION['data2'] 	= $data2;
	$_SESSION['data3'] 	= $data3;
	
	$_SESSION['jawaban1'] 	= $jawaban1;
	$_SESSION['jawaban2']	= $jawaban2;
	$_SESSION['jawaban3'] 	= $jawaban3;
	$_SESSION['jawaban4'] 	= $jawaban4;
	$_SESSION['jawaban5'] 	= $jawaban5;
	$_SESSION['jawaban6'] 	= $jawaban6;
	
	header("location:../mentor_form4.php?pesan=error1");
	die;
}

if(!is_numeric($jawaban2)){
	header("location:../mentor_form4.php?pesan=error2");
	die;
}

$sql = "INSERT INTO data_form_mentor (username, nomor_form, jawaban1, jawaban2, jawaban3, jawaban4, jawaban5, jawaban6, jawaban7, jawaban8, jawaban9) 
		VALUES ('$username', '4', '$data1', '$data2', '$data3', '$jawaban1', '$jawaban2', '$jawaban3', '$jawaban4', '$jawaban5', '$jawaban6')";
$query = mysqli_query($conn, $sql);

$sql2 = "INSERT INTO history_mentor (nomor_form, judul_form, status, tanggal, username) 
		VALUES ('4', 'Evaluasi', 'selesai', '$tanggal', '$username')";
$query = mysqli_query($conn, $sql2);


if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

unset($_SESSION["data2"]);
unset($_SESSION["data3"]);

unset($_SESSION["jawaban1"]);
unset($_SESSION["jawaban2"]);
unset($_SESSION["jawaban3"]);
unset($_SESSION["jawaban4"]);
unset($_SESSION["jawaban5"]);
unset($_SESSION["jawaban6"]);

echo "Input berhasil";

?>
<br><br>
<a href="../mentor_home.php">Klik disini untuk melanjutkan</a>