<link rel="stylesheet" href="style.css">


<div id="mynavigation">
<ul class="navigaton">
	<li><a href="home_mt.php">Input Data</a>
	<li><a href="lihathistory_mt.php">Lihat History</a>
	<li><a href="profil.php">Profil</a>
	<li style="float:right"><a href="logout.php">Logout</a>
</ul>
</div>

<?php

include ("connection.php");

/* ???????????? */
$sql = 'SELECT * FROM data_form_pertanyaan WHERE nomor_form = ' .mysql_real_escape_string($_POST['pilihan_form']).'';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

    // output data of each row
    while($row = mysqli_fetch_assoc($query)) {
        echo "" . $row["id_pertanyaan"]. ".";
		echo "" . $row["pertanyaan"];
		echo '<td><input class="text" type="text" id="idjawaban" name="jawaban"></td>';
		echo "<br>";
		
    }

?>