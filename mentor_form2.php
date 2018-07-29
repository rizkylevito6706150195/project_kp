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
/*$check=mysqli_query($conn,"select * from history_mentor where username='$username' and nomor_form = '2'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0) {
	echo "Anda sudah mengisi form ini"; //cek
	die;
}*/
?>




<div class="container">
<form action="fungsi/mentor_form2_proses.php" method="post"><br>
<div class="row">
<?php
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "error1"){
		echo "<br><br><center><h4 style='color:red'>Anda belum mengisi semua form</h4></center>";
	}
}
?>
<center><br><br><br><h3>Form 2 (Kuesioner)</b></h3><br><br><br></center><br><br>
 

  <b>1. Saya merasa nyaman saat menyampaikan materi mentoring.</b>
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
  
  <b>2. Mentee diberi kesempatan untuk mempraktekan proses kerja.</b>
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
  
  <b>3. Memberi tahu, menunjukkan, melakukan adalah salah satu cara dalam penyampaian materi.</b>
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
  
  <b>4. Program mentoring telah meningkatkan kesadaran saya mengenai sistem kerja dalam perusahaan.</b>
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
  
  <b>5. Para mentee diperlakukan dengan baik.</b>
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
  
  <b>6. Program mentoring ini bermanfaat.</b>
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
  
  <b>7. <i>Mentee</i> harus menghabiskan lebih banyak waktu untuk mendiskusikan materi.</b>
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
  
  <b>8. Saya meluangkan waktu untuk memastikan para <i>mentee</i> memahami sepenuhnya arah dan praktek kerja sesuai dengan materi yang telah disampaikan.</b>
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
  
  <b>9. Saya akan mendapatkan manfaat dari program <i>mentoring</i> ketika saya masih belum menjadi mentor.</b>
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
  
  <b>10. Setelah mengikuti kegiatan mentoring ini saya lebih proaktif terhadap pekerjaan saya.</b>
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
  
  <b>11. <i>Mentoring telah menyadarkan saya tentang akan pentingnya pengembangan ilmu pengetahuan dalam dunia kerja.</i>.</b>
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
  
  <b>12. <i>Mentoring</i> telah membuat <i>mentee</i> menjadi lebih aktif dalam lingkungan kerjanya.</b>
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
  
 
 <br>
 <center><input type="submit" name="submit" value="Submit"></input></center>
</form>
<div>