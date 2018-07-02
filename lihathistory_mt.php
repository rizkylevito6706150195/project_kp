<link rel="stylesheet" href="style.css">
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

<ul>
	<li><a href="home_mt.php">Input Data</a>
	<li><a href="lihathistory_mt.php">Lihat History</a>
	<li><a href="profil.php">Profil</a>
	<li style="float:right"><a href="logout.php">Logout</a>
</ul>






<br>
<center><h2>History</h2></center>
<br><br>

<?php
include ("connection.php");

$sql = 'SELECT * 
		FROM history_mentee';
		
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
	
	
	
	
	
	