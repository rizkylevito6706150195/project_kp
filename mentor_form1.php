<link rel="stylesheet" href="style.css">


<div id="mynavigation">
<ul class="navigaton">
	<li><a href="mentor_home.php">Input Data</a>
	<li><a href="mentor_logbook.php">Input Logbook</a>
	<li><a href="mentor_history.php">Lihat History</a>
	<li><a href="mentor_profil.php">Profil</a>
	<li style="float:right"><a href="fungsi/logout.php">Logout</a>
</ul>
</div>

<?php
include ("fungsi/connection.php");
session_start();

/* validasi halaman tanpa login */
if(!isset($_SESSION['username']))
{
    // belum login
    header('Location: index.php');
    exit();
}

/* validasi level user */
if($_SESSION['level'] != 'mentor')
{
	header('Location: index.php');
    exit();
}
?>

<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

input[type=date], select, textarea {
    width: 20%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
}

input[type=submit]:hover {
    background-color: #ff8000;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 0px 100px 100px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>




<?php
$username	= $_SESSION['username'];

//cek db profil
$check=mysqli_query($conn,"select * from profil_mentor where username='$username'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0) {
	echo "Anda sudah mengisi form ini"; //cek
	die;
}



?>

<div class="container">
<form action="fungsi/mentor_form1_proses.php" method="post"><br>
<div class="row">
<?php
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "error1"){
		echo "<br><br><center><h4 style='color:red'>Anda belum mengisi semua form</h4></center>";
	}
	if($_GET['pesan'] == "error2"){
		echo "<br><br><center><h4 style='color:red'>Nippos atau nomor hp harus berupa angka</h4></center>";
	}
}
?>
<center><br><br><br><h3>Form 1 (Personal Detail)</b></h3><br><br><br></center>
 <h4>Data Mentor</h4><br>
 
 <div class="row">
      <div class="col-25"> <label>Nama</label> </div>
      <div class="col-75"> <input type="text" name="nama" value="<?php if(isset($_SESSION['jwb1'])) echo $_SESSION['jwb1']; ?>">   </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label>Nippos</label> </div>
      <div class="col-75"> <input type="text" name="nippos" value="<?php if(isset($_SESSION['jwb2'])) echo $_SESSION['jwb2']; ?>"> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label>Tempat, Tanggal Lahir</label> </div>
      <div class="col-75"> <input type="text" name="ttl" value="<?php if(isset($_SESSION['jwb3'])) echo $_SESSION['jwb3']; ?>"> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label>Kantor</label> </div>
      <div class="col-75"> <input type="text" name="kntr" value="<?php if(isset($_SESSION['jwb5'])) echo $_SESSION['jwb5']; ?>"> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label>Jabatan yang sedang ditempati</label> </div>
      <div class="col-75"> <input type="text" name="jabatan" value="<?php if(isset($_SESSION['jwb4'])) echo $_SESSION['jwb4']; ?>"> </div>
 </div>
 

 
 <div class="row">
      <div class="col-25"> <label>Tanggal mulai bekerja</label> </div>
      <div class="col-75"> <input type="date" name="tglmb" min="1900-01-01"> <!--placeholder="Tanggal/Bulan/Tahun.	Contoh: 1 Januari 2018"--> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label>Jabatan yang pernah ditempati</label> </div>
      <div class="col-75"> <input type="text" name="jabatanypd" value="<?php if(isset($_SESSION['jwb7'])) echo $_SESSION['jwb7']; ?>"> </div>
 </div>
 

 
 <div class="row">
      <div class="col-25"> <label>Pendidikan / Jurusan</label> </div>
      <div class="col-75"> <input type="text" name="pndj" value="<?php if(isset($_SESSION['jwb8'])) echo $_SESSION['jwb8']; ?>"> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label>Alamat E-mail</label> </div>
      <div class="col-75"> <input type="text" name="email" value="<?php if(isset($_SESSION['jwb9'])) echo $_SESSION['jwb9']; ?>"> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label>No. Hp</label> </div>
      <div class="col-75"> <input type="text" name="hp" value="<?php if(isset($_SESSION['jwb10'])) echo $_SESSION['jwb10']; ?>"> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label>Nama <i>Mentee</i></label> </div>
      <div class="col-75"> <input type="text" name="namamentee" value="<?php if(isset($_SESSION['jwb11'])) echo $_SESSION['jwb11']; ?>"> </div>
 </div>
 
 <br><br><br><br>

 
 <h4><i>Project Improvement Report</i></h4><br>
  <i>Judul Proyek</i>	
  <br> <textarea name="jawaban1" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban1'])) echo $_SESSION['jawaban1']; ?></textarea><br><br>
  Latar Belakang atau Alasan Masalah	
  <br> <textarea name="jawaban2" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban2'])) echo $_SESSION['jawaban2']; ?></textarea><br><br>
  <i>Objective</i> dan Target	
  <br> <textarea name="jawaban3" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban3'])) echo $_SESSION['jawaban3']; ?></textarea><br><br>
  Analisa	
  <br> <textarea name="jawaban4" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban4'])) echo $_SESSION['jawaban4']; ?></textarea><br><br>
  Hasil	
  <br> <textarea name="jawaban5" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban5'])) echo $_SESSION['jawaban5']; ?></textarea><br><br>
  Rencana Kegiatan	
  <br> <textarea name="jawaban6" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban6'])) echo $_SESSION['jawaban6']; ?></textarea><br><br>
  Rekomendasi / Kesimpulan	
  <br> <textarea name="jawaban7" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban7'])) echo $_SESSION['jawaban7']; ?></textarea><br><br>
  Rencana Tindak Lanjut	
  <br> <textarea name="jawaban8" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban8'])) echo $_SESSION['jawaban8']; ?></textarea><br><br>


 
 
 <br>
 <center><input type="submit" name="submit" value="Submit"></input></center>
</form>
<div>