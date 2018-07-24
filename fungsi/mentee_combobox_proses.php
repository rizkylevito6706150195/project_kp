<?php   

$pilihan = $_POST['pilihan'];

if(isset($pilihan)){   
	if(empty($pilihan)){  
		echo "Anda belum memilih!";  
	}
	else if($pilihan == 'form1'){
		header('Location: ../mentee_form1.php');
	}
	else if($pilihan == 'form2'){
		header('Location: ../mentee_form2.php');
	}
	else if($pilihan == 'form3'){
		header('Location: ../mentee_form3.php');
	}
	else if($pilihan == 'form4'){
		header('Location: ../mentee_form4.php');
	}
}
	
if ($pilihan == ""){
	header("location:../mentee_home.php?pilihan=kosong");
}
?>