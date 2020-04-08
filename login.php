<?php
	if($_POST['email']){
		// do work
	}
	else{
		header("Location: http://localhost");
		exit();
	}
?>

<html>
	<head>
		<title> Logging In </title>
	</head>
	<body>

<!--- PHP script ---> 
<?php
	
	// database connection
	
	$dbhost = "localhost";
	$dbuser = "bookstore";
	$dbpass = "bookstore";
	$dbname = "bookstore";
	$flag = false;
	$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname );
	if($conn->connect_error) {
		echo "Connection Error please try again ...... \n";
		die(" Connection failed : ".$conn->connect_error."\n");
		exit();
	} 
	else{
		$sql = "SELECT email, name, pass FROM users WHERE email = '".$_POST['email']."'";
		
		$result = $conn->query($sql);
		
		
		if($result){
			if($row = $result->fetch_assoc()){
				if(($row['email'] == $_POST['email']) && ($row['pass'] == $_POST['pass'])){
					setcookie("book_email", $_POST['email'], time()+86400, "/","", 0);
					setcookie("book_user", $row['name'], time()+86400, "/","", 0);
					$flag=true;
				}
			}
			
			$result->free();
		}
		
		$conn->close();
		
		
		if($flag){
			header("Location: http://localhost/bookstore.php");
			exit();
		}
		else {
			echo "<h2>ERROR</h2> :  wrong inputs.<br><hr>";
		}
	}
	
?>
<!-- done -->
	</body>
</html>
