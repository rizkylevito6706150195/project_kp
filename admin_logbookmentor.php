<link rel="stylesheet" href="style.css">


<div id="mynavigation">
<ul class="navigaton">
	<li><a href="admin_home.php">Lihat Data Mentee</a>
	<li><a href="admin_datamentor.php">Lihat Data Mentor</a>
	<li><a href="admin_logbookmentor.php">Lihat Logbook Mentor</a>
	<li style="float:right"><a href="logout.php">Logout</a>
</ul>
</div>



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
	<br><br><br><h2>Tabel Logbook Mentor</h2><br>
	<table class="data-table" border='1' Width='500'>
		<thead>
			<tr>
				<th>Username</th>
				<th>Nama File</th>
				<th>Tanggal</th>
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
			<td><?php echo $row['tanggal'] ?></td>
			<td width='100'> <center> <a href="download.php?nama_file=<?php echo $row['nama_file'] ?>">download</a></td>
			</tr>
			<?php
		}?>
		</tbody>
	</table>
</body>
</center>
</html>