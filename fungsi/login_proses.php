<?php
include ("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)){
	header("location:../index.php?username=kosong");
	die;
} else
if (empty($password)){
	header("location:../index.php?password=kosong");
	die;
}


$query = mysqli_query($conn, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
	
if($cek == 0){
	header("location:../index.php?usernamepassword=salah");
	die;
} else{
	$row = mysqli_fetch_assoc($query);
		if($row['level'] == 'user_mentee'){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = 'login';
			$_SESSION['level'] = 'mentee';
			header("location:../mentee_home.php");
		}
		else if ($row['level'] == 'user_mentor'){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = 'login';
			$_SESSION['level'] = 'mentor';
			header("location:../mentor_home.php");
		} 
		else if ($row['level'] == 'admin_regional'){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = 'login';
			$_SESSION['level'] = 'admin_regional';
			header("location:../admin_home.php");
		} 
		else if ($row['level'] == 'admin_pusat'){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = 'login';
			$_SESSION['level'] = 'admin_pusat';
			header("location:../admin_home.php");
		} 
		else if ($row['level'] == 'superadmin'){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = 'login';
			$_SESSION['level'] = 'superadmin';
			header("location:../superadmin.php");
		}
	}
?>