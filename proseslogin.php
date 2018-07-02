<?php
include ("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];
$usernamepassword = "";
$_SESSION['status'] = "";

if ($username == ""){
	header("location:index.php?username=kosong");
} else
if ($password == ""){
	header("location:index.php?password=kosong");
} else

$query = mysqli_query($conn, "select * from user where username='$username' and password='$password'");

if($query === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
	
$cek = mysqli_num_rows($query);

if ($username != "" && $password != ""){
if($cek == 0){
	header("location:index.php?usernamepassword=salah");
	//echo 'Username atau password salah';
} else{
	$row = mysqli_fetch_assoc($query);
		if($row['level'] == 1){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = 'login';
			header("location:home_mentor.php");
		}else{
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = 'login';
			header("location:home_mt.php");
		}
	}
}
?>