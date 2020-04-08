<?php
	if(isset($_COOKIE['book_email'])){
		// do work
		setcookie('book_email','',time()-3600);
		setcookie('book_user','',time()-3600);
	}
	header("Location: http://localhost");
	exit();
?>

