<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PT. Pos Indonesia</title>
    <link rel="stylesheet" href="style.css"> <!-- pemanggilan file css untuk style pada file index.html -->
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body>

    <div id="login"><!-- membuat sebuah div id dengan tujuan sebagai background utama  -->
      <div class="center"><!-- div dengan class center bertujuan untuk membuat posisi tag form yang akan dibuat akan menjadi rata tengah -->

	  
	  <h2>Registrasi</h2> <!-- membuat judul pembuka -->
	  
          <form class="fl" action="prosesregistrasi.php" method="post">
            <input class="itpw" type="text" name="username" placeholder="Username"><br>
            <input class="itpw" type="password" name="password" placeholder="Password"><br>
			<input class="itpw" type="email" name="email" placeholder="Email"><br>
			<input class="itpw" type="text" name="pin" placeholder="PIN"><br>
            <input class="its" type="submit" name="daftar" value="Daftar">
          </form>

          <p><a href="index.php">Kembali</a>  </p>

		</div>
    </div>

  </body>
</html>

<!-- validasi registrasi -->
<?php
include ("connection.php");


if(isset($_GET['username'])){
	if($_GET['username'] == "kosong"){
		echo "<br><br><center><h5 style='color:red'>Username belum dimasukkan</h5></center>";
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