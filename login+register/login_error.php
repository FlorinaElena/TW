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
  
			<button style="width:auto;">Contact </button>
        </header>
        
		<div class="background">
        <p style="color:red;">
				Error in connecting. Try it again. 
</p>
        <h1>
				"Saefty is the first gate to succes."
			</h1>
			<p>Do you wanna get your driver license 
			or travel in a foreign country and you need to update your knowledge about legislation and rutier signs? <br>
			Here you can learn and test your knowledge!</p>
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