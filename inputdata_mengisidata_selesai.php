<?php

include ("connection.php");
session_start();

$username = $_SESSION['username'];


//sudah bisa menampilkan, belum bisa memasukkan data ke database berdasarkan user
$sql = "INSERT INTO data_form_mentee (nama_mentee, nomor_form, id_pertanyaan, jawaban) VALUES ('$username',nomor_form,id_pertanyaan,jawaban)";



$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>