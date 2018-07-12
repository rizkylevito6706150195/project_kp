<link rel="stylesheet" href="style.css">


<div id="mynavigation">
<ul class="navigaton">
	<li><a href="z_superadmin.php">Database User</a>
	<li><a href="">Registrasi Mentor</a>
	<li><a href="">Registrasi Admin</a>
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
	<br><br><br><h2>Tabel Database User</h2><br>
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



<?php
include ("connection.php");

$sql = 'SELECT * 
		FROM data_form_mentee';
		
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
	<br><br><br><h2>Tabel Data Form Mentee</h2><br>
	<table class="data-table" border='1' Width='1500'>
		<thead>
			<tr>
				<th>Nama mentee</th>
				<th>Nomor form</th>
				<th>Jawaban 1</th>
				<th>Jawaban 2</th>
				<th>Jawaban 3</th>
				<th>Jawaban 4</th>
				<th>Jawaban 5</th>
				<th>Jawaban 6</th>
				<th>Jawaban 7</th>
				<th>Jawaban 8</th>
				<th>Jawaban 9</th>
				<th>Jawaban 10</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['nama_mentee'].'</td>
					<td>'.$row['nomor_form'].'</td>
					<td>'.$row['jawaban1'].'</td>
					<td>'.$row['jawaban2'].'</td>
					<td>'.$row['jawaban3'].'</td>
					<td>'.$row['jawaban4'].'</td>
					<td>'.$row['jawaban5'].'</td>
					<td>'.$row['jawaban6'].'</td>
					<td>'.$row['jawaban7'].'</td>
					<td>'.$row['jawaban8'].'</td>
					<td>'.$row['jawaban9'].'</td>
					<td>'.$row['jawaban10'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
</body>
</center>
</html>
<br><br><br><br><br><br><br><br>




<?php
include ("connection.php");

$sql = 'SELECT * 
		FROM logbook_mentor';
		
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
	<br><br><br><h2>Tabel Database User</h2><br>
	<table class="data-table" border='1' Width='500'>
		<thead>
			<tr>
				<th>Username</th>
				<th>Nama File</th>
				<th>Lihat</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tr>
			<td><?php echo $row['username'] ?></td>
			<td><?php echo $row['nama_file'] ?></td>
			<td width='100'> <center> <a href="download.php?nama_file=<?php echo $row['nama_file'] ?>">download</a></td>
			</tr>
			<?php
		}?>
		</tbody>
	</table>
</body>
</center>
</html>