<div id="mynavigation">
<ul class="navigaton">
	<li><a href="admin_home.php">Lihat Data Mentee</a>
	<li><a href="admin_datamentor.php">Lihat Data Mentor</a>
	<li><a href="admin_logbookmentor.php">Lihat Logbook Mentor</a>
	<li style="float:right"><a href="fungsi/logout.php">Logout</a>
</ul>
</div>

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


<?php
include ("fungsi/connection.php");
session_start();

/* validasi halaman tanpa login */
if(!isset($_SESSION['username']))
{
    // belum login
    header('Location: index.php');
    exit();
}

/* validasi level user */
if($_SESSION['level'] != 'admin_pusat' and $_SESSION['level'] != 'admin_regional')
{
	header('Location: index.php');
    exit();
}
?>


<?php
include ("fungsi/connection.php");
?>

<html>
<head>
	<title></title>
</head>
<center>
<body>
	<br><br><br><h2>Data Form 1 (Pengenalan Diri) (Bagian 1)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="20%">Goal</th>
				<th width="25%">Learner Objectives (Specific, Measurable, Achievable, Realistic, Time Bound)</th>
				<th width="20%"><i>Reality</i> - apa kaitannya dari tingkatan saya ini dengan tujuan saya?</th>
				<th width="25%"><i>Obstacles</i> - apa yang mungkin menjadi penghalang dalam mencapai tujuan?</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentee where nomor_form = 1';
		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban1'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban2'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban3'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban4'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 1 (Pengenalan Diri) (Bagian 2)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="20%"><i>Options</i> - apa yang bisa saya lakukan untuk bergerak menuju tujuan dan sasaran?</th>
				<th width="30%"><i>What will I do?</i> - mengidentifikasi opsi-opsi yang akan membawa anda lebih dekat dengan tujuan anda:<br>
									a. Kapan saya harus melakukannya?<br>
									b. Siapa saja yang bisa membantu saya?<br></th>
				<th width="20%"><i>Reality</i> - apa kaitannya dari tingkatan saya ini dengan tujuan saya?</th>
				<th width="20%"><i>Obstacles</i> - apa yang mungkin menjadi penghalang dalam mencapai tujuan?</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentee where nomor_form = 1';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban5'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban6'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban7'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban8'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><br><h2>Profil Mentee (Form 1) (Bagian 1)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th>Username</th>
				<th>Nama</th>
				<th>Nippos</th>
				<th>Tempat, tanggal lahir</th>
				<th>Jabatan saat ini</th>
				<th>Kantor</th>
				<th>Tanggal mulai bekerja</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM profil_mentee';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td style="word-wrap: break-word">'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['nama'].'</td>
					<td style="word-wrap: break-word">'.$row['nippos'].'</td>
					<td style="word-wrap: break-word">'.$row['tempat_tanggal_lahir'].'</td>
					<td style="word-wrap: break-word">'.$row['jabatan_saat_ini'].'</td>
					<td style="word-wrap: break-word">'.$row['kantor'].'</td>
					<td style="word-wrap: break-word">'.$row['tgl_mulai_bekerja'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><br><h2>Profil Mentee (Form 1) (Bagian 2)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th>Username</th>
				<th>Jabatan yang pernah diduduki</th>
				<th>Pendidikan/Jurusan</th>
				<th>Alamat email</th>
				<th>No HP</th>
				<th>Nama mentor</th>
				<th>Periode awal</th>
				<th>Periode akhir</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM profil_mentee';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td style="word-wrap: break-word">'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jabatan_yang_pernah_diduduki'].'</td>
					<td style="word-wrap: break-word">'.$row['pendidikan_jurusan'].'</td>
					<td style="word-wrap: break-word">'.$row['alamat_email'].'</td>
					<td style="word-wrap: break-word">'.$row['no_hp'].'</td>
					<td style="word-wrap: break-word">'.$row['nama_mentor'].'</td>
					<td style="word-wrap: break-word">'.$row['periode_awal'].'</td>
					<td style="word-wrap: break-word">'.$row['periode_akhir'].'</td>

				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 2 (Bagian 1)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="20%">Nama</th>
				<th width="10%">Nippos</th>
				<th width="20%">Judul Project</th>
				<th width="40%">Latar Belakang atau Masalah</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentee where nomor_form = 2';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban1'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban2'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban3'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban4'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 2 (Bagian 2)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="20%"><i>Objective</i> & Target</th>
				<th width="20%">Analisis</th>
				<th width="20%">Rencana Kegiatan</th>
				<th width="20%">Hasil</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentee where nomor_form = 2';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban5'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban6'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban7'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban8'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 2 (Bagian 3)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="20%">Rencana Tindak Lanjut</th>
				<th width="20%">Rekomendasi / Kesimpulan</th>
				<th width="20%">Metode seperti apa yang sering digunakan oleh mentor?</th>
				<th width="20%">Apakah anda merasa diberikan cukup pelatihan untuk mendukung kerja anda?</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentee where nomor_form = 2';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban9'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban10'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban11'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban12'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 2 (Bagian 4)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="20%">Bagaimana proses mentoring yang dilakukan PT. Pos?</th>
				<th width="30%">Proses mentoring menurut anda apakah itu memberikan dampak terhadap peningkatan kinerja dan pengembangan diri?</th>
				<th width="20%">Apa yang ingin anda capai setelah mengikuti mentoring?</th>
				<th width="20%">Apa kegiatan yang telah dicapai, dalam proses dengan mentor?</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentee where nomor_form = 2';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban13'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban14'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban15'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban16'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 2 (Bagian 5)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="30%">Adakah dukungan yang diberikan untuk menyelesaikan tugas ini?</th>
				<th width="30%">Program yang direncanakan menurut anda apakah sudah efektif?</th>
				<th width="30%">Apakah anda memiliki saran untuk proses mentoring lebih baik lagi kedepannya?</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentee where nomor_form = 2';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban17'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban18'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban19'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 3 (Kuesioner Mentee) (Bagian 1)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="10%">1. Saya banyak menghabiskan waktu bersama mentor setiap hari.</th>
				<th width="10%">2. Saya Banyak belajar.</th>
				<th width="10%">3. Konsep dijelaskan dengan jelas.</th>
				<th width="10%">4. Saya diberi kesempatan untuk mempraktekan proses kerja baru.</th>
				<th width="10%">5. Ketika saya mengalami kesulitan, saya menerima bantuan.</th>
				<th width="10%">6. Mentor memberikan dukungan penuh kepada saya.</th>
				<th width="10%">7. Mentor (senior) saya memberi bantuan pada mereka yang bekerja keras di organisasi ini.</th>
				<th width="10%">8. Mentor saya senang dalam membimbing dan mengarahkan pekerja.</th>
				<th width="10%">9. Mentor memberikan perlakuan baik kepada saya seperti kepada karyawan lainnya.</th>
				
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentee where nomor_form = 3';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban1'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban2'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban3'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban4'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban5'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban6'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban7'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban8'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban9'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 3 (Kuesioner Mentee) (Bagian 2)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="10%">10. Mentor memberikan motivasi untuk membangun perusahaan ini.</th>
				<th width="10%">11. Mentor membantu dalam mengkoordinasikan tujuan profesional perusahaan ini.</th>
				<th width="10%">12. Mentor memberikan pelatihan ekstra untuk pengembangan karir di perusahaan ini.</th>
				<th width="10%">13. Mentor mampu memberikan peranan penting dalam peningkatan kinerja saya.</th>
				<th width="10%">14. Mentor memberikan sosialisasi dalam pekerjaan.</th>
				<th width="10%">15. Mentor menganggap program ini efektif dalam peningkatan kinerja karyawan.</th>
				<th width="10%">16. Mentor saya memperhatikan kepentingan pekerjaan dalam karir saya.</th>
				
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentee where nomor_form = 3';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban10'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban11'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban12'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban13'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban14'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban15'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban16'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 4 (Evaluasi Mentee) (Bagian 1)</h2><br>
	<table class="data-table" border='1' style="width:1000px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="20%">Tanggal</th>
				<th width="20%">Nama Mentor</th>
				<th width="20%">Nama Mentee</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentee where nomor_form = 4';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban1'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban2'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban3'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 4 (Evaluasi Mentee) (Bagian 2)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="20%">1. Apakah anda mendapatkan manfaat dari diadakannya program ini?</th>
				<th width="20%">2. Dari skala 1-5 bagaimana anda menilai pembimbing anda? Mengapa? (1: sangat tidak puas - 5:sangat puas)</th>
				<th width="20%">3. Bagaimana anda berkomunikasi dengan mentor?</th>
				<th width="20%">4. Perubahan apa yang akan anda lakukan setelah mengikuti program ini?</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentee where nomor_form = 4';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban4'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban5'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban6'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban7'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 4 (Evaluasi Mentee) (Bagian 3)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="30%">5. Seberapa sering kamu bertemu dengan mentor? apakah waktu yang disediakan cukup?</th>
				<th width="30%">6. Apakah anda sudah menerima dukungan dari atasan anda saat berpartisipasi dalam program ini?</th>
				<th width="30%">7. Apakah ada pelatihan tambahan yang akan membuat perusahaan ini lebih sukses?</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentee where nomor_form = 4';
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban8'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban9'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban10'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	<br><br><br><br><br><br>
</body>
</center>
</html>