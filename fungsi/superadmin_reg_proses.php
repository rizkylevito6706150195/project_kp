<?php
include ("connection.php");

$username	= $_POST["username"];
$password	= $_POST["password"];
$email		= $_POST["email"];
$pin		= $_POST["pin"];
$level		= $_POST["jenisakun"];

if ($username == ""){
	header("location:superadmin_reg.php?username=kosong");
} else
if ($password == ""){
	header("location:superadmin_reg.php?password=kosong");
} else
if ($email == ""){
	header("location:superadmin_reg.php?email=kosong");
} else
if ($pin == ""){
	header("location:superadmin_reg.php?pin=kosong");
}
if (!is_numeric($pin)){
	header("location:superadmin_reg.php?pin=angka");
}
	
function valid_email($email) {
        return !!filter_var($email, FILTER_VALIDATE_EMAIL);
    }
	
if( !valid_email($email) ) {
	die("Format email salah");
}

$cekdata="select username from user where username='$username'";
$ada=mysqli_query($conn, $cekdata) or die(mysql_error());
if(mysqli_num_rows($ada)>0){
	header("location:superadmin_reg.php?username=telahdigunakan");
	die("username telah digunakan");
}

$sqlstr="insert into user (username, password, email, level)
values ('$username', '$password', '$email', '$level')";
$hasil = mysqli_query($conn,$sqlstr);
echo "Registrasi berhasil";

?>
<br><br>
<a href="index.php">Klik disini untuk melanjutkan</a>