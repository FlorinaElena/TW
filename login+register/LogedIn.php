<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="mainLI.css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<html>
<head>
	<title> Driver Master </title>
</head>
<body>
<header>
<div class="logo">
            <form class="display" action="LogedIn.php" method="post">
                <button type="submit" style="width: auto;"></button>
            </form>
		</div>
		<div class="day-nigth">
            <button onclick="myFunction()"></button></div>
<div class="w3-dropdown-hover">
		<button type="button">Country</button>
		<div class="w3-dropdown-content w3-bar-block w3-border">
		  <a href="#" class="w3-bar-item w3-button">Romania</a>
		  <a href="#" class="w3-bar-item w3-button">United Kingdom</a>
		  <a href="#" class="w3-bar-item w3-button">Itali</a>
		  <a href="#" class="w3-bar-item w3-button">France</a>
		  <a href="#" class="w3-bar-item w3-button">Korea</a>
		  <a href="#" class="w3-bar-item w3-button">United States</a>
		  <a href="#" class="w3-bar-item w3-button">Japan</a>
		</div>
	  </div>
	  <div class="w3-dropdown-hover">
    <button type="button">ENG/RO</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="#" class="w3-bar-item w3-button">RO</a>
      <a href="#" class="w3-bar-item w3-button">ENG</a>
    </div>
  </div>
	  <div>
	<button style="width:auto;">Contact </button></div>
	<div class=logout>
     <form class="display" action="login.php" method="post">
		 <button type="submit" onclick="document.getElementById('login').style.display='block'" style="width:auto;">LogOut</button>
		</form>
	</div>
    
</header>
<div class="choose_title">
	<h1>
		Choose a country and start learning!
	</h1>
</div>
<div class="choose">
        <div class=country>
            <form class="display" action="Romania.html" method="post">
                <button type="submit" style="width:auto;"><img src="Romania1.jpg" width="230" height="190"></button>
            </form>
        </div>
        <div class=country>
            <form class="display" action="Romania.html" method="post">
                <button type="submit" style="width:auto;"><img src="France.jpg" width="230" height="190"></button>
            </form>
        </div>
        <div class=country>
            <form class="display" action="Romania.html" method="post">
                <button type="submit" style="width:auto;"><img src="Korea.jpg" width="230" height="190"></button>
            </form>
        </div>
        <div class=country>
            <form class="display" action="first_site.html" method="post">
                <button type="submit" style="width:auto;"><img src="Itali.jpg" width="230" height="190"></button>
            </form>
        </div>

        <div class=country>
            <form class="display" action="first_site.html" method="post">
                <button type="submit" style="width:auto;"><img src="US.jpg" width="230" height="190"></button>
            </form>
        </div>
        <div class=country>
            <form class="display" action="first_site.html" method="post">
                <button type="submit" style="width:auto;"><img src="UK.jpg" width="230" height="190"></button>
            </form>
        </div>
        <div class=country>
            <form class="display" action="first_site.html" method="post">
                <button type="submit" style="width:auto;"><img src="Japan.png" width="230" height="190"></button>
            </form>
        </div>
        <div class=country>
            <form class="display" action="first_site.html" method="post">
                <button type="submit" style="width:auto;"><img src="Spain.png" width="230" height="190"></button>
            </form>
        </div>
	</div>
	<script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
		<form class="display" action="LogedIn.php" method="post">
    <?php endif ?>
</div>
		
</body>
</html>