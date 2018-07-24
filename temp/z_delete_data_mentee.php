<?php
include ("../fungsi/connection.php");
$sql1 = "TRUNCATE TABLE data_form_mentee";
mysqli_query($conn, $sql1);
$sql2 = "TRUNCATE TABLE profil";
mysqli_query($conn, $sql2);
$sql3 = "TRUNCATE TABLE history_mentee";
mysqli_query($conn, $sql3);

echo 'Database pada tabel telah dihapus';
?>

<br><br>
<a href="z_testing.php">Back</a>