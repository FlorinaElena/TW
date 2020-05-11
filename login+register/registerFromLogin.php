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
			<h1>
				"Saefty is the first gate to succes."
			</h1>
			<p>Do you wanna get your driver license 
			or travel in a foreign country and you need to update your knowledge about legislation and rutier signs? <br>
			Here you can learn and test your knowledge!</p>

  <button onclick="document.getElementById('signin').style.display='block'" style="width:auto;">SignIn</button>
<div id="signin" class="mod">
  <div class="singin">
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
	  <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('signin').style.display='none'" class="cancelbtn" >Cancel</button>
    </div>
  </form>
  </div>
  </div>
</body>
</html>