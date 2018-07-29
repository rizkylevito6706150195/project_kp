<link rel="stylesheet" href="style.css">
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

<ul>
	<li><a href="mentee_home.php">Input Data</a>
	<li><a href="mentee_history.php">Lihat History</a>
	<li><a href="mentee_profil.php">Profil</a>
	<li style="float:right"><a href="fungsi/logout.php">Logout</a>
</ul>

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
if($_SESSION['level'] != 'mentee')
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

//cek history
/*$check=mysqli_query($conn,"select * from history_mentee where username='$username' and nomor_form = '2'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0) {
	header("location:mentee_home.php?pesan=error1");
	die;
}*/
?>

<div class="container">
<form action="fungsi/mentee_form2_proses.php" method="post"><br>
<div class="row">
<?php
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "error1"){
		echo "<br><br><center><h4 style='color:red'>Anda belum mengisi semua form</h4></center>";
	}
	if($_GET['pesan'] == "error2"){
		echo "<br><br><center><h4 style='color:red'>Nippos harus berupa angka</h4></center>";
	}
}
?>
<center><br><br><br><h3>Form 2</b></h3><br><br><br></center><br>
 
 <div class="row">
      <div class="col-25"> <label><b>Nama</b></label> </div>
      <div class="col-75"> <input type="text" name="nama" value="<?php if(isset($_SESSION['jawaban1'])) echo $_SESSION['jawaban1']; ?>">   </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label><b>Nippos</b></label> </div>
      <div class="col-75"> <input type="text" name="nippos" value="<?php if(isset($_SESSION['jawaban2'])) echo $_SESSION['jawaban2']; ?>">   </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label>Judul Project</label> </div>
      <div class="col-75"> <input type="text" name="judulproject" value="<?php if(isset($_SESSION['jawaban3'])) echo $_SESSION['jawaban3']; ?>"> </div>
 </div>
 
 <br><br><br><br>


  Latar Belakang atau Masalah
  <br> <textarea name="jawaban4" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban4'])) echo $_SESSION['jawaban4']; ?></textarea><br><br>
  
  <i>Objective</i> & Target 
  <br> <textarea name="jawaban5" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban5'])) echo $_SESSION['jawaban5']; ?></textarea><br><br>
  
  Analisis
  <br> <textarea name="jawaban6" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban6'])) echo $_SESSION['jawaban6']; ?></textarea><br><br>
  
  Rencana Kegiatan
  <br> <textarea name="jawaban7" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban7'])) echo $_SESSION['jawaban7']; ?></textarea><br><br>
  
  Hasil
  <br> <textarea name="jawaban8" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban8'])) echo $_SESSION['jawaban8']; ?></textarea><br><br>
  
  Rencana Tindak Lanjut
  <br> <textarea name="jawaban9" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban9'])) echo $_SESSION['jawaban9']; ?></textarea><br><br>
  
  Rekomendasi / Kesimpulan
  <br> <textarea name="jawaban10" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban10'])) echo $_SESSION['jawaban10']; ?></textarea><br><br>
  
  Metode seperti apa yang sering digunakan oleh mentor?
  <br> <textarea name="jawaban11" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban11'])) echo $_SESSION['jawaban11']; ?></textarea><br><br>
  
  Apakah anda merasa diberikan cukup pelatihan untuk mendukung kerja anda?
  <br> <textarea name="jawaban12" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban12'])) echo $_SESSION['jawaban12']; ?></textarea><br><br>
  
  Bagaimana proses mentoring yang dilakukan PT. Pos?
  <br><br>
  <input type="radio" name="form2pilihan" value="a. Sudak baik / perlu dipertahankan"> a. Sudah baik / perlu dipertahankan
  <br><br>
  <input type="radio" name="form2pilihan" value="b. Sudah baik, tetapi masih ada kekurangan"> b. Sudah baik, tetapi masih ada kekurangan
  <br><br>
  <input type="radio" name="form2pilihan" value="c. Kurang baik, perlu ada yang diperbaiki"> c. Kurang baik, perlu ada yang diperbaiki
  <br><br>
  <input type="radio" name="form2pilihan" value="d. Buruk"> d. Buruk
  <br><br>
  <br><br>
  
  Proses mentoring menurut anda apakah itu memberikan dampak terhadap peningkatan kinerja dan pengembangan diri?
  <br> <textarea name="jawaban14" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban14'])) echo $_SESSION['jawaban14']; ?></textarea><br><br>
  
  Apa yang ingin anda capai setelah mengikuti mentoring?
  <br> <textarea name="jawaban15" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban15'])) echo $_SESSION['jawaban15']; ?></textarea><br><br>
  
  Apa kegiatan yang telah dicapai, dalam proses dengan mentor?
  <br> <textarea name="jawaban16" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban16'])) echo $_SESSION['jawaban16']; ?></textarea><br><br>
  
  Adakah dukungan yang diberikan untuk menyelesaikan tugas ini?
  <br> <textarea name="jawaban17" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban17'])) echo $_SESSION['jawaban17']; ?></textarea><br><br>
  
  Program yang direncanakan menurut anda apakah sudah efektif?
  <br> <textarea name="jawaban18" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban18'])) echo $_SESSION['jawaban18']; ?></textarea><br><br>
  
  Apakah anda memiliki saran untuk proses mentoring lebih baik lagi kedepannya?
  <br> <textarea name="jawaban19" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban19'])) echo $_SESSION['jawaban19']; ?></textarea><br><br>
  <br>
 <center><input type="submit" name="submit" value="Submit"></input></center>
</form>
<div>