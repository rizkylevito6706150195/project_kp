<link rel="stylesheet" href="style.css">


<div id="mynavigation">
<ul class="navigaton">
	<li><a href="mentor_home.php">Input Data</a>
	<li><a href="mentor_logbook.php">Input Logbook</a>
	<li><a href="mentor_history.php">Lihat History</a>
	<li><a href="mentor_profil.php">Profil</a>
	<li style="float:right"><a href="logout.php">Logout</a>
</ul>
</div>



<br>
<center><h2>Penginputan Logbook Mentor</h2></center>
<br><br><br><br><br>

<center>
<form action="fungsi/mentor_logbook.proses.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" name="upload" value="Upload">
</form>
</center>