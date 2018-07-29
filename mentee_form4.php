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
/*$check=mysqli_query($conn,"select * from history_mentee where username='$username' and nomor_form = '4'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0) {
	header("location:mentee_home.php?pesan=error1");
	die;
}*/
?>

<div class="container">
<form action="fungsi/mentee_form4_proses.php" method="post"><br>
<div class="row">
<?php
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "error1"){
		echo "<br><br><center><h4 style='color:red'>Anda belum mengisi semua form</h4></center>";
	}
}
?>

<center><br><br><br><h3>Form 4 (Evaluasi Mentee)</b></h3><br><br><br></center><br>
 
 <div class="row">
      <div class="col-25"> <label>Tanggal</label> </div>
      <div class="col-75"> <input type="date" name="data1" min="1900-01-01"></div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label>Nama Mentor</label> </div>
      <div class="col-75"> <input type="text" name="data2" value="<?php if(isset($_SESSION['data2'])) echo $_SESSION['data2']; ?>">   </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label>Nama Mentee</label> </div>
      <div class="col-75"> <input type="text" name="data3" value="<?php if(isset($_SESSION['data3'])) echo $_SESSION['data3']; ?>">   </div>
 </div>
 
 <br><br><br><br>


  1. Apakah anda mendapatkan manfaat dari diadakannya program ini?
  <br> <textarea name="jawaban1" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban1'])) echo $_SESSION['jawaban1']; ?></textarea><br><br>
  
  2. Dari skala 1-5 bagaimana anda menilai pembimbing anda? Mengapa? (1: sangat tidak puas - 5:sangat puas)
  <br> <textarea name="jawaban2" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban2'])) echo $_SESSION['jawaban2']; ?></textarea><br><br>
  
  3. Bagaimana anda berkomunikasi dengan mentor?
  <br> <textarea name="jawaban3" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban3'])) echo $_SESSION['jawaban3']; ?></textarea><br><br>
  
  4. Perubahan apa yang akan anda lakukan setelah mengikuti program ini?
  <br> <textarea name="jawaban4" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban4'])) echo $_SESSION['jawaban4']; ?></textarea><br><br>
  
  5. Seberapa sering kamu bertemu dengan mentor? apakah waktu yang disediakan cukup?
  <br> <textarea name="jawaban5" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban5'])) echo $_SESSION['jawaban5']; ?></textarea><br><br>
  
  6. Apakah anda sudah menerima dukungan dari atasan anda saat berpartisipasi dalam program ini?
  <br> <textarea name="jawaban6" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban6'])) echo $_SESSION['jawaban6']; ?></textarea><br><br>
  
  7. Apakah ada pelatihan tambahan yang akan membuat perusahaan ini lebih sukses?
  <br> <textarea name="jawaban7" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban7'])) echo $_SESSION['jawaban7']; ?></textarea><br><br>
  <br>
 <center><input type="submit" name="submit" value="Submit"></input></center>
</form>
<div>