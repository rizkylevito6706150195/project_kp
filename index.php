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


	  <h2>Login</h2> <!-- membuat judul pembuka -->

          <form class="fl" action="proseslogin.php" method="post">
            <input class="itpw" type="text" name="username" placeholder="Username"><br>
            <input class="itpw" type="password" name="password" placeholder="Password"><br>
            <input class="its" type="submit" name="login" value="login">
          </form>

          <p><a href="lupapassword.php">Lupa Password?</a> | <a href="registrasi.php">Registrasi</a>  </p>

		</div>
    </div>

  </body>
</html>

<!-- valdasi username, password -->
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
if(isset($_GET['usernamepassword'])){
	if($_GET['usernamepassword'] == "salah"){
		echo "<br><br><center><h5 style='color:red'>Username atau password salah</h5></center>";
	}
}

?>

