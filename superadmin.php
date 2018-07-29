<link rel="stylesheet" href="style.css">


<div id="mynavigation">
<ul class="navigaton">
	<li><a href="superadmin.php">Lihat Data Admin</a>
	<li><a href="superadmin_reg.php">Registrasi Admin</a>
	<li style="float:right"><a href="fungsi/logout.php">Logout</a>
</ul>
</div>





<?php
include ("fungsi/connection.php");

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
	<br><br><br><h2>Database User</h2><br>
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




<!--
<?php
include ("fungsi/connection.php");

$sql = 'SELECT * FROM profil_mentee';
		
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
	<br><h2>Profil Mentee</h2><br>
	<table class="data-table" border='1' Width='1000'>
		<thead>
			<tr>
				<th>Username</th>
				<th>Nama</th>
				<th>Nippos</th>
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
					<td>'.$row['nippos'].'</td>
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
-->