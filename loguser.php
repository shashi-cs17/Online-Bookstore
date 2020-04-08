<?php
	$flag=1;
	if($_POST['email']){
		// do work
		if($_POST['pass'] != $_POST['repass']){
			$flag=0;
		}
	}
	else{
		header("Location: http://localhost/signup.php");
		exit();
	}
	
// working

if($flag == 0){
	echo "<html><title>Creating Account</title><body>";
	echo "<h2>ERROR DETECTED : Both password doesn't match.</h2>";
	echo "Try again <a href='signup.php'> Register </a> Yourself .<br><hr>";
	echo "</body></html>";
}
else {
	$flag=1;
	// database connection
	
	$dbhost = "localhost";
	$dbuser = "bookstore";
	$dbpass = "bookstore";
	$dbname = "bookstore";
	$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname );
	if($conn->connect_error) {
		echo "Connection Error please try again ...... \n";
		die(" Connection failed : ".$conn->connect_error."\n");
	} 
	else{
		$sql = "SELECT email FROM users WHERE email = '".$_POST['email']."'";
		
		$result = $conn->query($sql);
		
		if($result){
			if($row = $result->fetch_assoc()){
				if($row['email'] != $_POST['email']){
					$flag=0;
				}
				else{
					$flag=2;
				}
			}
			$result->free();
		}
		
		if($flag == 1){
			$sql = "INSERT INTO users VALUES ('".$_POST['email']."', '".$_POST['name']."', '".$_POST['pass']."')";
			$result = $conn->query($sql);
			//
			setcookie("book_email",$_POST['email'],time()+86400, "/","", 0);
			setcookie("book_user",$_POST['name'],time()+86400, "/","", 0);
			$result->free();
		}		
		$conn->close();
		
		
		if($flag == 1){
			header("Location: http://localhost/bookstore.php");
			exit();
		}
		else{
			echo "<html><title>Creating Account</title><body>";
			if($flag == 0){
				echo "<h2>ERROR DETECTED.</h2>";
				echo "Try again <a href='signup.php'> Register </a> Yourself .<br>";
				echo "or, Go to <a href='index.php'> Login </a> Page .<br><hr>";
			}
			else{
				
				echo "<h2>EMAIL IS REGISTERED WITH US</h2>";
				echo "<a href='index.php'> Login </a> instead .<br><hr>";
			}
			echo "</body></html>";
		}
	}
}
	
?>
<!-- done -->
	</body>
</html>
