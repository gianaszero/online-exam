<?php 
	include_once('ExaminationDAO.php');
	$email = $_POST['email'];
	$password = $_POST['password'];
	if(!empty($email) && !empty($password)){
		ExaminationDAO::getExaminee($email, $password);
	}else{
		echo "<script type = 'text/javascript'>alert('Unsuccessfully Login');  window.location.href='loginpage.php'</script>";
	}
	
 ?>