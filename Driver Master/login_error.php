<?php include('server.php') ?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="main.css"/>
<html>
<head>
  <title>Driver license</title>
</head>
<body>
  <header >
  
  <button onclick="document.getElementById('contact').style.display='block'" style="width:auto;">Contact</button>
			<div id="contact" class="mod">
  <div class="contact">
  <form method="post" action="login.php"> 
  	<div class="container">
  		<h1 style="text-align:center; font-size:100%;">Contacteaza-ne prin email: <b> driver.master@gmail.com </b> sau prin telefon <b> 07546372879</b></h1>
  	</div>
	  <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('contact').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
  </div>
  </div>
        </header>
        
		<div class="background">
        <p style="color:red;">
				Eroare in conectare. Incearca din nou. 
</p>
        <h1>
		"Siguranta este cheia succesului."
			</h1>
			<p>Vrei sa obtii permisul de conducere sau sa conduci intr-o tara straina si trebuie sa iti actualizezi cunostintele despre legislatie si indicatoare rutiere? <br>
			Acum poti sa iti testezi si imbogatesti cunostintele!</p>
			<button onclick="document.getElementById('login').style.display='block'" style="width:auto;">LogIn</button>

			<div id="login" class="mod">
  <div class="login">
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="container">
  		<label for="uname"><b>Username</b></label>
  		<input type="text" placeholder="Enter Username" name="username" required >

  		<label for="psw">Password</label>
  		<input type="password" placeholder="Enter Password" name="password" required>
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	  <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn"><a href="reset_pass.php">Forgot password?</a></button>
    </div>
  </form>
  </div>
  </div>
  <button onclick="document.getElementById('signin').style.display='block'" style="width:auto;">SignIn</button>
  <div id="signin" class="mod">
  <div class="singin">
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="container">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" required>
  	
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" required>
  	
  	  <label>Password</label>
  	  <input type="password" name="password_1" required>
  	
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" required>
  	
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
	  <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('signin').style.display='none'" class="cancelbtn" >Cancel</button>
    </div>
  </form>
</body>
</html>