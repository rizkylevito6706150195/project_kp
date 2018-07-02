<link rel="stylesheet" href="style.css">


<div id="mynavigation">
<ul class="navigaton">
	<li><a href="z_data.php">Database User</a>
	<li><a href="z_data2.php">Database Pertanyaan</a>
	<li><a href="">Registrasi Admin</a>
	<li><a href="">Buat Form Pertanyaan</a>
	
</ul>
</div>





<?php
include ("connection.php");

$sql = 'SELECT * 
		FROM data_form_pertanyaan';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>




<html>
<head>
	<title></title>
</head>
<center>
<body>
	<br><h2>Tabel Database Form Pertanyaan</h2><br>
	<table class="data-table" border='1' Width='600'>
		<thead>
			<tr>
				<th>Nomor Form</th>
				<th>Nama Form</th>
				<th>Nomor Pertanyaan</th>
				<th>Pertanyaan</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['nomor_form'].'</td>
					<td>'.$row['nama_form'].'</td>
					<td>'.$row['id_pertanyaan'].'</td>
					<td>'.$row['pertanyaan'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
</body>
</center>
</html>