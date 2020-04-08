<?php
	if(isset($_COOKIE['book_email'])){
		$email = $_COOKIE['book_email'];
		$name = $_COOKIE['book_user'];
		$name = strtoupper($name);
		$user = str_replace(".","_",$email);
	}
	else{
		header('Location: http://localhost');
		die();
	}
?>


<!DOCTYPE html>
<html>
<title>Bookstore</title>
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
    <!-- sidebar person image -->
	<?php
    	echo "<img src='/prfile_pics/$user.jpg' style='width:45%;' class='w3-round'><br><br>";
    	echo "<h4><b>$name</b></h4>";
    	echo "<p class='w3-text-grey'>$email</p>";
    ?>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>BOOK STORE</a> 
    <a href="recommendation.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-magic fa-fw w3-margin-right"></i>RECOMMENDATION</a> 
    <a href="mydesk.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MY DESK</a> 
    <a href="downloader.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-tachometer fa-fw w3-margin-right"></i>P2P DOWNLOAD METER</a>
  <a href="settings.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gears fa-fw w3-margin-right"></i>PROFILE SETTINGS</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>LOGOUT</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
  	<!-- user image for side -->
    <a href="#"><img src= <?php echo "'/profile_pics/$user.jpg'";?> style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    
    <!-- START MAIN PAGE CONTENT -->
    <h1><b>Book Store</b></h1>
    <!-- for book store -->
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white"><!--<i class="fa fa-diamond w3-margin-right"></i>-->Story</button>
      <button class="w3-button w3-white w3-hide-small"><!--<i class="fa fa-photo w3-margin-right"></i>-->Biography</button>
      <button class="w3-button w3-white w3-hide-small"><!--<i class="fa fa-map-pin w3-margin-right"></i>-->Education</button>
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom w3-margin-bottom">
      <img src="/book_imgs/book1.jpg" alt="book1" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>BOOK 1</b></p>
        <p>BY : Author_name <br> Published date : DOP <br> Short description. </p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom w3-margin-bottom">
      <img src="/book_imgs/book2.jpg" alt="book2" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>BOOK 2</b></p>
        <p>BY : Author_name <br> Published date : DOP <br> Short description. </p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/book_imgs/book3.jpg" alt="book3" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>BOOK 3</b></p>
        <p>BY : Author_name <br> Published date : DOP <br> Short description. </p>
      </div>
    </div>
  </div>
  <!-- Pagination (continuation of pages) -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  <!-- pagination ending -->
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom w3-margin-bottom">
      <img src="/book_imgs/book1.jpg" alt="book1" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>BOOK 1</b></p>
        <p>BY : Author_name <br> Published date : DOP <br> Short description. </p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom w3-margin-bottom">
      <img src="/book_imgs/book2.jpg" alt="book2" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>BOOK 2</b></p>
        <p>BY : Author_name <br> Published date : DOP <br> Short description. </p>
      </div>
    </div>
    <a href="#">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/book_imgs/book3.jpg" alt="book3" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>BOOK 3</b></p>
        <p>BY : Author_name <br> Published date : DOP <br> Short description. </p>
      </div>
    </div>
    </a>
  </div>

  <!-- Pagination (continuation of pages) -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  <!-- pagination ending -->

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

