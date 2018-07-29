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
    background-color: white;
    padding: 0px 120px 100px;
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
$check=mysqli_query($conn,"select * from history_mentee where username='$username' and nomor_form = '3'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0) {
	header("location:mentee_home.php?pesan=error1");
	die;
}
?>

<div class="container">
<form action="fungsi/mentee_form3_proses.php" method="post"><br>
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
<center><br><br><br><h3>Form 3 (Kuesioner Mentee)</b></h3><br><br><br></center><br><br>
 

  <b>1. Saya banyak menghabiskan waktu bersama mentor setiap hari.</b>
  <br><br>
  <input type="radio" name="jawaban1" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban1" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban1" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban1" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>2. Saya Banyak belajar.</b>
  <br><br>
  <input type="radio" name="jawaban2" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban2" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban2" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban2" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>3. Konsep dijelaskan dengan jelas.</b>
  <br><br>
  <input type="radio" name="jawaban3" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban3" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban3" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban3" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>4. Saya diberi kesempatan untuk mempraktekan proses kerja baru</b>
  <br><br>
  <input type="radio" name="jawaban4" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban4" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban4" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban4" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>5. Ketika saya mengalami kesulitan, saya menerima bantuan.</b>
  <br><br>
  <input type="radio" name="jawaban5" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban5" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban5" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban5" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>6. Mentor memberikan dukungan penuh kepada saya.</b>
  <br><br>
  <input type="radio" name="jawaban6" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban6" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban6" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban6" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>7. Mentor (senior) saya memberi bantuan pada mereka yang bekerja keras di organisasi ini.</b>
  <br><br>
  <input type="radio" name="jawaban7" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban7" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban7" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban7" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>8. Mentor saya senang dalam membimbing dan mengarahkan pekerja.</b>
  <br><br>
  <input type="radio" name="jawaban8" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban8" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban8" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban8" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>9. Mentor memberikan perlakuan baik kepada saya seperti kepada karyawan lainnya.</b>
  <br><br>
  <input type="radio" name="jawaban9" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban9" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban9" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban9" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>10. Mentor memberikan motivasi untuk membangun perusahaan ini</b>
  <br><br>
  <input type="radio" name="jawaban10" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban10" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban10" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban10" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>11. Mentor membantu dalam mengkoordinasikan tujuan profesional perusahaan ini.</b>
  <br><br>
  <input type="radio" name="jawaban11" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban11" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban11" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban11" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>12. Mentor memberikan pelatihan ekstra untuk pengembangan karir di perusahaan ini.</b>
  <br><br>
  <input type="radio" name="jawaban12" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban12" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban12" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban12" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>13. Mentor mampu memberikan peranan penting dalam peningkatan kinerja saya.</b>
  <br><br>
  <input type="radio" name="jawaban13" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban13" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban13" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban13" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>14. Mentor memberikan sosialisasi dalam pekerjaan.</b>
  <br><br>
  <input type="radio" name="jawaban14" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban14" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban14" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban14" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>15. Mentor menganggap program ini efektif dalam peningkatan kinerja karyawan</b>
  <br><br>
  <input type="radio" name="jawaban15" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban15" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban15" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban15" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  
  <b>16. Mentor saya memperhatikan kepentingan pekerjaan dalam karir saya</b>
  <br><br>
  <input type="radio" name="jawaban16" value="Sangat Setuju"> Sangat Setuju
  <br><br>
  <input type="radio" name="jawaban16" value="Setuju"> Setuju
  <br><br>
  <input type="radio" name="jawaban16" value="Tidak Setuju"> Tidak Setuju
  <br><br>
  <input type="radio" name="jawaban16" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
  <br><br>
  <br><br>
  <br>
 <center><input type="submit" name="submit" value="Submit"></input></center>
</form>
<div>