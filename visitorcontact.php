<?php
$message = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
 
	 $host = "localhost";
	 $dbUsername = "root";
	 $dbPassword = "";
	 $dbname = "home_contact";
	 
	 $conn = new mysqli($host,$dbUsername, $dbPassword, $dbname);
	 
	 if(mysqli_connect_error())
	 {
		 die('Connect Error('.mysqli_connect_errno(). ')'. mysqli_connect_error());
		 }
		 else{
			 $INSERT = "INSERT Into contact (message, name, email, subject) values (?,?,?,?)";
			  
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssss", $message, $name, $email, $subject );
				$stmt->execute();
				
			    header( "refresh:1; url=welcome.php#home_contact" );
				echo '<script>alert("Thank you for sending message")</script>';
				 }
			$stmt->close();
		 $conn->close();
?> 