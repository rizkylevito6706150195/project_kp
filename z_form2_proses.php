<?php
include ("connection.php");
session_start();


/* validasi halaman tanpa login */
if ($_SESSION['status'] = ''){
header("Location:./index.php");
}

$nama_mentee		= $_SESSION['nama'];
$nomor_form 		= 2;
$date			 	= "";

$username	= $_SESSION['username'];
$jawaban1	= $_POST['jawaban1'];
$jawaban2	= $_POST['jawaban2'];
$jawaban3	= $_POST['jawaban3'];
$jawaban4	= $_POST['jawaban4'];
$jawaban5	= $_POST['jawaban5'];



$sql = "INSERT INTO data_form_mentee (nama_mentee, nomor_form, jawaban1, jawaban2, jawaban3, jawaban4, jawaban5) VALUES ('$nama_mentee', '$nomor_form', '$jawaban1', '$jawaban2', '$jawaban3', '$jawaban4', '$jawaban5')";
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo "Input berhasil";
?>