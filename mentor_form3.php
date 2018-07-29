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

//cek history
/*$check=mysqli_query($conn,"select * from history_mentor where username='$username' and nomor_form = '3'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0) {
	echo "Anda sudah mengisi form ini"; //cek
	die;
}*/
?>

<div class="container">
<form action="fungsi/mentor_form3_proses.php" method="post"><br>
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
<center><br><br><br><h3>Form 3</b></h3><br><br><br></center><br><br>


  Sejauh mana pengetahuan anda mengenai pengembangan karir?
  <br> <textarea name="jawaban1" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban1'])) echo $_SESSION['jawaban1']; ?></textarea><br><br>
  Apakah program mentoring dibuat untuk mengembangkan karir?
  <br> <textarea name="jawaban2" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban2'])) echo $_SESSION['jawaban2']; ?></textarea><br><br>
  Apakah mentoring dapat dijadikan sarana pengembangan karir?
  <br> <textarea name="jawaban3" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban3'])) echo $_SESSION['jawaban3']; ?></textarea><br><br>
  Apa yang menjadi tugas dan fungsi mentor
  <br> <textarea name="jawaban4" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban4'])) echo $_SESSION['jawaban4']; ?></textarea><br><br>
  Apakah mentoring dilakukan dengan kurikulum yang telah disusun sebelumnya?
  <br> <textarea name="jawaban5" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban5'])) echo $_SESSION['jawaban5']; ?></textarea><br><br>
  Apakah mentoring sangat diperlukan untuk mengembangkan karir karyawan
  <br> <textarea name="jawaban6" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban6'])) echo $_SESSION['jawaban6']; ?></textarea><br><br>
  Dalam bentuk apa saja pelaksanaan program mentoring?
  <br> <textarea name="jawaban7" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban7'])) echo $_SESSION['jawaban7']; ?></textarea><br><br>
  Strategi apakah yang dilakukan oleh anda dalam upaya untuk mengembangkan karir peserta mentoring?
  <br> <textarea name="jawaban8" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban8'])) echo $_SESSION['jawaban8']; ?></textarea><br><br>
  Bagaimana cara anda menilai dan mengevaluasi dalam setiap kegiatan mentoring?
  <br> <textarea name="jawaban9" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban9'])) echo $_SESSION['jawaban9']; ?></textarea><br><br>
  Adakah standar nilai atau kualifikasi untuk menjadi seorang mentor?
  <br> <textarea name="jawaban10" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban10'])) echo $_SESSION['jawaban10']; ?></textarea><br><br>
  Perubahan seperti apa sajakah yang dialami peserta mentoring setelah mengikuti program ini?
  <br> <textarea name="jawaban11" style="width:800px; height: 200px"><?php if(isset($_SESSION['jawaban11'])) echo $_SESSION['jawaban11']; ?></textarea><br><br>

 <br>
 <center><input type="submit" name="submit" value="Submit"></input></center>
</form>
<div>