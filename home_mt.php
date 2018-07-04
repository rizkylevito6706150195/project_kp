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
session_start();

/* validasi halaman tanpa login */
if(!isset($_SESSION['username']))
{
    // belum login
    header('Location: index.php');
    exit();
}
?>

<center>
	<form action="inputdata_mengisidata.php" method="post">
nomor form
<select name="pilihan_form" id="form" maxlength="30" onchange="this.form.select();">
    <option value="0"> pilih form </option>
    <?php
    $val = $_POST['pilihan_form']?:'';

    $sql = "SELECT DISTINCT nama_form FROM data_form_pertanyaan";
	$result = mysqli_query($conn, $sql);
	
    while($row = mysqli_fetch_assoc($result)) {		
        echo '<option value ="' . $row['nama_form'] . '" '. $selected .'>' . $row['nama_form'] . '</option>';
    }
	
    ?>
</select><br><br>
<input type="submit">
	</form>
</center>