<?php 
include ("connection.php");
session_start();

$username	= $_SESSION['username'];



if($_POST['upload']){
	$ekstensi_diperbolehkan	= array('doc','pdf', 'txt', 'rar', 'docx', 'xlsx');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	
 
	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 20000000){			
			move_uploaded_file($file_tmp, 'file/'.$nama);
			$sql	= "INSERT INTO logbook_mentor VALUES('$username', '$nama', NULL)";
			$query = mysqli_query($conn, $sql);
			if($query){
				echo 'FILE BERHASIL DI UPLOAD';
			}else{
				echo 'GAGAL MENGUPLOAD GAMBAR';
			}
		}else{
			echo 'UKURAN FILE TERLALU BESAR';
		}
	}else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}
}
?>