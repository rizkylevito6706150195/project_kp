<?php
include ("connection.php");

$username			= $_POST["username"];
$email				= $_POST["email"];
$pin				= $_POST["pin"];
$passwordbaru		= $_POST["passwordbaru"];


function valid_email($email) {
        return !!filter_var($email, FILTER_VALIDATE_EMAIL);
    }

if (empty($username)){
	header("location:../lupapassword.php?username=kosong");
	die;
} else if (empty($email)){
	header("location:../lupapassword.php?email=kosong");
	die;
} else if( !valid_email($email) ) {
	header("location:../lupapassword.php?email=salah");
	die;
}
	else if (empty($pin)){
	header("location:../lupapassword.php?pin=kosong");
	die;
} else if (empty($passwordbaru)){
	header("location:../lupapassword.php?passwordbaru=kosong");
	die;
}





$cekdata="select * from user where username='$username' and email='$email' and pin='$pin'";
$ada=mysqli_query($conn, $cekdata) or die(mysql_error());

if(mysqli_num_rows($ada)>0){
	$sql = "UPDATE user SET password='$passwordbaru' WHERE email='$email'";
	mysqli_query($conn, $sql);
	header("location:../lupapassword.php?pesan=berhasil");
} else {
	header("location:../lupapassword.php?pesan=gagal");
	die;
}
?>
<br><br>
<a href="index.php">Home</a>