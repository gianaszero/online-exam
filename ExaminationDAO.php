<?php 
	include_once 'configuration.php';
	/**
	* 
	*/
	class ExaminationDAO
	{
		
		public static function createExaminee($fname, $lname, $email,$password){
			global $db;
			$sql="INSERT INTO examinee(fname,lname,email,password) VALUES ('$fname', '$lname','$email','$password')";
			$result = $db->query($sql);
			if($result){
				echo "<script type = 'text/javascript'>alert('Successfully Registered'); window.location.href='loginpage.php'</script>";
			}else{
				echo "<script type = 'text/javascript'>alert('Unsuccessfully Registered'); window.location.href='registration.php</script>";
			}
		}
		public static function getExaminee($email, $password){
			global $db;
			$sql="SELECT * from examinee where email= '{$email}' and password = '{$password}'";
			$result = $db->query($sql);
			if($result->num_rows > 0){
				header("location:examInterface.php");
			}else{
				echo "<script type = 'text/javascript'>alert('Unsuccessfully Login');  window.location.href='loginpage.php'</script>";
			}
		}
	}
 ?>