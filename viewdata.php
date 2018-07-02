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
<body>
	<h2>Data Form Mentee</h2>
	
	<br>
	<form action="viewdataproses.php" method="post">   
	 <select name="form">  
	 <option value="" disabled selected hidden>Silakan pilih form</option>  
	 <option value="form1">Form 1</option>  
	 <option value="form2">Form 2</option>  
	 <option value="form3">Form 3</option>  
	 </select>   
	 <input type="submit" name="enter" value="OK">   
	 </form>   
	 <br>
	
	
	<table class="data-table" border='1' Width='600'>
		<thead>
			<tr>
				<th>Nama Mentee</th>
				<th>Nomor Form</th>
				<th>Nomor Pertanyaan</th>
				<th>Pertanyaan</th>
				<th>Jawaban</th>
				<th>Aksi</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['nama_mentee'].'</td>
					<td>'.$row['nomor_form'].'</td>
					<td>'.$row['id_pertanyaan'].'</td>
					<td>'.$row['pertanyaan'].'</td>
					<td>'.$row['jawaban'].'</td>
					<td> <button id="edit_<?php echo $id ?>">Lihat</button> </td>
				</tr>';
		}?>
		</tbody>
	</table>
</body>
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

<br><br><br>
<a href="home_mentor.php">Kembali</a>