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
  <button onclick="document.getElementById('contact').style.display='block'" style="width:auto;">Contact</button>
			<div id="contact" class="mod">
  <div class="contact">
  <form method="post" action="login.php"> 
  	<div class="container">
  		<h1 style="text-align:center; font-size:100%;">Contacteaza-ne prin email: <b> driver.master@gmail.com </b> sau prin telefon: <b> 07546372879</b></h1>
  	</div>
	  <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('contact').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
  </div>
  </div>
		</header>
		<div class="background">
			<h1>
			"Siguranta este cheia succesului."
			</h1>
			<p>Vrei sa obtii permisul de conducere sau sa conduci intr-o tara straina si trebuie sa iti actualizezi cunostintele despre legislatie si indicatoare rutiere? <br>
			Acum poti sa iti testezi si imbogatesti cunostintele!</p>
			<button onclick="document.getElementById('reset').style.display='block'" style="width:auto;">Reset</button>
            <div id="reset" class="mod">
  <div class="reset">
  <form method="post" action="reset_pass.php">
  	<?php include('errors.php'); ?>
  	<div class="container">
      <label for="uname"><b>Email</b></label>
  	  <input type="email" name="email" value="<?php echo $email; ?>"required>
		<br>
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