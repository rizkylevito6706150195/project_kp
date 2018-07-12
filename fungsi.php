<?php
// Fungsi ini berfungsi untuk menciptakan id pesan
function set_session_pesan($pesan) {
    $pesan_id = sha1(microtime(true));
    $_SESSION[$pesan_id] = $pesan;
  
    return $pesan_id;
}
 
 
/*   Fungsi redirect digunakan untuk mengambil id pesan yang telah disimpan didalam SESSION di fungsi set_session_pesan,
 kemudian fungsi ini akan menyimpan pesan yang diketikkan oleh user
  dan selanjutnya akan melakukan redirect halaman sesuai permintaan user */
function redirect($pesan, $page=FALSE) {
    $data = array();
    $_GET['pesan'] = set_session_pesan($pesan);
    foreach ($_GET as $n=&gt;$v) {
        $data[] = &quot;{$n}={$v}&quot;;
    }
    if (count($data) &gt; 0) {
        $data = '?'.implode('&amp;',$data);
    } else {
        $data = '';
    }
  
    if (is_string($page)) {
        $lokasi = $page;
    } else {
        $lokasi = $_SERVER['SCRIPT_NAME'];
    }
  
    $http = (!isset($_SERVER['HTTPS']) || strtolower($_SERVER['HTTPS'])!='on')?'http':'https';
  
    header(&quot;Location: {$http}://{$_SERVER['HTTP_HOST']}{$lokasi}{$data}&quot;);
    exit;
}
?>