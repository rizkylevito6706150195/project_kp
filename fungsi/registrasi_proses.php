<?php
include ("connection.php");

$username	= $_POST["username"];
$password	= $_POST["password"];
$email		= $_POST["email"];
$pin		= $_POST["pin"];
$level		= 'user_mentee';


if ($username == ""){
	header("location:../registrasi.php?username=kosong");
	die;
} else if ($password == ""){
	header("location:../registrasi.php?password=kosong");
	die;
} else if ($email == ""){
	header("location:../registrasi.php?email=kosong");
	die;
} else if ($pin == ""){
	header("location:../registrasi.php?pin=kosong");
	die;
} else if (!is_numeric($pin)){
	header("location:../registrasi.php?pin=angka");
	die;
}


function valid_email($email) {
        return !!filter_var($email, FILTER_VALIDATE_EMAIL);
    }
if( !valid_email($email) ) {
	die;
}

$cekdata="select username from user where username='$username'";
$cekdata2="select email from user where email='$email'";
$ada=mysqli_query($conn, $cekdata) or die(mysql_error());
$ada2=mysqli_query($conn, $cekdata2) or die(mysql_error());
if(mysqli_num_rows($ada)>0){
	header("location:../registrasi.php?pesan=usernametelahdigunakan");
	die;
}
if(mysqli_num_rows($ada2)>0){
	header("location:../registrasi.php?pesan=emailtelahdigunakan");
	die;
}

$sqlstr="insert into user (username, password, email, level)
values ('$username', '$password', '$email', '$level')";
$hasil = mysqli_query($conn,$sqlstr);
header("location:../registrasi.php?pesan=registrasiberhasil");
?>