<?php
// Source Code Download File dengan PHP
if(isset($_GET['nama_file'])){
	$file = "file/" .$_GET['nama_file'];
	
	if (file_exists($file))
	{
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($file));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: private');
		header('Pragma: private');
		header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		readfile($file);
		exit;

	} 
	else 
	{
		echo "file {$_GET['nama_file']} sudah tidak ada.";
	}
	
}
?>


<?php/*
// Tentukan folder file yang boleh di download
$folder = "file/";

// Lalu cek menggunakan fungsi file_exist
if (!file_exists($folder.$_GET['file'])) {
  echo "<h1>Access forbidden!</h1>
      <p> Anda tidak diperbolehkan mendownload file ini.</p>";
  exit;
}

// Apabila mendownload file di folder files
else {
  header("Content-Type: octet/stream");
  header("Content-Disposition: attachment; 
  filename=\"".$_GET['file']."\"");
  $fp = fopen($folder.$_GET['file'], "r");
  $data = fread($fp, filesize($folder.$_GET['file']));
  fclose($fp);
  print $data;
}
*/?>
