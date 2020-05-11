<?php include('reset_pass_server.php') ?>
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
			<button onclick="document.getElementById('reset').style.display='block'" style="width:auto;">Reset</button>
            <div id="reset" class="mod">
  <div class="reset">
  <form method="post" action="reset_pass.php">
  	<?php include('errors.php'); ?>
  	<div class="container">
      <label for="uname"><b>Email</b></label>
  	  <input type="email" name="email" value="<?php echo $email; ?>"required>
  	  <label for="psw">Password</label>
  	  <input type="password" name="password" required>
  	  <button type="submit" class="btn" name="reset_user">Login</button>
  	</div>
	  <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('reset').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
  </div>
  </div>
</body>
</html>