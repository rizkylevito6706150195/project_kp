<?php   

$pilihan = $_POST['pilihan'];

if(isset($pilihan)){   
	if(empty($pilihan)){  
		header("location:../mentor_home.php?pilihan=kosong");
	}
	else if($pilihan == 'datadiri'){
		header('Location: ../mentor_form1.php');
	}
	else if($pilihan == 'formdua'){
		//header('Location: mentor_home.php');
		echo "form ini belum tersedia";
	}
}
	
?>