<?php
	if(isset($_COOKIE['isAdmin'])){
		// do work
		setcookie('isAdmin','',time()-3600);
	}
	header("Location: http://localhost/admin.html");
	exit();
?>

