<?php include('database.php') ?>
<?php include('server.php') ?>

<?php
	//Get the total questions
	$query="select * from questions";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;

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
            <button onclick="document.getElementById('profile').style.display='block'" style="width:auto;">Profil</button>
            <div class=logout>
                <form class="display" action="login.php" method="post">
                    <button type="submit" style="width:auto;">LogOut</button>
                </form>
            </div>
    </header>
    <div id="profile" class="mod">
        <div class="login">
            <form class="display" action="/action_page.php" method="post">
                <div class="container">
                    <p><b>Buna <?php echo $_SESSION['username']; ?> !</b> </p>
                    <p><b>Vezi progresul pentru testele usoare</b></p>
                    <img id="myImgg" src="grafic.php" alt="Acesta este progresul tau in urma rezolvarii testelor de categorie usoara" width="auto" height="100px" margin-left="10px" display="block">
                    <p><b>Vezi progresul pentru testele medii</b></p>
                    <img id="myImggg" src="grafic.php" alt="Acesta este progresul tau in urma rezolvarii testelor de categorie medie" width="auto" height="100px" margin-left="10px" display="block">
                    <p><b>Vezi progresul pentru testele grele</b></p>
                    <img id="myImgggg" src="grafic.php" alt="Acesta este progresul tau in urma rezolvarii testelor de categorie grea" width="auto" height="100px" margin-left="10px" display="block">


                </div>
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('profile').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img">
        <div id="caption"></div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        var img = document.getElementById("myImgg");
        var modalImg = document.getElementById("img");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
            // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        var img = document.getElementById("myImggg");
        var modalImg = document.getElementById("img");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
            // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        var img = document.getElementById("myImgggg");
        var modalImg = document.getElementById("img");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
            // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        // Get the mod
        var mod = document.getElementById('profile');
    </script>
    <div class="quizzPage">
        <div class="Dificulty">
            <h1>Genereaza<br> un test</h1>
            <div>
            <form action="question.php?n=1" method="post" class="start"> <button type="submit">Usor</button> </form>
            </div>
            <div>
            <form action="question.php?n=11" method="post" class="start"> <button type="submit">Mediu</button> </form>
            </div>
            <div>
            <form action="question.php?n=21" method="post" class="start"> <button type="submit">Greu</button> </form>
            </div>
        </div>
        <div class="quizz">
            <div class="question">

                <p>Alege o categorie de teste si incepe sa rezolvi!</p>
            </div>
            <div class="answers">
            </div>
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