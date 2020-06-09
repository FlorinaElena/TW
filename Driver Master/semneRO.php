<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="semneRO.css" />
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
                    <img  id="myImgg" src="grafic.php" alt="Acesta este progresul tau in urma rezolvarii testelor de categorie usoara" width="auto" height="100px" margin-left="10px" display="block">
                    <p><b>Vezi progresul pentru testele medii</b></p>
                    <img  id="myImggg" src="grafic.php" alt="Acesta este progresul tau in urma rezolvarii testelor de categorie medie" width="auto" height="100px" margin-left="10px" display="block">
                    <p><b>Vezi progresul pentru testele grele</b></p>
                    <img  id="myImgggg" src="grafic.php" alt="Acesta este progresul tau in urma rezolvarii testelor de categorie grea" width="auto" height="100px" margin-left="10px" display="block">
                    
               
                </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('profile').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
        </form>
    </div>
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
    <div class="category">
        <div class="type">
           <div> <button onclick="DisplaySignsW()" onclick="document.getElementById('warning_signs').style.display='block'">Indicatoare de avertizare</button></div>
           <div> <button onclick="DisplaySignsP()" onclick="document.getElementById('priority_signs').style.display='block'">Indicatoare de prioritate</button></div>
            <div><button onclick="DisplaySignsPR()" onclick="document.getElementById('prohibitory_signs').style.display='block'">Indicatoare de interzicere sau restrictie</button></div>
            <div><button onclick="DisplaySignsM()" onclick="document.getElementById('mandatory_signs').style.display='block'">Indicatoare de obligare</button></div>
           <div> <button onclick="DisplaySignsI()" onclick="document.getElementById('information_signs').style.display='block'">Indicatoare de informare</button></div>
        </div>
     <div class="semne"> 
             <div class="signs" id="warning_signs">
             <div class="warning_signs">


                <img class="images" id="myImg" src="warning_signs/warning-accident.png" alt="Accident" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-aircraft.png" alt="Aeroport" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-animal-cattle.png" alt="Animale" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-animal-deer.png" alt="Animale" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-bridge.png" alt="Pod mobil" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-bump.png" alt="Denivelare pentru limitarea vitezei" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-bumps.png" alt="Drum cu denivelari" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-children.png" alt="Copii" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-crossroad-roundabout.png" alt="Presemnalizare intersectie cu sens giratoriu" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-crossroad-side-roads.png" alt="Intersectie pe un drum fara prioritate" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-crossroad-stop.png" alt="Stop" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-crossroad.png" alt="Intersectie de drumuri" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-crosswind.png" alt="Vant lateral" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-curve-left-right.png" alt="Curba dubla sau o succesiune de mai mult de doua curbe, prima la stanga" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-curve-left.png" alt="Curba la stanga" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-curve-right-left.png" alt="Curba dubla sau o succesiune de mai mult de doua curbe, prima la dreapta" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-curve-right.png" alt="Curba la dreapta" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-cyclist.png" alt="Biciclisti" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-falling-rocks.png" alt="Caderi de pietre" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-loose-chippings.png" alt="Improscare cu pietris" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-pedestrian-crossing.png" alt="Presemnalizare trecere pietoni" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-quayside.png" alt="Iesire spre un chei sau mal abrupt" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-road-narrowing-left.png" alt="Drum ingust pe partea stanga" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-road-narrowing-right.png" alt="Drum ingust pe partea dreapta" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-road-narrowing.png" alt="Drum ingust pe ambele parti" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-roadworks.png" alt="Lucrari" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-slippery-road.png" alt="Drum alunecos" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-soft-verge.png" alt="Acostament periculos" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-steep-ascent.png" alt="Urcare cu inclinare mare" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-steep-descent.png" alt="Coborare periculoasa" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-tractor.png" alt="Masini si utilaje agricole" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-traffic-lights.png" alt="Semafoare" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-traffic-que.png" alt="Drum aglomerat" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-train-crossing-barriers.png" alt="Trecere la nivel cu o cale ferata cu bariere sau semibariere" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-train-crossing.png" alt="Trecere la nivel cu o cale ferata fara bariere" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-train-rail.png" alt="Trecere la nivel cu o cale ferata simpla, fara bariere" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-train-rails.png" alt="Trecere la nivel cu o cale ferata dubla, fara bariere" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-tram.png" alt="Trecere la nivel cu linii de tramvai" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-two-way-traffic.png" alt="Circulatie in ambele sensuri" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-tunnel.png" alt="Tunel" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning.png" alt="Alte pericole" width="10%" height="10%" margin-left="3px">
               
             </div>
             </div>
             <div class="signs" id="priority_signs">
             <div class="priority_signs">
                <img class="images" id="myImg" src="warning_signs/priority-crossroad-give-way.png" alt="Cedeaza trecerea" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/priority-crossroad-side-roads.png" alt="Intersectie cu un drum fara prioritate" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/priority-crossroad.png" alt="Intersectie de drumuri" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/priority-road-curve.png" alt="Drum ce face curba la stanga" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/priority_information-road-narrowing.png" alt="Prioritate fata de circulatia cu sens invers" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/priority-road-narrowing.png" alt="Prioritate pentru circulatia din sens invers" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/priority-road-curve_v1.png" alt="Drum ce face curba la dreapta" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/priority-priority-road_end.png" alt="Sfarsitul drumului cu prioritate" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/priority-priority-road.png" alt="Drum cu prioritate" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/priority-crossroad-stop.png" alt="Stop" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="warning_signs/warning-accident.png" alt="Accident" width="10%" height="10%" margin-left="3px">
                <!-- The Modal -->
                
             </div>
             </div>
                <div class="signs" id="prohibitory_signs">
             <div class="prohibitory_signs">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-bus.png" alt="Accesul interzis autobuzelor" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-car.png" alt="Accesul interzis autovehiculelor cu exceptia motocicletelor fara atas" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-cyclist.png" alt="Accesul interzis bicicletelor" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-entry.png" alt="Accesul interzis" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-handcart.png" alt="Accesul interzis vehiculelor impinse sau trase cu mana" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-horse-cart.png" alt="Accesul interzis vehiculelor cu tractiune animala" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-moped.png" alt="Accesul interzis mopedelor" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-motorcycle-car-horse-cart.png" alt="Accesul interzis autovehiculelor si vehiculelor cu tractiune animala " width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-motorcycle-car.png" alt="Accesul interzis autovehiculelor" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-motorcycle.png" alt="Accesul interzis motocicletelor" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-pedestrian.png" alt="Accesul interzis pietonilor" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-tractor.png" alt="Accesul interzis tractoarelor si masinilor autopropulsate pentru lucrari" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-truck-trailer.png" alt="Accesul interzis autovehiculelor cu remorca, cu exceptia celor cu semiremorca, sau cu remorca cu osie" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access-truck.png" alt="Accesul interzis autovehiculelor destinate transportului de marfuri" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-access.png" alt="Circulatia interzisa in ambele sensuri" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-action-distance.png" alt="Interzis autovehiculelor de a circula fara a mentine intre ele un interval de cel putin ...m" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-action-horn.png" alt="Claxonare interzisa" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-action-overtaking-truck.png" alt="Depasirea interzisa autovehiculelor destinate trasnportului de marfuri" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-action-overtaking.png" alt="Depasirea autovehiculelor cu exceptia motocicletelorfara atas, interzisa" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-action-overtaking_end.png" alt="Sfarsitul interzicerii de a depasi" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-action-speed-zone.png" alt="Zona cu viteza limitata la 30 km/h " width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-action-speed-zone_end.png" alt="Sfarsitul zonei cu viteza limitata la 30 km/h" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-action-speed.png" alt="Limitare viteza" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-action-speed_end.png" alt="Sfarsit limitare viteza" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-action-turn-left.png" alt="Interzis a vira la stanga" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-action-turn-right.png" alt="Interzis a vira la dreapta" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-action-turn-u.png" alt="Intoarcere interzisa" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-cargo-dangerous.png" alt="Accesul interzis vehiculelor care transporta marfuri periculoase" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-cargo-explosive.png" alt="Accesul interzis vehiculelor care transporta substante explozive sau usor inflamabile" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-cargo-height.png" alt="Accesul interzis vehiculelor cu inaltimea mai mare de " width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-cargo-length.png" alt="Accesul interzis autovehiculelor sau ansamblurilor de vehicule cu lungimea mai mare de " width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-cargo-polluted.png" alt="Accesul interzis vehiculelor care transporta substante de natura sa polueze apele" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-cargo-weight-axle.png" alt="Accesul interzis vehiculelor cu masa mai mare de ...t pe osia simpla" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-cargo-weight-truck.png" alt="Accesul interzis autovehiculelor cu masa mai mare de ...t" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-cargo-weight.png" alt="Accesul interzis vehiculelor cu masa mai mare de ...t" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-cargo-width.png" alt="Accesul interzis vehiculelor cu latimea mai mare de " width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-entry-checkpoint.png" alt="Vama" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-parking-alternate-even.png" alt="Stationare alternata" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-parking-stopping.png" alt="Oprire interzisa" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-parking-zone_end.png" alt="Sfarsitul zonei de stationare cu durata limitata" width="10%" height="10%" margin-left="3px">
                <img class="images" id="myImg" src="prohibitory_signs/prohibited-parking.png" alt="Stationare interzisa" width="10%" height="10%" margin-left="3px">
                
             </div>
             </div>
                <div class="signs" id="mandatory_signs">
             <div class="mandatory_signs">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-direction-ahead-turn-right.png" alt="La dreapta" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-direction-pass-left-right.png" alt="Ocolire" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-direction-roundabout.png" alt="Intersectie cu sens giratoriu" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-directions-right-up.png" alt="Inainte sau la dreapta" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-direction-up.png" alt="Inainte" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-lane-bus.png" alt="Drum obligatoriu pentru categoria de vehicule" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-lane-cyclist.png" alt="Pista pentru biciclete" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-lane-dual-pedestrian-cyclist.png" alt="Delimitarea pistelor pentru pietoni si biciclete" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-lane-dual-pedestrian-cyclist_v1.png" alt="Delimitarea pistelor pentru pietoni si biciclete" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-lane-pedestrian-cyclist.png" alt="Pista comuna pentru pietoni si biciclete" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-lane-pedestrian.png" alt="Drum pentru pietoni" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-snow-chains.png" alt="Lanturi pentru zapada" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-speed-minimum.png" alt="Viteza minima obligatorie" width="10%" height="10%">
                <img class="images" id="myImg" src="mandatory_signs/mandatory-speed-minimum_end.png" alt="Sfarsitul vitezei minime obligatorii" width="10%" height="10%">
                
             </div>
             </div>
                <div class="signs" id="information_signs">
             <div class="information_signs">
                <img class="images" id="myImg" src="information_signs/information-built-up-area.png" alt="Intrare in localitate" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-built-up-area_end.png" alt="Iesire din localitate" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-crossing-pedestrian.png" alt="Trecere pentru pietoni" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-detour (1).png" alt="Presemnalizarea traseului de urmat in cazul unei restrictii de circulatie" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-direction-sign-roundabout.png" alt="Presemnalizarea directiilor intr-o intersectie cu sens giratoriu" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-expressway.png" alt="Drum pentru autovicule" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-expressway_end.png" alt="Sfarsitul drumului pentru autovicule " width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-lane-direction.png" alt="Selectarea circulatiei pe directii de mers in apropierea intersectiei" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-lane-end.png" alt="Terminarea benzii de circulatie din stanga a partii carosabile" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-motorway.png" alt="Autostrada" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-motorway_end.png" alt="Sfarsit de autostrada" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-one-way-traffic.png" alt="Sens unic" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-parking.png" alt="Parcare" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-pedestrian-zone.png" alt="Zona pietonala" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-pedestrian-zone_end.png" alt="Sfarsit zona pietonala" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-prescribed-direction.png" alt="Presemnalizarea traseului de urmat in vederea efectuarii virajului la stanga" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-priority-road.png" alt="Drum cu prioritate" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-priority-road_end.png" alt="Sfarsit drum cu prioritate" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-residential-area.png" alt="Zona rezidentiala" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-residential-area_end.png" alt="Sfarsit zona rezidentiala" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-section-control.png" alt="Radar" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-speed-national.png" alt="Limite generale de viteza" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-speed-recommended.png" alt="Viteza recomandata" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-tunnel.png" alt="Tunel" width="10%" height="10%">
                <img class="images" id="myImg" src="information_signs/information-tunnel_end.png" alt="Sfarsit de tunel" width="10%" height="10%">
                
             </div>
             </div>
                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img">
                    <div id="caption"></div>
                </div>
            </div>
            <script>
            function DisplaySignsI() {
                var x = document.getElementById("information_signs");

                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            </script>
            <script>
            function DisplaySignsPR() {
                var x = document.getElementById("prohibitory_signs");

                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            </script>
            <script>
            function DisplaySignsM() {
                var x = document.getElementById("mandatory_signs");

                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            </script>
            <script>
            function DisplaySignsW() {
                var x = document.getElementById("warning_signs");

                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            </script>
            <script>
            function DisplaySignsP() {
                var y = document.getElementById("priority_signs");
                if (y.style.display === "none") {
                    y.style.display = "block";
                } else {
                    y.style.display = "none";
                }
            }
            </script>
            <script>
            var modal = document.getElementById('myModal');
            var images = document.getElementsByClassName('images');
            var modalImg = document.getElementById("img");
            var captionText = document.getElementById("caption");
            for (var i = 0; i < images.length; i++) {
            var img = images[i];
            img.onclick = function(evt) {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
            }
            }
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
            modal.style.display = "none";
            }
            </script>
        
            <script>
            function myFunction() {
                var element = document.body;
                element.classList.toggle("dark-mode");
            }
            </script>
        
    </div>
</body>

</html>