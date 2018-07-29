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

<?php
include ("fungsi/connection.php");
session_start();

/* validasi halaman tanpa login */
if(!isset($_SESSION['username']))
{
    // belum login
    header('Location: index.php');
    exit();
}

/* validasi level user */
if($_SESSION['level'] != 'mentor')
{
	header('Location: index.php');
    exit();
}
?>




<br>
<center><h2>History</h2></center>
<br><br>

<?php
include ("fungsi/connection.php");

$sql = 'SELECT * 
		FROM history_mentor';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>



<center>
<table class="data-table" border='1' Width='600'>
		<thead>
			<tr>
				<th>Nomor Form</th>
				<th>Judul Form</th>
				<th>Status</th>
				<th>Tanggal</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['nomor_form'].'</td>
					<td>'.$row['judul_form'].'</td>
					<td>'.$row['status'].'</td>
					<td>'.$row['tanggal'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
</center>
	
	
	
	
	
	