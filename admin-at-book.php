<?php
	if(isset($_COOKIE['isAdmin'])){
		if($_COOKIE['isAdmin'] == "yes"){}
		else {
			setcookie('isAdmin','',time()-3600);
			header("Location: http://localhost/admin.html");
			exit();
		}
	}
	else {
		header("Location: http://localhost/admin.html");
		exit();
	}
?>

<!DOCTYPE html>
<html>
<title>Bookstore-Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <h4><b>ADMIN</b></h4>
  </div>
  <div class="w3-bar-block">
  	<a href="adminpage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>RECENT ACTIVITY</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>MANAGE BOOK</a>  
    <a href="admin-at-user.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>RESTRICT USER</a> 
  <a href="admin-close.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-power-off fa-fw w3-margin-right"></i>CLOSE SESSION</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    
    <!-- START MAIN PAGE CONTENT -->
    <h1>Book Manager</h1>
    <!-- for book store -->
    <?php
    	if(isset($_GET['bookno'])){
    		//get book
    		echo "<div class='w3-section w3-bottombar w3-padding-16'></div>";
    		echo "<h3>#".$_GET['bookno']."</h3><i>Book_Name</i><p> Tags : <i>book_tags</i><p><hr>";
    		echo "Activities related to this book<br><br><br><br>";
    	}
    ?>
    <div class="w3-section w3-bottombar w3-padding-16">
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div style="padding: 16px 16px 16px 32px">
  <h3>Add Book</h3><hr>
	<form action="add-book.php" method="get">
		<input type="text" placeholder="Url of the Book" name="book_url"> ,and 
		<input type="text" placeholder="Name of the Book" name="book_name">
		<br><br>
		Choose Book Tags ..
		<div style="padding: 8px 8px 8px 16px">
		<input type="checkbox" id="story" name="story" value="yes">
  		<label for="story"> Story</label><br>
  	<input type="checkbox" id="edu" name="edu" value="yes">
  		<label for="edu"> Education</label><br>
  	<input type="checkbox" id="bio" name="bio" value="yes">
  		<label for="bio"> Biography</label><br>
  	</div>
  	<br>
		<input type="submit" value="Add">
	</form>
	<div class="w3-section w3-bottombar w3-padding-16">
  </div>
  </div>
  
  <div style="padding: 16px 16px 16px 32px">
	<h3>Drop Book</h3><hr>
	<form action="drop-book.php" method="post">
		<input type="text" placeholder="Search Book Name" name="sname">
		Or, <input type="text" placeholder="Search Book No." name="sno">  
		<input type="submit" value="Search">
	</form>
	<div class="w3-section w3-bottombar w3-padding-16">
  </div>
	</div>
  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-twothird">
      <h3>ABOUT</h3>
      <p>project description</p>
    </div>
  
    <div class="w3-third">
      <h3>TEAM MEMBERS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/team/member1.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Member A</span><br>
          <span>About</span>
        </li>
        <li class="w3-padding-16">
          <img src="/team/member2.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Member B</span><br>
          <span>about</span>
        </li>
        <li class="w3-padding-16">
          <img src="/team/member3.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Member C</span><br>
          <span>about</span>
        </li>
      </ul>
    </div>
  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Go ahead and read something because you know,<br>“In the end, we’ll all become stories.” – Margaret Atwood </div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
	
