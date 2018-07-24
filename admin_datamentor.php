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
		FROM data_form_mentor';
		
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
	<br><br><br><h2>Data Form Mentor</h2><br>
	<table class="data-table" border='1' Width='1500'>
		<thead>
			<tr>
				<th>Nama mentor</th>
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
					<td>'.$row['nama_mentor'].'</td>
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