<link rel="stylesheet" href="style.css">



<ul>
	<li><a href="superadmin.php">Lihat Data Admin</a>
	<li><a href="superadmin_reg.php">Registrasi Admin</a>
	<li style="float:right"><a href="fungsi/logout.php">Logout</a>
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
    
	position:relative;
    top:50%; 
    left:50%;
	margin-top: 30px;
}

input[type=submit]:hover {
    
}

.container {
    border-radius: 5px;
    
    padding: 20px;
}

.col-25 {
    float: left;
    width: 15%;
    margin-top: 6px;
	margin-left: 320px;
}

.col-75 {
    float: left;
    width: 35%;
    margin-top: 6px;
}

input[type=radio] {
	margin-top: 20px;
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

<br><br><br><br>
<center><h2>Registrasi Admin </h2></center>
<br><br>


<!-- validasi registrasi -->
<?php
include ("fungsi/connection.php");


if(isset($_GET['username'])){
	if($_GET['username'] == "kosong"){
		echo "<br><br><center><h5 style='color:red'>Username belum dimasukkan</h5></center>";
	}
	if($_GET['username'] == "telahdigunakan"){
		echo "<br><br><center><h5 style='color:red'>Username telah digunakan</h5></center>";
	}
}
if(isset($_GET['password'])){
	if($_GET['password'] == "kosong"){
		echo "<br><br><center><h5 style='color:red'>Password belum dimasukkan</h5></center>";
	}
}
if(isset($_GET['email'])){
	if($_GET['email'] == "kosong"){
		echo "<br><br><center><h5 style='color:red'>Email belum dimasukkan</h5></center>";
	}
}
if(isset($_GET['pin'])){
	if($_GET['pin'] == "kosong"){
		echo "<br><br><center><h5 style='color:red'>PIN belum dimasukkan</h5></center>";
	}
	if($_GET['pin'] == "angka"){
		echo "<br><br><center><h5 style='color:red'>PIN harus berupa angka</h5></center>";
	}
}

?>



<div class="container">
<form action="fungsi/superadmin_reg_proses.php" method="post"><br>
	<div class="row">
      <div class="col-25">
        <label for="fname">Username</label>
      </div>
      <div class="col-75">
        <input type="text" name="username">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="text" name="password">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" name="email">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="lname">PIN</label>
      </div>
      <div class="col-75">
        <input type="text" name="pin">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="lname">Jenis Akun</label>
      </div>
      <div>
		<input type="radio" name="jenisakun" value="admin_pusat">Admin Pusat
		<input type="radio" name="jenisakun" value="admin_regional" style="margin-left: 20">Admin Regional 
      </div>
    </div>
	
	
	 
	
 <input type="submit" name="submit" value="Submit"></input>
</form>
</div>












<!--<center><h2>Form 2 </h2></center>
<div>
<form action="z_form2_proses.php" method="post"><br>

 Username		: <input type="text" name="jawaban1"></input><br/><br>
 Email			: <input type="text" name="jawaban2"></input><br/><br>
 Password		: <input type="text" name="jawaban3"></input><br/><br>
 PIN			: <input type="text" name="jawaban4"></input><br/><br>
 <input type="submit" name="submit" value="Submit"></input>
</form>
</div>-->