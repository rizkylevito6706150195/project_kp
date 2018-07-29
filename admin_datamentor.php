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
	<br><br><br><h2>Data Form 1 (Personal Detail) (Bagian 1)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="20%">Judul Proyek</th>
				<th width="25%">Latar Belakang atau Alasan Masalah</th>
				<th width="25%"><i>Objective</i> dan Target</th>
				<th width="20%">Analisa</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentor where nomor_form = 1';
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
	
	
	
	<br><br><br><h2>Data Form 1 (Personal Detail) (Bagian 2)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="20%">Hasil</th>
				<th width="25%">Rencana Kegiatan</th>
				<th width="25%">Rekomendasi / Kesimpulan</th>
				<th width="20%">Rencana Tindak Lanjut</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentor where nomor_form = 1';
		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
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
	
	
	
	<br><br><br><h2>Profil Mentor (Form 1) (Bagian 1)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="20%">Nama</th>
				<th width="10%">Nippos</th>
				<th width="15%">Tempat, Tanggal Lahir</th>
				<th width="15%">Kantor</th>
				<th width="20%">Jabatan yang sedang ditempati</th>
				<th width="20%">Tanggal mulai bekerja</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM profil_mentor';
		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['nama'].'</td>
					<td style="word-wrap: break-word">'.$row['nippos'].'</td>
					<td style="word-wrap: break-word">'.$row['tempat_tanggal_lahir'].'</td>
					<td style="word-wrap: break-word">'.$row['kantor'].'</td>
					<td style="word-wrap: break-word">'.$row['jabatan_yang_sedang_ditempati'].'</td>
					<td style="word-wrap: break-word">'.$row['tgl_mulai_bekerja'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Profil Mentor (Form 1) (Bagian 2)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="15%">Jabatan yang pernah ditempati</th>
				<th width="15%">Pendidikan / Jurusan</th>
				<th width="10%">Alamat E-mail</th>
				<th width="10%">No. Hp</th>
				<th width="20%">Nama <i>Mentee</i></th>
				<th width="10%">Periode Mentoring Awal</th>
				<th width="10%">Periode Mentoring Akhir</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM profil_mentor';
		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jabatan_yang_pernah_ditempati'].'</td>
					<td style="word-wrap: break-word">'.$row['pendidikan_jurusan'].'</td>
					<td style="word-wrap: break-word">'.$row['alamat_email'].'</td>
					<td style="word-wrap: break-word">'.$row['no_hp'].'</td>
					<td style="word-wrap: break-word">'.$row['nama_mentee'].'</td>
					<td style="word-wrap: break-word">'.$row['periode_awal'].'</td>
					<td style="word-wrap: break-word">'.$row['periode_akhir'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 2 (Kuesioner) (Bagian 1)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="10%">1. Saya merasa nyaman saat menyampaikan materi mentoring.</th>
				<th width="10%">2. Mentee diberi kesempatan untuk mempraktekan proses kerja.</th>
				<th width="10%">3. Memberi tahu, menunjukkan, melakukan adalah salah satu cara dalam penyampaian materi.</th>
				<th width="10%">4. Program mentoring telah meningkatkan kesadaran saya mengenai sistem kerja dalam perusahaan.</th>
				<th width="10%">5. Para mentee diperlakukan dengan baik.</th>
				<th width="10%">6. Program mentoring ini bermanfaat.</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentor where nomor_form = 2';
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
					<td style="word-wrap: break-word">'.$row['jawaban5'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban6'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 2 (Kuesioner) (Bagian 2)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="10%">7. <i>Mentee</i> harus menghabiskan lebih banyak waktu untuk mendiskusikan materi.</th>
				<th width="10%">8. Saya meluangkan waktu untuk memastikan para <i>mentee</i> memahami sepenuhnya arah dan praktek kerja sesuai dengan materi yang telah disampaikan.</th>
				<th width="10%">9. Saya akan mendapatkan manfaat dari program <i>mentoring</i> ketika saya masih belum menjadi mentor.</th>
				<th width="10%">10. Setelah mengikuti kegiatan mentoring ini saya lebih proaktif terhadap pekerjaan saya.</th>
				<th width="10%">11. <i>Mentoring telah menyadarkan saya tentang akan pentingnya pengembangan ilmu pengetahuan dalam dunia kerja.</th>
				<th width="10%">12. <i>Mentoring</i> telah membuat <i>mentee</i> menjadi lebih aktif dalam lingkungan kerjanya.</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentor where nomor_form = 2';
		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban7'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban8'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban9'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban10'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban11'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban12'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 3 (Bagian 1)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="10%">Sejauh mana pengetahuan anda mengenai pengembangan karir?</th>
				<th width="10%">Apakah program mentoring dibuat untuk mengembangkan karir?</th>
				<th width="10%">Apakah mentoring dapat dijadikan sarana pengembangan karir?</th>
				<th width="10%">Apa yang menjadi tugas dan fungsi mentor</th>
				<th width="10%">Apakah mentoring dilakukan dengan kurikulum yang telah disusun sebelumnya?</th>
				<th width="10%">Apakah mentoring sangat diperlukan untuk mengembangkan karir karyawan</th>
				
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentor where nomor_form = 3';
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
					<td style="word-wrap: break-word">'.$row['jawaban5'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban6'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 3 (Bagian 2)</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="10%">Dalam bentuk apa saja pelaksanaan program mentoring?</th>
				<th width="10%">Strategi apakah yang dilakukan oleh anda dalam upaya untuk mengembangkan karir peserta mentoring?</th>
				<th width="10%">Bagaimana cara anda menilai dan mengevaluasi dalam setiap kegiatan mentoring?</th>
				<th width="10%">Adakah standar nilai atau kualifikasi untuk menjadi seorang mentor?</th>
				<th width="10%">Perubahan seperti apa sajakah yang dialami peserta mentoring setelah mengikuti program ini?</th>
				
				
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentor where nomor_form = 3';
		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban7'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban8'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban9'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban1'].'</td>
					<td style="word-wrap: break-word">'.$row['jawaban11'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	
	
	
	<br><br><br><h2>Data Form 4 (Evaluasi) Bagian 1</h2><br>
	<table class="data-table" border='1' style="width:800px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="15%">Tanggal</th>
				<th width="20%">Nama Mentor</th>
				<th width="20%">Nama Mentee</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentor where nomor_form = 4';
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

				</tr>';
		}?>
		</tbody>
	</table>
	
	
	<br><br><br><h2>Data Form 4 (Evaluasi) Bagian 2</h2><br>
	<table class="data-table" border='1' style="width:1320px; table-layout:fixed ">
		<thead>
			<tr>
				<th width="10%">Username</th>
				<th width="15%">1. Seberapa sering anda bertemu dengan <i>mentee</i>? Apakah waktu yang disediakan sudah cukup?	</th>
				<th width="15%">2. Bagaimana anda menilai pengalaman mentoring anda dalam skala 1-5? Mengapa? (1:sangat tidak puas - 5:sangat puas)</th>
				<th width="15%">3. Apa yang bisa dilakukan untuk meningkatkan mentoring dalam perusahaan?</th>
				<th width="15%">4. Apakah ada pelatihan tambahan yang harus ditawarkan pada saat proses mentoring?</th>
				<th width="15%">5. Apakah tugas yang diberikan sudah jelas? Apakah ada dukungan yang memadai untuk menyelesaikan tugas ini?	</th>
				<th width="15%">6. Komentar atau Saran tambahan</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = 'SELECT * FROM data_form_mentor where nomor_form = 4';
		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['username'].'</td>
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
	
	
	
	
	
	<br><br><br><br><br><br>
</body>
</center>
</html>