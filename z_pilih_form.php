<?php   

$pilihan = $_POST['pilihan'];

if(isset($pilihan)){   
	if(empty($pilihan)){  
		echo "Anda belum memilih!";  
	}
	else if($pilihan == 'datadiri'){
		header('Location: form1.php');
	}
	else if($pilihan == 'formdua'){
		//header('Location: mentee_home.php');
		echo "form ini belum tersedia";
	}
}
	
if ($pilihan == ""){
	header("location:mentee_home.php?pilihan=kosong");
}
?>