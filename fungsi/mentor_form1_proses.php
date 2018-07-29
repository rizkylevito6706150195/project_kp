<?php
include ("connection.php");
session_start();


/* validasi halaman tanpa login */
if ($_SESSION['status'] = ''){
header("Location:./index.php");
}

$username	= $_SESSION['username'];

$nama		= $_POST['nama'];
$nippos 	= $_POST['nippos'];
$ttl 		= $_POST['ttl'];
$kntr 		= $_POST['kntr'];
$jabatan 	= $_POST['jabatan'];
$tglmbx 	= $_POST['tglmb'];			$tglmb = date("d-m-Y", strtotime($tglmbx));
$jabatanypd	= $_POST['jabatanypd'];
$pndj 		= $_POST['pndj'];
$email 		= $_POST['email'];
$hp 		= $_POST['hp'];
$namamentee	= $_POST['namamentee'];
$periode1x	= $_POST['periode1'];		$periode1 = date("d-m-Y", strtotime($periode1x));
$periode2x	= $_POST['periode2'];		$periode2 = date("d-m-Y", strtotime($periode2x));

$jawaban1	= $_POST['jawaban1'];
$jawaban2	= $_POST['jawaban2'];
$jawaban3	= $_POST['jawaban3'];
$jawaban4	= $_POST['jawaban4'];
$jawaban5	= $_POST['jawaban5'];
$jawaban6	= $_POST['jawaban6'];
$jawaban7	= $_POST['jawaban7'];
$jawaban8	= $_POST['jawaban8'];



//untuk history
date_default_timezone_set("ASIA/JAKARTA");
$tanggal	= date("l, d-m-Y, H:i:s");

if(empty($nama) or empty($nippos) or empty($ttl) or empty($kntr) or empty($jabatan) or empty($tglmb) or empty($jabatanypd) or empty($pndj) or empty($email) or empty($hp) 
	or empty($namamentee) or empty($periode1) or empty($periode2) 
	or empty($jawaban1) or empty($jawaban2) or empty($jawaban3) or empty($jawaban4) or empty($jawaban5) or empty($jawaban6) or empty($jawaban7) or empty($jawaban8)){
	/*echo "anda belum melengkapi semua form"; 
	$kembali = 'form1.php';
	echo "<br><br>"; 
	echo "<a href='".$kembali."'>Kembali</a>";
	die;*/
	
	/* simpan data jika validasi gagal */
	$_SESSION['jwb1']	= $nama;
	$_SESSION['jwb2'] 	= $nippos;
	$_SESSION['jwb3'] 	= $ttl;
	$_SESSION['jwb4'] 	= $kntr;
	$_SESSION['jwb5'] 	= $jabatan;
	$_SESSION['jwb6'] 	= $tglmb;
	$_SESSION['jwb7'] 	= $jabatanypd;
	$_SESSION['jwb8'] 	= $pndj;
	$_SESSION['jwb9']	= $email;
	$_SESSION['jwb10']	= $hp;
	$_SESSION['jwb11']	= $namamentee;
	$_SESSION['jwb12']	= $periode1;
	$_SESSION['jwb13']	= $periode2;

	$_SESSION['jawaban1'] 	= $jawaban1;
	$_SESSION['jawaban2']	= $jawaban2;
	$_SESSION['jawaban3'] 	= $jawaban3;
	$_SESSION['jawaban4'] 	= $jawaban4;
	$_SESSION['jawaban5'] 	= $jawaban5;
	$_SESSION['jawaban6'] 	= $jawaban6;
	$_SESSION['jawaban7'] 	= $jawaban7;
	$_SESSION['jawaban8'] 	= $jawaban8;
	
	header("location:../mentor_form1.php?pesan=error1");
	die;
}

if(!is_numeric($nippos) or !is_numeric($hp)){
	header("location:../mentor_form1.php?pesan=error2");
	die;
}



function valid_email($email) {
        return !!filter_var($email, FILTER_VALIDATE_EMAIL);
    }
	



$sql1 = "INSERT INTO profil_mentor (username, nama, nippos, tempat_tanggal_lahir, kantor, jabatan_yang_sedang_ditempati, tgl_mulai_bekerja, jabatan_yang_pernah_ditempati, 
		pendidikan_jurusan, alamat_email, no_hp, nama_mentee, periode_awal, periode_akhir) 
		VALUES ('$username', '$nama', '$nippos', '$ttl', '$kntr', '$jabatan', '$tglmb', '$jabatanypd', 
				'$pndj', '$email', '$hp', '$namamentee', '$periode1', '$periode2')";
$query = mysqli_query($conn, $sql1);

$sql2 = "INSERT INTO data_form_mentor (username, nomor_form, jawaban1, jawaban2, jawaban3, jawaban4, jawaban5, jawaban6, jawaban7, jawaban8) 
		VALUES ('$username', '1', '$jawaban1', '$jawaban2', '$jawaban3', '$jawaban4', '$jawaban5', '$jawaban6', '$jawaban7', '$jawaban8')";
$query = mysqli_query($conn, $sql2);

$sql3 = "INSERT INTO history_mentor (nomor_form, judul_form, status, tanggal, username) 
		VALUES ('1', 'Personal Detail', 'selesai', '$tanggal', '$username')";
$query = mysqli_query($conn, $sql3);



if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

unset($_SESSION["jwb1"]);
unset($_SESSION["jwb2"]);
unset($_SESSION["jwb3"]);
unset($_SESSION["jwb4"]);
unset($_SESSION["jwb5"]);
unset($_SESSION["jwb6"]);
unset($_SESSION["jwb7"]);
unset($_SESSION["jwb8"]);
unset($_SESSION["jwb9"]);
unset($_SESSION["jwb10"]);
unset($_SESSION["jwb11"]);

unset($_SESSION["jawaban1"]);
unset($_SESSION["jawaban2"]);
unset($_SESSION["jawaban3"]);
unset($_SESSION["jawaban4"]);
unset($_SESSION["jawaban5"]);
unset($_SESSION["jawaban6"]);
unset($_SESSION["jawaban7"]);
unset($_SESSION["jawaban8"]);

echo "Input berhasil";

?>
<br><br>
<a href="../mentor_home.php">Klik disini untuk melanjutkan</a>