<?php
include ("connection.php");

$username			= $_POST["username"];
$email				= $_POST["email"];
$pin				= $_POST["pin"];
$passwordbaru		= $_POST["passwordbaru"];

if (empty($username)){
	header("location:../lupapassword.php?username=kosong");
}
if (empty($email)){
	header("location:../lupapassword.php?email=kosong");
}
if (empty($pin)){
	header("location:../lupapassword.php?pin=kosong");
}
if (empty($passwordbaru)){
	header("location:../lupapassword.php?passwordbaru=kosong");
}


$cekdata="select * from user where username='$username' and email='$email' and pin='$pin'";
$ada=mysqli_query($conn, $cekdata) or die(mysql_error());

if(mysqli_num_rows($ada)>0){
	$sql = "UPDATE user SET password='$passwordbaru' WHERE email='$email'";
	mysqli_query($conn, $sql);
	header("location:../lupapassword.php?pesan=berhasil");
	//echo 'Password berhasil diubah';
} else {
	header("location:../lupapassword.php?pesan=gagal");
	//die ('Username, email, atau PIN salah');
}

?>

<br><br>
<a href="index.php">Home</a>