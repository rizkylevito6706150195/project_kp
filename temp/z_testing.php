<style>
/* MENU LOGIN */
* {
  padding: 0px;
  margin: 0px;
  font-family: arial;
}


/* MENU LIST */



ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #FFA500;
	width: 2200px;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

/* RESPONSIF */

@media screen and (max-width:768px){
#mynavigation{
		width:768px;
		margin-left:auto;
        margin-right:auto;
}
</style>





<div id="mynavigation">
<ul class="navigaton">
	<li><a href="">Testing</a>
</ul>
</div>



<?php
include ("../fungsi/connection.php");

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
	<br><br><br><h2>Data Form Mentee</h2><br>
	<table class="data-table" border='1' Width='1500'>
		<thead>
			<tr>
				<th>Username</th>
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
				<th>Jawaban 11</th>
				<th>Jawaban 12</th>
				<th>Jawaban 13</th>
				<th>Jawaban 14</th>
				<th>Jawaban 15</th>
				<th>Jawaban 16</th>
				<th>Jawaban 17</th>
				<th>Jawaban 18</th>
				<th>Jawaban 19</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['username'].'</td>
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
					<td>'.$row['jawaban11'].'</td>
					<td>'.$row['jawaban12'].'</td>
					<td>'.$row['jawaban13'].'</td>
					<td>'.$row['jawaban14'].'</td>
					<td>'.$row['jawaban15'].'</td>
					<td>'.$row['jawaban16'].'</td>
					<td>'.$row['jawaban17'].'</td>
					<td>'.$row['jawaban18'].'</td>
					<td>'.$row['jawaban19'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
</body>
</center>
</html>
<br><br><br><br><br><br><br><br>

<?php
include ("../fungsi/connection.php");

$sql = 'SELECT * 
		FROM profil_mentee';
		
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
	<br><h2>Profil Mentee (Form 1)</h2><br>
	<table class="data-table" border='1' Width='1200'>
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
<br><br><br><br><br><br><br><br>



<?php
include ("../fungsi/connection.php");

$sql = 'SELECT * 
		FROM history_mentee';
		
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
	<br><h2>History Mentee</h2><br>
	<table class="data-table" border='1' Width='1200'>
		<thead>
			<tr>
				<th>Nomor Form</th>
				<th>Judul Form</th>
				<th>Status</th>
				<th>Tanggal</th>
				<th>Username</th>
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
					<td>'.$row['username'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
</body>
</center>
</html>
<br><br><br><br><br><br><br><br>

<center>
<form action="z_delete_data_mentee.php" method="post">
<input type="submit" value="CLEAR DATABASE MENTEE" />
</form>

<br><br>

<form action="" method="post">
<input type="submit" value="CLEAR DATABASE MENTOR" />
</form>

</center>
<br><br><br><br>