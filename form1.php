<link rel="stylesheet" href="style.css">
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

<ul>
	<li><a href="mentee_home.php">Input Data</a>
	<li><a href="mentee_history.php">Lihat History</a>
	<li><a href="mentee_profil.php">Profil</a>
	<li style="float:right"><a href="logout.php">Logout</a>
</ul>

<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
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
    padding: 100px;
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

include ("connection.php");
session_start();

/* validasi halaman tanpa login */
if ($_SESSION['status'] = ''){
header("Location:./index.php");
}

?>

<div class="container">
<form action="form1_proses.php" method="post"><br>
<div class="row">
<center><h3>Form 1</h3><br><br><br></center>
 <h4>Data Mentee</h4><br>
 
 <div class="row">
      <div class="col-25"> <label for="fname">Nama</label> </div>
      <div class="col-75"> <input type="text" name="nama"> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label for="fname">Nippos</label> </div>
      <div class="col-75"> <input type="text" name="nippos"> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label for="fname">Kantor</label> </div>
      <div class="col-75"> <input type="text" name="kntr"> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label for="fname">Tanggal mulai bekerja</label> </div>
      <div class="col-75"> <input type="text" name="tglmb"> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label for="fname">Pendidikan / jurusan</label> </div>
      <div class="col-75"> <input type="text" name="pndj"> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label for="fname">Alamat email</label> </div>
      <div class="col-75"> <input type="text" name="email"> </div>
 </div>
 
 <div class="row">
      <div class="col-25"> <label for="fname">Nomor HP</label> </div>
      <div class="col-75"> <input type="text" name="hp"> </div>
 </div>
 
 <br><br><br><br>

 
 <h4>Setting Your Goals and Objective</h4><br>
  Goal	
  <br> <textarea id="subject" name="jawaban1" style="width:800px; height: 200px"></textarea><br><br>
  
  Learner Objectives
  <br>
  <b>S</b>pecific	
  <br>
  <b>M</b>easurable
  <br>
  <b>A</b>chievable	
  <br>
  <b>R</b>ealistic	
  <br>
  <b>T</b>ime Bound  
  <br> <textarea id="subject" name="jawaban2" style="width:800px; height: 200px"></textarea><br><br>
  
  
  Reality - apa kaitannya dari tingkatan saya ini dengan tujuan saya?
  <br> <textarea id="subject" name="jawaban3" style="width:800px; height: 200px"></textarea><br><br>
  
  Obstacles - apa yang mungkin menjadi penghalang dalam mencapai tujuan?
  <br> <textarea id="subject" name="jawaban4" style="width:800px; height: 200px"></textarea><br><br>
  
  Options - apa yang bisa saya lakukan untuk bergerak menuju tujuan dan sasaran?
  <br> <textarea id="subject" name="jawaban5" style="width:800px; height: 200px"></textarea><br><br>
  
  What will I do? - mengidentifikasi opsi-opsi yang akan membawa anda lebih dekat dengan tujuan anda:<br>
  a. Kapan saya harus melakukannya?<br>
  b. SIapa saja yang bisa membantu saya?<br>
  <br> <textarea id="subject" name="jawaban6" style="width:800px; height: 200px"></textarea><br><br>
  
  Identifying Your Strengths - identifikasi kekuatan anda jika atasan anda ingin merekrut anda?
  <br> <textarea id="subject" name="jawaban7" style="width:800px; height: 200px"></textarea><br><br>
  
  Identifying Your Personal Development Expectation<br>
  - apa saja keterampilan utama yang ingin anda kembangkan selama penempatan kerja?
  <br> <textarea id="subject" name="jawaban8" style="width:800px; height: 200px"></textarea><br><br>
 
 
 <br>
 <center><input type="submit" name="submit" value="Submit"></input></center>
</form>
<div>