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
		if($row['level'] == 'user_mentee'){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = 'login';
			header("location:home_mt.php");
		}else if ($row['level'] == 'user_mentor'){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = 'login';
			header("location:home_mentor.php");
		}else if ($row['level'] == 'admin_regional'){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = 'login';
			header("location:home_admin_regional.php");
		}else if ($row['level'] == 'admin_pusat'){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = 'login';
			header("location:home_admin_pusat.php");
		}else if ($row['level'] == 'superadmin'){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = 'login';
			header("location:home_superadmin.php");
		}
	}
}
?>