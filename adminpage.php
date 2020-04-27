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
  	<a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>RECENT ACTIVITY</a>
    <a href="admin-at-book.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>MANAGE BOOK</a>  
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
    <h1><b>Recent Activities</b></h1>
    <!-- for book store -->
    <div class="w3-section w3-bottombar w3-padding-16">
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-half w3-container w3-margin-bottom w3-margin-bottom">
      <div class="w3-container w3-white">
        <p><h2>Book Related</h2><hr></p>
        <p><i>#ActivityId</i><br><b> #<a href="admin-at-book.php?bookno=BOOK_NO">BOOK_NO</a> Book Name  </b></p>
        <div style="padding: 0px 8px 0px 16px">
        	<p> @Timestamp <br> Added/Droped </p>
        </div>
        <hr>
        <a href="#"><i>more ...</i></a>
      </div>
    </div>
    <div class="w3-half w3-container w3-margin-bottom w3-margin-bottom">
      <div class="w3-container w3-white">
        <p><h2>User Related</h2><hr></p>
        <p>BY : Author_name <br> Published date : DOP <br> Short description. </p>
        <hr>
        <a href="#"><i>more ...</i></a>
      </div>
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
	
