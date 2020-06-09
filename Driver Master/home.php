<?php include "database.php"; ?>
<?php include "server.php"; ?>
<?php
	//Create Select Query
	$query="select * from shouts order by time desc limit 100";
	$shouts = mysqli_query($mysqli,$query);

 ?>
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Page.css" />
</head>
<html>
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
    <div class="choose">
        <div class=country onclick="expand()"></div>
        <div class="text">

        </div>
        <div class="lesson" id="lesson">
            <div class="option">
                <a href="index.php">
                    <img src="chestionarRo.png" alt="Chestionar auto" width="100px" height="100px"><br>
                    <p><strong>Chestionare</strong></p>
                </a>
            </div>
            <div class="option">
                <a href="semneRO.php">
                    <img src="signsRo.png" alt="Semne de circulatie" width="100px" height="100px"><br>
                    <p><strong>Semne de</strong><br><strong> circulatie</strong></p>
                </a>
            </div>
            <div class="option">
                <a href="legislatieRo.php">
                    <img src="legislatieRO.png" alt="Legislatia rutiera" width="100px" height="100px"><br>
                    <p><strong>Legislatie</strong><br><strong> rutiera</strong></p>
                </a>
            </div>
            <div class="option">
                <a href="conduita_preventiva.php">
                    <img src="conduita_preventiva.png" alt="Conduita preventiva" width="100px" height="100px"><br>
                    <p><strong>Conduita</strong><br><strong> preventiva</strong></p>
                </a>
            </div>
        </div>
        <div class="home_text" id="home_text">
            <h1>Invata legislatia romaniei!</h1>
        </div>
    </div>
    <div class="choose">
        <div class="world" onclick="expand1()"></div>
        <h1>La ce te poti astepta cand conduci intr-o tara straina?</h1>
    </div>
    <div class="choose">
        <div class="other" id="other">
            <div class="difference">
                <h3>Regulile de circulatie sunt aprope la fel in in toata Europa insa mici diferente pot avea impacte mari. Mai jos se regasesc cateva reguli si diferente pe care le poti intalni in cele mai cunoscute tari din Europa.</h3>
                <div class="advices" id="advices">
                    <button class="collapsible"><strong>Belgia</strong></button>
                    <div class="content">
                        <p>
                            soferii care vin din dreapta au in general prioritate; cu toate acestea, autobuzele si tramvaiele au intotdeauna prioritate.<br> Nu este permis sa detineti un telefon mobil in timp ce conduceti, dar apelul cu mainile libere
                            este.
                            <br> La semafoare, aveti grija cum va apropiati de celalalte masini cand virati la stanga la a lumina verde. De asemenea, o lumina portocalie intermitenta semnaleaza ca soferul ar trebui sa acorde o atentie atenta. Conducerea
                            printr-o lumina portocalie care arde continuu este interzisa.<br> soferul si toti pasagerii trebuie sa poarte centurile de siguranta. De asemenea, fiti atenti la zonele de control al croazierelor, care sunt marcate cu semne
                            rotunde si o linie rosie prin sintagma „control de croaziera”.<br> soferii din Belgia trebuie sa aiba, de asemenea, un stingator de incendii si un kit de prim ajutor in vehicul. Acestea nu sunt necesare pentru vehiculele inmatriculate
                            in afara tarii.
                        </p>
                    </div>
                    <button class="collapsible"><strong>Franta</strong></button>
                    <div class="content">
                        <p>
                            Condusul in Franta este destul de simplu si se potriveste cu majoritatea regulilor din Europa. Un lucru esential de care trebuie sa constientizam este dreptul de prioritate din Franta, care este marcat printr-o cruce neagra intr-un triunghi alb cu un
                            contur rosu. inseamna ca cei ce au prioritate sunt cei ce vin din dreapta dumneavoastra si nu trebuie sa opreasca, dar tu trebuie. Acest lucru este deosebit de important pe care trebuie sa il luati in considerare in zonele
                            rurale.
                            <br> O regula neobisnuita pentru Franta este aceea ca soferii trebuie sa aiba un etilotest in masina. Alte reguli de retinut sunt ca utilizarea telefonului mobil in timpul condusului este interzisa, nefacand exceptii pentru
                            sistemele maini libere. Toti pasagerii trebuie sa poarte centurile de siguranta, iar copiii sub 10 ani trebuie sa stea in spate. Vehiculele straine trebuie sa afiseze un autocolant care sa indice tara de origine. Folosirea
                            claxonului este ilegala in orase, cu exceptia cazului in care se va evita o coliziune iminenta.
                        </p>
                    </div>
                    <button class="collapsible"><strong>Germania</strong></button>
                    <div class="content">
                        <p>
                            Regulile din Germania sunt destul fundamentale. Un aspect caruia trebuie sa ii acordati atentie sunt zonele verzi de mediu ale tarii. Este necesar ca toate vehiculele, chiar si vehiculele inmatriculate in strainatate sa afiseze un ecuson de mediu pentru
                            a circula prin aceste zone. Trecere la traficul in miscare trebuie sa se faca pe partea stanga. Trecerea pe dreapta este permisa numai in traficul stationar. <br>Alte legi de care trebuie sa stiti:
                            utilizarea castilor in timp ce conduceti este interzisa, iar utilizarea telefonului mobil este permisa doar cu utilizarea unui dispozitiv. De asemenea, Germania este renumita pentru sistemul sau de autostrazi autobahn. Aceste
                            autostrazi nu au limite de viteza mandatate federal pentru unele vehicule, dar asta nu inseamna ca soferii pot conduce cu orice viteza dorita. Sunt stabilite limite de viteza in zonele urbane, zonele cu conditii de drum sub-standard
                            sau zonele in care sunt accidente. Limite exista si in zonele in curs de constructie. De asemenea, sunt stabilite limite pentru anumite conditii meteorologice, iar acestea sunt strict aplicate.
                        </p>
                    </div>
                    <button class="collapsible"><strong>Italia</strong></button>
                    <div class="content">
                        <p>Semnele cu un triunghi rosu-alb cu susul in jos indica faptul ca nu aveti prioritate. Virajele la dreapta nu sunt permise niciodata pe culoarea rosie. Una dintre cele mai frecvente amenzi pe care soferii incepatori o primesc in
                            Italia este prin intrarea pe drumurile destinate doar pietonilor, care sunt adesea marcate cu indicatoare pe care scrie "zona traficico limitato" sau "zona pedonale". Acest lucru se intampla des si din cauza ca multe sisteme
                            GPS nu stiu ca aceste drumuri sunt doar pentru pietoni.<br> Daca doriti sa inchiriati o masina trebuie sa stiti ca poate fi dificil sa inchiriati una automata, deci faceti-va rezervare cat mai devreme. Limitele de viteza sunt
                            adesea monitorizate, amenzile indreptanduse catre compania de inchiriere, amenda fiind adaugata la cartea de credit.
                        </p>
                    </div>
                    <button class="collapsible"><strong>Spania</strong></button>
                    <div class="content">
                        <p>
                            soferii din Spania trebuie sa aiba doua triunghiuri de avertizare rosii aprobate in caz de accident, pe langa jachete reflectorizante care trebuie sa fie purtate de oricine se afla in afara vehiculului de pe marginea oricarei autostrazi. Jachetele trebuie
                            sa fie pastrate in masina, nu in portbagaj, pentru a putea fi puse inainte de a cobori din masina. Aceste jachete sunt usor disponibile in magazine. soferii care poarta ochelari trebuie sa aiba o pereche de rezerva. <br>in
                            unele orase, parcarea este permisa doar pe o parte a drumului, iar partea pe care parcarea este permisa se schimba de la o zi la alta. Utilizarea telefonului mobil este interzisa. De asemenea, Spania are legi foarte stricte
                            privind consumul de bauturi si de conducere.
                        </p>
                    </div>
                    <button class="collapsible"><strong>Elvetia</strong></button>
                    <div class="content">
                        <p>
                            Elvetia are o reputatie pentru drumurile de calitate, iar legile sale sunt destul de fundamentale. Cel mai important lucru pe care trebuie sa-l stiti este faptul ca utilizarea drumurilor cu taxa necesita un autocolant, cunoscut sub numele de vinieta.
                            Acestea costa 40 CHF si permite soferilor utilizarea nelimitata a drumurilor cu taxa. Retineti ca este necesara o vinie, chiar daca veti conduce o singura data pe un drum rutier.<br> Elvetia prevede
                            ca masinile sa aiba un triunghi de avertizare care sa fie afisat in caz de accident. soferii care trebuie sa poarte ochelari trebuie sa aiba o pereche de rezerva in masina. Utilizarea telefonului mobil este interzisa si toti
                            pasagerii trebuie sa poarte centurile de siguranta. Amenzile pot fi date la fata locului.

                        </p>
                    </div>
                    <button class="collapsible"><strong>Anglia</strong></button>
                    <div class="content">
                        <p>
                            Marea diferenta aici este ca se conducepe partea stanga a drumului, cu scibmbarea directiei pe partea dreapta. Restul legilor sunt destul de fundamentale. Utilizarea telefonului mobil in timpul condusului este interzisa, iar soferul si toti pasagerii
                            trebuie sa poarte centuri de siguranta. Utilizarea claxonului este interzisa in zonele urbane peste noapte intre 23:30 si 7:00.
                        </p>
                    </div>
                </div>
                <h3> <strong>Culoarea semnelor</strong></h3>
                <div class="advices" id="other">
                    <button class="collapsible"><strong>Semne informative</strong></button>
                    <div class="content">
                        <div class="sign_type">
                            <div class="information_sign">
                                <h4>Autostrada</h4>
                                <div class="category">
                                    <div class="signs_color">
                                        <p>Albastru in:</p>
                                        <ul>
                                            <li>Franta</li>
                                            <li>Germania</li>
                                            <li>Irlanda</li>
                                            <li>Orlanda</li>
                                            <li>Norvegia</li>
                                            <li>Polonia</li>
                                            <li>Portugalia</li>
                                            <li>Spania</li>
                                            <li>Anglia</li>
                                        </ul>
                                    </div>
                                    <div class="signs_color">
                                        <p>Verde in:</p>
                                        <ul>
                                            <li>Republica Ceha</li>
                                            <li>Grecia</li>
                                            <li>Italia</li>
                                            <li>Leichtenstein</li>
                                            <li>Lituania</li>
                                            <li>Slovacia</li>
                                            <li>Suedia</li>
                                            <li>Elvetia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="information_sign">
                                <h4>Drum pentru autovehicule</h4>
                                <div class="category">
                                    <div class="signs_color">
                                        <p>Albastru in:</p>
                                        <ul ID="Blue">
                                            <li>Franta</li>
                                            <li>Germania</li>
                                            <li>Irlanda</li>
                                            <li>Olanda</li>
                                            <li>Norvegia</li>
                                            <li>Polonia</li>
                                            <li>Portugalia</li>
                                            <li>Spania</li>
                                            <li>Anglia</li>
                                            <li>Slovacia</li>
                                            <li>Lituania</li>
                                            <li>Republica Ceha</li>
                                            <li>Grecia</li>
                                            <li>Italia</li>
                                        </ul>
                                    </div>
                                    <div class="signs_color">
                                        <p>Green in:</p>
                                        <ul>
                                            <li>Leichtenstein</li>
                                            <li>Suedia</li>
                                            <li>Elvetia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advices" id="other">
                    <button class="collapsible"><strong>Semne rutiere de avertizare si restrictie</strong></button>
                    <div class="content">
                        <div class="warning_type">
                            <div class="signs_color">
                                <p>Rosu si alb:</p>
                                <ul id="RW">
                                    <li>Austria</li>
                                    <li>Belgia</li>
                                    <li>Republica Ceha</li>
                                    <li>Denmarca</li>
                                    <li>Estonia</li>
                                    <li>Franta</li>
                                    <li>Germania</li>
                                    <li>Ungaria</li>
                                    <li>Irlanda</li>
                                    <li>Italia</li>
                                    <li>Luxemburg</li>
                                    <li>Moldova</li>
                                    <li>Olanda</li>
                                    <li>Spania</li>
                                    <li>Portugalia</li>
                                    <li>Rusia</li>
                                    <li>Anglia</li>
                                    <li>Slovacia</li>
                                    <li>Elvetia</li>
                                </ul>
                            </div>
                            <div class="signs_color">
                                <p>Rosu si galben:</p>
                                <ul>
                                    <li>Finlanda</li>
                                    <li>Grecia</li>
                                    <li>Islanda</li>
                                    <li>Polonia</li>
                                    <li>Suedia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3> Limita de viteza</h3>

                    <div class="advices" id="other">
                        <button class="collapsible"><strong>Vezi cele mai comune categorii de limita de viteza</strong></button>
                        <div class="content">
                            <div class="speed">
                                <div class="spped_limit">
                                    <img src="Limite_generale_de_viteza.gif" alt="Limita de viteza" width="200px" height="50px">
                                    <ul>
                                        <li>Belgia</li>
                                        <li>Republica Ceha</li>
                                        <li>Grecia</li>
                                        <li>Poland</li>
                                        <li>Ungaria</li>
                                        <li>Italia</li>
                                        <li>Luxemburg</li>
                                        <li>Ucraina</li>
                                    </ul>
                                </div>
                                <div class="spped_limit">
                                    <img src="Denmark_road_sign_E80.svg.png" alt="Limita de viteza" width="200px" height="50px">
                                    <ul>
                                        <li>Olanda</li>
                                        <li>Danemarca</li>
                                        <li>Franta</li>
                                        <li>Muntenegru</li>
                                        <li>Serbia</li>
                                    </ul>
                                </div>
                                <div class="spped_limit">
                                    <img src="speed3.png" alt="Limita de viteza" width="200px" height="50px">
                                    <ul>
                                        <li>Belgia</li>
                                        <li>Portugalia</li>
                                        <li>Spania</li>
                                        <li>Turcia</li>
                                        <li>Suedia</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var state = false;

        function expand() {
            if (state == false) {
                document.getElementById("lesson").style.transform = 'scaleX(1)';
                document.getElementById("home_text").style.transform = 'scaleX(0)';
                state = true;
            } else {
                document.getElementById("lesson").style.transform = 'scaleX(0)';
                document.getElementById("home_text").style.transform = 'scaleX(1)';
                state = false;
            }
        }
    </script>
    <script>
        var state = false;

        function expand1() {
            if (state == false) {
                document.getElementById("other").style.transform = 'scaleX(1)';
                state = true;
            } else {
                document.getElementById("other").style.transform = 'scaleX(0)';
                state = false;
            }
        }
    </script>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>
    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>
</body>

</html>