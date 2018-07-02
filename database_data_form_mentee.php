<?php
include ("connection.php");

$sql = 'SELECT * 
		FROM history';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Tabel Database User</h2>
	<table class="data-table" border='1' Width='600'>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Password</th>
				<th>Email</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['nama'].'</td>
					<td>'.$row['password'].'</td>
					<td>'.$row['email'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
</body>
</html>

<?php
include ("connection.php");

$sql = 'SELECT * 
		FROM tabel_database_user';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<br>

<form action="delete.php" method="post">
<input type="submit" value="CLEAR DATABASE" />
</form>

<br><br>
<a href="index.php">Home</a>