<?php
include ("connection.php");
session_start();
include('fungsi.php');

/* validasi halaman tanpa login */
if ($_SESSION['status'] = ''){
header("Location:./index.php");
}

$username	= $_SESSION['username'];
$nama		= $_POST['nama'];
$nippos 	= $_POST['nippos'];
$kntr 		= $_POST['kntr'];
$tglmb 		= $_POST['tglmb'];
$pndj 		= $_POST['pndj'];
$email 		= $_POST['email'];
$hp 		= $_POST['hp'];

$jawaban1	= $_POST['jawaban1'];
$jawaban2	= $_POST['jawaban2'];
$jawaban3	= $_POST['jawaban3'];
$jawaban4	= $_POST['jawaban4'];
$jawaban5	= $_POST['jawaban5'];
$jawaban6	= $_POST['jawaban6'];
$jawaban7	= $_POST['jawaban7'];
$jawaban8	= $_POST['jawaban8'];


$nomor_form = 1;
date_default_timezone_set("ASIA/JAKARTA");
$tanggal	= date("l, Y-m-d, H:i:s");

//cek
$check=mysqli_query($conn,"select * from profil where username='$username'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0) {
	echo "Anda sudah mengisi form ini"; //cek
	redirect('Selamat, data berhasil diinput', '/mysql/tampil.php');
} else {
$sql1 = "INSERT INTO profil (username, nama, nip, kantor, tgl_mulai_bekerja, pendidikan_jurusan, alamat_email, no_hp) 
		VALUES ('$username', '$nama', '$nippos', '$kntr', '$tglmb', '$pndj', '$email', '$hp' )";
$query = mysqli_query($conn, $sql1);

$sql2 = "INSERT INTO data_form_mentee (nama_mentee, nomor_form, jawaban1, jawaban2, jawaban3, jawaban4, jawaban5, jawaban6, jawaban7, jawaban8, jawaban9, jawaban10) 
		VALUES ('$nama', '1', '$jawaban1', '$jawaban2', '$jawaban3', '$jawaban4', '$jawaban5', '$jawaban6', '$jawaban7', '$jawaban8', '-', '-' )";
$query = mysqli_query($conn, $sql2);

$sql3 = "INSERT INTO history_mentee (nomor_form, judul_form, status, tanggal, username) 
		VALUES ('1', 'Form data diri', 'selesai', '$tanggal', '$username')";
$query = mysqli_query($conn, $sql3);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
echo "Input berhasil";
}
?>