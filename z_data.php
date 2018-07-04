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
		FROM user';
		
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
	<br><h2>Tabel Database User</h2><br>
	<table class="data-table" border='1' Width='800'>
		<thead>
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>PIN</th>
				<th>Level</th>
				<th>ID</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td>'.$row['password'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['pin'].'</td>
					<td>'.$row['level'].'</td>
					<td>'.$row['id'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
</body>
</center>
</html>



<br><br>;





<?php
include ("connection.php");

$sql = 'SELECT * 
		FROM profil';
		
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
	<br><h2>Tabel Profil User</h2><br>
	<table class="data-table" border='1' Width='1000'>
		<thead>
			<tr>
				<th>Username</th>
				<th>Nama</th>
				<th>NIP</th>
				<th>Kantor</th>
				<th>Tanggal mulai bekerja</th>
				<th>Pendidikan/Jurusan</th>
				<th>Alamat email</th>
				<th>No HP</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td>'.$row['nama'].'</td>
					<td>'.$row['nip'].'</td>
					<td>'.$row['kantor'].'</td>
					<td>'.$row['tgl_mulai_bekerja'].'</td>
					<td>'.$row['pendidikan_jurusan'].'</td>
					<td>'.$row['alamat_email'].'</td>
					<td>'.$row['no_hp'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
</body>
</center>
</html>