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

		<!-- valdasi -->
		<?php
		include ("fungsi/connection.php");
		$_SESSION['status'] = "";

		if(isset($_GET['username'])){
			if($_GET['username'] == "kosong"){
				echo "<br><br><center><h5 style='color:red'>Username belum dimasukkan</h5></center>";
			}
		}
		if(isset($_GET['email'])){
			if($_GET['email'] == "kosong"){
				echo "<br><br><center><h5 style='color:red'>Email belum dimasukkan</h5></center>";
			}
			if($_GET['email'] == "salah"){
				echo "<br><br><center><h5 style='color:red'>Format email salah</h5></center>";
			}
		}
		if(isset($_GET['pin'])){
			if($_GET['pin'] == "kosong"){
				echo "<br><br><center><h5 style='color:red'>PIN belum dimasukkan</h5></center>";
			}
		}
		if(isset($_GET['passwordbaru'])){
			if($_GET['passwordbaru'] == "kosong"){
				echo "<br><br><center><h5 style='color:red'>Password baru belum dimasukkan</h5></center>";
			}
		}

		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "berhasil"){
				echo "<br><br><center><h5 style='color:green'>Password berhasil diubah</h5></center>";
			}
		}
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<br><br><center><h5 style='color:red'>Username, email, atau PIN salah</h5></center>";
			}
		}
		?><br>
	  
          <form class="fl" action="fungsi/lupapassword_proses.php" method="post">
            <input class="itpw" type="text" name="username" placeholder="Username"><br>
			<input class="itpw" type="text" name="email" placeholder="Email"><br>
			<input class="itpw" type="password" name="pin" placeholder="PIN"><br>
			<input class="itpw" type="password" name="passwordbaru" placeholder="Password baru"><br>
            <input class="its" type="submit" name="konfirmasi" value="konfirmasi">
          </form>
		  
          <p><a href="index.php">Kembali</a>  </p>
		</div>
    </div>

  </body>
</html>


