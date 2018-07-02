<link rel="stylesheet" href="style.css">


<div id="mynavigation">
<ul class="navigaton">
	<li><a href="home_mt.php">Input Data</a>
	<li><a href="lihathistory_mt.php">Lihat History</a>
	<li><a href="profil.php">Profil</a>
	<li style="float:right"><a href="logout.php">Logout</a>
</ul>
</div>



<br>
<center><h2>Penginputan Data Mentoring</h2></center>
<br><br>

<?php
include ("connection.php");

/* validasi halaman tanpa login */
if ($_SESSION['status'] = ''){
header("Location:./index.php");
}
?>

<center>
	<form action="inputdata_mengisidata.php" method="post">
nomor form
<select name="pilihan_form" id="form" maxlength="30" onchange="this.form.select();">
    <option value="0"> pilih form </option>
    <?php
    $val = $_POST['pilihan_form']?:'';

    $sql = "SELECT DISTINCT nomor_form FROM data_form_pertanyaan";
	$result = mysqli_query($conn, $sql);
	
    while($row = mysqli_fetch_assoc($result)) {		
        echo '<option value ="' . $row['nomor_form'] . '" '. $selected .'>' . $row['nomor_form'] . '</option>';
    }
	
    ?>
</select><br><br>
<input type="submit">
	</form>
</center>