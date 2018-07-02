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

          <form class="fl" action="proseslupapassword.php" method="post">
            <input class="itpw" type="text" name="id" placeholder="Username"><br>
            <input class="itpw" type="password" name="nip" placeholder="NIP"><br>
			<input class="itpw" type="password" name="pin" placeholder="PIN"><br>
            <input class="its" type="submit" name="konfirmasi" value="konfirmasi">
          </form>

          <p><a href="index.php">Kembali</a>  </p>

		</div>
    </div>

  </body>
</html>