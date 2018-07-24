<link rel="stylesheet" href="style.css">
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

<ul>
	<li><a href="home_mt.php">Input Data</a>
	<li><a href="lihathistory_mt.php">Lihat History</a>
	<li><a href="profil.php">Profil</a>
	<li style="float:right"><a href="logout.php">Logout</a>
</ul>

<style>
/* untuk form isi data */
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

div {
    border-radius: 5px;
    
    padding: 50px;
}
</style>



<?php

include ("connection.php");
session_start();

//untuk mengambil data nama pada profil
$sql = "SELECT * FROM profil WHERE username= '". $_SESSION['username']."'" ;
$query = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($query))
	{
		$nama_mentee=$row["nama"];
	}
$_SESSION['nama'] = $nama_mentee;
//echo $_SESSION['nama'];



/* validasi halaman tanpa login */
if ($_SESSION['status'] = ''){
header("Location:./index.php");
}
?>

<center><h2>Form 2 </h2></center>
<div>
<form action="z_form2_proses.php" method="post"><br>
 Pertanyaan 1	: <input type="text" name="jawaban1"></input><br/><br>
 Pertanyaan 2	: <input type="text" name="jawaban2"></input><br/><br>
 Pertanyaan 3	: <input type="text" name="jawaban3"></input><br/><br>
 Pertanyaan 4	: <input type="text" name="jawaban4"></input><br/><br>
 Pertanyaan 5	: <br><textarea name="jawaban5" rows="5" cols="40"></textarea><br>
 <input type="submit" name="submit" value="Submit"></input>
</form>
</div>