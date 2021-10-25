
<?php
$name = $_POST['name'];
$email = $_POST['email'];
 
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
			 $INSERT = "INSERT into newsletter (name, email) values (?,?)";
			  
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ss", $name, $email);
				$stmt->execute();
				
			    header( "refresh:1; url=userhome.php#home_contact" );
				echo '<script>alert("Thank you for sending message")</script>';
				 }
			$stmt->close();
		 $conn->close();
?> 