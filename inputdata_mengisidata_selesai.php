<?php

include ("connection.php");
session_start();

$username	= $_SESSION['username'];
$jawaban	= $_POST['jawaban'];
$val		= $_SESSION['form'];
$tanggal	= date("Y-m-d H:i:s");

//sudah bisa menampilkan, belum bisa memasukkan data ke database berdasarkan user
$sql = "INSERT INTO data_form_mentee (nama_mentee, nomor_form, id_pertanyaan, jawaban) VALUES ('$username',nomor_form,id_pertanyaan,$jawaban)";
//$sql = "INSERT INTO history_mentee (nomor_form, judul_form, status, tanggal) VALUES ('$val',judul_form,'selesai',$tanggal)";

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>