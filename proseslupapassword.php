<?php
include ("connection.php");

$email			= $_POST["email"];
$passwordbaru		= $_POST["passwordbaru"];

if (empty($email)){
	die("Maaf, anda harus mengisi email");
}
if (empty($passwordbaru)){
	die("Maaf, anda harus mengisi password baru");
}

$cekdata="select email from user where email='$email'";
$ada=mysqli_query($conn, $cekdata) or die(mysql_error());

if(mysqli_num_rows($ada)>0){
	$sql = "UPDATE tabel_database_user SET password='$passwordbaru' WHERE email='$email'";
	mysqli_query($conn, $sql);
	echo 'Password berhasil diubah';
} else {
	die ('Email tidak terdaftar');
}

?>

<br><br>
<a href="index.php">Home</a>