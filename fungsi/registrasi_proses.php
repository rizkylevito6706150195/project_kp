<?php
include ("connection.php");

$username	= $_POST["username"];
$password	= $_POST["password"];
$email		= $_POST["email"];
$pin		= $_POST["pin"];
$level		= 'user_mentee';

if ($username == ""){
	header("location:../registrasi.php?username=kosong");
} else
if ($password == ""){
	header("location:../registrasi.php?password=kosong");
} else
if ($email == ""){
	header("location:../registrasi.php?email=kosong");
} else
if ($pin == ""){
	header("location:../registrasi.php?pin=kosong");
}
if (!is_numeric($pin)){
	header("location:../registrasi.php?pin=angka");
}
	
function valid_email($email) {
        return !!filter_var($email, FILTER_VALIDATE_EMAIL);
    }
	
if( !valid_email($email) ) {
	die("Format email salah");
}

$cekdata="select username from user where username='$username'";
$cekdata2="select email from user where email='$email'";
$ada=mysqli_query($conn, $cekdata) or die(mysql_error());
$ada2=mysqli_query($conn, $cekdata2) or die(mysql_error());
if(mysqli_num_rows($ada)>0){
	header("location:../registrasi.php?pesan=usernametelahdigunakan");
	die;
	//die("username telah digunakan");
}
if(mysqli_num_rows($ada2)>0){
	header("location:../registrasi.php?pesan=emailtelahdigunakan");
	die;
	//die("username telah digunakan");
}

$sqlstr="insert into user (username, password, email, level)
values ('$username', '$password', '$email', '$level')";
$hasil = mysqli_query($conn,$sqlstr);
echo "Registrasi berhasil";

?>
<br><br>
<a href="../index.php">Klik disini untuk melanjutkan</a>