<?php include "database.php"; ?>
<?php session_start(); ?>
<?php
	//Create Select Query
	$query="select * from shouts order by time desc limit 100";
	$shouts = mysqli_query($mysqli,$query);

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Page.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<title>
    Driver Master
</title>
<link rel="icon" href="title_icon.jpg" type="image/x-icon">

<body>
    <header>
        <div class="logo">
            <form class="display" action="home.php" method="post">
                <button type="submit" style="width: auto;"></button>
            </form>
        </div>
        <div class="elm_right">
            <div class="day-nigth">
                <button onclick="myFunction()"></button>
            </div>
            <button onclick="document.getElementById('contact').style.display='block'" style="width:auto;">Contact</button>
            <div id="contact" class="mod">
                <div class="contact">
                    <form method="post" action="login.php">
                        <div class="container">
                            <h1 style="text-align:center;">Contacteaza-ne prin email <b> driver.master@gmail.com </b> sau prin telefon: <b> 07546372879</b></h1>
                        </div>
                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('contact').style.display='none'" class="cancelbtn">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=logout>
                <form class="display" action="login.php" method="post">
                    <button type="submit" style="width:auto;">LogOut</button>
                </form>
            </div>
    </header>
    
      <main>
      <div class="quizzPage">
        <div class="Dificulty">
            <h1>Genereaza<br> un test</h1>
            <button type="submit">Usor</button>
            <button type="submit">Mediu</button>
            <button type="submit">Greu</button>
        </div>
        <div class="quizz">
            <div class="question">

            <h2>Ai terminat!</h2>
	     <p>Felicitari! Ai terminat testul.</p>
	     <p>Scor final: <?php echo $_SESSION['score']; ?></p>
	     <a href="question.php?n=1" class="start">Refa testul</a>
	     <?php session_destroy(); ?>
            </div>
            <div class="answers">
            </div>
            
        </div>
	
        <div class="curent_test">
            <h1>Test curent</h1><br>
        </div>
        <script>
            function myFunction() {
                var element = document.body;
                element.classList.toggle("dark-mode");
            }
        </script>

    </div>

	
      </main>

  </body>
</html>