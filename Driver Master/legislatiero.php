<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Page.css" />
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
    <div class="legislatie">
        <div class="capitol">
            <button class="collapsible">CAPITOLUL I: Dispozitii generale</button>
            <div class="content">
                <div class="articol">
                    <button class="collapsible">Articolul 1</button>
                    <div class="content">
                        <p>
                            (1) Circulatia pe drumurile publice a vehiculelor, pietonilor si a celorlalte categorii de participanti la trafic, drepturile, obligatiile si raspunderile care revin persoanelor fizice si juridice, precum si atributiile unor autoritati ale administratiei
                            publice, institutii si organizatii sunt supuse dispozitiilor prevazute in prezenta ordonanta de urgenta.<br> (2) Dispozitiile prevazute in prezenta ordonanta de urgenta au ca scop asigurarea desfasurarii
                            fluente si in siguranta a circulatiei pe drumurile publice, precum si ocrotirea vietii, integritatii corporale si a sanatatii persoanelor participante la trafic sau aflate in zona drumului public, protectia drepturilor si intereselor
                            legitime ale persoanelor respective, a proprietatii publice si private, cat si a mediului.<br> (3) Autoritatea competenta in domeniul circulatiei pe drumurile publice privind initierea si avizarea unor reglementari, precum
                            si aplicarea si exercitarea controlului privind respectarea normelor din acest domeniu este Ministerul Administratiei si Internelor, prin Inspectoratul General al Politiei Romane.<br> (4) Reglementarile privind circulatia pe
                            drumurile publice se emit, dupa caz, de catre autoritatile publice centrale sau locale cu atributii in acest domeniu, numai cu avizul Inspectoratului General al Politiei Romane si cu respectarea acordurilor si conventiilor
                            internationale la care Romania este parte.
                            <br> (5) Prevederile prezentei ordonante de urgenta se aplica tuturor participantilor la trafic, precum si autoritatilor care au atributii in domeniul circulatiei si sigurantei pe drumurile publice si in domeniul protectiei
                            mediului.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 2</button>
                    <div class="content">
                        <p>
                            Indrumarea, supravegherea si controlul respectarii normelor de circulatie pe drumurile publice se fac de catre politia rutiera din cadrul Inspectoratului General al Politiei Romane, care are obligatia sa ia masurile legale in cazul in care constata incalcari
                            ale acestora.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 3</button>
                    <div class="content">
                        <p>
                            Circulatia pe drumurile publice din zona de frontiera si din alte zone pentru care, potrivit legii, s-au stabilit restrictii se face cu respectarea reglementarilor instituite pentru acele zone.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 4</button>
                    <div class="content">
                        <p>
                            Controlul circulatiei vehiculelor apartinand institutiilor din sistemul de aparare, ordine publica si siguranta nationala se efectueaza de catre politia rutiera, precum si de personalul desemnat de catre aceste institutii.</p>
                    </div>
                    <button class="collapsible">Articolul 5</button>
                    <div class="content">
                        <p>
                            (1) Administratorul drumului public, antreprenorul sau executantul lucrarilor, conform competentelor ce ii revin, cu avizul politiei rutiere, este obligat sa instaleze indicatoare ori alte dispozitive speciale, sa aplice marcaje pe drumurile publice,
                            conform standardelor in vigoare, si sa le mentina in stare corespunzatoare.<br> (2) Administratorul drumului public sau, dupa caz, antreprenorul ori executantul lucrarilor este obligat sa semnalizeze
                            corespunzator, cat mai repede posibil, orice obstacol aflat pe partea carosabila, care stanjeneste sau pune in pericol siguranta circulatiei, si sa ia toate masurile de inlaturare a acestuia.<br> (3) Autoritatile publice locale
                            sunt obligate sa amenajeze statiile mijloacelor de transport public de persoane, prevazute cu alveole sau refugii, cu avizul politiei rutiere.<br> (4) Se interzic amplasarea constructiilor de orice fel si practicarea actelor
                            de comert pe trotuar sau pe acostament, in parcarile amenajate sau pe partea carosabila, in conditiile in care acestea ar afecta siguranta circulatiei pietonilor si vehiculelor.<br> (5) In perimetrul statiilor mijloacelor de
                            transport public de persoane pot fi amenajate doar spatii:<br> a) de asteptare pentru calatori;<br> b) pentru comercializarea legitimatiilor de calatorie.<br> (6) In cazul producerii unui eveniment rutier ca urmare a starii
                            tehnice necorespunzatoare a drumului public, a nesemnalizarii sau a semnalizarii necorespunzatoare a acestuia, precum si a obstacolelor ori lucrarilor care se executa pe acesta, administratorul drumului public, antreprenorul
                            sau executantul lucrarilor raspunde, dupa caz, administrativ, contraventional, civil sau penal, in conditiile legii.<br> (7) Orice masura de restrictie a circulatiei pe drumurile publice se dispune de catre administratorul
                            drumului numai cu avizul politiei rutiere.<br> (8) Prin exceptie de la alin. (7) , in cazuri temeinic justificate, politia rutiera poate dispune, fara acordul administratorului drumului public, masuri temporare de restrictie
                            a circulatiei pe drumurile publice.<br> (9) In scopul asigurarii desfasurarii in conditii de siguranta a circulatiei pe drumurile publice, politia rutiera poate solicita administratorului drumului public executarea sau, dupa
                            caz, desfiintarea de amenajari rutiere.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 6</button>
                    <div class="content">
                        <p>
                            In sensul prezentei ordonante de urgenta, expresiile si termenii de mai jos au urmatorul inteles:<br> 1. acordare a prioritatii - obligatia oricarui participant la trafic de a nu isi continua deplasarea sau de a nu efectua
                            orice alta manevra, daca prin acestea ii obliga pe ceilalti participanti la trafic care au prioritate de trecere sa isi modifice brusc directia sau viteza de deplasare ori sa opreasca;<br> 2. acostament - fasia laterala cuprinsa
                            intre limita partii carosabile si marginea platformei drumului;<br> 3. amenajari rutiere - totalitatea constructiilor, dispozitivelor si oricaror mijloace tehnice, altele decat cele destinate semnalizarii, amplasate pe drumul
                            public in scopul asigurarii securitatii rutiere;
                            <br>4. ansamblu de vehicule - vehiculul cu motor cuplat cu unul sau doua vehicule, care circula pe drum ca o unitate;<br> 5. autostrada - drumul national de mare capacitate si viteza, semnalizat special, rezervat exclusiv circulatiei
                            autovehiculelor, cu sau fara remorci, care nu serveste proprietatii riverane, prevazut cu doua cai unidirectionale, separate printr-o zona mediana sau, in mod exceptional, prin alte modalitati, cu exceptia unor locuri speciale
                            sau cu caracter temporar, avand cel putin doua benzi de circulatie pe sens si banda de urgenta, intersectii denivelate si accese limitate, intrarea si iesirea fiind permise numai prin locuri special amenajate;<br> 6. autovehicul
                            - orice vehicul echipat cu motor de propulsie, utilizat in mod obisnuit pentru transportul persoanelor sau marfurilor pe drum ori pentru tractarea, pe drum, a vehiculelor utilizate pentru transportul persoanelor sau marfurilor.
                            Vehiculele care se deplaseaza pe sine, denumite tramvaie, precum si tractoarele agricole sau forestiere nu sunt considerate autovehicule. Troleibuzele sunt considerate autovehicule; (la data 01-sep-2014 Art. 6, punctul 6. din
                            capitolul I modificat de Art. I, punctul 1. din Ordonanta 21/2014 ) 61. anvelope de iarna - anvelope omologate conform Directivei 92/23/CE a Consiliului din 31 martie 1992 privind pneurile autovehiculelor si ale remorcilor
                            acestora, precum si montarea lor, Regulamentului Comisiei Economice pentru Europa a Organizatiei Natiunilor Unite (CEE-ONU) nr. 30 sau Regulamentului Comisiei Economice pentru Europa a Organizatiei Natiunilor Unite CEE-ONU
                            nr. 54, dupa caz.<br> 7. banda de circulatie - subdiviziunea longitudinala a partii carosabile, materializata prin marcaje rutiere sau alte mijloace, daca are o latime corespunzatoare pentru circulatia intr-un sens a unui sir
                            de vehicule, altele decat vehiculele care se deplaseaza pe doua roti;<br> 8. banda de urgenta - subdiviziunea longitudinala suplimentara, situata la extremitatea din partea dreapta a autostrazii, in sensul de circulatie, destinata
                            exclusiv stationarii autovehiculelor in cazuri justificate, precum si circulatiei autovehiculelor cu regim prioritar care se deplaseaza la interventii sau in misiuni cu caracter de urgenta;<br> 9. banda reversibila - banda
                            de circulatie, marcata si semnalizata, situata langa axa drumului, destinata circulatiei autovehiculelor intr-un sens sau in altul, in functie de intensitatea traficului;<br> 10. bicicleta - vehiculul prevazut cu doua roti,
                            propulsat exclusiv prin forta musculara, cu ajutorul pedalelor sau manivelelor;<br> 11. coloana oficiala - unul sau mai multe vehicule care circula pe drumul public si sunt insotite de unul sau mai multe autovehicule ale politiei
                            rutiere, care au in functiune semnale speciale de avertizare sonore si luminoase de culoare rosie;<br> 12. conducator - persoana care conduce pe drum un grup de persoane, un vehicul sau animale de tractiune, animale izolate
                            sau in turma, de povara ori de calarie;<br> 13. [Articolul 6, punctul 13. din capitolul I a fost abrogat la 29-iun-2007 de Art. I, punctul 2. din Ordonanta urgenta 69/2007] 131. [Articolul 6, punctul 13^1. din capitolul I a
                            fost abrogat la 20-ian-2007 de Art. I, punctul 1. din Legea 6/2007] <br>14. drum public - orice cale de comunicatie terestra, cu exceptia cailor ferate, special amenajata pentru traficul pietonal sau rutier, deschisa circulatiei
                            publice; drumurile care sunt inchise circulatiei publice sunt semnalizate la intrare cu inscriptii vizibile;<br> 15. unitati de asistenta medicala autorizate - unitatile sanitare cu personal calificat si cu dotare corespunzatoare
                            pentru examinarea medicala ambulatorie a candidatilor la obtinerea permisului de conducere si a conducatorilor de autovehicule, de tractoare agricole sau forestiere ori de tramvaie, autorizate de autoritatea de sanatate publica
                            judeteana sau de cea a municipiului Bucuresti, dupa caz;<br> 16. inmatriculare/inregistrare - operatiunea administrativa prin care se atesta ca un vehicul poate circula pe drumurile publice. Dovada atestarii inmatricularii/inregistrarii
                            este certificatul de inmatriculare/inregistrare si numarul de inmatriculare/inregistrare atribuit; 162. inmatriculare/inregistrare permanenta - operatiunea de inmatriculare/inregistrare prin care se atribuie certificat de inmatriculare/inregistrare
                            si numar de inmatriculare/ inregistrare pentru o perioada nedeterminata; 163. inmatriculare temporara - operatiunea de inmatriculare prin care se acorda certificat de inmatriculare si numar de inmatriculare pentru o perioada
                            determinata;
                            <br> 17. localitate - catunul, satul, comuna, orasul si municipiul ale caror intrari si iesiri sunt semnalizate in conformitate cu prevederile legale;<br> 18. masa totala maxima autorizata - masa maxima a unui vehicul incarcat,
                            declarata admisibila in urma omologarii de catre autoritatea competenta;<br> 19. mijloc tehnic certificat - dispozitivul care dovedeste consumul de produse ori substante stupefiante sau al medicamentelor cu efecte similare
                            acestora ori prezenta in aerul expirat a alcoolului sau prin care se probeaza incalcari ale unor reguli de circulatie;<br> 20. mijloc tehnic omologat si verificat metrologic - dispozitivul care stabileste concentratia de alcool
                            in aerul expirat ori destinat masurarii vitezei;<br> 21. moped - autovehicul, cu doua sau trei roti, a carui viteza maxima prin constructie este mai mare de 25 km/h, dar nu depaseste 45 km/h si care este echipat cu un motor
                            cu ardere interna, cu aprindere prin scanteie, cu o capacitate cilindrica ce nu depaseste 50 cmc sau cu un alt motor cu ardere interna ori, dupa caz, electric, a carui putere nominala continua maxima nu depaseste 4 kW, iar
                            masa proprie a vehiculului nu depaseste 350 kg, neincluzand masa bateriilor in cazul vehiculului electric. Este asimilat mopedului cvadriciclul usor, astfel cum este definit la pct. 6 partea A din anexa nr. 1 la sectiunea 4
                            din Reglementarile privind omologarea de tip si eliberarea cartii de identitate a vehiculelor rutiere, precum si omologarea de tip a produselor utilizate la acestea - RNTR 2, aprobate prin Ordinul ministrului lucrarilor publice,
                            transporturilor si locuintei nr. 211/2003, cu modificarile si completarile ulterioare;
                            <br> 22. motocicleta - autovehiculul cu doua roti, cu sau fara atas, echipat cu un motor care are o capacitate cilindrica mai mare de 50 cm3 si/sau a carui viteza maxima, prin constructie, depaseste 45 km/h;<br> 23. parte carosabila
                            - portiunea din platforma drumului destinata circulatiei vehiculelor; un drum poate cuprinde mai multe parti carosabile complet separate una de cealalta printr-o zona despartitoare sau prin diferenta de nivel; <br>24. participant
                            la trafic - persoana fizica ce utilizeaza, la un moment dat, drumul public;<br> 25. pista pentru biciclete - subdiviziunea partii carosabile, a trotuarului ori a acostamentului sau pista separata de drum, special amenajata,
                            semnalizata si marcata corespunzator, destinata numai circulatiei bicicletelor si mopedelor;<br> 26. prioritate de trecere - dreptul unui participant la trafic de a trece inaintea celorlalti participanti la trafic cu care se
                            intersecteaza, in conformitate cu prevederile legale privind circulatia pe drumurile publice;<br> 27. remorca - vehiculul fara motor destinat a fi tractat de un autovehicul sau de un tractor;<br> 28. remorca usoara - remorca
                            a carei masa totala maxima autorizata nu depaseste 750 kg; 29. semiremorca - remorca a carei masa totala maxima autorizata este preluata in parte de catre un autovehicul sau de catre un tractor;<br> 29. suspendarea inmatricularii
                            - operatiune administrativa care consta in interzicerea temporara a dreptului de a pune in circulatie si a utiliza un vehicul pe drumul public;<br> 30. tractor agricol sau forestier - orice vehicul cu motor, care circula pe
                            roti sau pe senile, avand cel putin doua axe, a carui principala functie consta in puterea sa de tractiune, conceput in special pentru a trage, a impinge, a transporta ori a actiona anumite echipamente, utilaje sau remorci
                            utilizate in exploatarea agricola ori forestiera si a carui utilizare pentru transportul pe drum al persoanelor sau al marfurilor ori pentru tractarea, pe drum, a vehiculelor utilizate pentru transportul persoanelor sau al
                            marfurilor nu este decat o functie secundara. Sunt asimilate tractorului agricol sau forestier vehiculele destinate efectuarii de servicii ori lucrari, denumite masini autopropulsate;<br> 31. [Articolul 6, punctul 31. din capitolul
                            I a fost abrogat la 01-sep-2014 de Art. I, punctul 2. din Ordonanta 21/2014]<br> 32. trecere la nivel - incrucisarea la nivel dintre un drum public si o cale ferata sau linie de tramvai, care dispune de o platforma independenta;
                            321. triciclu cu motor - autovehicul cu trei roti dispuse simetric, a carui viteza maxima prin constructie depaseste 45 km/h, care este echipat cu un motor avand o cilindree de peste 50 cm3, in cazul unui motor cu ardere interna,
                            sau cu un motor electric cu putere nominala continua ce depaseste 4 kW;<br> 33. trotuar - spatiul longitudinal situat in partea laterala a drumului, separat in mod vizibil de partea carosabila prin diferenta sau fara diferenta
                            de nivel, destinat circulatiei pietonilor;<br> 34. detinator mandatat - persoana fizica sau juridica care foloseste un vehicul in baza unui contract de leasing sau contract de inchiriere;<br> 35. vehicul - sistemul mecanic
                            care se deplaseaza pe drum, cu sau fara mijloace de autopropulsare, utilizat in mod curent pentru transportul de persoane si/sau bunuri ori pentru efectuarea de servicii sau lucrari; 351. vehicul nou - vehicul care nu a mai
                            fost niciodata inmatriculat;<br> 36. vehicul cu mase sau dimensiuni de gabarit depasite - vehiculul care, datorita dimensiunilor sale ori marfurilor transportate, depaseste masele totale maxime admise sau dimensiunile de gabarit
                            admise, prevazute in reglementarile legale;<br> 37. vehicul in circulatie internationala sau in trafic international - vehiculul care, prin deplasarea sa, depaseste cel putin o frontiera de stat;<br> 38. zona drumului public
                            cuprinde suprafata de teren ocupata de elementele constructive ale drumului, zona de protectie si zona de siguranta. Limitele zonelor drumurilor se stabilesc in conformitate cu prevederile legale;<br> 39. zona pietonala - perimetrul
                            care cuprinde una sau mai multe strazi rezervate circulatiei pietonilor, unde accesul vehiculelor este supus unor reguli speciale de circulatie, avand intrarile si iesirile semnalizate in conformitate cu prevederile legale;<br>                            40. zona rezidentiala - perimetrul dintr-o localitate unde se aplica reguli speciale de circulatie, avand intrarile si iesirile semnalizate in conformitate cu prevederile legale.

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">CAPITOLUL II: Vehiculele</button>
            <div class="content">
                <div class="sectiune">
                    <button class="collapsible">SECTIUNEA 1: Conditiile privind circulatia vehiculelor si controlul
						acestora</button>
                    <div class="content">
                        <div class="articol">
                            <button class="collapsible">Articolul 7</button>
                            <div class="content">
                                <p>
                                    Orice vehicul care circula pe drumurile publice trebuie sa corespunda normelor tehnice privind siguranta circulatiei rutiere, protectia mediului si utilizarea conform destinatiei.</p>
                            </div>
                            <button class="collapsible">Articolul 8</button>
                            <div class="content">
                                <p>
                                    Pentru a fi conduse pe drumurile publice, fiecare autovehicul, tractor agricol sau forestier si tramvai trebuie sa fie dotat cu trusa medicala de prim ajutor, doua triunghiuri reflectorizante si un stingator de incendiu, omologate.</p>
                            </div>
                            <button class="collapsible">Articolul 9</button>
                            <div class="content">
                                <p>
                                    (1) Pentru a fi inmatriculate, inregistrate sau admise in circulatie, autovehiculele, remorcile si tramvaiele trebuie sa fie omologate in conditiile legii. <br>(2) Categoriile de vehicule care pot fi admise in circulatie
                                    fara a fi omologate se stabilesc prin ordin al ministrului transporturilor, constructiilor si turismului, cu avizul Ministerului Administratiei si Internelor - Inspectoratul General al Politiei Romane, care se publica
                                    in Monitorul Oficial al Romaniei, Partea I. <br> (3) Documentul care atesta omologarea este cartea de identitate a vehiculului, eliberata in conditiile legii. <br>(4) Pentru a fi mentinute in circulatie, vehiculele
                                    inmatriculate sau inregistrate, cu exceptia masinilor autopropulsate cu o viteza maxima constructiva care nu depaseste 25 km/h, a autovehiculelor cu senile, a tramvaielor si a vehiculelor cu tractiune animala, se supun
                                    inspectiei tehnice periodice, conform legislatiei in vigoare. <br> (5) Inspectia tehnica periodica se efectueaza in statii autorizate, conform legislatiei in vigoare.<br> (6) Pentru autovehiculele tractoarele agricole
                                    sau forestiere apartinand institutiilor din sistemul de aparare, ordine publica si siguranta nationala, inspectia tehnica periodica se poate efectua si in statii proprii, autorizate potrivit legii.

                                </p>
                            </div>
                            <button class="collapsible">Articolul 10</button>
                            <div class="content">
                                <p>
                                    (1) Este interzisa circulatia pe drumurile publice a vehiculelor care nu corespund din punct de vedere tehnic, a celor neasigurate obligatoriu de raspundere civila auto pentru pagube produse tertilor prin accidente de circulatie, a celor pentru care a
                                    intervenit suspendarea inmatricularii, precum si a vehiculelor inregistrate al caror termen de valabilitate a inspectiei tehnice periodice a expirat ori este anulata. <br>(2) Constatarea
                                    deficientelor vehiculelor se face de catre politia rutiera, iar verificarea starii tehnice a vehiculelor aflate in trafic pe drumurile publice se face de catre politia rutiera, impreuna cu institutiile abilitate de
                                    lege.



                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sectiune">
                    <button class="collapsible">SECTIUNEA 2: Inmatricularea, inregistrarea si radierea vehiculelor
					</button>
                    <div class="content">
                        <div class="articol">
                            <button class="collapsible">Articolul 11</button>
                            <div class="content">
                                <p>
                                    (1) Proprietarii de vehicule sau detinatorii mandatati ai acestora sunt obligati sa le inmatriculeze sau sa le inregistreze, dupa caz, inainte de a le pune in circulatie, conform prevederilor legale.<br> (2) Inmatricularea
                                    vehiculelor este continua, de la admiterea in circulatie pana la scoaterea definitiva din circulatie a unui vehicul din categoria celor supuse acestei conditii, potrivit prevederilor prezentei ordonante de urgenta,
                                    si presupune urmatoarele operatiuni:
                                    <br>a) inscrierea in evidentele autoritatilor competente, potrivit legii, a dobandirii dreptului de proprietate asupra unui vehicul de catre primul proprietar;<br> b) transcrierea in evidentele autoritatilor competente,
                                    potrivit legii, a tuturor transmiterilor ulterioare ale dreptului de proprietate asupra unui vehicul. <br>(3) Operatiunile prevazute la alin. (2) se realizeaza pe baza datelor de identificare ale vehiculului si ale
                                    proprietarului si conditioneaza eliberarea de catre autoritatile competente, potrivit legii, a unui certificat de inmatriculare, precum si a placutelor cu numarul de inmatriculare atribuit si transcrierile necesare
                                    in certificatul de inmatriculare si in cartea de identitate a vehiculului. <br>(4) In cazul transmiterii dreptului de proprietate asupra unui vehicul, datele noului proprietar se inscriu in Registrul national de evidenta
                                    a permiselor de conducere si a vehiculelor inmatriculate constituit de Directia Regim Permise de Conducere si Inmatriculare a Vehiculelor simultan cu mentionarea incetarii calitatii de titular al inmatricularii a fostului
                                    proprietar. Pentru realizarea acestei operatiuni, noul proprietar este obligat sa solicite autoritatii competente de inmatriculare transcrierea transmiterii dreptului de proprietate, in termen de 90 de zile de la data
                                    dobandirii dreptului de proprietate asupra vehiculului. (41) Organul fiscal care opereaza scoaterea vehiculului din evidenta fiscala a fostului proprietar are obligatia de a notifica instrainarea acestuia in cadrul
                                    schimbului de informatii prevazut de reglementarile in materie fiscala, in termen de 5 zile lucratoare, autoritatii competente de inmatriculare. Aceasta face mentiunea privind instrainarea vehiculului in Registrul national
                                    de evidenta a permiselor de conducere si a vehiculelor inmatriculate constituit de Directia Regim Permise de Conducere si Inmatriculare a Vehiculelor, in termen de 30 de zile de la primirea notificarii. (42) De la data
                                    inregistrarii notificarii prevazute la alin. (41) , autoritatea competenta de inmatriculare, respectiv Directia Regim Permise de Conducere si Inmatriculare a Vehiculelor, transmite institutiilor interesate datele noului
                                    proprietar, la solicitarea acestora. (43) In situatia in care noul proprietar nu solicita transcrierea transmiterii dreptului de proprietate in termenul prevazut la alin. (4) , inmatricularea vehiculului se suspenda
                                    de drept pana la data transcrierii transmiterii dreptului de proprietate. (44) In cazul in care pana la transcriere intervin transmiteri succesive ale dreptului de proprietate asupra vehiculului, termenul prevazut la
                                    alin. (4) curge de la data primei transmiteri a dreptului de proprietate. (45) Suspendarea de drept a inmatricularii vehiculului intervine si la data expirarii sau, dupa caz, a anularii inspectiei tehnice periodice
                                    si inceteaza la data la care vehiculul trece o noua inspectie tehnica periodica. (46) In cazurile prevazute la alin. (43) si (45) , autoritatea competenta de inmatriculare, respectiv Directia Regim Permise de Conducere
                                    si Inmatriculare a Vehiculelor, inregistreaza suspendarea inmatricularii in Registrul national de evidenta a permiselor de conducere si a vehiculelor inmatriculate. Datele referitoare la suspendare se sterg dupa 5 ani
                                    de la data incetarii acesteia. (47) Inregistrarea suspendarii inmatricularii potrivit alin. (46) in cazul prevazut la alin. (45) se realizeaza pe baza datelor referitoare la inspectia tehnica periodica a vehiculului
                                    existente in Registrul national de evidenta a permiselor de conducere si a vehiculelor inmatriculate, respectiv comunicate Directiei Regim Permise de Conducere si Inmatriculare a Vehiculelor de catre Registrul Auto
                                    Roman in conditii stabilite prin protocol. (48) In scopul verificarii efectuarii inspectiei tehnice periodice a vehiculului, respectiv a valabilitatii acesteia, politia rutiera are drept de acces pentru consultarea
                                    Registrului national de evidenta a permiselor de conducere si a vehiculelor inmatriculate in conditiile stabilite prin protocolul incheiat intre Inspectoratul General al Politiei Romane si Directia Regim Permise de
                                    Conducere si Inmatriculare a Vehiculelor.<br> (5) Solicitantii unei operatiuni de inscriere a dreptului de proprietate in evidentele autoritatilor competente pentru un vehicul rutier utilizat dobandit din alt stat trebuie
                                    sa faca dovada certificarii autenticitatii vehiculului de catre Registrul Auto Roman. Certificarea autenticitatii vehiculului atesta faptul ca formularul-tip al documentului care confirma inmatricularea anterioara a
                                    vehiculului, eliberat de autoritatile competente din tara de provenienta, este autentic. <br>(6) [Articolul 11, alin. (6) din capitolul II, sectiunea 2 a fost abrogat la 30-iun-2016 de Art. 14, subpunctul IV. . , punctul
                                    2. din capitolul II din Ordonanta urgenta 41/2016] <br>(7) Cu ocazia realizarii oricarei operatiuni privind inmatricularea unui vehicul, verificarea efectuarii inspectiei tehnice periodice si a asigurarii obligatorii
                                    de raspundere civila, respectiv a valabilitatii acestora, se poate face si pe cale informatica, in conditiile stabilite prin protocol incheiat intre autoritatea competenta din subordinea Ministerului Administratiei
                                    si Internelor cu atributii de organizare si coordonare a activitatii de evidenta si eliberare a certificatelor de inmatriculare si a placutelor cu numere de inmatriculare si Registrul Auto Roman, respectiv Comisia de
                                    Supraveghere a Asigurarilor. <br>(8) [Articolul 11, alin. (8) din capitolul II, sectiunea 2 a fost abrogat la 30-iun-2016 de Art. 14, subpunctul IV. . , punctul 2. din capitolul II din Ordonanta urgenta 41/2016] <br>                                    (9) Societatile abilitate sa comercializeze vehicule noi si societatile de leasing din Romania pot solicita, pe cale informatica, inmatricularea sau autorizarea provizorie pentru circulatie a vehiculelor, prin intermediul
                                    unei aplicatii informatice puse la dispozitie, in conditiile stabilite prin protocol, de catre autoritatea competenta din subordinea Ministerului Administratiei si Internelor cu atributii de organizare si coordonare
                                    a activitatii de evidenta si eliberare a certificatelor de inmatriculare si a placutelor cu numere de inmatriculare.<br> (10) Proprietarul sau detinatorul mandatat al unui vehicul este obligat sa solicite autoritatii
                                    competente inscrierea in certificatul de inmatriculare sau de inregistrare a oricarei modificari a datelor de identificare a vehiculului respectiv sau, dupa caz, ale proprietarului, in termen de 30 de zile de la data
                                    la care a intervenit modificarea. <br>(11) Cu ocazia realizarii operatiunilor prevazute la alin. (2) , autoritatile competente de inmatriculare inscriu in Registrul national de evidenta a permiselor de conducere si
                                    a vehiculelor inmatriculate constituit de Directia Regim Permise de Conducere si Inmatriculare a Vehiculelor urmatoarele date in format electronic:<br> a) datele de identificare a proprietarului si, dupa caz, a detinatorului
                                    mandatat ori a altei persoane, in conditiile art. 15 alin. (11) ;<br> b) datele de identificare a vehiculului. <br>(12) Datele de identificare prevazute la alin. (11) lit. a) sunt: <br>a) pentru persoanele fizice: numele
                                    de familie, prenumele, codul numeric personal sau, daca este cazul, echivalentul acestuia, potrivit legislatiei nationale aplicabile, respectiv numarul de identificare fiscala, locul si data nasterii, domiciliul/resedinta,
                                    precum si, optional, un numar de telefon si adresa de posta electronica ale persoanei; <br>b) pentru persoanele juridice: denumirea, sediul, codul de identificare fiscala, numarul de inregistrare in registrul comertului,
                                    daca este cazul, sau codul unic de inregistrare, potrivit legii nationale aplicabile, precum si, optional, un numar de telefon si adresa de posta electronica ale reprezentantului acestora.<br> (13) Datele de identificare
                                    a vehiculului care se inscriu in Registrul national de evidenta a permiselor de conducere si a vehiculelor inmatriculate si codurile armonizate aferente acestora se stabilesc si se actualizeaza prin ordin al ministrului
                                    afacerilor interne, care se publica in Monitorul Oficial al Romaniei, Partea I. <br>(14) Datele prevazute la alin. (11) se sterg dupa 10 ani de la data radierii vehiculului. <br>(15) Registrul national de evidenta a
                                    permiselor de conducere si a vehiculelor inmatriculate se actualizeaza pe baza datelor furnizate in sistem informatizat de catre Registrul Auto Roman, referitoare la inspectia tehnica periodica a vehiculelor. Transmiterea
                                    datelor se face cu titlu gratuit.<br> (16) Directia Regim Permise de Conducere si Inmatriculare a Vehiculelor este autorizata sa faca schimb de date cu autoritatile competente de inmatriculare din statele membre ale
                                    Uniunii Europene, prin obtinerea, respectiv furnizarea datelor necesare, in scopul verificarii, inaintea inmatricularii unui vehicul, a statutului legal al acestuia in statul in care a fost inmatriculat anterior, in
                                    cazul in care exista indoieli asupra situatiei reale sau juridice a vehiculului. Verificarea impreuna cu autoritatile competente de inmatriculare din statele membre ale Uniunii Europene se poate realiza inclusiv prin
                                    utilizarea unei platforme informatice in scopul facilitarii schimbului de informatii.</p>
                            </div>
                            <button class="collapsible">Articolul 11'</button>
                            <div class="content">
                                <p>
                                    (1) Autoritatile competente sa realizeze operatiuni de inmatriculare, autorizare provizorie si eliberare a permiselor de conducere incaseaza tarifele aferente confectionarii si valorificarii placilor cu numere de inmatriculare permanenta, de proba, temporare
                                    si provizorii, atribuirii unui numar de inmatriculare preferential, pastrarii combinatiei numarului de inmatriculare, precum si contravaloarea certificatelor de inmatriculare, a autorizatiilor provizorii si a permiselor
                                    de conducere.<br> (2) Sumele prevazute la alin. (1) pot fi achitate prin virament, prin mijloace de plata online, prin intermediul POS-urilor instalate la unitatile Trezoreriei Statului
                                    sau la sediile institutiilor publice beneficiare ale sumelor si prin alte modalitati de plata reglementate de acte normative in vigoare, prin mandat postal sau in numerar la ghiseele serviciilor publice comunitare regim
                                    permise de conducere si inmatriculare a vehiculelor din cadrul institutiilor prefectului, la casieriile unitatilor Trezoreriei Statului, in conditiile legii. Pentru sumele incasate prin intermediul POS-urilor instalate
                                    la unitatile Trezoreriei Statului, comisioanele se suporta de la bugetul de stat, prin bugetul institutiilor publice din structura carora fac parte unitatile Trezoreriei Statului, iar pentru cele incasate prin intermediul
                                    POS-urilor instalate la sediile institutiilor publice beneficiare, comisioanele se suporta din bugetele acestora. <br>(3) Sumele prevazute la alin. (1) se incaseaza intr-un cont distinct de disponibil deschis la unitatile
                                    teritoriale ale Trezoreriei Statului pe numele institutiei prefectului din care face parte serviciul public comunitar regim permise de conducere si inmatriculare a vehiculelor.<br> (4) Unitatile Trezoreriei Statului
                                    la care isi au deschise conturile institutiile prefectului din care fac parte serviciile publice comunitare regim permise de conducere si inmatriculare a vehiculelor incaseaza sumele prevazute la alin. (1) in numerar,
                                    in contul prevazut la alin. (3) . <br> (5) Sumele incasate in numerar la ghiseele serviciilor publice comunitare regim permise de conducere si inmatriculare a vehiculelor se depun la casieriile institutiilor prefectului
                                    in aceeasi zi, la terminarea programului de lucru.
                                    <br>(6) Sumele predate la institutiile prefectului potrivit alin. (5) se depun de catre acestea in contul distinct de disponibil prevazut la alin. (3) in urmatoarea zi lucratoare. <br> (7) Sumele incasate in contul
                                    prevazut la alin. (3) se vireaza de catre institutiile prefectului in contul de venituri al bugetului activitatii finantate integral din venituri proprii -Venituri din prestari servicii- al Directiei Regim Permise de
                                    Conducere si Inmatriculare a Vehiculelor pentru tarifele prevazute la alin. (1) , respectiv in contul Regiei Autonome -Administratia Patrimoniului Protocolului de Stat- pentru contravaloarea documentelor prevazute la
                                    alin. (1) in termen de cel mult doua zile lucratoare de la incasare. <br>(8) Restituirea sumelor prevazute la alin. (1) , achitate eronat sau pentru care nu au fost prestate serviciile aferente, se face de Catre Directia
                                    Regim Permise de Conducere si Inmatriculare a Vehiculelor, respectiv de catre Regia Autonoma -Administratia Patrimoniului Protocolului de Stat-, la cererea scrisa a platitorului adresata acestora insotita de documentul
                                    prin care s-a efectuat plata. (la data 30-iun-2016 Art. 11 din capitolul II, sectiunea 2 completat de Art. 14, subpunctul IV. . , punctul 3. din capitolul II din Ordonanta urgenta 41/2016)
                                </p>
                            </div>
                            <button class="collapsible">Articolul 12</button>
                            <div class="content">
                                <p>
                                    (1) Pentru a circula pe drumurile publice, vehiculele, cu exceptia celor trase sau impinse cu mana si a bicicletelor, trebuie sa fie inmatriculate ori inregistrate, dupa caz, si sa poarte placute cu numarul de inmatriculare sau de inregistrare, cu forme,
                                    dimensiuni si continut prevazute de standardele in vigoare.<br> (2) Vehiculele care nu sunt supuse inmatricularii sau inregistrarii pot circula pe drumurile publice numai in conditiile
                                    prevazute prin regulament.</p>
                            </div>
                            <button class="collapsible">Articolul 13</button>
                            <div class="content">
                                <p>
                                    (1) Autovehiculele, cu exceptia mopedelor si a troleibuzelor, precum si remorcile se inmatriculeaza permanent sau temporar la autoritatea competenta in a carei raza teritoriala proprietarii isi au domiciliul, resedinta ori sediul, in conditiile stabilite
                                    prin reglementarile in vigoare. <br>(2) Autovehiculele, remorcile si tractoarele agricole sau forestiere din dotarea Ministerului Apararii Nationale, a Ministerului Afacerilor Interne,
                                    precum si cele ale Serviciului Roman de Informatii se inregistreaza la aceste institutii. Autovehiculele si remorcile pot, dupa caz, sa fie inmatriculate in conditiile prevazute la alin. (1) . <br>(3) Pana la inmatriculare,
                                    vehiculele prevazute la alin. (1) pot circula cu numere provizorii, pe baza unei autorizatii speciale eliberate de autoritatea competenta. <br>(4) La cerere, persoanelor juridice care fabrica, asambleaza, caroseaza
                                    ori testeaza autovehicule, remorci sau tractoare agricole ori forestiere li se pot elibera pentru acestea autorizatii si numere pentru proba. <br>(5) Evidenta vehiculelor inmatriculate se tine la autoritatea competenta
                                    pe raza careia proprietarul isi are domiciliul, resedinta sau sediul.


                                </p>
                            </div>
                            <button class="collapsible">Articolul 14</button>
                            <div class="content">
                                <p>
                                    (1) Tramvaiele, troleibuzele, mopedele, tractoarele agricole sau forestiere, altele decat cele prevazute la art. 13 alin. (2) , inclusiv remorcile destinate a fi tractate de acestea, precum si vehiculele cu tractiune animala se inregistreaza la nivelul
                                    primarilor comunelor, ai oraselor, ai municipiilor si ai sectoarelor municipiului Bucuresti, care, prin compartimentele de specialitate, tin si evidenta acestora. <br>(2) [Articolul
                                    14, alin. (2) din capitolul II, sectiunea 2 a fost abrogat la 01-sep-2014 de Art. I, punctul 6. din Ordonanta 21/2014]



                                </p>
                            </div>
                            <button class="collapsible">Articolul 15</button>
                            <div class="content">
                                <p>
                                    (1) Odata cu realizarea operatiunilor de inmatriculare a vehiculului, autoritatea competenta elibereaza proprietarului sau detinatorului mandatat un certificat de inmatriculare, conform categoriei sau subcategoriei din care face parte vehiculul respectiv,
                                    precum si placute cu numarul de inmatriculare. (11) La cererea scrisa a proprietarului unui vehicul, in certificatul de inmatriculare sau de inregistrare se poate inscrie si o alta persoana decat proprietarul, specificandu-se
                                    calitatea in care aceasta poate utiliza vehiculul, in virtutea unui drept legal. In cazul in care proprietarul vehiculului este o societate de leasing, este obligatorie mentionarea in certificatul de inmatriculare sau
                                    de inregistrare si a datelor de identificare ale detinatorului mandatat.<br> (2) [Articolul 15, alin. (2) din capitolul II, sectiunea 2 a fost abrogat la 19-ian-2013 de Art. I, punctul
                                    4. din Legea 203/2012] <br>(3) Pentru vehiculele prevazute la art. 13 alin. (2) si art. 14 alin. (1) , autoritatea care le inregistreaza elibereaza proprietarilor acestora certificate si placute cu numere de inregistrare,
                                    conform categoriei sau subcategoriei din care fac parte vehiculele respective. <br>(4) Forma, dimensiunile si continutul certificatului de inmatriculare si ale certificatului de inregistrare se stabilesc prin ordin
                                    al ministrului administratiei si internelor, care se publica in Monitorul Oficial al Romaniei, Partea I. <br>(5) Este interzisa punerea in circulatie a unui vehicul, inmatriculat sau inregistrat, care nu are montate
                                    placute cu numarul de inmatriculare sau de inregistrare atribuite de autoritatea competenta ori daca acestea nu sunt conforme cu standardele in vigoare, precum si in cazul in care certificatul de inmatriculare sau de
                                    inregistrare este retinut, iar dovada inlocuitoare a acestuia este eliberata fara drept de circulatie sau termenul de valabilitate a expirat.

                                </p>
                            </div>
                            <button class="collapsible">Articolul 16</button>
                            <div class="content">
                                <p>
                                    Inmatricularea, inregistrarea sau atribuirea numarului provizoriu ori pentru probe a unui vehicul se anuleaza de catre autoritatea care a efectuat-o, daca se constata ca au fost incalcate normele legale referitoare la aceste operatiuni.



                                </p>
                            </div>
                            <button class="collapsible">Articolul 17</button>
                            <div class="content">
                                <p>
                                    (1) Radierea din evidenta a vehiculelor se face de catre autoritatea care a efectuat inmatricularea sau inregistrarea doar in cazul scoaterii definitive din circulatie a acestora, la cererea proprietarului, in urmatoarele cazuri:<br>                                    a) proprietarul doreste retragerea definitiva din circulatie a vehiculului si face dovada depozitarii acestuia intr-un spatiu adecvat, detinut in conditiile legii; <br>b) proprietarul face dovada dezmembrarii, casarii
                                    sau predarii vehiculului la unitati specializate in vederea dezmembrarii; <br>c) la scoaterea definitiva din Romania a vehiculului respectiv;<br> d) in cazul furtului vehiculului. <br>(2) Radierea din evidenta a vehiculelor
                                    inregistrate, la trecerea acestora in proprietatea altei persoane, se face de catre autoritatea care a efectuat inregistrarea, la cererea proprietarului, in conditiile legii.<br> (3) Este interzisa circulatia pe drumurile
                                    publice a vehiculelor radiate din evidenta.
                                    <br> (4) Vehiculele declarate, potrivit legii, prin dispozitie a autoritatii administratiei publice locale, fara stapan sau abandonate se radiaza din oficiu in termen de 30 de zile de la primirea dispozitiei respective.
                                    <br>(5) Radierea din evidenta a unui vehicul se face, din oficiu, de catre autoritatea care a efectuat inmatricularea, si in urmatoarele situatii: <br>a) in cazul notificarii primite de la autoritati competente sau
                                    operatori economici autorizati sa emita certificatul de distrugere, care atesta faptul ca vehiculul a fost definitiv scos din uz;<br> b) in cazul notificarii primite de la autoritati competente, care atesta faptul ca
                                    vehiculul a fost inmatriculat permanent in alt stat. <br>(6) In termen de 30 de zile de la data radierii vehiculului in conditiile prevazute la alin. (5) , autoritatea competenta il informeaza pe titularul certificatului
                                    de inmatriculare cu privire la efectuarea acestei operatiuni.



                                </p>
                            </div>
                            <button class="collapsible">Articolul 18</button>
                            <div class="content">
                                <p>
                                    In cazul pierderii, furtului, schimbarii numelui ori deteriorarii certificatului de inmatriculare sau de inregistrare, proprietarul vehiculului respectiv este obligat sa solicite autoritatii competente eliberarea unui nou certificat de inmatriculare sau
                                    de inregistrare, in conditiile stabilite de autoritatea competenta, in termen de 30 de zile de la data declararii pierderii sau furtului, de la data schimbarii numelui ori de la data constatarii deteriorarii, dupa caz.

                                </p>
                            </div>
                            <button class="collapsible">Articolul 19</button>
                            <div class="content">
                                <p>
                                    Procedura inmatricularii, inregistrarii, radierii si eliberarea autorizatiei de circulatie provizorie sau pentru probe a vehiculelor se stabilesc prin ordin al ministrului administratiei si internelor, care se publica in Monitorul Oficial al Romaniei,
                                    Partea I.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">CAPITOLUL III: Conducatorii de vehicule</button>
            <div class="content">
                <div class="sectiune">
                    <button class="collapsible">SECTIUNEA 1: Dispozitii generale</button>
                    <div class="content">
                        <div class="articol">
                            <button class="collapsible">Articolul 20</button>
                            <div class="content">
                                <p>
                                    (1) Pentru a conduce pe drumurile publice autovehicule, tramvaie ori tractoare agricole sau forestiere, conducatorii acestora trebuie sa posede permis de conducere corespunzator. (la data 01-sep-2014 Art. 20, alin. (1) din capitolul III, sectiunea 1 modificat
                                    de Art. I, punctul 7. din Ordonanta 21/2014 )<br> (2) Permisele de conducere se elibereaza pentru urmatoarele categorii de vehicule: AM, A1, A2, A, B1, B, BE, C1, C1E, C, CE, D1,
                                    D1E, D, DE, Tr, Tb sau Tv. <br>(3) Descrierea categoriilor de vehicule prevazute la alin. (2) , pentru care se elibereaza permise de conducere, este prevazuta in anexa nr. 1.<br> (4) Varsta minima pentru obtinerea permisului
                                    de conducere este de: <br>a) 16 ani impliniti, pentru categoriile de vehicule AM, A1 si B1;<br> b) 18 ani impliniti, pentru categoriile de vehicule A2, B, BE, C1, C1E si Tr;<br> c) 20 de ani impliniti, daca persoana
                                    are o experienta de cel putin 2 ani de conducere a motocicletelor din categoria A2, sau 24 de ani impliniti, pentru motocicletele din categoria A; <br>d) 21 de ani pentru categoriile de vehicule C, CE, D1 si D1E, precum
                                    si pentru triciclurile cu motor din categoria A;<br> e) 24 de ani pentru categoriile de vehicule D, DE, Tb si Tv.</p>
                            </div>
                            <button class="collapsible">Articolul 21</button>
                            <div class="content">
                                <p>
                                    (1) Conducatorii de autovehicule, de tractoare agricole sau forestiere ori de tramvaie trebuie sa aiba cunostintele si indemanarea necesare conducerii si sa fie apti din punct de vedere medical si psihologic. <br>(2)
                                    Conducatorii de autovehicule, de tractoare agricole sau forestiere ori de tramvaie vor fi verificati periodic din punct de vedere medical si al capacitatilor psihologice, in conditiile stabilite de reglementarile in
                                    vigoare.
                                </p>
                            </div>
                            <button class="collapsible">Articolul 22</button>
                            <div class="content">
                                <p>
                                    (1) Examinarea medicala se realizeaza in scopul certificarii starii de sanatate si a calitatilor fizice necesare unui conducator de autovehicul, tractor agricol sau forestier ori tramvai.<br> (2) Afectiunile medicale
                                    incompatibile cu calitatea de conducator de autovehicule tractoare agricole sau forestiere ori tramvaie se stabilesc de catre Ministerul Sanatatii Publice si se aproba prin ordin al ministrului, care se publica in Monitorul
                                    Oficial al Romaniei, Partea I. <br>(3) Examinarea medicala se realizeaza in vederea: <br>a) aprobarii prezentarii la examen pentru obtinerea permisului de conducere; <br>b) obtinerii certificatului de atestare profesionala
                                    pentru conducatorii de autovehicule, de tractoare agricole sau forestiere ori de tramvaie stabiliti prin prezenta ordonanta de urgenta; <br>c) verificarii periodice, conform reglementarilor in vigoare.<br> (4) Examinarea
                                    medicala se realizeaza in unitati de asistenta medicala autorizate, existente la nivelul fiecarui judet, care au obligatia luarii in evidenta a solicitantului sau a conducatorului de autovehicul si tractor agricol sau
                                    forestier ori de tramvai de catre medicul de familie. <br>(5) Lista unitatilor de asistenta medicala autorizate se stabileste si se actualizeaza prin ordin al ministrului sanatatii publice, care se publica in Monitorul
                                    Oficial al Romaniei, Partea I. <br> (6) Medicul de familie, atunci cand constata ca o persoana din evidenta sa, care poseda permis de conducere, prezinta afectiuni medicale prevazute in ordinul ministrului sanatatii
                                    publice emis conform alin. (2) , va solicita unitatii de asistenta, medicala autorizate examenul de specialitate necesar. In cazul in care unitatea de asistenta medicala autorizata a stabilit ca persoana este inapta
                                    medical pentru a conduce un autovehicul, tractor agricol sau forestier ori tramvai, va comunica aceasta imediat politiei rutiere pe a carei raza teritoriala isi desfasoara activitatea. <br>(7) Verificarea medicala se
                                    efectueaza in conditiile stabilite prin ordin al ministrului sanatatii publice, care se publica in Monitorul Oficial al Romaniei, Partea I. <br>(8) Permisul de conducere al persoanei care este declarata inapta medical
                                    sau psihologic pentru a conduce autovehicule ori tramvaie se retrage de catre politia rutiera si poate fi redobandit numai dupa incetarea motivului pentru care s-a luat aceasta masura. <br>(9) Avizul de apt sau inapt
                                    medical poate fi contestat doar pe baza unei expertize efectuate de institutiile medico-legale, la solicitarea si pe cheltuiala partilor interesate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sectiune">
                    <button class="collapsible">SECTIUNEA 2: Permisul de conducere</button>
                    <div class="content">
                        <div class="articol">
                            <button class="collapsible">Articolul 23</button>
                            <div class="content">
                                <p>
                                    (1) Dreptul de a conduce un autovehicul, tractor agricol sau forestier ori tramvai pe drumurile publice il are numai persoana care poseda permis de conducere valabil, corespunzator categoriei ori subcategoriei din care face parte vehiculul respectiv,
                                    sau dovada inlocuitoare a acestuia cu drept de circulatie. <br>(2) Au dreptul de a conduce autovehicule, tractoare agricole sau forestiere ori tramvaie pe drumurile publice, in conditiile
                                    stabilite prin regulament, si persoanele care urmeaza un curs de pregatire practica, in vederea obtinerii permisului de conducere, numai in prezenta si sub supravegherea directa a unui instructor auto atestat in acest
                                    sens, precum si a examinatorului din cadrul autoritatii competente in timpul desfasurarii probelor practice ale examenului pentru obtinerea permisului de conducere pentru oricare dintre categoriile ori subcategoriile
                                    prevazute de lege.<br> (3) Pe parcursul activitatii de pregatire practica sau de examinare in vederea obtinerii permisului de conducere, instructorul auto atestat ori, dupa caz, examinatorul impreuna cu persoana pe
                                    care o supravegheaza sau o examineaza raspund pentru incalcarea de catre aceasta a regulilor de circulatie sau, dupa caz, pentru pagubele produse tertilor ca urmare a producerii unui accident de circulatie. (31) Pregatirea
                                    teoretica si practica a persoanelor in vederea obtinerii permisului de conducere este precedata de o evaluare obligatorie a capacitatilor psihologice solicitate in activitatea de conducere a autovehiculelor, tractoarelor
                                    agricole sau forestiere ori tramvaielor. Evaluarea psihologica este obligatorie in vederea obtinerii certificatului de atestare profesionala pentru conducatorii de autovehicule si de tramvaie stabiliti prin prezenta
                                    ordonanta de urgenta. (32) Conducatorii de autovehicule sau de tramvaie, detinatori ai certificatului de atestare profesionala, vor fi evaluati periodic din punct de vedere al capacitatilor psihologice solicitate in
                                    activitatea de conducere a autovehiculelor sau tramvaielor, in conditiile stabilite de reglementarile in vigoare. (33) Evaluarea psihologica se efectueaza in conditiile stabilite prin ordin al ministrului transporturilor,
                                    constructiilor si turismului, in conditiile legii, care se publica in Monitorul Oficial al Romaniei, Partea I. (34) Evaluarea psihologica se realizeaza in laboratoare de specialitate autorizate din cadrul institutiilor
                                    abilitate. (35) Lista laboratoarelor de specialitate autorizate se stabileste si se actualizeaza prin ordin al ministrului transporturilor, constructiilor si turismului, care se publica in Monitorul Oficial al Romaniei,
                                    Partea I.<br> (4) Persoanele care solicita prezentarea la examen pentru obtinerea permisului de conducere sau a unor noi categorii ori subcategorii ale acestuia trebuie sa indeplineasca, potrivit legii, conditiile de
                                    varsta, sa fie apte din punct de vedere medical si sa faca dovada pregatirii teoretice si practice prin cursuri organizate de unitati autorizate, potrivit legii.<br> (5) [Articolul 23, alin. (5) din capitolul III, sectiunea
                                    2 a fost abrogat la 01-sep-2014 de Art. I, punctul 8. din Ordonanta 21/2014] <br>(6) Pot fi atestati ca profesori de legislatie sau instructori auto pentru pregatirea practica, fara scolarizare si sustinerea examenului
                                    de atestare, politistii rutieri cu grad de ofiter carora le-au incetat raporturile de serviciu si care si-au desfasurat activitatea neintrerupt in ultimii 10 ani in structurile politiei rutiere.<br> (7) Politistii rutieri
                                    care nu au grad de ofiter pot fi atestati ca instructori auto pentru pregatirea practica, daca indeplinesc conditiile prevazute la alin. (6) .<br> (8) [Articolul 23, alin. (8) din capitolul III, sectiunea 2 a fost abrogat
                                    la 01-sep-2014 de Art. I, punctul 8. din Ordonanta 21/2014]<br> (9) Examenul pentru obtinerea permisului de conducere consta in sustinerea unei probe teoretice de verificare a cunostintelor si a unei probe practice
                                    de verificare a aptitudinilor si comportamentului, corespunzator categoriei de permis solicitat. Proba practica pentru categoria AM consta numai in verificarea aptitudinilor in poligoane special amenajate. Conditiile
                                    de obtinere a permisului de conducere se stabilesc prin regulament. (91) Pentru asigurarea si verificarea legalitatii examenului de obtinere a permisului de conducere, modul de desfasurare a probei teoretice se inregistreaza
                                    video, iar in cazul probei practice atat video, cat si audio, cu sisteme tehnice de monitorizare. Pentru proba practica, sistemele tehnice de monitorizare se instaleaza pe autovehiculele folosite la sustinerea probei
                                    practice. (92) Prin exceptie de la prevederile alin. (91) , nu se inregistreaza audio sau video proba practica sustinuta pentru categoriile AM, A1, A2 si A. (93) Sistemele tehnice de monitorizare prevazute la alin.
                                    (1) se asigura de catre serviciul public comunitar regim permise de conducere si inmatriculare a vehiculelor care organizeaza examenul de obtinere a permisului de conducere. (94) Procedura si conditiile tehnice in care
                                    se realizeaza si stocheaza inregistrarile prevazute la alin. (91) , precum si masurile pentru protejarea acestora si a datelor cu caracter personal se stabilesc, in conditiile legii, prin ordin al ministrului afacerilor
                                    interne.
                                    <br> (10) Procedura de examinare pentru obtinerea permisului de conducere se stabileste prin ordin al ministrului administratiei si internelor, care se publica in Monitorul Oficial al Romaniei, Partea I.</p>
                            </div>
                            <button class="collapsible">Articolul 23'</button>
                            <div class="content">
                                <p>
                                    (1) Persoanele cu domiciliul sau resedinta in Romania ori care dovedesc ca se afla la studii in Romania de cel putin 6 luni pot solicita obtinerea permisului de conducere autoritatilor competente sa le examineze. <br>(2)
                                    In sensul prezentei ordonante de urgenta, pentru procedurile aferente permisului de conducere, au domiciliul sau resedinta in Romania persoanele care se afla in una dintre urmatoarele situatii: <br>a) locuiesc in mod
                                    obisnuit cel putin 185 de zile intr-un an calendaristic la o adresa sau la adrese din Romania datorita unor legaturi personale si profesionale ori datorita unor legaturi personale care releva legaturi stranse cu adresa
                                    sau adresele din Romania, daca persoanele nu au legaturi profesionale; <br>b) revin periodic la o adresa din Romania datorita unor legaturi personale cu adresa respectiva, desi locuiesc alternativ in locuri diferite,
                                    situate in doua sau mai multe state membre ale Uniunii Europene ori ale Spatiului Economic European ori in Confederatia Elvetiana, deoarece legaturile lor profesionale sunt intr-un loc diferit de cel al legaturilor
                                    personale;
                                    <br> c) locuiesc in mod obisnuit la o adresa din Romania datorita legaturilor personale cu adresa respectiva, desi locuiesc temporar si in alt stat membru al Uniunii Europene ori al Spatiului Economic European ori in
                                    Confederatia Elvetiana pentru indeplinirea unei activitati sau misiuni cu durata determinata. <br>(3) Persoanele care si-au stabilit domiciliul sau resedinta in Romania potrivit Ordonantei de urgenta a Guvernului nr.
                                    97/2005 privind evidenta, domiciliul, resedinta si actele de identitate ale cetatenilor romani, republicata, cu modificarile si completarile ulterioare, pot solicita obtinerea permisului de conducere autoritatilor competente
                                    sa le examineze, daca se afla in una dintre situatiile prevazute la alin. (2) . <br>(4) Participarea la studii in cadrul unei universitati sau scoli din Romania nu implica transferul domiciliului sau al resedintei in
                                    Romania.
                                    <br> (5) Dovada incadrarii in una dintre situatiile prevazute la alin. (2) , precum si a studiilor in Romania se face, in conditiile stabilite prin ordinul ministrului afacerilor interne prevazut la art. 23 alin. (10)
                                    , cu documente:<br> a) prevazute de actele normative care reglementeaza domiciliul, resedinta si actele de identitate ale cetatenilor romani, libera circulatie pe teritoriul Romaniei a cetatenilor statelor membre ale
                                    Uniunii Europene, Spatiului Economic European si a cetatenilor Confederatiei Elvetiene sau regimul strainilor in Romania;<br> b) emise de institutia/institutiile de invatamant, acreditata/acreditate in conditiile legii,
                                    care sa ateste ca persoana urmeaza studii in Romania de cel putin 6 luni; <br>c) alte documente justificative, dupa caz.
                                </p>
                            </div>
                            <button class="collapsible">Articolul 24</button>
                            <div class="content">
                                <p>
                                    (1) Examinarea pentru obtinerea permisului de conducere si eliberarea acestuia se realizeaza de catre autoritatea competenta pe raza careia solicitantii isi au domiciliul ori resedinta in sensul art. 231 alin. (2) sau, in cazul celor aflati la studii
                                    in Romania de cel putin 6 luni, de catre autoritatea competenta pe raza careia se afla adresa unde locuiesc. (11) Prin exceptie de la prevederile alin. (1) , candidatii care solicita obtinerea categoriilor Tr, Tb sau
                                    Tv, precum si candidatii cu dizabilitati fizice pot fi examinati de autoritatea competenta pe raza careia se afla scoala de conducatori auto autorizata unde acestia au absolvit cursurile de pregatire teoretica si practica.
                                    <br>(2) Forma si continutul permisului de conducere se stabilesc prin ordin al ministrului administratiei si internelor, care se publica in Monitorul Oficial al Romaniei, Partea I.<br> (3) In localitatile in care autoritatea
                                    competenta autorizeaza desfasurarea cursurilor de pregatire si sustinerea examenului pentru obtinerea permisului de conducere, acestea se pot organiza, la cerere, si in limba minoritatii nationale respective. <br>(4)
                                    In cazul cetatenilor straini si al cetatenilor statelor membre ale Uniunii Europene care isi stabilesc domiciliul ori resedinta in Romania sau, dupa caz, se afla la studii in Romania, examinarea la proba teoretica pentru
                                    obtinerea permisului de conducere se poate efectua, la cerere, intr-o limba de circulatie internationala. <br>(5) Valabilitatea administrativa a permiselor de conducere, pe categorii de vehicule, este urmatoarea: <br>a)
                                    5 ani pentru permisele de conducere eliberate pentru vehiculele din categoriile C1, C1E, C, CE, D1, D1E, D, DE, Tr, Tb si Tv;<br> b) 10 ani pentru permisele de conducere eliberate pentru vehiculele din categoriile AM,
                                    A1, A2, A, B, Bl si BE. (51) In cazul pierderii, furtului sau al deteriorarii permiselor de conducere ori al schimbarii numelui titularului, autoritatile competente elibereaza, dupa caz, un duplicat a carui valabilitate
                                    nu poate depasi valabilitatea administrativa a documentului inlocuit sau alt permis de conducere. (52) Eliberarea unui nou permis de conducere cu o noua valabilitate administrativa se realizeaza numai dupa efectuarea
                                    examinarii medicale prevazute la art. 22. (la data 01-sep-2014 Art. 24, alin. (5^2) din capitolul III, sectiunea 2 modificat de Art. I, punctul 12. din Ordonanta 21/2014 ) (53) In cazurile prevazute la alin. (51) si
                                    (52) , eliberarea permiselor de conducere respective se realizeaza fara sustinerea unui nou examen, la cererea persoanelor care au domiciliul sau resedinta in Romania in sensul art. 231 alin. (2) ori care dovedesc ca
                                    se afla la studii in Romania de cel putin 6 luni si care detin permis de conducere eliberat de autoritatile competente romane, in conditiile stabilite prin ordin al ministrului afacerilor interne, care se publica in
                                    Monitorul Oficial al Romaniei, Partea I. <br>(6) Nu are dreptul sa se prezinte la examen pentru obtinerea permisului de conducere persoana care a fost condamnata, prin hotarare judecatoreasca ramasa definitiva, pentru
                                    o infractiune la regimul circulatiei pe drumurile publice sau pentru o infractiune care a avut ca rezultat uciderea sau vatamarea corporala a unei persoane, savarsita ca urmare a nerespectarii regulilor de circulatie,
                                    cu exceptia cazurilor cand a intervenit una dintre situatiile prevazute la art. 116 alin. (1) .<br> (7) La eliberarea permisului de conducere, serviciile publice comunitare regim permise de conducere si inmatriculare
                                    a vehiculelor inscriu in Registrul national de evidenta a permiselor de conducere si a vehiculelor inmatriculate constituit de Directia Regim Permise de Conducere si Inmatriculare a Vehiculelor urmatoarele date in format
                                    electronic: <br>a) datele de identificare a titularului permisului de conducere romanesc, care sunt: numele de familie, prenumele, codul numeric personal sau, daca este cazul, echivalentul acestuia, potrivit legislatiei
                                    nationale aplicabile, fotografia si semnatura titularului, locul si data nasterii, domiciliul sau resedinta, precum si, optional, un numar de telefon si adresa de posta electronica ale persoanei;<br> b) categoriile
                                    de vehicule pentru care poseda drept de conducere; <br>c) codurile armonizate ale Uniunii Europene;<br> d) datele de identificare a permisului de conducere.<br> (8) Permisele de conducere romanesti care au fost preschimbate
                                    cu documente similare in alte state isi pierd valabilitatea. Notificarile de preschimbare transmise de statele emitente se inscriu in Registrul national de evidenta a permiselor de conducere si a vehiculelor inmatriculate
                                    de catre Directia Regim Permise de Conducere si Inmatriculare a Vehiculelor sau de catre serviciile publice comunitare regim permise de conducere si inmatriculare a vehiculelor.<br> (9) Datele prevazute la alin. (7)
                                    se sterg dupa 10 ani de la data incetarii valabilitatii permisului de conducere.

                                </p>
                            </div>
                            <button class="collapsible">Articolul 24'</button>
                            <div class="content">
                                <p>
                                    (1) Permisele de conducere se elibereaza dupa cum urmeaza:<br> a) pentru categoriile C1, C, D1 si D - conducatorilor auto care detin permis de conducere categoria B si care au promovat examenul corespunzator categoriei
                                    solicitate;
                                    <br> b) pentru categoriile BE, C1E, CE, D1E si DE - conducatorilor auto care detin permis de conducere pentru categoriile B, C1, C, D1, respectiv D si care au promovat examenul corespunzator categoriei solicitate.<br>                                    (2) Permisele de conducere dau dreptul de a conduce vehicule pe drumurile publice, dupa cum urmeaza: <br>a) permisele de conducere eliberate pentru categoriile C1E, CE, D1E sau DE sunt valabile pentru ansamblurile de
                                    vehicule din categoria BE;<br> b) permisele de conducere eliberate pentru categoria CE sunt valabile pentru categoria DE, daca titularii detin permis de conducere pentru categoria D;<br> c) permisele de conducere eliberate
                                    pentru categoria CE, respectiv categoria DE sunt valabile pentru ansamblurile de vehicule din categoria C1E, respectiv categoria D1E;<br> d) permisele de conducere eliberate pentru orice categorie sunt valabile pentru
                                    vehiculele din categoria AM;<br> e) permisele de conducere eliberate pentru categoria A2 sunt valabile si pentru categoria A1; <br>f) permisele de conducere eliberate pentru categoria A sunt valabile si pentru categoriile
                                    A1 si A2, cele eliberate pentru categoria B sunt valabile si pentru categoria B1, cele eliberate pentru categoria C sunt valabile si pentru categoria C1, iar cele eliberate pentru categoria D sunt valabile si pentru
                                    categoria D1;<br> g) permisele de conducere eliberate pentru categoria B sunt valabile pentru triciclurile cu motor avand o putere de peste 15 kW, cu conditia ca detinatorii permiselor sa aiba varsta de 21 de ani impliniti.<br>                                    h) permisele de conducere eliberate pentru una dintre categoriile B, BE, C sau CE sunt valabile si pentru categoria Tr, in anumite cazuri specifice;<br> i) permisele de conducere eliberate numai pentru categoria Tr
                                    sunt valabile si pentru ansamblul format dintr-un vehicul din categoria Tr si una sau doua remorci; <br>j) permisele de conducere eliberate pentru categoriile D sau DE sunt valabile si pentru vehiculele din categoria
                                    Tb. (21) Cazurile specifice pentru care se considera indeplinita conditia prevazuta la alin. (2) lit. h) pentru a da dreptul de a conduce vehicule pe drumurile publice sunt urmatoarele:<br> a) permisul de conducere
                                    pentru categoria B este valabil pentru vehicule din categoria Tr cu masa totala maxima autorizata de pana la 3. 500 kg, la care se poate atasa o remorca a carei masa totala maxima autorizata sa fie mai mica de 750 kg;
                                    <br>b) permisul de conducere pentru categoria BE este valabil pentru vehicule din categoria Tr cu masa totala maxima autorizata de pana la 3. 500 kg, la care se poate atasa o remorca a carei masa totala maxima autorizata
                                    sa fie mai mica de 3. 500 kg;<br> c) permisul de conducere pentru categoria C este valabil pentru vehicule din categoria Tr cu masa totala maxima autorizata mai mare de 3. 500 kg, la care se poate atasa o remorca a
                                    carei masa totala maxima autorizata sa fie mai mica de 750 kg; <br>d) permisul de conducere pentru categoria CE este valabil pentru vehicule din categoria Tr cu masa totala maxima autorizata mai mare de 3. 500 kg, la
                                    care se poate atasa o remorca a carei masa totala maxima autorizata sa fie mai mare de 750 kg. <br>(3) Persoanele care poseda permis de conducere categoria B au dreptul de a conduce ansamblurile de vehicule prevazute
                                    la lit. f) pct. 3 din anexa nr. 1, in cazul in care ansamblul depaseste 3. 500 kg, numai daca fac dovada ca au absolvit un curs de formare in cadrul unei unitati autorizate de pregatire a conducatorilor de vehicule.


                                </p>
                            </div>
                            <button class="collapsible">Articolul 25</button>
                            <div class="content">
                                <p>
                                    (1) Pentru conducatorii de autovehicule, tractoare agricole sau forestiere ori tramvaie care au o vechime mai mica de un an de la obtinerea permisului de conducere se stabilesc prin regulament reguli suplimentare de circulatie. <br>(2)
                                    Autovehiculele si tractoarele agricole sau forestiere conduse de persoanele prevazute la alin. (1) vor purta un semn distinctiv, in conditiile stabilite prin regulament.

                                </p>
                            </div>
                            <button class="collapsible">Articolul 26</button>
                            <div class="content">
                                <p>
                                    Proprietarii sau detinatorii mandatati de autovehicule care efectueaza transport public de persoane sau de marfuri periculoase sunt obligati sa asigure testarea anuala a conducatorilor de autovehicule atestati profesional, in scopul insusirii corecte
                                    si al respectarii de catre acestia a dispozitiilor legale care reglementeaza circulatia pe drumurile publice.
                                </p>
                            </div>
                            <button class="collapsible">Articolul 27</button>
                            <div class="content">
                                <p>
                                    [Articolul 27 din capitolul III, sectiunea 2 a fost abrogat la 29-iun-2007 de Art. I, punctul 10. din Ordonanta urgenta 69/2007]

                                </p>
                            </div>
                            <button class="collapsible">Articolul 28</button>
                            <div class="content">
                                <p>
                                    Evidenta permiselor de conducere retinute si a sanctiunilor aplicate conducatorilor de autovehicule, tractoare agricole sau forestiere ori tramvaie se tine de catre politia rutiera, in conditii stabilite prin ordin al ministrului internelor si reformei
                                    administrative.
                                </p>
                            </div>
                            <button class="collapsible">Articolul 28'</button>
                            <div class="content">
                                <p>
                                    Prelucrarile de date cu caracter personal se realizeaza cu respectarea prevederilor legale privind protectia persoanelor fizice cu privire la prelucrarea datelor cu caracter personal si libera circulatie a acestor date.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="capitol">
                <button class="collapsible">CAPITOLUL IV: Semnalizarea rutiera</button>
                <div class="content">
                    <div class="articol">
                        <button class="collapsible">Articolul 29</button>
                        <div class="content">
                            <p>
                                (1) Circulatia pe drumurile publice se desfasoara in conformitate cu regulile de circulatie si cu respectarea semnificatiei semnalizarii rutiere realizate prin mijloacele de semnalizare, semnalele si indicatiile politistului rutier care dirijeaza circulatia,
                                semnalele speciale de avertizare luminoase sau sonore, de semnalizare temporara si semnalele conducatorilor de vehicule.<br> (2) Participantii la trafic sunt obligati sa respecte si semnalele
                                politistilor de frontiera, ale indrumatorilor de circulatie ai Ministerului Apararii Nationale, ale organelor fiscale din cadrul Agentiei Nationale de Administrare Fiscala aflati in indeplinirea atributiilor de serviciu,
                                ale agentilor cailor ferate, ale persoanelor desemnate pentru dirijarea circulatiei pe sectoarele de drum pe care se executa lucrari de reabilitare a acestora, ale membrilor patrulelor scolare de circulatie care actioneaza
                                in imediata apropiere a unitatilor de invatamant, precum si ale nevazatorilor, potrivit prevederilor din regulament.

                            </p>
                        </div>
                        <button class="collapsible">Articolul 30</button>
                        <div class="content">
                            <p>
                                (1) Mijloacele de semnalizare rutiera sunt:<br> a) sistemele de semnalizare luminoasa sau sonora;<br> b) indicatoarele;<br> c) marcajele;<br> d) alte dispozitive speciale.<br> (2) Mijloacele de semnalizare rutiera se constituie
                                intr-un sistem unitar, se realizeaza si se instaleaza astfel incat sa fie observate cu usurinta si de la o distanta adecvata, atat pe timp de zi, cat si pe timp de noapte, de cei carora li se adreseaza si trebuie sa fie
                                in deplina concordanta intre ele, precum si intr-o stare tehnica de functionare corespunzatoare.<br> (3) Semnalele luminoase pentru dirijarea circulatiei in intersectii au urmatoarele semnificatii:<br> a) semnalul de culoare
                                verde permite trecerea;<br> b) semnalul de culoare rosie interzice trecerea; <br>c) semnalul de culoare galbena impreuna cu cel de culoare rosie interzic trecerea.<br> (4) Mijloacele de semnalizare rutiera, precum si alte
                                dispozitive speciale de acest fel se asigura, se instaleaza si se intretin prin grija administratorului drumului public respectiv ori al caii ferate, dupa caz. Instalarea mijloacelor de semnalizare rutiera si a dispozitivelor
                                speciale se executa numai cu avizul prealabil al politiei rutiere.
                                <br> (5) Mijloacele de semnalizare si presemnalizare a intersectiilor dintre doua drumuri de categorii diferite se asigura, se instaleaza si se intretin de catre administratorul fiecarui drum, cu respectarea modului de
                                reglementare a circulatiei stabilit in nodul rutier respectiv.<br> (6) Mijloacele de semnalizare rutiera pot fi insotite si de dispozitive speciale de avertizare.<br> (7) Se interzic:<br> a) amplasarea, in zona drumului
                                public, de constructii, panouri sau dispozitive ce pot fi confundate cu indicatoarele sau cu instalatiile ce servesc la semnalizarea rutiera ori realizarea de amenajari sau alte obstacole care sunt de natura sa limiteze
                                vizibilitatea ori eficacitatea acestora, sa stanjeneasca participantii la trafic sau sa le distraga atentia, punand in pericol siguranta circulatiei; <br>b) lipirea de afise, inscriptii sau inscrisuri pe indicatoarele ori
                                dispozitivele ce servesc la semnalizarea rutiera, inclusiv pe suporturile acestora.
                            </p>
                        </div>
                        <button class="collapsible">Articolul 31</button>
                        <div class="content">
                            <p>
                                Participantii la trafic trebuie sa respecte regulile de circulatie, semnalele, indicatiile si dispozitiile politistului rutier, precum si semnificatia diferitelor tipuri de mijloace de semnalizare rutiera, in urmatoarea ordine de prioritate:<br>                                a) semnalele, indicatiile si dispozitiile politistului rutier;<br> b) semnalele speciale de avertizare, luminoase sau sonore ale autovehiculelor, prevazute la art. 32 alin. (2) lit. a) si b) ; <br>c) semnalizarea temporara
                                care modifica regimul normal de desfasurare a circulatiei;<br> d) semnalele luminoase sau sonore;<br> e) indicatoarele;<br> f) marcajele;<br> g) regulile de circulatie.

                            </p>
                        </div>
                        <button class="collapsible">Articolul 32</button>
                        <div class="content">
                            <p>
                                (1) Semnalele speciale de avertizare luminoase sunt emise intermitent de dispozitivele de iluminare montate pe autovehicule si au urmatoarele semnificatii:<br> a) lumina rosie obliga participantii la trafic sa opreasca
                                in directia de mers cat mai aproape de marginea drumului; <br>b) lumina albastra obliga participantii la trafic sa acorde prioritate de trecere;<br> c) lumina galbena obliga participantii la trafic sa circule cu atentie.
                                <br>(2) Sunt autorizate sa utilizeze semnale speciale de avertizare luminoase:<br> a) pentru lumina rosie - autovehiculele apartinand politiei si pompierilor;<br> b) pentru lumina albastra - autovehiculele apartinand politiei,
                                jandarmeriei, politiei de frontiera, Agentiei Nationale de Administrare Fiscala, serviciului de ambulanta sau medicina legala, protectiei civile, Ministerului Apararii Nationale, unitatilor speciale ale Serviciului Roman
                                de Informatii si ale Serviciului de Protectie si Paza, Administratiei Nationale a Penitenciarelor din cadrul Ministerului Justitiei, precum si autovehiculele de serviciu ale procurorilor din Ministerul Public, atunci cand
                                se deplaseaza in actiuni de interventie sau in misiuni care au caracter de urgenta;<br> c) pentru lumina galbena - autovehiculele cu mase si/sau dimensiuni de gabarit depasite ori care insotesc asemenea vehicule, cele care
                                transporta anumite marfuri sau substante periculoase, cele destinate intretinerii, repararii ori verificarii unor lucrari efectuate in partea carosabila sau executarii unor lucrari de drumuri, curateniei strazilor, deszapezirii
                                sau tractarii, transportului si depanarii autovehiculelor ramase in pana sau avariate, precum si tractoarele care tracteaza utilajele agricole si tehnologice cu dimensiuni de gabarit depasite.<br> (3) Autovehiculele prevazute
                                la alin. (2) lit. a) si b) trebuie sa fie echipate si cu mijloace speciale sonore de avertizare.<br> (4) Pe autovehiculele apartinand politiei si pe cele prevazute la alin. (2) lit. c) pot fi instalate si dispozitive luminoase
                                cu mesaje variabile, destinate participantilor la trafic. (41) Pe autovehiculele Agentiei Nationale de Administrare Fiscala, inscriptionate vizibil cu denumirea si sigla institutiei din care fac parte, pot fi instalate
                                dispozitive luminoase cu mesaje variabile, de care se poate face uz pentru oprirea in trafic a autovehiculelor in scopul exercitarii atributiilor de control specifice, potrivit legii. <br>(5) Mijloacele speciale de avertizare,
                                luminoase sau sonore, se certifica sau se omologheaza de autoritatea competenta, potrivit legii. Conditiile de utilizare a acestora se stabilesc prin regulament.
                            </p>
                        </div>
                        <button class="collapsible">Articolul 33</button>
                        <div class="content">
                            <p>
                                (1) Semnalizarea si amenajarile rutiere necesare pe drumurile publice se asigura de catre administratorul drumului respectiv si se efectueaza numai cu avizul politiei rutiere.<br> (2) Semnalizarea lucrarilor care se executa
                                pe drumurile publice este obligatorie. Aceasta este insotita pe timpul noptii de lampi cu lumina galbena intermitenta sau in cascada si se efectueaza de catre executantul lucrarilor, cu avizul politiei rutiere, astfel incat
                                sa asigure deplasarea in siguranta a tuturor participantilor la trafic, conform reglementarilor in vigoare.<br> (3) Semnalizarea si amenajarile rutiere se definesc si se realizeaza in conditiile stabilite prin regulament,
                                in conformitate cu reglementarile tehnice in vigoare.

                            </p>
                        </div>
                        <button class="collapsible">Articolul 34</button>
                        <div class="content">
                            <p>
                                Conditiile de circulatie pe viaducte si in tunele, precum si semnalizarea acestora se stabilesc prin regulament, in conformitate cu reglementarile tehnice in vigoare.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">CAPITOLUL V: Reguli de circulatie</button>
            <div class="content">
                <div class="sectiune">
                    <button class="collapsible">SECTIUNEA 1: Obligatiile participantilor la trafic</button>
                    <div class="content">
                        <div class="articol">
                            <button class="collapsible">Articolul 35</button>
                            <div class="content">
                                <p>
                                    (1) Participantii la trafic trebuie sa aiba un comportament care sa nu afecteze fluenta si siguranta circulatiei, sa nu puna in pericol viata sau integritatea corporala a persoanelor si sa nu aduca prejudicii proprietatii publice ori private.<br>                                    (2) Participantii la trafic sunt obligati ca, la cererea politistului rutier, sa inmaneze acestuia documentul de identitate sau, dupa caz, permisul de conducere, documentul de inmatriculare ori de inregistrare a vehiculului
                                    condus, documentele referitoare la bunurile transportate, precum si alte documente prevazute de lege.<br> (3) In exercitarea atributiilor care ii revin, politistul rutier are dreptul sa verifice vehiculul, precum si
                                    identitatea conducatorului sau a pasagerilor aflati in interiorul acestuia atunci cand exista indicii despre savarsirea unei fapte de natura contraventionala sau penala.<br> (4) In exercitarea atributiilor de dirijare
                                    a circulatiei rutiere, politistii rutieri sunt obligati sa poarte uniforma cu inscrisuri si insemne distinctive. (41) Functionarii din cadrul Agentiei Nationale de Administrare Fiscala, care in scopul exercitarii atributiilor
                                    de control specifice efectueaza semnale de oprire pentru conducatorii autovehiculelor, sunt obligati sa poarte uniforma cu inscrisuri si insemne distinctive si mijloace de protectie fluorescent-reflectorizante pe fond
                                    de culoare rosie, stabilite prin hotarare a Guvernului.<br> (5) Politistii de frontiera, indrumatorii de circulatie ai Ministerului Apararii, agentii cailor ferate, personalul autorizat din zona lucrarilor pe drumurile
                                    publice, precum si membrii patrulelor scolare de circulatie sunt obligati ca, pe timpul exercitarii atributiilor, sa poarte echipament de protectie-avertizare fluorescent-reflectorizant. <br>(6) Conducatorii autovehiculelor
                                    si tractoarelor agricole sau forestiere cu masa maxima autorizata mai mare de 3,5 tone sunt obligati sa poarte echipament de protectie-avertizare fluorescent-reflectorizant atunci cand executa interventii la vehiculul
                                    care se afla pe partea carosabila a drumului public.
                                    <br> (7) Nevazatorii sunt obligati sa poarte in deplasarea pe drumurile publice baston de culoare alba.

                                </p>
                            </div>
                            <button class="collapsible">Articolul 36</button>
                            <div class="content">
                                <p>
                                    (1) Conducatorii de autovehicule si tractoare agricole sau forestiere si persoanele care ocupa locuri prevazute prin constructie cu centuri sau dispozitive de siguranta omologate trebuie sa le poarte in timpul circulatiei pe drumurile publice, cu exceptia
                                    cazurilor prevazute in regulament. (11) Conducatorii de autovehicule avand locuri prevazute prin constructie cu centuri de siguranta trebuie sa informeze pasagerii cu privire la obligatia legala de a le purta in timpul
                                    circulatiei pe drumurile publice. (12) Conducatorii de autovehicule avand locuri prevazute prin constructie cu centuri de siguranta au obligatia sa se asigure ca, pe timpul conducerii vehiculului, minorii poarta centurile
                                    de siguranta sau sunt transportati numai in dispozitive de fixare in scaune pentru copii omologate, in conditiile prevazute de regulament. (13) Conducatorilor de autovehicule le este interzis sa transporte copii in
                                    varsta de pana la 3 ani in autovehicule care nu sunt echipate cu sisteme de siguranta, cu exceptia celor destinate transportului public de persoane, precum si a taxiurilor daca in acestea din urma ocupa orice alt loc
                                    decat cel de pe scaunul din fata, in conditiile prevazute in regulament. Copiii cu varsta de peste 3 ani, avand o inaltime de pana la 150 cm, pot fi transportati in autovehicule care nu sunt echipate cu sisteme de siguranta
                                    doar daca ocupa, pe timpul transportului, orice alt loc decat cel de pe scaunul din fata.<br> (2) Pe timpul deplasarii pe drumurile publice, conducatorii motocicletelor, mopedelor
                                    si persoanele transportate pe acestea au obligatia sa poarte casca de protectie omologata.<br> (3) Conducatorilor de vehicule le este interzisa folosirea telefoanelor mobile atunci cand acestia se afla in timpul mersului,
                                    cu exceptia celor prevazute cu dispozitive tip -maini libere-.
                                </p>
                            </div>
                            <button class="collapsible">Articolul 37</button>
                            <div class="content">
                                <p>
                                    (1) Conducatorii de vehicule sunt obligati sa opreasca imediat, pe acostament sau, in lipsa acestuia, cat mai aproape de marginea drumului sau bordura trotuarului, in sensul de deplasare, la apropierea si la trecerea autovehiculelor cu regim de circulatie
                                    prioritara care au in functiune mijloacele speciale de avertizare luminoasa de culoare rosie si sonore.<br> (2) Conducatorii de vehicule sunt obligati sa reduca viteza, sa circule
                                    cat mai aproape de marginea drumului in sensul de deplasare si sa acorde prioritate la trecerea autovehiculelor cu regim de circulatie prioritara care au in functiune mijloacele speciale de avertizare luminoasa de culoare
                                    albastra si sonore. <br>(3) In situatiile prevazute la alin. (1) si (2) , pietonilor le sunt interzise traversarea si circulatia pe carosabil pana la trecerea vehiculelor respective.

                                </p>
                            </div>
                            <button class="collapsible">Articolul 38</button>
                            <div class="content">
                                <p>
                                    Conducatorii vehiculelor, cu exceptia celor trase sau impinse cu mana, instructorii auto atestati sa efectueze instruirea practica a persoanelor pentru obtinerea permisului de conducere, precum si examinatorul autoritatii competente, in timpul desfasurarii
                                    probelor practice ale examenului pentru obtinerea permisului de conducere, sunt obligati sa se supuna testarii aerului expirat si/sau recoltarii probelor biologice in vederea stabilirii alcoolemiei ori a consumului
                                    de produse sau substante stupefiante ori a medicamentelor cu efecte similare acestora, la solicitarea politistului rutier.

                                </p>
                            </div>
                            <button class="collapsible">Articolul 39</button>
                            <div class="content">
                                <p>
                                    Proprietarul sau detinatorul mandatat al unui vehicul este obligat sa comunice politiei rutiere, la cererea acesteia si in termenul solicitat, identitatea persoanei careia i-a incredintat vehiculul pentru a fi condus pe drumurile publice. AAA»
                                </p>
                            </div>
                            <button class="collapsible">Articolul 40</button>
                            <div class="content">
                                <p>
                                    Regulile de circulatie pe drumurile publice aplicabile autovehiculelor si tractoarelor agricole sau forestiere destinate transporturilor de marfuri, celor cu mase sau cu dimensiuni de gabarit depasite ori care transporta marfuri sau produse periculoase
                                    se stabilesc prin regulament, in conformitate cu reglementarile in vigoare.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sectiune">
                    <button class="collapsible">SECTIUNEA 2: Reguli pentru circulatia vehiculelor</button>
                    <div class="content">
                        <div class="subsectiune">
                            <button class="collapsible">SUBSECTIUNEA 1: Pozitii in timpul mersului si circulatia pe benzi</button>
                            <div class="content">
                                <div class="articol">
                                    <button class="collapsible">Articolul 41</button>
                                    <div class="content">
                                        <p>
                                            (1) Vehiculele si animalele, atunci cand circula pe drumurile publice pe care le este permis accesul, trebuie conduse pe partea din dreapta a drumului public, in sensul de circulatie, cat mai aproape de marginea partii carosabile, cu respectarea semnificatiei
                                            semnalizarii rutiere si a regulilor de circulatie.<br> (2) Numerotarea benzilor de circulatie pe fiecare sens se efectueaza in ordine crescatoare de la marginea din
                                            partea dreapta a drumului catre axa acestuia. In cazul autostrazilor, banda de urgenta nu intra in numerotarea benzilor de circulatie.<br> (3) Daca un drum este prevazut cu o pista speciala destinata circulatiei
                                            bicicletelor, acestea vor fi conduse numai pe pista respectiva.

                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 42</button>
                                    <div class="content">
                                        <p>
                                            Cand circulatia se desfasoara pe doua sau mai multe benzi pe sens, acestea se folosesc de catre conducatorii de vehicule in functie de intensitatea traficului si viteza de deplasare, avand obligatia sa revina pe prima banda ori de cate ori acest lucru
                                            este posibil, daca aceasta nu este destinata vehiculelor lente sau transportului public de persoane.

                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 43</button>
                                    <div class="content">
                                        <p>
                                            (1) Daca un drum este prevazut cu o banda destinata vehiculelor lente sau transportului public de persoane, semnalizata ca atare, acestea vor circula numai pe banda respectiva. <br>(2) Conducatorul de vehicul
                                            care circula pe banda situata langa marginea partii carosabile trebuie sa acorde prioritate de trecere vehiculelor care efectueaza transport public de persoane numai atunci cand conducatorii acestora semnalizeaza
                                            intentia de a reintra in trafic din statiile prevazute cu alveole si s-au asigurat ca prin manevra lor nu pun in pericol siguranta celorlalti participanti la trafic.


                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subsectiune">
                            <button class="collapsible">SUBSECTIUNEA 2: Mijloacele de avertizare folosite de conducatorii de vehicule</button>
                            <div class="content">
                                <div class="articol">
                                    <button class="collapsible">Articolul 44</button>
                                    <div class="content">
                                        <p>
                                            (1) In circulatia pe drumurile publice conducatorii de vehicule pot folosi, in conditiile prevazute de regulament, mijloacele de avertizare sonora si luminoasa aflate in dotare si omologate.<br> (2) In circulatia
                                            pe autostrazi, pe drumurile expres si pe cele nationale europene (E) conducatorii de autovehicule si tractoare agricole sau forestiere sunt obligati sa foloseasca si in timpul zilei luminile de intalnire sau
                                            luminile pentru circulatia diurna.<br> (3) Conducatorii motocicletelor si mopedelor sunt obligati sa foloseasca luminile de intalnire pe toata durata deplasarii acestora pe drumurile publice.<br> (4) In circulatia
                                            pe drumurile publice se interzice detinerea la vedere, montarea si folosirea mijloacelor speciale de avertizare sonora si luminoasa pe si in alte autovehicule decat cele prevazute la art. 32 alin. (2) , precum
                                            si detinerea, montarea sau folosirea pe autovehicule a sistemelor care perturba buna functionare a dispozitivelor de supraveghere a traficului.<br> (5) Conducatorii de autovehicule pot fi avertizati de politia
                                            rutiera in legatura cu prezenta in trafic a dispozitivelor de masurare a vitezei, prin mass-media sau panouri de avertizare. Conducatorii de autovehicule pot folosi mijloace proprii de detectare a dispozitivelor
                                            de masurare a vitezei.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subsectiune">
                            <button class="collapsible">SUBSECTIUNEA 3: Depasirea</button>
                            <div class="content">
                                <div class="articol">
                                    <button class="collapsible">Articolul 45</button>
                                    <div class="content">
                                        <p>
                                            (1) Depasirea este manevra prin care un vehicul trece inaintea altui vehicul ori pe langa un obstacol, aflat pe acelasi sens de circulatie, prin schimbarea directiei de mers si iesirea de pe banda de circulatie sau din sirul de vehicule in care s-a aflat
                                            initial.
                                            <br> (2) Conducatorul vehiculului care se angajeaza in depasire trebuie sa se asigure ca vehiculul care circula in fata sau in spatele lui nu a initiat o asemenea manevra. <br>(3) Atunci cand prin manevra de
                                            depasire se trece peste axa care separa sensurile de circulatie, conducatorii de vehicule trebuie sa se asigure ca din sens opus nu se apropie un vehicul si ca dispun de spatiu suficient pentru a reintra pe
                                            banda initiala, unde au obligatia sa revina dupa efectuarea manevrei de depasire.<br> (4) Nu constituie depasire, in sensul alin. (1) , situatia in care un vehicul circula mai repede pe una dintre benzi decat
                                            vehiculele care circula pe alta banda in acelasi sens de circulatie.<br> (5) Depasirea se efectueaza numai pe partea stanga a vehiculului depasit. Tramvaiul sau vehiculul al carui conducator a semnalizat intentia
                                            si s-a incadrat corespunzator parasirii sensului de mers spre stanga se depaseste prin partea dreapta.<br> (6) Tramvaiul aflat in mers poate fi depasit si pe partea stanga atunci cand drumul este cu sens unic
                                            sau cand intre sina din dreapta si marginea trotuarului nu exista spatiu suficient.


                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 46</button>
                                    <div class="content">
                                        <p>
                                            Obligatiile conducatorilor vehiculelor care efectueaza depasirea si ale conducatorilor vehiculelor care sunt depasite, precum si cazurile in care depasirea este interzisa se stabilesc prin regulament.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subsectiune">
                            <button class="collapsible">SUBSECTIUNEA 4: Trecerea pe langa vehiculele care circula din sens opus
										</button>
                            <div class="content">
                                <div class="articol">
                                    <button class="collapsible">Articolul 47</button>
                                    <div class="content">
                                        <p>
                                            Conducatorii vehiculelor care circula din sensuri opuse trebuie sa pastreze intre vehicule o distanta laterala suficienta si sa circule cat mai aproape de marginea din dreapta a benzii de circulatie respective.


                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subsectiune">
                            <button class="collapsible">SUBSECTIUNEA 5: Viteza si distanta dintre vehicule
										</button>
                            <div class="content">
                                <div class="articol">
                                    <button class="collapsible">Articolul 48</button>
                                    <div class="content">
                                        <p>
                                            Conducatorul de vehicul trebuie sa respecte regimul legal de viteza si sa o adapteze in functie de conditiile de drum, astfel incat sa poata efectua orice manevra in conditii de siguranta.

                                        </p>
                                    </div>

                                    <button class="collapsible">Articolul 49</button>
                                    <div class="content">
                                        <p>
                                            (1) Limita maxima de viteza in localitati este de 50 km/h. <br>(2) Pe anumite sectoare de drum din interiorul localitatilor, administratorul drumului poate stabili, pentru autovehiculele din categoriile A si
                                            B, si limite de viteza superioare, dar nu mai mult de 80 km/h. Limitele de viteza mai mari de 50 km/h se stabilesc numai cu avizul politiei rutiere. <br>(3) Pe anumite sectoare de drum, tinand seama de imprejurari
                                            si de intensitatea circulatiei, administratorul drumului, cu avizul politiei rutiere, poate stabili si limite de viteza inferioare, dar nu mai putin de 10 km/h pentru tramvaie si de 30 km/h pentru toate autovehiculele.<br>                                            (4) Limitele maxime de viteza in afara localitatilor sunt:<br> a) pe autostrazi - 130 km/h;<br> b) pe drumurile expres sau pe cele nationale europene (E) - 100 km/h;<br> c) pe celelalte categorii de drumuri
                                            - 90 km/h.
                                        </p>
                                    </div>

                                    <button class="collapsible">Articolul 50</button>
                                    <div class="content">
                                        <p>
                                            (1) Vitezele maxime admise in afara localitatilor pentru categoriile si subcategoriile de autovehicule prevazute la art. 15 alin.<br> (2) sunt urmatoarele:<br> a) 130 km/h pe autostrazi, 100 km/h pe drumurile
                                            expres sau pe cele nationale europene (E) si 90 km/h pe celelalte categorii de drumuri, pentru autovehiculele din categoriile A si B;<br> b) 110 km/h pe autostrazi, 90 km/h pe drumurile expres sau pe cele nationale
                                            europene (E) si 80 km/h pe celelalte categorii de drumuri, pentru autovehiculele din categoriile C, D si subcategoria D1;<br> c) 90 km/h pe autostrazi, 80 km/h pe drumurile expres sau pe cele nationale europene
                                            (E) si 70 km/h pentru celelalte categorii de drumuri, pentru autovehiculele din subcategoriile A1, B1 si C1; <br>d) 45 km/h, pentru tractoare si mopede. (2) Viteza maxima admisa in afara localitatilor pentru
                                            autovehiculele care tracteaza remorci sau semiremorci este cu 10 km/h mai mica decat viteza maxima admisa pentru categoria din care face parte autovehiculul tragator.<br> (3) Viteza maxima admisa pentru autovehicule
                                            cu mase si/sau gabarite depasite ori care transporta produse periculoase este de 40 km/h in localitati, iar in afara localitatilor de 70 km/h.<br> (4) Viteza maxima admisa in afara localitatilor pentru autovehiculele
                                            ai caror conducatori au mai putin de un an practica de conducere sau pentru persoanele care efectueaza pregatirea practica in vederea obtinerii permisului de conducere este cu 20 km/h mai mica decat viteza maxima
                                            admisa pentru categoria din care fac parte autovehiculele conduse.
                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 51</button>
                                    <div class="content">
                                        <p>
                                            Conducatorul unui vehicul care circula in spatele altuia are obligatia de a pastra o distanta suficienta fata de acesta, pentru evitarea coliziunii.
                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 52</button>
                                    <div class="content">
                                        <p>
                                            (1) Este interzisa desfasurarea de concursuri, antrenamente ori intreceri pe drumurile publice, cu exceptia celor autorizate de administratorul drumului respectiv si avizate de politia rutiera.<br> (2) Organizatorii
                                            concursurilor, antrenamentelor ori intrecerilor autorizate sunt obligati sa ia toate masurile necesare pentru desfasurarea in siguranta a acestora, precum si pentru protectia celorlalti participanti la trafic.<br>                                            (3) In caz de producere a unui eveniment rutier, ca urmare a neindeplinirii atributiilor prevazute la alin. (2) , organizatorii acestora raspund administrativ, contraventional, civil sau penal, dupa caz.
                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 53</button>
                                    <div class="content">
                                        <p>
                                            Autoritatile publice locale, cu autorizatia administratorului drumului public si cu avizul politiei rutiere sau la solicitarea acesteia, sunt obligate sa ia masuri pentru realizarea de amenajari rutiere destinate circulatiei pietonilor, biciclistilor,
                                            vehiculelor cu tractiune animala si calmarii traficului, semnalizate corespunzator, in apropierea unitatilor de invatamant, pietelor, targurilor, spitalelor, precum si in zonele cu risc sporit de accidente.


                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subsectiune">
                            <button class="collapsible">SUBSECTIUNEA 6: Reguli referitoare la manevre
										</button>
                            <div class="content">
                                <div class="articol">
                                    <button class="collapsible">Articolul 54</button>
                                    <div class="content">
                                        <p>
                                            (1) Conducatorul de vehicul care executa o manevra de schimbare a directiei de mers, de iesire dintr-un rand de vehicule stationate sau de intrare intr-un asemenea rand, de trecere pe o alta banda de circulatie sau de virare spre dreapta ori spre stanga
                                            sau care urmeaza sa efectueze o intoarcere ori sa mearga cu spatele este obligat sa semnalizeze din timp si sa se asigure ca o poate face fara sa perturbe circulatia sau sa puna in pericol siguranta celorlalti
                                            participanti la trafic. <br>(2) Semnalizarea schimbarii directiei de mers trebuie sa fie mentinuta pe intreaga durata a manevrei.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subsectiune">
                            <button class="collapsible">SUBSECTIUNEA 7: Intersectii si obligatia de a ceda trecerea
										</button>
                            <div class="content">
                                <div class="articol">
                                    <button class="collapsible">Articolul 55</button>
                                    <div class="content">
                                        <p>
                                            Intersectiile sunt:<br> a) cu circulatie nedirijata;<br> b) cu circulatie dirijata. In aceasta categorie sunt incluse si intersectiile in care circulatia se desfasoara in sens giratoriu.

                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 56</button>
                                    <div class="content">
                                        <p>
                                            La apropierea de o intersectie conducatorul de vehicul trebuie sa circule cu o viteza care sa ii permita oprirea, pentru a acorda prioritate de trecere participantilor la trafic care au acest drept.

                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 57</button>
                                    <div class="content">
                                        <p>
                                            (1) La intersectiile cu circulatie nedirijata, conducatorul de vehicul este obligat sa cedeze trecerea vehiculelor care vin din partea dreapta, in conditiile stabilite prin regulament. <br>(2) La intersectiile
                                            cu circulatie dirijata, conducatorul de vehicul este obligat sa respecte semnificatia indicatoarelor, culoarea semaforului sau indicatiile ori semnalele politistului rutier. <br>(3) Patrunderea unui vehicul
                                            intr-o intersectie este interzisa daca prin aceasta se produce blocarea intersectiei. <br>(4) In intersectiile cu sens giratoriu, semnalizate ca atare, vehiculele care circula in interiorul acestora au prioritate
                                            fata de cele care urmeaza sa patrunda in intersectie.

                                        </p>
                                    </div>

                                    <button class="collapsible">Articolul 58</button>
                                    <div class="content">
                                        <p>
                                            In cazul vehiculelor care patrund intr-o intersectie dintre un drum inchis circulatiei publice si un drum public, au prioritate acele vehicule care circula pe drumul public.
                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 59</button>
                                    <div class="content">
                                        <p>
                                            (1) In intersectiile cu circulatie nedirijata, conducatorul de vehicul este obligat sa acorde prioritate de trecere vehiculelor care circula pe sine. Acestea pierd prioritatea de trecere cand efectueaza virajul spre stanga sau cand semnalizarea rutiera
                                            din acea zona stabileste o alta regula de circulatie.<br> (2) In intersectii, conducatorii vehiculelor care vireaza spre stanga sunt obligati sa acorde prioritate
                                            de trecere vehiculelor cu care se intersecteaza si care circula din partea dreapta. <br>(3) In intersectiile cu circulatie dirijata prin indicatoare de prioritate, regula prioritatii de dreapta se respecta numai
                                            in cazul in care doua vehicule urmeaza sa se intalneasca, fiecare intrand in intersectie de pe un drum semnalizat cu un indicator avand aceeasi semnificatie de prioritate sau de pierdere a prioritatii.<br> (4)
                                            Cand un semafor cu trei culori are o lumina verde intermitenta suplimentara, montata la acelasi nivel cu lumina verde normala a semaforului, sub forma unei sageti verzi pe fond negru, cu varful spre dreapta,
                                            aprinderea acesteia semnifica permisiunea pentru vehicule de a-si continua drumul in directia indicata de sageata, indiferent de culoarea semaforului electric, cu conditia acordarii prioritatii de trecere vehiculelor
                                            si pietonilor care au drept de circulatie.



                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subsectiune">
                            <button class="collapsible">SUBSECTIUNEA 8: Trecerea la nivel cu calea ferata
										</button>
                            <div class="content">
                                <div class="articol">
                                    <button class="collapsible">Articolul 60</button>
                                    <div class="content">
                                        <p>
                                            (1) Participantii la trafic trebuie sa dea dovada de prudenta sporita la apropierea si traversarea liniilor de cale ferata curenta sau industriala, dupa caz.<br> (2) La trecerea la nivel cu o cale ferata curenta,
                                            prevazuta cu bariere sau semibariere, conducatorii de vehicule sunt obligati sa opreasca in dreptul indicatorului ce obliga la oprire, daca acestea sunt in curs de coborare ori in pozitie orizontala si/sau semnalele
                                            sonore si luminoase care anunta apropierea trenului sunt in functiune.<br> (3) La trecerea la nivel cu o cale ferata industriala, semnalizata corespunzator, conducatorii de vehicule sunt obligati sa se conformeze
                                            semnificatiei semnalelor agentului de cale ferata.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subsectiune">
                            <button class="collapsible">SUBSECTIUNEA 9: Autovehicule cu regim de circulatie prioritara
										</button>
                            <div class="content">
                                <div class="articol">
                                    <button class="collapsible">Articolul 61</button>
                                    <div class="content">
                                        <p>
                                            (1) Au regim de circulatie prioritara numai autovehiculele prevazute la art. 32 alin. (2) lit. a) si b) , atunci cand se deplaseaza in actiuni de interventie sau in misiuni care au caracter de urgenta. Pentru a avea prioritate de trecere, aceste autovehicule
                                            trebuie sa aiba in functiune semnalele luminoase si sonore.<br> (2) Conducatorii autovehiculelor apartinand institutiilor prevazute la art. 32 alin. (2) lit. a) si
                                            b) pot incalca regimul legal de viteza sau alte reguli de circulatie, cu exceptia celor care reglementeaza trecerea la nivel cu calea ferata, atunci cand se deplaseaza in actiuni de interventie sau in misiuni
                                            care au caracter de urgenta. <br>(3) Cand pe drumul public circulatia este dirijata de un politist rutier, conducatorii autovehiculelor prevazute la alin. (1) trebuie sa respecte semnalele, indicatiile si dispozitiile
                                            acestuia.

                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 62</button>
                                    <div class="content">
                                        <p>
                                            (1) La intrarea in intersectiile unde lumina rosie a semaforului este in functiune ori indicatoarele obliga la acordarea prioritatii de trecere, conducatorii autovehiculelor prevazute la art. 61 alin. (1) trebuie sa reduca viteza si sa circule cu atentie
                                            sporita pentru evitarea producerii unor accidente de circulatie, in caz contrar urmand sa raspunda potrivit legii.<br> (2) Cand doua autovehicule cu regim de circulatie
                                            prioritara, care se deplaseaza in misiune avand semnalele luminoase si sonore in functiune, se apropie de o intersectie, venind din directii diferite, vehiculul care circula din partea dreapta are prioritate.


                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subsectiune">
                            <button class="collapsible">SUBSECTIUNEA 10: Oprirea, stationarea si parcarea
										</button>
                            <div class="content">
                                <div class="articol">
                                    <button class="collapsible">Articolul 63</button>
                                    <div class="content">
                                        <p>
                                            (1) Se considera oprire imobilizarea voluntara a unui vehicul pe drumul public, pe o durata de cel mult 5 minute. Peste aceasta durata, imobilizarea se considera stationare.<br> (2) Nu se considera oprire: <br>a)
                                            imobilizarea vehiculului atat timp cat este necesara pentru imbarcarea sau debarcarea unor persoane, daca prin aceasta manevra nu a fost perturbata circulatia pe drumul public respectiv; <br>b) imobilizarea
                                            autovehiculului avand o masa totala maxima autorizata de pana la 3,5 tone, atat timp cat este necesar pentru operatiunea de distribuire a marfurilor alimentare la unitatile comerciale.<br> (3) Pentru autovehiculele
                                            care transporta marfuri, altele decat cele prevazute la alin. (2) lit. b) , administratorul drumului public impreuna cu autoritatile administratiei publice locale, cu avizul politiei rutiere, vor stabili programe
                                            sau intervale orare pe timpul noptii, in care oprirea sau stationarea este permisa pentru distribuirea marfurilor.<br> (4) Se considera parcare stationarea vehiculelor in spatii special amenajate sau stabilite
                                            si semnalizate corespunzator.<br> (5) Vehiculul oprit sau stationat pe partea carosabila trebuie asezat langa si in paralel cu marginea acesteia, pe un singur rand, daca printr-un alt mijloc de semnalizare nu
                                            se dispune altfel. Motocicletele fara atas, mopedele si bicicletele pot fi oprite sau stationate si cate doua, una langa alta.
                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 64</button>
                                    <div class="content">
                                        <p>
                                            (1) Politia rutiera poate dispune ridicarea vehiculelor stationate neregulamentar pe partea carosabila. Ridicarea si depozitarea vehiculelor in locuri special amenajate se realizeaza de catre administratiile publice locale sau de catre administratorul
                                            drumului public, dupa caz.<br> (2) Contravaloarea cheltuielilor pentru ridicarea, transportul si depozitarea vehiculului stationat neregulamentar se suporta de catre
                                            detinatorul acestuia.<br> (3) Ridicarea vehiculelor dispusa de politia rutiera in conditiile prevazute la alin. (1) se realizeaza potrivit procedurii stabilite prin regulament.

                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 65</button>
                                    <div class="content">
                                        <p>
                                            Cazurile si conditiile in care oprirea, stationarea sau parcarea pe drumul public este permisa se stabilesc prin regulament, in conformitate cu prevederile prezentei ordonante de urgenta.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subsectiune">
                            <button class="collapsible">SUBSECTIUNEA 11: Circulatia vehiculelor destinate transportului de marfuri sau transportului public de persoane
										</button>
                            <div class="content">
                                <div class="articol">
                                    <button class="collapsible">Articolul 66</button>
                                    <div class="content">
                                        <p>
                                            (1) Atestatul profesional este obligatoriu pentru conducatorul autovehiculului care efectueaza transport de marfuri periculoase, transport public de persoane, transport in cont propriu de persoane cu microbuze si autobuze, transporturi agabaritice, precum
                                            si pentru autovehiculele de transport marfa cu masa maxima autorizata mai mare de 3,5 tone, care circula in trafic intern si international.<br> (2) Prevederile alin.
                                            (1) nu se aplica conducatorilor de autovehicule apartinand Ministerului Afacerilor Interne, Ministerului Apararii Nationale, Serviciului Roman de Informatii, Serviciului de Protectie si Paza si Administratiei
                                            Nationale a Penitenciarelor.<br> (3) Conditiile de obtinere a certificatului de atestare profesionala se aproba prin ordin al ministrului transporturilor, constructiilor si turismului, in conformitate cu prevederile
                                            legale in vigoare.<br> (4) Certificatul de atestare profesionala care confera titularului dreptul de a efectua activitatea pentru care a fost eliberat este valabil numai insotit de permisul de conducere corespunzator
                                            categoriei din care face parte vehiculul condus.
                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 67</button>
                                    <div class="content">
                                        <p>
                                            Se interzice transportul pe drumurile publice al marfurilor si produselor periculoase in vehicule care nu au dotarile si echipamentele necesare sau care nu indeplinesc conditiile tehnice si de agreere prevazute in Acordul european referitor la transportul
                                            rutier international al marfurilor periculoase (A. D. R. ) , incheiat la Geneva la 30 septembrie 1957, la care Romania a aderat prin Legea nr. 31/1994, ori pentru care conducatorul vehiculului nu detine certificat
                                            A. D. R. corespunzator.
                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 68</button>
                                    <div class="content">
                                        <p>
                                            (1) Autovehiculul care transporta marfuri sau produse periculoase poate circula pe drumurile publice numai in conditiile prevazute de reglementarile in vigoare. <br>(2) Vehiculele care, prin constructie sau
                                            datorita incarcaturii transportate, depasesc masa si/sau gabaritul prevazute de normele legale pot circula pe drumul public numai pe traseele stabilite de administratorul drumului public sau, dupa caz, de autoritatile
                                            administratiei publice locale, cu respectarea prevederilor legale in vigoare.

                                        </p>
                                    </div>
                                    <button class="collapsible">Articolul 69</button>
                                    <div class="content">
                                        <p>
                                            Autovehiculele cu mase si/sau gabarite depasite, cele care transporta marfuri sau produse periculoase, precum si cele de insotire trebuie sa aiba montate semnalele speciale de avertizare cu lumina galbena, prevazute la art. 32 alin. (1) lit. c) , iar
                                            conducatorii acestora trebuie sa le mentina in functiune pe toata perioada deplasarii pe drumul public.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sectiune">
                        <button class="collapsible">SECTIUNEA 3: Reguli pentru alti participanti la trafic
										</button>
                        <div class="content">
                            <div class="articol">
                                <button class="collapsible">Articolul 70</button>
                                <div class="content">
                                    <p>
                                        (1) Pentru a conduce un moped pe drumurile publice, conducatorul acestuia trebuie sa aiba varsta de cel putin 16 ani. <br> (2) Pentru a conduce o bicicleta pe drumurile publice, conducatorul acesteia trebuie sa
                                        aiba varsta de cel putin 14 ani.<br> (3) Bicicletele si mopedele care circula pe drumurile publice trebuie sa fie echipate cu mijloace de iluminare si dispozitive reflectorizant-fluorescente. Este interzisa circulatia
                                        acestora pe timp de noapte fara aceste mijloace si dispozitive in stare de functionare.
                                    </p>
                                </div>
                                <button class="collapsible">Articolul 71</button>
                                <div class="content">
                                    <p>
                                        (1) Sunt interzise accesul si deplasarea vehiculelor cu tractiune animala, a masinilor si utilajelor autopropulsate utilizate in lucrari de constructii, agricole si forestiere, a animalelor de povara, de tractiune sau de calarie, precum si a animalelor
                                        izolate sau in turma pe drumurile nationale, in municipii si pe drumurile la inceputul carora exista indicatoare de interzicere a accesului.<br> (2) Autoritatile administratiei
                                        publice locale au obligatia sa amenajeze, cu acordul administratorului drumului public si avizul politiei rutiere, drumuri laterale, cai de acces catre aceste drumuri, precum si locuri de traversare a drumurilor
                                        publice destinate circulatiei animalelor si vehiculelor prevazute la alin. (1) , semnalizate corespunzator. (la data 29-iun-2007 Art. 71, alin. (2) din capitolul V, sectiunea 3 modificat de Art. I, punctul 19. din
                                        Ordonanta urgenta 69/2007 ) <br> (3) Pentru a circula pe drumurile publice pe care accesul le este permis, animalele, vehiculele trase sau impinse cu mana, animalele de povara, de tractiune si de calarie vor avea
                                        cate un conducator, iar vehiculele cu tractiune animala vor fi echipate si cu mijloace de iluminare si dispozitive reflectorizant-fluorescente, in conformitate cu prevederile regulamentului.
                                    </p>
                                </div>
                                <button class="collapsible">Articolul 72</button>
                                <div class="content">
                                    <p>
                                        (1) Pietonii sunt obligati sa se deplaseze numai pe trotuar, iar in lipsa acestuia, pe acostamentul din partea stanga a drumului, in directia lor de mers. Cand si acostamentul lipseste, pietonii sunt obligati sa circule cat mai aproape de marginea din
                                        partea stanga a partii carosabile, in directia lor de mers.<br> (2) Pietonii au prioritate de trecere fata de conducatorii de vehicule numai atunci cand sunt angajati in traversarea
                                        drumurilor publice prin locuri special amenajate, marcate si semnalizate corespunzator, ori la culoarea verde a semaforului destinat pietonilor.<br> (3) Traversarea drumului public de catre pietoni se face perpendicular
                                        pe axa acestuia, numai prin locurile special amenajate si semnalizate corespunzator, iar in lipsa acestora, in localitati, pe la coltul strazii, numai dupa ce s-au asigurat ca o pot face fara pericol pentru ei si
                                        pentru ceilalti participanti la trafic.
                                        <br> (4) Pietonii surprinsi si accidentati ca urmare a traversarii prin locuri nepermise, la culoarea rosie a semaforului destinat acestora, sau a nerespectarii altor obligatii stabilite de normele rutiere poarta
                                        intreaga raspundere a accidentarii lor, in conditiile in care conducatorul vehiculului respectiv a respectat prevederile legale privind circulatia prin acel sector.<br> (5) Sunt asimilate pietonilor persoanele care
                                        conduc un scaun rulant de constructie speciala, cele care conduc vehicule destinate exclusiv tragerii sau impingerii cu mana, precum si cele care se deplaseaza pe patine sau dispozitive cu role.<br> (6) Se excepteaza
                                        de la respectarea regulilor stabilite pentru pietoni politistul rutier si persoanele care se afla pe platforma drumului public si sunt autorizate, in exercitarea atributiilor de serviciu, sa indrume sau sa dirijeze
                                        circulatia rutiera, in conditiile stabilite prin regulament.<br> (7) Este interzisa ocuparea trotuarelor cu vehicule imobilizate, iar cand aceasta este permisa, conform indicatoarelor sau marcajelor, latimea minima
                                        a trotuarului lasat la dispozitia pietonilor trebuie sa fie de cel putin un metru.

                                    </p>
                                </div>

                                <button class="collapsible">Articolul 73</button>
                                <div class="content">
                                    <p>
                                        Regulile privind circulatia pe drumurile publice a bicicletelor, vehiculelor cu tractiune animala, a conducatorilor de coloane militare, cortegii, grupuri organizate, precum si de animale se stabilesc prin regulament.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sectiune">
                        <button class="collapsible">SECTIUNEA 4: Circulatia pe autostrazi
										</button>
                        <div class="content">
                            <div class="articol">
                                <button class="collapsible">Articolul 74</button>
                                <div class="content">
                                    <p>
                                        (1) Pe autostrazi este interzisa circulatia pietonilor, a autovehiculelor cu gabarite sau mase depasite, fara autorizatie speciala de transport eliberata de administratorul drumului public, conform reglementarilor in vigoare, a vehiculelor cu tractiune
                                        animala, a animalelor, a vehiculelor trase sau impinse cu mana, a bicicletelor si mopedelor, a tractoarelor si masinilor autopropulsate pentru lucrari agricole, precum si a vehiculelor care, prin constructie sau
                                        din alte cauze, nu pot depasi viteza de 50 km/h. <br> (2) De asemenea, pe autostrazi sunt interzise invatarea conducerii unui vehicul, incercarile prototipurilor de sasiuri
                                        si de autovehicule, manifestatiile, defilarile, caravanele publicitare, antrenamentele si competitiile sportive de orice fel, precum si cortegiile. <br> (3) Se interzice circulatia, oprirea sau stationarea autovehiculelor
                                        pe banda de urgenta, cu exceptia cazurilor justificate, precum si a autovehiculelor cu regim de circulatie prioritar. <br> (4) Circulatia autovehiculelor destinate transportului public de persoane sau de marfuri
                                        se efectueaza, de regula, numai pe banda marginala din partea dreapta a autostrazii, in sensul de mers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sectiune">
                        <button class="collapsible">SECTIUNEA 5: Obligatii in caz de accident
							</button>
                        <div class="content">
                            <div class="articol">
                                <button class="collapsible">Articolul 75</button>
                                <div class="content">
                                    <p>
                                        Accidentul de circulatie este evenimentul care intruneste cumulativ urmatoarele conditii: a) s-a produs pe un drum deschis circulatiei publice ori si-a avut originea intr-un asemenea loc; b) a avut ca urmare decesul, ranirea uneia sau a mai multor persoane
                                        ori avarierea a cel putin unui vehicul sau alte pagube materiale; c) in eveniment a fost implicat cel putin un vehicul in miscare; d) [Articolul 75, litera D. din capitolul V, sectiunea 5 a fost abrogat la 29-iun-2007
                                        de Art. I, punctul 20. din Ordonanta urgenta 69/2007]

                                    </p>
                                </div>
                                <button class="collapsible">Articolul 76</button>
                                <div class="content">
                                    <p>
                                        (1) Vehiculele inmatriculate sau inregistrate, cu exceptia celor cu tractiune animala, care circula pe drumurile publice, trebuie sa aiba asigurare obligatorie pentru raspundere civila in caz de pagube produse tertilor prin accidente de circulatie, conform
                                        legii. <br> (2) Politia rutiera dispune masura retinerii certificatului de inmatriculare sau inregistrare si retragerea placutelor cu numarul de inmatriculare sau de inregistrare
                                        a vehiculelor neasigurate, aflate in trafic, eliberand dovada fara drept de circulatie.<br> (3) Daca detinatorul vehiculului nu face dovada asigurarii acestuia, dupa 30 de zile de la data aplicarii masurii prevazute
                                        la alin. (2) , politia rutiera dispune radierea din evidenta a vehiculului.

                                    </p>
                                </div>
                                <button class="collapsible">Articolul 77</button>
                                <div class="content">
                                    <p>
                                        (1) Conducatorul unui vehicul implicat intr-un accident de circulatie in urma caruia a rezultat moartea sau vatamarea integritatii corporale ori a sanatatii unei persoane este obligat sa ia masuri de anuntare imediata a politiei, sa nu modifice sau sa
                                        stearga urmele accidentului si sa nu paraseasca locul faptei.<br> (2) Orice persoana care este implicata sau are cunostinta de producerea unui accident de circulatie in urma
                                        caruia a rezultat moartea sau vatamarea integritatii corporale ori a sanatatii uneia sau a mai multor persoane, precum si in situatia in care in eveniment este implicat un vehicul care transporta marfuri periculoase
                                        este obligata sa anunte de indata politia si sa apeleze numarul national unic pentru apeluri de urgenta 112, existent in retelele de telefonie din Romania.<br> (3) Este interzis oricarei persoane sa schimbe pozitia
                                        vehiculului implicat intr-un accident de circulatie in urma caruia a rezultat moartea sau vatamarea integritatii corporale ori a sanatatii uneia sau a mai multor persoane, sa modifice starea locului sau sa stearga
                                        urmele accidentului fara incuviintarea politiei care cerceteaza accidentul.

                                    </p>
                                </div>
                                <button class="collapsible">Articolul 78</button>
                                <div class="content">
                                    <p>
                                        (1) Conducatorului de autovehicul, tractor agricol sau forestier ori tramvai, instructorului auto atestat care se afla in procesul de instruire practica a unei persoane pentru obtinerea permisului de conducere, precum si examinatorului autoritatii competente
                                        in timpul desfasurarii probelor practice ale examenului pentru obtinerea permisului de conducere sau pentru oricare dintre categoriile ori subcategoriile acestuia, implicati intr-un accident de circulatie, le este
                                        interzis consumul de alcool sau de substante ori produse stupefiante sau medicamente cu efecte similare acestora dupa producerea evenimentului si pana la testarea concentratiei alcoolului in aerul expirat sau recoltarea
                                        probelor biologice. <br> (2) In situatia in care nu sunt respectate dispozitiile alin. (1) , se considera ca rezultatele testului sau ale analizei probelor biologice recoltate
                                        reflecta starea conducatorului, a instructorului auto sau a examinatorului respectiv in momentul producerii accidentului.

                                    </p>
                                </div>
                                <button class="collapsible">Articolul 79</button>
                                <div class="content">
                                    <p>
                                        (1) Conducatorii de vehicule implicati intr-un accident de circulatie in urma caruia au rezultat numai avarierea vehiculelor si/sau alte pagube materiale sunt obligati:<br> a) sa scoata imediat vehiculele in afara
                                        partii carosabile ori, daca starea vehiculelor nu permite acest lucru, sa le deplaseze cat mai aproape de bordura sau acostament, semnalizandu-le prezenta;<br> b) sa se prezinte la unitatea de politie competenta
                                        pe raza careia s-a produs accidentul in termen de cel mult 24 de ore de la producerea evenimentului pentru intocmirea documentelor de constatare.<br> (2) Se excepteaza de la obligatiile prevazute la alin. (1) lit.
                                        b) :<br> a) conducatorii vehiculelor care incheie o constatare amiabila de accident, in conditiile legii;<br> b) conducatorul de vehicul care detine o asigurare facultativa de avarii auto, iar accidentul de circulatie
                                        a avut ca rezultat numai avarierea propriului vehicul.
                                    </p>
                                </div>
                                <button class="collapsible">Articolul 80</button>
                                <div class="content">
                                    <p>
                                        (1) Proprietarul, detinatorul mandatat sau conducatorul auto al carui autovehicul, tractor agricol sau forestier, remorca ori tramvai a fost avariat in alte imprejurari decat intr-un accident de circulatie este obligat sa se prezinte in 24 de ore de la
                                        constatare la unitatea de politie pe raza careia s-a produs evenimentul, pentru intocmirea documentelor de constatare.<br> (2) Persoanele prevazute la alin. (1) sunt exceptate
                                        de la obligatia prezentarii la unitatea de politie daca exista o asigurare facultativa in baza careia pot fi despagubite pentru avarierea vehiculelor respective.
                                    </p>
                                </div>
                                <button class="collapsible">Articolul 80'</button>
                                <div class="content">
                                    <p>
                                        In situatiile prevazute la art. 79 si 80, repararea vehiculelor se face pe baza documentului de constatare eliberat de unitatea de politie sau, dupa caz, de societatile din domeniul asigurarilor.

                                    </p>
                                </div>
                                <button class="collapsible">Articolul 80''</button>
                                <div class="content">
                                    <p>
                                        Persoanele fizice sau juridice autorizate sa execute lucrari de reparatii la vehicule avariate au obligatia sa tina evidenta proprie a reparatiilor executate, potrivit legii, si sa comunice de indata, la cererea politiei rutiere, datele inregistrate solicitate
                                        de aceasta.

                                    </p>
                                </div>
                                <button class="collapsible">Articolul 81</button>
                                <div class="content">
                                    <p>
                                        (1) In vederea intocmirii dosarelor pentru despagubire, la solicitarea societatilor din domeniul asigurarilor, autoritatea care are in evidenta vehiculele inmatriculate sau inregistrate comunica acestora datele referitoare la proprietarii sau detinatorii
                                        mandatati ai vehiculelor.<br> (2) La solicitarea Comisiei de Supraveghere a Asigurarilor sau a societatilor din domeniul asigurarilor, politia rutiera comunica acestora copii
                                        ale documentelor de constatare a evenimentelor.
                                        <br> (3) La solicitarea politiei rutiere, societatile din domeniul asigurarilor comunica in termenul stabilit de aceasta copii ale documentelor referitoare la constatarile amiabile de accidente inregistrate in evidenta
                                        acestora sau alte date expres cerute, in conditiile legii.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sectiune">
                        <button class="collapsible">SECTIUNEA 6: Circulatia autovehiculelor in traficul international
							</button>
                        <div class="content">
                            <div class="articol">
                                <button class="collapsible">Articolul 82</button>
                                <div class="content">
                                    <p>
                                        (1) Autovehiculele, tractoarele agricole sau forestiere si remorcile inmatriculate in Romania pot trece frontiera de stat pe drumurile publice, daca indeplinesc conditiile cerute pentru a fi admise in circulatia internationala, iar conducatorii lor poseda
                                        permis de conducere valabil in conditiile stabilite prin tratatele la care Romania este parte sau care este eliberat de autoritatile competente ale statelor membre ale Uniunii Europene ori Spatiului Economic European
                                        sau a carui valabilitate este recunoscuta in aceste state pe baza de reciprocitate.<br> (2) Autovehiculele , tractoarele agricole sau forestiere si remorcile inmatriculate
                                        in alte state pot trece frontiera de stat si pot circula pe drumurile publice din Romania, daca indeplinesc conditiile tehnice prevazute in Conventia asupra circulatiei rutiere, incheiata la Viena la 8 noiembrie
                                        1968 si ratificata de Romania prin Decretul nr. 318/1980 , dar numai pe perioada cat sunt asigurate pentru cazurile de raspundere civila ca urmare a prejudiciilor produse prin accidente de autovehicule.<br> (3)
                                        [Articolul 82, alin. (3) din capitolul V, sectiunea 6 a fost abrogat la 29-iun-2007 de Art. I, punctul 27. din Ordonanta urgenta 69/2007]<br> (4) Autovehiculele, tractoarele agricole sau forestiere si remorcile
                                        inmatriculate in alte state, detinute de persoane care au sediul sau domiciliul in Romania, pot fi conduse pe drumurile publice pe o perioada de maximum 90 de zile de la introducerea acestora in tara, daca sunt
                                        asigurate pentru cazurile de raspundere civila ca urmare a pagubelor produse prin accidente de circulatie.<br> (5) Persoanele care si-au stabilit domiciliul ori resedinta in Romania pot sa isi inmatriculeze autovehiculele
                                        sau remorcile la autoritatea competenta pe raza careia au domiciliul ori resedinta, dupa caz.<br> (6) Autovehiculele si tractoarele agricole sau forestiere inmatriculate in statele care nu sunt semnatare ale Conventiei
                                        asupra circulatiei rutiere, prevazuta la alin. (2) , sunt obligate sa poarte in partea din spate semnul distinctiv al statului care a efectuat inmatricularea.
                                    </p>
                                </div>
                                <button class="collapsible">Articolul 83</button>
                                <div class="content">
                                    <p>
                                        (1) Au dreptul sa conduca autovehicule pe drumurile publice din Romania, daca indeplinesc conditiile prevazute la art. 20 si art. 23 alin. (1) , titularii permiselor de conducere nationale valabile, eliberate de autoritatile:<br>                                        a) statelor membre ale Conventiei asupra circulatiei rutiere, prevazuta la art. 82 alin. (2) ;<br> b) statelor membre ale Uniunii Europene;<br> c) statelor cu care Romania a incheiat un tratat privind recunoasterea
                                        reciproca a permiselor de conducere auto.
                                        <br> (2) Pentru a conduce un autovehicul pe teritoriul Romaniei, persoanele care sunt titulare ale unui permis de conducere national eliberat de autoritatile unui stat care nu este membru al Conventiei asupra circulatiei
                                        rutiere si nici membru al Uniunii Europene ori cu care Romania nu a incheiat un tratat privind recunoasterea reciproca a permiselor de conducere auto trebuie sa posede si permis de conducere international.<br> (3)
                                        Permisele de conducere nationale eliberate de autoritatile prevazute la alin. (1) , precum si cele a caror valabilitate este recunoscuta de Romania in mod unilateral, detinute de persoane care au domiciliul sau
                                        resedinta in Romania in sensul art. 231 alin. (2) , pot fi preschimbate cu documente similare romanesti, in conditiile stabilite prin ordin al ministrului afacerilor interne, care se publica in Monitorul Oficial
                                        al Romaniei, Partea I.


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">CAPITOLUL VI: Infractiuni si pedepse
					</button>
            <div class="content">
                <div class="articol">
                    <button class="collapsible">Articolul 84</button>
                    <div class="content">
                        <p>
                            [Articolul 84 din capitolul VI a fost abrogat la 01-feb-2014 de Art. 121, punctul 1. din titlul II din Legea 187/2012]
                        </p>
                    </div>
                    <button class="collapsible">Articolul 85</button>
                    <div class="content">
                        <p>
                            [Articolul 85 din capitolul VI a fost abrogat la 01-feb-2014 de Art. 121, punctul 1. din titlul II din Legea 187/2012]
                        </p>
                    </div>
                    <button class="collapsible">Articolul 86</button>
                    <div class="content">
                        <p>
                            [Articolul 86 din capitolul VI a fost abrogat la 01-feb-2014 de Art. 121, punctul 1. din titlul II din Legea 187/2012]
                        </p>
                    </div>
                    <button class="collapsible">Articolul 87</button>
                    <div class="content">
                        <p>
                            [Articolul 87 din capitolul VI a fost abrogat la 01-feb-2014 de Art. 121, punctul 1. din titlul II din Legea 187/2012]
                        </p>
                    </div>
                    <button class="collapsible">Articolul 88</button>
                    <div class="content">
                        <p>
                            (1) Recoltarea mostrelor biologice se face numai in prezenta unui politist rutier, in conditiile art. 190 alin. (8) din Codul de procedura penala, in urmatoarele spatii ale institutiilor medicale:<br> a) in interiorul unitatilor
                            de asistenta medicala autorizate;
                            <br> b) in ambulante avand echipaj cu medic ori autospeciale cu aceasta functie apartinand Serviciului mobil de urgenta, reanimare si descarcerare; <br> c) in interiorul unitatilor medico-legale. (11) Medicul, asistentul medical
                            sau persoana cu pregatire medicala de specialitate din echipajul ambulantei sau autospecialei apartinand Serviciului mobil de urgenta, reanimare si descarcerare, care intervine la evenimentele in legatura cu traficul rutier,
                            poate recolta mostre biologice in masura in care prin aceasta nu se afecteaza acordarea asistentei medicale de urgenta sau de prim ajutor, precum si in situatia in care persoana implicata intr-un accident de circulatie refuza
                            transportul de urgenta la o unitate sanitara sau starea sa de sanatate nu impune acest transport. (12) Recoltarea mostrelor biologice se face cu respectarea normelor stabilite potrivit art. 125 lit. c) . (13) Transportul mostrelor
                            biologice, recoltate in conditiile alin. (11) , la unitatea medico-legala in vederea realizarii analizei toxicologice, va fi efectuat de catre politistul rutier.<br> (2) Stabilirea concentratiei de alcool sau a prezentei in
                            organism de substante psihoactive se face in institutiile medico-legale autorizate, in conformitate cu normele metodologice elaborate de Ministerul Sanatatii. <br> (3) Stabilirea prezentei alcoolului in aerul expirat sau testarea
                            preliminara a prezentei in organism a unor substante psihoactive se face de catre politia rutiera, cu ajutorul unor mijloace tehnice certificate. <br> (4) Stabilirea concentratiei de alcool in aerul expirat se face de catre
                            politia rutiera, cu ajutorul unui mijloc tehnic omologat si verificat metrologic. <br> (5) Persoana care conduce pe drumurile publice un vehicul pentru care legea prevede obligativitatea detinerii permisului de conducere, testata
                            de politistul rutier cu un mijloc tehnic omologat si verificat metrologic si depistata ca avand o concentratie de pana la 0,40 mg/l alcool pur in aerul expirat, ii poate solicita acestuia sa i se recolteze mostre biologice
                            in cadrul unitatilor sau institutiilor medicale prevazute la alin. (1) , in vederea stabilirii imbibatiei de alcool in sange. <br> (6) Persoana care conduce pe drumurile publice un vehicul pentru care legea prevede obligativitatea
                            detinerii permisului de conducere, testata cu un mijloc tehnic omologat si verificat metrologic si depistata ca avand o concentratie de peste 0,40 mg/l alcool pur in aerul expirat, este obligata sa se supuna recoltarii mostrelor
                            biologice, in vederea stabilirii imbibatiei de alcool in sange.<br> (7) Conducatorilor de vehicule pentru care legea prevede obligativitatea detinerii permisului de conducere, testati in trafic cu un mijloc certificat care
                            indica prezenta in organism a unor substante psihoactive, li se recolteaza obligatoriu mostre biologice.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 89</button>
                    <div class="content">
                        <p>
                            [Articolul 89 din capitolul VI a fost abrogat la 01-feb-2014 de Art. 121, punctul 3. din titlul II din Legea 187/2012]

                        </p>
                    </div>
                    <button class="collapsible">Articolul 90</button>
                    <div class="content">
                        <p>
                            [Articolul 90 din capitolul VI a fost abrogat la 01-feb-2014 de Art. 121, punctul 3. din titlul II din Legea 187/2012]
                        </p>
                    </div>
                    <button class="collapsible">Articolul 91</button>
                    <div class="content">
                        <p>
                            [Articolul 91 din capitolul VI a fost abrogat la 01-feb-2014 de Art. 121, punctul 3. din titlul II din Legea 187/2012]

                        </p>
                    </div>
                    <button class="collapsible">Articolul 92</button>
                    <div class="content">
                        <p>
                            [Articolul 92 din capitolul VI a fost abrogat la 01-feb-2014 de Art. 121, punctul 3. din titlul II din Legea 187/2012]
                        </p>
                    </div>
                    <button class="collapsible">Articolul 93</button>
                    <div class="content">
                        <p>
                            [Articolul 93 din capitolul VI a fost abrogat la 01-feb-2014 de Art. 121, punctul 3. din titlul II din Legea 187/2012]
                        </p>
                    </div>
                    <button class="collapsible">Articolul 94</button>
                    <div class="content">
                        <p>
                            [Articolul 94 din capitolul VI a fost abrogat la 01-feb-2014 de Art. 121, punctul 3. din titlul II din Legea 187/2012]
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">CAPITOLUL VII: Raspunderea contraventionala

						</button>
            <div class="content">
                <div class="articol">
                    <button class="collapsible">Articolul 95</button>
                    <div class="content">
                        <p>
                            (1) Incalcarea dispozitiilor prezentei ordonante de urgenta, altele decat cele care intrunesc elementele constitutive ale unei infractiuni, constituie contraventie si se sanctioneaza cu avertisment ori cu amenda ca sanctiune principala si, dupa caz, cu
                            una dintre sanctiunile contraventionale complementare prevazute la art. 96 alin. (2) .<br> (2) Avertismentul consta in atentionarea verbala sau scrisa a contravenientului, insotita de recomandarea
                            de a respecta dispozitiile legale.
                            <br> (3) [Articolul 95, alin. (3) din capitolul VII a fost abrogat la 29-iun-2007 de Art. I, punctul 32. din Ordonanta urgenta 69/2007]<br> (4) Sanctiunile contraventionale prevazute la alin. (1) se stabilesc si se aplica contravenientilor,
                            persoane fizice ori juridice.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 96</button>
                    <div class="content">
                        <p>
                            (1) Sanctiunile contraventionale complementare au ca scop inlaturarea unei stari de pericol si preintampinarea savarsirii altor fapte interzise de lege si se aplica prin acelasi proces-verbal prin care se aplica si sanctiunea principala a amenzii sau
                            avertismentului. *) In interpretarea si aplicarea dispozitiilor art. 96 alin. (1) , neconsemnarea, in cuprinsul procesului-verbal de constatare si sanctionare a contraventiei, a sanctiunii complementare a suspendarii dreptului
                            de a conduce, a intervalului de timp in care acesta este suspendat si a temeiului juridic este sanctionata cu nulitatea relativa partiala a procesului-verbal, conditionata de producerea unei vatamari care nu poate fi inlaturata
                            decat prin anularea masurii privind retinerea permisului de conducere.<br> (2) Sanctiunile contraventionale complementare sunt urmatoarele:<br> a) aplicarea punctelor de penalizare;<br> b) suspendarea
                            exercitarii dreptului de a conduce, pe timp limitat;<br> c) confiscarea bunurilor destinate savarsirii contraventiilor prevazute in prezenta ordonanta de urgenta ori folosite in acest scop;<br> d) imobilizarea vehiculului;<br>                            e) radierea din oficiu a inmatricularii sau inregistrarii vehiculului, in cazurile prevazute la art. 17 alin. (4) ;<br> f) [Articolul 96, alin. (2) , litera F. din capitolul VII a fost abrogat la 29-iun-2007 de Art. I, punctul
                            33. din Ordonanta urgenta 69/2007]<br> (3) Pentru incalcarea unor norme la regimul circulatiei, pe langa sanctiunea principala sau, dupa caz, una dintre sanctiunile contraventionale complementare prevazute la alin. (2) lit.
                            c) , d) si f) , in cazurile prevazute la art. 108 alin. (1) se aplica si un numar de 2, 3, 4 sau 6 puncte de penalizare. <br> (4) In cazul cumulului de 15 puncte de penalizare suspendarea exercitarii dreptului de a conduce
                            se dispune de catre seful politiei rutiere din judetul sau municipiul Bucuresti care il are in evidenta pe titularul permisului de conducere.<br> (5) Confiscarea se dispune de catre politia rutiera prin procesul-verbal de constatare
                            a contraventiei, odata cu aplicarea sanctiunii amenzii.
                            <br> (6) Sunt supuse confiscarii:<br> a) mijloacele speciale de avertizare luminoase si sonore detinute, montate si folosite pe alte autovehicule decat cele prevazute la art. 32 alin. (2) si (3) ;<br> b) dispozitivele care
                            perturba functionarea mijloacelor tehnice de supraveghere a traficului;<br> c) placutele cu numarul de inmatriculare sau de inregistrare care nu corespund standardelor in vigoare si care sunt montate pe vehicule; <br> d) [Articolul
                            96, alin. (6) , litera D. din capitolul VII a fost abrogat la 17-sep-2007 de Actul din Decizia 661/2007]<br> (7) Imobilizarea unui vehicul consta in scoaterea acestuia in afara partii carosabile, pe acostament sau cat mai aproape
                            de marginea drumului, si punerea lui in imposibilitate de miscare prin folosirea unor dispozitive tehnice sau a altor mijloace de blocare.<br> (8) Imobilizarea unui vehicul se dispune de catre politistul rutier, ca urmare a
                            savarsirii de catre conducatorul acestuia a uneia dintre faptele prevazute la art. 117 alin. (1) .
                        </p>
                    </div>
                    <button class="collapsible">Articolul 97</button>
                    <div class="content">
                        <p>
                            (1) In cazurile prevazute in prezenta ordonanta de urgenta, politistul rutier dispune si una dintre urmatoarele masuri tehnico-administrative:<br> a) retinerea permisului de conducere si/sau a certificatului de inmatriculare
                            ori de inregistrare sau, dupa caz, a dovezii inlocuitoare a acestora;<br> b) retragerea permisului de conducere, a certificatului de inmatriculare sau inregistrare ori a placutelor cu numarul de inmatriculare sau de inregistrare;<br>                            c) anularea permisului de conducere.
                            <br> d) ridicarea vehiculelor stationate neregulamentar.<br> (2) Retinerea permisului de conducere ori a certificatului de inmatriculare sau de inregistrare se face de catre politistul rutier, de regula odata cu constatarea
                            faptei, eliberandu-se titularului o dovada inlocuitoare cu sau fara drept de circulatie.<br> (3) Perioada in care titularul permisului de conducere nu are dreptul de a conduce un autovehicul, tractor agricol sau forestier ori
                            tramvai se considera perioada de suspendare a exercitarii dreptului de a conduce.<br> (4) Retragerea permisului de conducere se dispune de catre politia rutiera daca titularul acestuia a fost declarat inapt pentru a conduce
                            vehicule pe drumurile publice de catre o unitate de asistenta medicala autorizata.<br> (5) Anularea permisului de conducere se dispune de catre politia rutiera pe a carei raza de competenta s-a produs una dintre faptele prevazute
                            la art. 114.<br> (6) Procedura aplicarii masurilor tehnico-administrative se stabileste prin regulament.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 98</button>
                    <div class="content">
                        <p>
                            (1) Amenzile contraventionale se stabilesc in cuantumul determinat de valoarea numarului punctelor-amenda aplicate. <br> (2) Un punct-amenda reprezinta valoric 10% din salariul minim brut pe economie, stabilit prin hotarare
                            a Guvernului. (21) Prin exceptie de la prevederile alin. (2) , in perioada 1 ianuarie - 31 decembrie 2018 un punct-amenda este 145 lei. (22) Prin exceptie de la prevederile alin. (2) , in perioada 1 ianuarie-31 decembrie 2019
                            un punct-amenda este 145 lei.
                            <br> (3) Contraventiilor prevazute in prezenta ordonanta de urgenta li se stabilesc clase de sanctiuni carora le corespunde un numar de puncte-amenda, in functie de gravitatea faptelor si de pericolul social pe care acestea
                            il prezinta.
                            <br> (4) Clasele de sanctiuni sunt urmatoarele:<br> a) clasa I - 2 sau 3 puncte-amenda;<br> b) clasa a II-a - 4 sau 5 puncte-amenda; <br> c) clasa a III-a - de la 6 la 8 puncte-amenda;<br> d) clasa a IV-a - de la 9 la 20 puncte-amenda;<br>                            e) clasa a V-a - de la 21 la 100 puncte-amenda.<br> (5) Contraventiile prevazute la clasa a V-a de sanctiuni se aplica persoanelor juridice.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 99</button>
                    <div class="content">
                        <p>
                            (1) Constituie contraventii si se sanctioneaza cu amenda prevazuta in clasa I de sanctiuni urmatoarele fapte savarsite de catre persoane fizice: <br> 1. conducerea unui autovehicul in mod nejustificat cu o viteza cu cel putin
                            10 km/h sub limita minima obligatorie stabilita pe tronsonul de drum respectiv;<br> 2. nerespectarea obligatiei de semnalizare a manevrei de schimbare a directiei de mers;<br> 3. nerespectarea de catre pietoni a normelor privind
                            circulatia pe drumurile publice;<br> 4. neindeplinirea obligatiei proprietarului sau a utilizatorului de autovehicul si tractor agricol sau forestier de a solicita documentul de constatare a avariilor produse acestuia in alte
                            imprejurari decat in urma unui accident de circulatie;
                            <br> 5. nerespectarea normelor privind circulatia pe drumurile publice de catre conducatorii coloanelor militare, ai grupurilor organizate autorizate si cortegiilor;<br> 6. nerespectarea semnificatiei semnalului luminos intermediar
                            de forma uneia sau a unor sageti de culoare galbena ori alba cu varful orientat in jos spre dreapta, care anunta schimbarea semnalului de culoare verde in cazul benzilor cu circulatie reversibila;<br> 7. conducerea unui vehicul
                            avariat peste termenul de 30 de zile de la data eliberarii documentului de constatare a avariei; <br> 8. nerespectarea obligatiei pasagerilor aflati intr-un autovehicul si tractor agricol sau forestier de a purta, in timpul
                            deplasarii pe drumurile publice, centura sau dispozitivele de siguranta omologate;<br> 9. nerespectarea obligatiei de catre persoana transportata pe motocicleta sau pe moped de a purta, in timpul deplasarii pe drumurile publice,
                            casca de protectie omologata; <br> 10. nerespectarea obligatiei conducatorului de vehicul de a lasa liber traseul tramvaiului la apropierea acestuia, cand drumul are o singura banda;<br> 11. nerespectarea regulilor de circulatie
                            de catre conducatorii de animale; <br> 12. nerespectarea obligatiei de a aplica semnul distinctiv pe autovehicule si tractoare agricole sau forestiere conduse de persoane care au mai putin de un an vechime de la dobandirea
                            permisului de conducere;<br> 13. lasarea libera in timpul conducerii a volanului, ghidonului sau a manetei de comanda a vehiculului;<br> 14. nerespectarea de catre pasageri sau calatori a obligatiilor ce le revin atunci cand
                            se afla in vehicule; <br> 15. nerespectarea semnificatiei culorii galbene a semaforului;<br> 16. conducerea unui vehicul ale carui placute cu numarul de inmatriculare sau de inregistrare sunt deteriorate, murdare ori acoperite
                            cu gheata sau zapada de natura a impiedica identificarea numarului de inmatriculare sau de inregistrare;<br> 17. conducerea unui vehicul pe ale carui placute cu numarul de inmatriculare sau de inregistrare sunt aplicate folii
                            sau alte dispozitive care nu permit citirea numarului de inmatriculare ori placutele nu corespund standardelor in vigoare;<br> 18. conducerea pe drumurile publice a unui vehicul cu deficiente majore, altele decat cele prevazute
                            la art. 101 alin. (1) pct. 11.<br> (2) Amenda contraventionala prevazuta la alin. (1) se aplica si conducatorului de autovehicul, tractor agricol sau forestier ori tramvai care savarseste o fapta pentru care se aplica 2 puncte
                            de penalizare, conform art. 108 alin. (1) lit. a) .

                        </p>
                    </div>
                    <button class="collapsible">Articolul 100</button>
                    <div class="content">
                        <p>
                            (1) Constituie contraventii si se sanctioneaza cu amenda prevazuta in clasa a II-a de sanctiuni urmatoarele fapte savarsite de persoane fizice:<br> 1. nerespectarea semnalelor politistilor de frontiera in punctele de trecere
                            a frontierei de stat a Romaniei, ale indrumatorilor de circulatie ai Ministerului Apararii Nationale, ale organelor fiscale din cadrul Agentiei Nationale de Administrare Fiscala, ale agentilor de cale ferata, ale persoanelor
                            desemnate pentru dirijarea circulatiei, pe sectoarele de drum pe care se executa lucrari de reabilitare a acestora, precum si cele ale patrulelor scolare de circulatie si ale nevazatorilor;<br> 2. nerespectarea regulilor de
                            utilizare a mijloacelor de avertizare sonora de catre conducatorii de vehicule, cu exceptia celor care conduc autovehicule prevazute la art. 32 alin. (2) lit. a) si b) ; <br> 3. nerespectarea semnificatiei indicatoarelor si
                            marcajelor de obligare;<br> 4. neindeplinirea obligatiei de a solicita autoritatii competente, in termenul prevazut de lege, eliberarea unui nou permis de conducere sau certificat de inmatriculare ori de inregistrare, in cazul
                            in care acestea au fost declarate furate, pierdute, deteriorate sau nu mai corespund din punctul de vedere al formei si continutului celor in vigoare;<br> 5. lipsa dotarilor specifice la autovehiculele si tractoarele agricole
                            sau forestiere destinate invatarii conducerii auto, prevazute in reglementarile in vigoare;<br> 6. conducerea unui autovehicul si tractor agricol sau forestier care are montate anvelope cu alte dimensiuni sau caracteristici
                            decat cele prevazute in certificatul de inmatriculare sau de inregistrare ori sunt uzate peste limita admisa; <br> 7. conducerea unui autovehicul si tractor agricol sau forestier care, in mers sau stationare, polueaza fonic
                            sau emana noxe peste limita legal admisa;<br> 8. nerespectarea traseelor stabilite de politia rutiera pentru pregatirea practica sau sustinerea examenului pentru obtinerea permisului de conducere;<br> 9. nerespectarea obligatiei
                            de a circula pe un singur sir, indiferent de directia de deplasare, intr-o intersectie in care circula si tramvaie si de a lasa liber traseul tramvaiului atunci cand spatiul dintre sina din dreapta si trotuar nu permite circulatia
                            pe doua siruri;<br> 10. efectuarea de catre conducatorul unui vehicul a unor activitati de natura a-i distrage atentia de la conducere ori folosirea instalatiilor de sonorizare la un nivel de zgomot care afecteaza deplasarea
                            in siguranta a lui si a celorlalti participanti la trafic;<br> 11. nerespectarea obligatiei ce revine conducatorului de motocicleta sau moped de a avea in functiune, in timpul zilei, luminile de intalnire in circulatia pe drumurile
                            publice;
                            <br> 12. neutilizarea echipamentului de protectie-avertizare fluorescent-reflectorizant de catre persoana care executa lucrari in zona drumului public sau de catre agentul de cale ferata care asigura trecerea la nivel;<br>                            13. conducerea unui autovehicul si tractor agricol sau forestier care nu este dotat cu trusa medicala, triunghiuri reflectorizante si stingator pentru incendii, omologate.<br> (2) Amenda contraventionala prevazuta la alin.
                            (1) se aplica si conducatorului de autovehicul, tractor agricol sau forestier ori tramvai care savarseste o fapta pentru care se aplica 3 puncte de penalizare, conform art. 108 alin. (1) lit. b) .<br> (3) Constituie contraventie
                            si se sanctioneaza cu amenda prevazuta in clasa a II-a de sanctiuni si cu aplicarea sanctiunii contraventionale complementare a suspendarii exercitarii dreptului de a conduce pentru o perioada de 30 de zile savarsirea de catre
                            conducatorul de autovehicul, tractor agricol sau forestier ori tramvai a urmatoarelor fapte:<br> a) depasirea coloanelor de vehicule oprite la culoarea rosie a semaforului sau la trecerile la nivel cu calea ferata;<br> b) neacordarea
                            prioritatii de trecere pietonilor angajati in traversarea regulamentara a drumului public prin locurile special amenajate si semnalizate, aflati pe sensul de deplasare a autovehiculului, tractorului agricol sau forestier ori
                            tramvai ;<br> c) neacordarea prioritatii de trecere vehiculelor care au acest drept;<br> d) nerespectarea semnificatiei culorii rosii a semaforului;<br> e) nerespectarea regulilor privind depasirea;<br> f) nerespectarea semnalelor,
                            indicatiilor si dispozitiilor politistului rutier aflat in exercitarea atributiilor de serviciu;<br> g) neprezentarea la unitatea de politie competenta pe raza careia s-a produs un accident de circulatie din care au rezultat
                            numai pagube materiale, cu exceptia cazurilor prevazute la art. 79 alin. (2) .

                        </p>
                    </div>
                    <button class="collapsible">Articolul 101</button>
                    <div class="content">
                        <p>
                            (1) Constituie contraventii si se sanctioneaza cu amenda prevazuta in clasa a III-a de sanctiuni urmatoarele fapte savarsite de persoane fizice:<br> 1. conducerea unui autovehicul si tractor agricol sau forestier cu permis
                            de conducere a carui valabilitate a expirat;<br> 2. [Articolul 101, alin. (1) , punctul 2. din capitolul VII a fost abrogat la 29-iun-2007 de Art. I, punctul 40. din Ordonanta urgenta 69/2007];<br> 3. conducerea unui autovehicul
                            de catre o persoana cu domiciliul in Romania care nu a preschimbat permisul de conducere obtinut in alt stat, in termenul prevazut de lege;<br> 4. neindeplinirea obligatiilor de preschimbare a certificatului de inmatriculare
                            sau de inregistrare a autovehiculului si tractorului agricol sau forestier ori remorcii in cazurile prevazute de lege;<br> 5. nepastrarea distantei laterale suficiente fata de vehiculul care circula din sens opus;<br> 6. nerespectarea
                            de catre conducatorul de vehicul a semnificatiei indicatoarelor si marcajelor de interzicere sau restrictie ori a celor temporare, cu exceptia celor care interzic accesul sau depasirea care se incadreaza in alta clasa de sanctiuni;<br>                            7. nerespectarea obligatiei de a permite parasirea intersectiei conducatorului vehiculului ramas in interiorul acesteia;<br> 8. nerespectarea normelor privind circulatia bicicletelor;<br> 9. nereducerea vitezei in cazurile
                            prevazute de regulament;<br> 10. montarea la autovehicul si tractor agricol sau forestier , remorca sau tramvai a luminilor de alta culoare sau intensitate, a altor lumini ori dispozitive de avertizare sonora sau accesorii
                            ori modificari neomologate;<br> 11. conducerea unui autovehicul, tractor agricol sau forestier, remorca sau tramvai cu deficiente majore la sistemul de franare sau mecanismul de directie, la sistemul de iluminare sau de avertizare
                            sonora ori cand acestea lipsesc;<br> 12. nerespectarea regulilor in cazul imobilizarii involuntare in pasaje subterane si tuneluri;<br> 13. nerespectarea regulilor privind transportul persoanelor si al obiectelor in sau pe
                            vehicule;
                            <br> 14. pornirea de pe loc a autovehiculului sau tramvaiului cu usile deschise, circulatia cu usile deschise ori deschiderea acestora in timpul mersului; deschiderea usilor autovehiculului atunci cand acesta este oprit sau
                            stationat, fara asigurarea ca nu se pune in pericol siguranta deplasarii celorlalti participanti la trafic;<br> 15. oprirea autovehiculelor destinate transportului public de persoane in alte locuri decat in statiile semnalizate
                            ca atare;<br> 16. nerespectarea regulilor privind circulatia pe benzi;<br> 17. conducerea pe drumurile publice a vehiculelor cu doua roti, fara a se asigura contactul cu partea carosabila pe ambele roti.<br> 18. nerespectarea
                            obligatiei conducatorului de vehicul de a avea asupra sa documentele prevazute la art. 35 alin. (2) . <br> (2) Amenda contraventionala prevazuta la alin. (1) se aplica si conducatorului de autovehicul, tractor agricol sau forestier
                            ori tramvai care savarseste o fapta pentru care se aplica 4 puncte de penalizare, conform art. 108 alin. (1) lit. c) . <br> (3) Constituie contraventie si se sanctioneaza cu amenda prevazuta in clasa a III-a de sanctiuni si
                            cu aplicarea sanctiunii contraventionale complementare a suspendarii dreptului de a conduce pentru o perioada de 60 de zile savarsirea de catre conducatorul de autovehicul, tractor agricol sau forestier ori tramvai a urmatoarelor
                            fapte: <br> a) nerespectarea regulilor privind prioritatea de trecere, depasirea sau trecerea la culoarea rosie a semaforului, daca prin aceasta s-a produs un accident de circulatie din care au rezultat avarierea unui vehicul
                            sau alte pagube materiale; <br> b) nerespectarea interdictiei temporare de circulatie instituite pe un anumit segment de drum public;<br> c) nerespectarea regulilor de circulatie la trecerea unei coloane oficiale sau intercalarea
                            intr-o astfel de coloana; <br> d) circulatia pe sens opus, cu exceptia cazurilor in care se efectueaza regulamentar manevra de depasire.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 102</button>
                    <div class="content">
                        <p>
                            (1) Constituie contraventii si se sanctioneaza cu amenda prevazuta in clasa a IV-a de sanctiuni urmatoarele fapte savarsite de persoane fizice:<br> 1. conducerea pe drumurile publice a unui vehicul care prezinta deficiente
                            periculoase sau al carui termen de valabilitate a inspectiei tehnice periodice a expirat;<br> 2. [Articolul 102, alin. (1) , punctul 2. din capitolul VII a fost abrogat la 29-iun-2007 de Art. I, punctul 42. din Ordonanta urgenta
                            69/2007]
                            <br> 3. conducerea unui vehicul cu tractiune animala neinregistrat;<br> 4. neefectuarea radierii vehiculelor din evidenta, in cazurile si termenele prevazute de lege;<br> 5. conducerea unui autovehicul destinat transportului
                            public de persoane sau de marfuri fara a detine atestatul profesional;<br> 6. neefectuarea verificarii medicale periodice;<br> 7. [Articolul 102, alin. (1) , punctul 7. din capitolul VII a fost abrogat la 20-ian-2007 de Art.
                            I, punctul 21. din Legea 6/2007]<br> 8. detinerea simultana a doua permise de conducere nationale, dintre care unul eliberat de o autoritate competenta straina;<br> 9. lipirea de afise, inscriptii sau inscrisuri pe indicatoarele
                            sau dispozitivele ce servesc la semnalizarea rutiera, inclusiv pe suporturile acestora;<br> 10. detinerea, montarea sau folosirea in circulatia pe drumurile publice a mijloacelor speciale de avertizare sonora sau luminoasa
                            pe vehiculele care nu au acest drept;<br> 11. detinerea, montarea sau folosirea in circulatia pe drumurile publice a dispozitivelor care perturba functionarea normala a dispozitivelor de masurare a vitezei;<br> 12. folosirea
                            nejustificata a mijloacelor speciale de avertizare luminoase sau sonore de catre conducatorii autovehiculelor care au regim de circulatie prioritara;<br> 13. [Articolul 102, alin. (1) , punctul 13. din capitolul VII a fost
                            abrogat la 29-iun-2007 de Art. I, punctul 42. din Ordonanta urgenta 69/2007]
                            <br> 14. necomunicarea de catre proprietarul sau utilizatorul unui vehicul, la solicitarea politiei rutiere, a identitatii persoanei careia i-a incredintat vehiculul spre a fi condus;<br> 15. neindeplinirea obligatiilor ce
                            ii revin conducatorului de vehicule care efectueaza transport public de persoane sau de marfuri;<br> 16. nerespectarea obligatiilor ce revin conducatorilor de vehicule cu tractiune animala;<br> 17. nerespectarea dispozitiilor
                            art. 74 privind circulatia pe autostrazi; <br> 18. [Articolul 102, alin. (1) , punctul 18. din capitolul VII a fost abrogat la 20-ian-2007 de Art. I, punctul 21. din Legea 6/2007]<br> 19. efectuarea transportului de marfuri
                            sau persoane cu autovehicule si tractoare agricole sau forestiere si remorci care circula in baza autorizatiei pentru probe;<br> 20. conducerea unui autovehicul si tractor agricol sau forestier care circula in baza autorizatiei
                            pentru probe in afara judetului sau a municipiului Bucuresti in raza caruia isi are sediul titularul autorizatiei;<br> 21. nerespectarea semnificatiei luminii rosii a dispozitivelor instalate pentru semnalizarea benzilor cu
                            circulatie reversibila; <br> 22. savarsirea de catre conducatorii de vehicule sau pasagerii acestora de gesturi obscene, proferarea de injurii, adresarea de expresii jignitoare sau vulgare participantilor la trafic;<br> 23.
                            aruncarea, lasarea ori abandonarea pe drumul public de obiecte, materiale, substante sau vehicule, dupa caz;<br> 24. nerespectarea regulilor privind remorcarea vehiculelor;<br> 25. neprezentarea, in mod nejustificat, in termenul
                            stabilit la unitatea de politie rutiera la care au fost invitate pentru solutionarea oricarei probleme legate de calitatea de participant la trafic sau de proprietar ori utilizator de vehicul;<br> 26. patrunderea pe drumurile
                            publice modernizate cu un vehicul care are pe roti sau pe caroserie noroi ce se depune pe partea carosabila ori din care cad sau se scurg produse, substante sau materiale ce pun in pericol siguranta circulatiei;<br> 27. transportul
                            animalelor pe locurile din fata ale vehiculelor;<br> 28. conducerea autovehiculului pe drumurile publice acoperite cu zapada, gheata sau polei, fara ca acesta sa fie dotat cu anvelope de iarna, iar in cazul autovehiculului
                            de transport marfa cu o masa totala maxima autorizata mai mare de 3,5 tone si al autovehiculului de transport persoane cu mai mult de 9 locuri pe scaune, inclusiv cel al conducatorului auto, fara ca acestea sa fie echipate
                            cu anvelope de iarna pe rotile axei/axelor de tractiune sau fara a avea montate pe aceste roti lanturi sau alte echipamente antiderapante certificate;<br> 29. neaplicarea, in partea din spate a unui autovehicul si tractor agricol
                            sau forestier inmatriculat intr-un stat care nu este semnatar al Conventiei asupra circulatiei rutiere, a semnului distinctiv al statului care a efectuat inmatricularea;<br> 30. [Articolul 102, alin. (1) , punctul 30. din capitolul
                            VII a fost abrogat la 29-iun-2007 de Art. I, punctul 42. din Ordonanta urgenta 69/2007] <br> 31. lovirea, deteriorarea sau ocolirea portilor de gabarit instalate inaintea trecerii la nivel cu calea ferata;<br> 32. lovirea si/sau
                            deteriorarea pasajelor superioare de pe drumurile publice, prin nerespectarea gabaritului de libera trecere semnalizat corespunzator;<br> 33. montarea pe autovehicul a unui sistem antifurt sonor a carui durata a semnalului
                            depaseste mai mult de un minut consecutiv, iar intensitatea semnalului depaseste pragul fonic prevazut de lege;<br> 34. neaplicarea, in partea din spate a vehiculului care efectueaza transport public de persoane sau de marfuri,
                            a indicatorului cu limitele de viteza admise pentru categoria din care face parte vehiculul condus;<br> 35. aplicarea tratamentelor chimice sau a foliilor pe parbriz, luneta sau pe geamurile laterale, cu exceptia celor omologate
                            si/sau certificate de catre autoritatea competenta si care sunt marcate corespunzator;
                            <br> 36. aplicarea de afise, reclame publicitare, inscrisuri sau accesorii pe parbriz, luneta sau geamurile laterale care restrang sau estompeaza vizibilitatea sub limita legal admisa ori impiedica sau diminueaza eficacitatea
                            dispozitivelor de iluminare si semnalizare luminoasa ori citirea numarului de inmatriculare;<br> 37. incalcarea obligatiilor referitoare la circulatia pe drumurile publice a vehiculelor care transporta produse sau marfuri periculoase
                            ori a vehiculelor cu masa si/sau gabaritul depasit. <br> 38. nerespectarea obligatiei de comunicare prevazute la art. 801 si la art. 81 alin. (3) sau comunicarea de date inexacte ori incomplete.<br> 39. conducerea unui vehicul
                            a carui inmatriculare este suspendata.<br> (2) Amenda contraventionala prevazuta la alin. (1) se aplica si conducatorului de autovehicul, tractor agricol sau forestier ori tramvai care savarseste o fapta pentru care se aplica
                            6 puncte de penalizare, conform art. 108 alin. (1) lit. d) .<br> (3) Constituie contraventie si se sanctioneaza cu amenda prevazuta in clasa a IV-a de sanctiuni si cu aplicarea sanctiunii complementare a suspendarii exercitarii
                            dreptului de a conduce pentru o perioada de 90 de zile savarsirea de catre conducatorul de autovehicul, tractor agricol sau forestier ori tramvai urmatoarelor fapte:<br> a) conducerea sub influenta bauturilor alcoolice, daca
                            fapta nu constituie, potrivit legii, infractiune;<br> b) conducerea vehiculului cu deficiente periculoase la sistemul de franare sau la mecanismul de directie; <br> c) neoprirea la trecerea la nivel cu calea ferata cand barierele
                            sau semibarierele sunt coborate ori in curs de coborare sau cand semnalele cu lumini rosii si/sau sonore sunt in functiune;<br> d) [Articolul 102, alin. (3) , litera D. din capitolul VII a fost abrogat la 29-iun-2007 de Art.
                            I, punctul 42. din Ordonanta urgenta 69/2007]<br> e) depasirea cu mai mult de 50 km/h a vitezei maxime admise pe sectorul de drum respectiv si pentru categoria din care face parte autovehiculul condus, constatata, potrivit
                            legii, cu mijloace tehnice omologate si verificate metrologic.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 103</button>
                    <div class="content">
                        <p>
                            (1) Suspendarea exercitarii dreptului de a conduce autovehicule si tractoare agricole sau forestiere se dispune:<br> a) pentru o perioada de 30 de zile, daca titularul permisului de conducere a savarsit contraventii care cumuleaza
                            15 puncte de penalizare;
                            <br> b) pentru o perioada de 60 de zile, daca titularul permisului de conducere cumuleaza din nou cel putin 15 puncte de penalizare in urmatoarele 12 luni de la data expirarii ultimei suspendari a exercitarii dreptului de a
                            conduce.
                            <br> c) pentru o perioada de 90 de zile cand fapta conducatorului de autovehicul, tractor agricol sau forestier ori tramvai a fost urmarita ca infractiune la regimul circulatiei pe drumurile publice, precum si in cazul accidentului
                            de circulatie din care a rezultat decesul sau vatamarea corporala a unei persoane si instanta de judecata sau procurorul a dispus clasarea, renuntarea la urmarirea penala, renuntarea la aplicarea pedepsei sau amanarea aplicarii
                            pedepsei, daca pentru regula de circulatie incalcata prezenta ordonanta de urgenta prevede suspendarea exercitarii dreptului de a conduce. (11) In situatia prevazuta la alin. (1) lit. c) , suspendarea exercitarii dreptului
                            de a conduce autovehicule, tractoare agricole sau forestiere ori tramvaie se dispune de catre seful politiei rutiere pe raza careia a fost savarsita fapta. <br> (2) In cazul in care conducatorul de autovehicul, tractor agricol
                            sau forestier ori tramvai savarseste, intr-un interval de 6 luni de la data restituirii permisului de conducere, din nou o noua fapta prevazuta la art. 100 alin. (3) , art. 101 alin. (3) si art. 102 alin. (3) , perioada de
                            suspendare se majoreaza cu inca 30 de zile.<br> (3) In cazurile prevazute la alin. (1) si (2) hotararea de suspendare a exercitarii dreptului de a conduce se comunica titularului de catre serviciul politiei rutiere, care are
                            in evidenta contravenientul, in termen de 10 zile de la data constatarii ultimei contraventii. <br> (4) Punctele de penalizare se anuleaza la implinirea termenului de 6 luni de la data constatarii contraventiei. <br> (5) Suspendarea
                            exercitarii dreptului de a conduce anuleaza toate punctele de penalizare acumulate pana in acel moment. <br> (6) In cazurile prevazute la alin. (1) , contravenientul este obligat sa se prezinte la unitatea de politie pe raza
                            careia domiciliaza sau isi are resedinta in sensul art. 231 alin. (2) ori, dupa caz, locuieste, in situatia persoanelor aflate la studii in Romania, in termen de 5 zile de la primirea instiintarii scrise, pentru a preda permisul
                            de conducere. (la data 01-sep-2014 Art. 103, alin. (6) din capitolul VII modificat de Art. I, punctul 25. din Ordonanta 21/2014 ) <br> (7) Neprezentarea contravenientului in termenul prevazut la alin. (6) , in mod nejustificat,
                            atrage majorarea cu 30 de zile a duratei de suspendare a exercitarii dreptului de a conduce, prevazuta la alin. (1) lit. a) si b) .<br> (8) In situatia in care autoritatea emitenta a permisului de conducere a sesizat instanta
                            de judecata potrivit art. 114 alin. (1) lit. e) , autoritatea emitenta a permisului de conducere va dispune prin ordin suspendarea exercitarii dreptului de a conduce autovehicule, suspendare ce opereaza pana la ramanerea definitiva
                            si irevocabila a hotararii judecatoresti. In acest caz, titularul este obligat sa se prezinte la unitatea de politie pe raza careia domiciliaza, are resedinta sau, dupa caz, locuieste, in situatia persoanelor aflate la studii
                            in Romania, in termen de 5 zile de la comunicarea ordinului, pentru a preda permisul de conducere.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 104</button>
                    <div class="content">
                        <p>
                            La cererea titularului permisului de conducere, perioadele de suspendare se reduc de catre seful politiei rutiere a judetului sau a municipiului Bucuresti pe raza careia a fost savarsita fapta ori de catre seful politiei rutiere din Inspectoratul General
                            al Politiei Romane, dar nu mai putin de 30 de zile, in conditiile prevazute in regulament.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 105</button>
                    <div class="content">
                        <p>
                            Constituie contraventii si se sanctioneaza cu amenda prevazuta in clasa a V-a de sanctiuni urmatoarele fapte savarsite de catre persoane juridice:<br> 1. nesemnalizarea sau semnalizarea necorespunzatoare a drumului public sau
                            a trecerilor la nivel cu calea ferata, conform standardelor in vigoare; neinlaturarea obstacolelor care impiedica vizibilitatea conducatorilor de vehicule la trecerile la nivel cu calea ferata;<br> 2. neindeplinirea obligatiilor
                            de instalare a mijloacelor de semnalizare rutiera, precum si a dispozitivelor speciale de acest fel;<br> 3. nesemnalizarea sau semnalizarea necorespunzatoare, conform standardelor in vigoare, a obstacolelor sau lucrarilor aflate
                            in zona drumului public;<br> 4. neasigurarea starii de viabilitate a partii carosabile potrivit standardelor in vigoare, precum si neluarea masurilor de inlaturare a obstacolelor aflate pe partea carosabila;<br> 5. amplasarea
                            in zona drumului public de dispozitive care pot fi confundate cu indicatoarele ori instalatiile care servesc la semnalizarea rutiera ori realizarea de constructii sau instalatii ori crearea de alte obstacole de natura sa le
                            limiteze vizibilitatea sau eficacitatea;
                            <br> 6. instituirea de restrictii de circulatie pe drumurile publice fara autorizatia administratorului drumului si avizul politiei rutiere;<br> 7. nerespectarea termenelor si conditiilor stabilite de administratorul drumului
                            public si de politia rutiera privind amplasarea si executarea de lucrari in zona drumului public;<br> 8. nerespectarea obligatiilor de catre executant sau, dupa caz, beneficiar ca, dupa terminarea lucrarilor in partea carosabila,
                            acostament sau trotuar, sa readuca drumul public cel putin la starea initiala;<br> 9. neindeplinirea obligatiilor ce le revin, potrivit normelor legale, in legatura cu vehiculele si conducatorii acestora;<br> 10. necomunicarea,
                            in termen, la cererea politiei rutiere, a identitatii persoanei careia i-a incredintat vehiculul pentru a fi condus pe drumurile publice;<br> 11. lipsa dotarilor specifice obligatorii pentru admiterea si mentinerea in circulatie
                            a vehiculelor;
                            <br> 12. neasigurarea insotirii deplasarii vehiculelor care efectueaza transport de marfuri sau produse periculoase, precum si a celor cu mase sau gabarite depasite;<br> 13. nerespectarea obligatiei de a echipa personalul de
                            executie a lucrarilor in zona drumului public cu echipamente de protectie-avertizare fluorescent-reflectorizant;<br> 14. amplasarea statiilor mijloacelor de transport public de persoane fara avizul politiei rutiere;<br> 15.
                            nerespectarea obligatiilor de a efectua orele de educatie rutiera in unitatile de invatamant;<br> 16. practicarea actelor de comert pe trotuar, pe acostament sau pe partea carosabila, iar in afara localitatilor, in zona de
                            siguranta a drumului public;<br> 17. refuzul nejustificat de a inmatricula sau de a inregistra un vehicul ori de a elibera placutele cu numarul de inmatriculare sau de inregistrare ori de a mentiona in certificatul de inmatriculare
                            datele de identificare a utilizatorului;
                            <br> 18. neindeplinirea, de catre proprietarul sau detinatorul mandatat al vehiculului, a obligatiei de a solicita autoritatii competente inscrierea in certificatul de inmatriculare sau de inregistrare a datelor de identificare
                            a utilizatorului;<br> 19. neindeplinirea obligatiilor ce revin organizatorilor intrecerilor autorizate de a lua toate masurile necesare pentru desfasurarea in siguranta a acestora, precum si pentru protectia celorlalti participanti
                            la trafic; <br> 20. neindeplinirea obligatiei, de catre autoritatile publice locale, de a efectua amenajari rutiere destinate circulatiei pietonilor, biciclistilor, vehiculelor cu tractiune animala si calmarii traficului, precum
                            si nesemnalizarea sau semnalizarea necorespunzatoare a acestora; <br> 21. incredintarea unui vehicul destinat transportului public de persoane sau de marfuri pentru a fi condus pe drumurile publice de catre un conducator de
                            autovehicul sau tramvai care nu are atestat profesional; <br> 22. dispunerea efectuarii transportului de marfuri si produse periculoase sau a vehiculelor cu masa si/sau gabaritul depasit fara autorizatie speciala emisa in conditiile
                            legii ori pe alte trasee decat cele stabilite de autoritatea competenta; <br> 23. neindeplinirea obligatiei de instiintare a politiei rutiere de pe a carei raza de competenta pleaca transportul de marfuri sau produse periculoase
                            cu privire la traseul stabilit si localitatea de destinatie;<br> 24. neindeplinirea obligatiei de catre autoritatile administratiei publice locale de a amenaja drumuri laterale in conditiile art. 71 alin. (2) ; <br> 25. nerespectarea
                            obligatiei administratorului drumului public sau autoritatii publice locale de a executa sau, dupa caz, de a desfiinta amenajarile rutiere, in termenul stabilit impreuna cu politia rutiera;<br> 26. punerea in aplicare a planurilor
                            de urbanism generale, zonale sau de detaliu, fara ca acestea sa fie avizate in prealabil de catre administratorul drumului public si politia rutiera;<br> 27. incalcarea dispozitiilor legale privind efectuarea de modificari
                            si completari in certificatul de inmatriculare sau de inregistrare ori in cartea de identitate a vehiculului, precum si verificarea tehnica periodica a acestuia fara solicitarea prezentarii de catre proprietar a dovezii existentei
                            asigurarii de raspundere civila pentru pagube produse tertilor prin accidente de autovehicule; <br> 28. neindeplinirea obligatiei de intretinere a drumului public pe timp de iarna, potrivit reglementarilor in vigoare.<br> 29.
                            nerespectarea obligatiei de comunicare prevazute la art. 801 si la art. 81 alin. (3) sau comunicarea de date inexacte ori incomplete.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 106</button>
                    <div class="content">
                        <p>
                            (1) Pana la expirarea perioadei de suspendare a exercitarii dreptului de a conduce, conducatorul de autovehicul, tractor agricol sau forestier si tramvai trebuie sa se prezinte la serviciul politiei rutiere care il are in evidenta, pentru verificarea
                            cunoasterii regulilor de circulatie, dupa cum urmeaza:<br> a) cand permisul de conducere i-a fost retinut pentru conducerea sub influenta bauturilor alcoolice sau pentru nerespectarea regulilor privind
                            prioritatea de trecere, depasirea sau trecerea la culoarea rosie a semaforului, daca prin aceasta s-a produs un accident de circulatie din care a rezultat avarierea unui vehicul sau alte pagube materiale;<br> b) cand fapta
                            a fost urmarita ca infractiune contra sigurantei circulatiei pe drumurile publice, iar procurorul a dispus clasarea ori renuntarea la urmarirea penala sau instanta a dispus renuntarea la aplicarea pedepsei ori amanarea aplicarii
                            pedepsei;
                            <br> c) cand a solicitat reducerea perioadei de suspendare a exercitarii dreptului de a conduce, conform art. 104.<br> (2) Perioada de suspendare a exercitarii dreptului de a conduce autovehicule, tractoare agricole sau forestiere
                            ori tramvaie se prelungeste cu 30 de zile, daca titularul permisului de conducere nu promoveaza testul de cunoastere a regulilor de circulatie, in situatiile prevazute la alin. (1) lit. a) si b) , sau nu se prezinta la serviciul
                            politiei rutiere pentru sustinerea verificarii cunoasterii regulilor de circulatie.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 107</button>
                    <div class="content">
                        <p>
                            Sanctiunile prevazute la art. 100 alin. (3) , art. 101 alin. (3) , art. 102 alin. (3) , art. 103 alin. (2) si la art. 106 se aplica si instructorului auto atestat, aflat in procesul de instruire practica a persoanelor pentru obtinerea permisului de conducere,
                            ori examinatorului aflat in timpul desfasurarii probei practice a examenului pentru obtinerea permisului de conducere.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 108</button>
                    <div class="content">
                        <p>
                            (1) Savarsirea de catre conducatorul de autovehicul, tractor agricol sau forestier ori tramvai a uneia sau mai multor contraventii atrage, pe langa sanctiunea amenzii, si aplicarea unui numar de puncte de penalizare, dupa cum urmeaza:<br>                            a) 2 puncte de penalizare pentru savarsirea urmatoarelor fapte: <br> 1. folosirea incorecta a luminilor de drum la intalnirea cu un autovehicul si tractor agricol sau forestier care circula din sens opus;<br> 2. folosirea telefoanelor
                            mobile in timpul conducerii, cu exceptia celor prevazute cu dispozitive de tip "maini libere";<br> 3. nerespectarea obligatiei de a purta, in timpul circulatiei pe drumurile publice, centura de siguranta ori castile de protectie
                            omologate, dupa caz;<br> 4. depasirea cu 10-20 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face parte autovehiculul condus, constatata, potrivit legii, cu mijloace tehnice omologate
                            si verificate metrologic;<br> 5. circulatia pe un sector de drum pe care accesul este interzis;<br> 6. nerespectarea regulilor privind manevra de intoarcere, mersul inapoi, schimbarea benzii de circulatie sau a directiei de
                            mers;
                            <br> 7. nerespectarea obligatiei de a folosi luminile de intalnire si pe timpul zilei ori a luminilor pentru circulatia diurna, pe autostrazi, drumuri expres si pe drumuri nationale europene (E) ;<br> 8. oprirea neregulamentara;
                            <br> 9. folosirea incorecta a luminilor de drum fata de autovehiculul si tractorul agricol sau forestier care circula in fata sa, in aceeasi directie de mers.<br> b) 3 puncte de penalizare pentru savarsirea urmatoarelor fapte:<br>                            1. oprirea nejustificata sau circulatia pe banda de urgenta a autostrazilor ori oprirea pe partea carosabila a drumurilor expres sau a drumurilor nationale europene (E) ; <br> 2. depasirea cu 21 -30 km/h a vitezei maxime admise
                            pe sectorul de drum respectiv pentru categoria din care face parte autovehiculul condus, constatata, potrivit legii, cu mijloace tehnice omologate si verificate metrologic;<br> 3. nerespectarea regulilor privind manevra de
                            intoarcere, mersul inapoi, schimbarea benzii de circulatie sau a directiei de mers, daca prin aceasta s-a produs un accident din care au rezultat avarierea unui vehicul sau alte pagube materiale;<br> 4. nepastrarea unei distante
                            corespunzatoare fata de vehiculul care il precede, daca prin aceasta s-a produs un accident din care au rezultat avarierea unui vehicul sau alte pagube materiale;<br> 5. nerespectarea semnificatiei indicatorului "ocolire",
                            instalat pe refugiul statiilor de tramvai;<br> 6. patrunderea intr-o intersectie atunci cand circulatia in interiorul acesteia este blocata; <br> 7. stationarea neregulamentara; <br> 8. folosirea luminilor de ceata in alte
                            conditii decat pe timp de ceata;<br> 9. nerespectarea obligatiei conducatorului de autovehicul de se asigura ca persoanele minore poarta centuri de siguranta sau sunt transportate in dispozitive de fixare in scaune pentru copii
                            omologate, in conditiile prevazute de regulament;<br> 10. nerespectarea dispozitiilor art. 36 alin. (13) sau a conditiilor prevazute de regulament privind transportul copiilor in autovehicule care nu sunt echipate cu sisteme
                            de siguranta;<br> c) 4 puncte de penalizare pentru savarsirea urmatoarelor fapte:<br> 1. nerespectarea obligatiilor care ii revin in cazul vehiculelor ramase in pana sau avariate;<br> 2. refuzul inmanarii actului de identitate,
                            permisului de conducere, certificatului de inmatriculare sau de inregistrare, a celorlalte documente prevazute de lege, la cererea politistului rutier, precum si refuzul de a permite verificarea vehiculului;<br> 3. depasirea
                            cu 31 -40 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face parte autovehiculul condus, constatata, potrivit legii, cu mijloace tehnice omologate si verificate metrologic;<br> 4. circulatia
                            in timpul noptii sau ziua, pe timp de ceata, ninsoare abundenta sau ploaie torentiala, cu un autovehicul si tractor agricol sau forestier fara lumini sau fara semnalizare corespunzatoare;<br> 5. conducerea unui autovehicul
                            si tractor agricol sau forestier sau tractarea unei remorci atunci cand dovada inlocuitoare a certificatului de inmatriculare sau de inregistrare este eliberata fara drept de circulatie sau durata acesteia a expirat;<br> d)
                            6 puncte de penalizare pentru savarsirea urmatoarelor fapte:<br> 1. refuzul de a permite imobilizarea vehiculului sau verificarea tehnica a acestuia; <br> 2. nerespectarea semnificatiei semnalelor regulamentare ale agentilor
                            de cale ferata care dirijeaza circulatia la trecerile la nivel cu calea ferata; <br> 3. depasirea cu 41 -50 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face parte autovehiculul condus,
                            constatata, potrivit legii, cu mijloace tehnice omologate si verificate metrologic;<br> 4. conducerea pe drumurile publice a unui vehicul fara a avea montata una dintre placutele cu numarul de inmatriculare sau de inregistrare
                            ori daca placutele cu numarul de inmatriculare ori de inregistrare nu sunt fixate in locurile special destinate;<br> 5. circulatia sau stationarea pe spatiul interzis care separa sensurile de circulatie pe autostrada;<br> 6.
                            stationarea ori parcarea autovehiculelor pe autostrada in alte locuri decat cele special amenajate si semnalizate;<br> 7. executarea pe autostrada a manevrei de intoarcere sau de mers inapoi, circulatia sau traversarea de pe
                            un sens de circulatie pe celalalt prin zonele interzise, respectiv prin zona mediana sau racordurile dintre cele doua parti carosabile; <br> 8. nerespectarea semnificatiei indicatoarelor Trecere la nivel cu o cale ferata simpla,
                            fara bariere; Trecere la nivel cu o cale ferata dubla, fara bariere sau Oprire, instalate la trecerea la nivel cu o cale ferata;<br> 9. schimbarea directiei de mers prin viraj spre stanga, daca prin aceasta se incalca marcajul
                            longitudinal continuu care separa sensurile de circulatie; 10. patrunderea intr-o intersectie dirijata prin semafoare, daca prin aceasta se produce blocarea circulatiei in interiorul intersectiei.
                            <br> (2) Procedura de inregistrare a punctelor de penalizare se stabileste prin regulament.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 109</button>
                    <div class="content">
                        <p>
                            (1) Constatarea contraventiilor si aplicarea sanctiunilor se fac direct de catre politistul rutier, iar in punctele de trecere a frontierei de stat a Romaniei, de catre politistii de frontiera. <br> (2) Constatarea contraventiilor
                            se poate face si cu ajutorul unor mijloace tehnice certificate sau mijloace tehnice omologate si verificate metrologic, consemnandu-se aceasta in procesul-verbal de constatare a contraventiei. <br> (3) In cazurile prevazute
                            la alin. (2) , procesul-verbal se poate incheia si in lipsa contravenientului, dupa stabilirea identitatii conducatorului de vehicul, mentionandu-se aceasta in procesul-verbal, fara a fi necesara confirmarea faptelor de catre
                            martori. <br> (4) Modelul procesului-verbal de constatare a contraventiei se stabileste prin ordin al ministrului afacerilor interne, care se publica in Monitorul Oficial al Romaniei, Partea I.<br> (5) [Articolul 109, alin.
                            (5) din capitolul VII a fost abrogat la 24-aug-2018 de Art. 19, punctul 2. din capitolul V din Legea 203/2018]<br> (6) [Articolul 109, alin. (6) din capitolul VII a fost abrogat la 24-aug-2018 de Art. 19, punctul 2. din capitolul
                            V din Legea 203/2018] <br> (7) [Articolul 109, alin. (7) din capitolul VII a fost abrogat la 24-aug-2018 de Art. 19, punctul 2. din capitolul V din Legea 203/2018] <br> (8) [Articolul 109, alin. (8) din capitolul VII a fost
                            abrogat la 24-aug-2018 de Art. 19, punctul 2. din capitolul V din Legea 203/2018] <br> (9) Prevederile prezentei ordonante de urgenta referitoare la contraventii se completeaza cu cele ale Ordonantei Guvernului nr. 2/2001 privind
                            regimul juridic al contraventiilor, aprobata cu modificari si completari prin Legea nr. 180/2002, cu modificarile si completarile ulterioare, daca prin prezenta ordonanta de urgenta nu se dispune altfel.

                        </p>
                    </div>

                    <button class="collapsible">Articolul 110</button>
                    <div class="content">
                        <p>
                            In cazul in care impotriva titularului permisului de conducere s-a luat masura de siguranta prevazuta la art. 108 lit. c) din Codul penal, suspendarea exercitarii dreptului de a conduce se dispune pe intreaga perioada cat dureaza interzicerea dreptului
                            de a exercita profesia sau ocupatia de conducator de autovehicul.

                        </p>
                    </div> <button class="collapsible">Articolul 111</button>
                    <div class="content">
                        <p>
                            (1) Permisul de conducere sau dovada inlocuitoare a acestuia se retine in urmatoarele cazuri:<br> a) la cumularea a cel putin 15 puncte de penalizare;<br> b) cand titularul acestuia a savarsit una dintre infractiunile prevazute
                            la art. 334, art. 335 alin. (2) , art. 336, 337, art. 338 alin. (1) si la art. 339 alin. (2) , (3) si (4) din Codul penal;<br> c) la savarsirea uneia dintre contraventiile prevazute la art. 100 alin. (3) , art. 101 alin. (3)
                            , art. 102 alin. (3) si in situatia prevazuta la art. 115 alin. (1) ;<br> d) cand titularul acestuia a fost declarat inapt pentru a conduce autovehicule, tractoare agricole sau forestiere ori tramvaie;<br> e) cand prezinta
                            modificari, stersaturi sau adaugari ori este deteriorat;
                            <br> f) cand se afla in mod nejustificat asupra altei persoane;<br> g) cand perioada de valabilitate a expirat.<br> (2) La retinerea permisului de conducere, in cazurile prevazute la alin. (1) , titularului acestuia i se elibereaza
                            o dovada inlocuitoare cu sau fara drept de circulatie.<br> (3) In situatiile prevazute la alin. (1) lit. a) si d) , la art. 102 alin. (3) lit. a) si c) din prezenta ordonanta de urgenta, precum si in cele mentionate la art.
                            334 alin. (2) si (4) , art. 335 alin. (2) , art. 336, 337, art. 338 alin. (1) , art. 339 alin. (2) , (3) si (4) din Codul penal, dovada inlocuitoare a permisului de conducere se elibereaza fara drept de circulatie.<br> (4)
                            Permisul de conducere al conducatorului de autovehicul, tractor agricol sau forestier ori tramvai , implicat intr-un accident de circulatie din care a rezultat uciderea sau vatamarea corporala a unei persoane, se retine de
                            catre politia rutiera daca acesta a incalcat o regula de circulatie, eliberandu-se dovada inlocuitoare fara drept de circulatie, in situatia in care regula de circulatie incalcata este una dintre cele prevazute la art. 102
                            alin. (3) lit. a) si c) , sau dovada inlocuitoare cu drept de circulatie pentru o perioada de 15 zile, in celelalte cazuri. <br> (5) In situatiile prevazute la alin. (1) lit. e) si g) si la alin. (3) lit. b) si e) din prezenta
                            ordonanta de urgenta, la art. 100 alin. (3) , la art. 101 alin. (3) , precum si la art. 334 alin. (1) si (3) din Codul penal, dovada inlocuitoare a permisului de conducere se elibereaza cu drept de circulatie pentru o perioada
                            de 15 zile. <br> (6) La cererea titularului permisului de conducere retinut in conditiile alin. (1) lit. b) sau ale alin. (4) , procurorul care efectueaza urmarirea penala sau exercita supravegherea cercetarii penale ori, in
                            faza de judecata, instanta de judecata investita cu solutionarea cauzei poate dispune prelungirea dreptului de circulatie, cu cate cel mult 30 de zile, pana la dispunerea neinceperii urmaririi penale, scoaterii de sub urmarire
                            penala ori incetarii urmaririi penale sau, dupa caz, pana la ramanerea definitiva a hotararii judecatoresti. Modul de solutionare a cererii de prelungire a dreptului de circulatie se comunica si sefului politiei rutiere pe
                            raza careia s-a comis fapta. <br> (7) Alineatele (3) -(5) se aplica in mod corespunzator si in situatia in care se retine dovada inlocuitoare a permisului retinut pentru o fapta savarsita anterior, aflata in termenul de valabilitate.
                            Termenul de valabilitate al noii dovezi nu il poate depasi pe cel al primei dovezi.

                        </p>
                    </div>

                    <button class="collapsible">Articolul 112</button>
                    <div class="content">
                        <p>
                            (1) Certificatul de inmatriculare sau de inregistrare ori dovada inlocuitoare a acestuia se retine de catre politia rutiera in urmatoarele cazuri:<br> a) vehiculul inregistrat nu are efectuata inspectia tehnica periodica valabila
                            ori aceasta este anulata;
                            <br> b) nu sunt respectate normele tehnice constructive referitoare la transportul produselor periculoase;<br> c) vehiculul circula noaptea fara faruri sau lampi de semnalizare, dispozitivele de iluminare si semnalizare luminoase,
                            mijloacele fluorescent-reflectorizante, prevazute in normele tehnice in vigoare; <br> d) vehiculul circula cu deficiente majore sau periculoase la sistemele de iluminare-semnalizare sau cu alte dispozitive decat cele omologate;<br>                            e) sistemul de franare de serviciu prezinta deficiente majore sau periculoase;<br> f) sistemul de franare de securitate sau de stationare prezinta deficiente majore sau periculoase; <br> g) mecanismul de directie prezinta deficiente
                            majore sau periculoase;
                            <br> h) anvelopele au alte dimensiuni sau caracteristici decat cele prevazute in cartea de identitate a vehiculului, prezinta taieturi sau rupturi ale cordului ori sunt uzate peste limita legal admisa;<br> h1) autovehiculul
                            nu este dotat, la circulatia pe drumurile publice acoperite cu zapada, gheata sau polei, cu anvelope de iarna, iar autovehiculul de transport marfa cu o masa totala maxima autorizata mai mare de 3,5 tone si autovehiculul de
                            transport persoane cu mai mult de 9 locuri pe scaune, inclusiv cel al conducatorului auto, nu sunt echipate cu anvelope de iarna pe rotile axei/axelor de tractiune ori nu au montate pe aceste roti lanturi sau alte echipamente
                            antiderapante certificate;<br> i) zgomotul in mers sau stationare depaseste limita legal admisa pentru tipul respectiv de vehicul;<br> j) motorul emite noxe poluante peste limitele legal admise;<br> k) elementele dispozitivului
                            de cuplare pentru remorcare prezinta uzuri pronuntate ori nu sunt compatibile, fiind de natura sa provoace desprinderea remorcii sau dezechilibrarea ansamblului;<br> l) autovehiculul, tractorul agricol sau forestier ori tramvaiul
                            are aplicate pe parbriz, luneta sau geamurile laterale afise sau reclame publicitare, folii neomologate si/sau nemarcate corespunzator ori accesorii care restrang sau estompeaza vizibilitatea in timpul mersului, atat din interior,
                            cat si din exterior;<br> m) autovehiculul si tractorul agricol sau forestier are aplicat pe partea frontala si/sau posterioara a acestuia afise, inscrisuri sau reclame care diminueaza eficacitatea dispozitivelor de iluminare
                            si semnalizare luminoasa ori citirea numarului de inmatriculare;<br> n) autovehiculul si tractorul agricol sau forestier prezinta scurgeri semnificative de carburant sau lubrifiant;<br> o) placutele cu numarul de inmatriculare
                            sau de inregistrare nu sunt conforme cu standardul ori au aplicate dispozitive de iluminare, altele decat cele omologate;<br> p) datele din certificatul de inmatriculare sau de inregistrare nu concorda cu caracteristicile tehnice
                            ale vehiculului;
                            <br> r) vehiculul nu a fost radiat din circulatie in cazurile prevazute in prezenta ordonanta de urgenta;<br> s) vehiculul nu este asigurat de raspundere civila in caz de pagube produse tertilor prin accidente de circulatie,
                            conform legii;
                            <br> t) detinatorul vehiculului nu a preschimbat certificatul de inmatriculare sau de inregistrare, in conformitate cu prevederile legale;<br> u) vehiculul nu are montata una dintre placutele cu numarul de inmatriculare sau
                            de inregistrare;
                            <br> v) vehiculul are lipsa elemente ale caroseriei ori aceasta este intr-o stare avansata de degradare;<br> x) lipsa dotarilor obligatorii pe autovehicule destinate invatarii conducerii autovehiculelor si tractoarelor agricole
                            sau forestiere in procesul instruirii persoanelor in vederea obtinerii permisului de conducere, prevazute de reglementarile in vigoare.<br> y) inmatricularea vehiculului este suspendata, in conditiile legii.<br> (2) In situatiile
                            prevazute la alin. (1) lit. b) , c) , e) , g) , h1) , k) , o) , p) , r) , s) si y) , la retinerea certificatului de inmatriculare sau de inregistrare, politistul rutier elibereaza conducatorului de vehicul o dovada inlocuitoare
                            fara drept de circulatie, iar in cazurile prevazute la alin. (1) lit. a) , d) , f) , h) , i) , j) , l) , m) , n) , t) , u) , v) si x) , o dovada inlocuitoare cu drept de circulatie pentru 15 zile. <br> (3) In situatiile prevazute
                            la alin. (1) lit. b) , o) , p) , r) , s) si y) , odata cu retinerea certificatului de inmatriculare politistul rutier retrage si placutele cu numarul de inmatriculare sau de inregistrare.<br> (4) Certificatul de inmatriculare
                            sau de inregistrare si placutele cu numarul de inmatriculare sau de inregistrare, cu exceptia celor care nu corespund standardelor, se restituie proprietarului sau utilizatorului vehiculului de catre politia rutiera, la prezentarea
                            de catre acesta a dovezii incetarii motivului pentru care documentul a fost retinut, in conditiile prevazute in regulament, precum si la incetarea suspendarii inmatricularii vehiculului. (la data 20-mai-2018 Art. 112, alin.
                            (4) din capitolul VII modificat de Art. I, punctul 18. din Ordonanta 14/2017 ) <br> (5) In cazul in care certificatul de inmatriculare sau de inregistrare a fost retinut ca urmare a savarsirii unei contraventii privind conducerea
                            pe drumurile publice a unui vehicul cu deficiente majore sau periculoase, acesta se restituie proprietarului sau utilizatorului de catre politia rutiera la prezentarea dovezii eliberate de catre Registrul Auto Roman din care
                            rezulta ca deficienta a fost remediata.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 113</button>
                    <div class="content">
                        <p>
                            (1) Permisul de conducere se restituie titularului: <br> a) la expirarea perioadei de suspendare;<br> b) [Articolul 113, alin. (1) , litera B. din capitolul VII a fost abrogat la 29-iun-2007 de Art. I, punctul 54. din Ordonanta
                            urgenta 69/2007]<br> c) la incetarea masurii de siguranta prevazute la art. 108 lit. c) din Codul penal;<br> d) [Articolul 113, alin. (1) , litera D. din capitolul VII a fost abrogat la 29-iun-2007 de Art. I, punctul 54. din
                            Ordonanta urgenta 69/2007] <br> e) in baza hotararii judecatoresti ramase definitive prin care s-a dispus achitarea inculpatului ori procesul-verbal de constatare a contraventiei a fost anulat;<br> f) la incetarea cauzelor
                            pentru care a fost retras permisul de conducere in conditiile art. 97 alin. (4) , certificata printr-un act medico-legal. (11) Titularul permisului de conducere eliberat de o autoritate straina, impotriva caruia s-a dispus
                            suspendarea dreptului de a conduce, poate solicita sefului politiei rutiere pe raza careia a fost constatata fapta, restituirea documentului, inainte de expirarea perioadei de suspendare, cu cel mult o zi lucratoare inainte
                            de data parasirii teritoriului Romaniei. (12) In situatia restituirii permisului de conducere potrivit alin. (11) , Inspectoratul General al Politiei Romane comunica sanctiunea aplicata autoritatii straine care a eliberat documentul.
                            <br> (2) Permisul de conducere se restituie de catre politia rutiera in conditiile stabilite in regulament.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 114</button>
                    <div class="content">
                        <p>
                            (1) Anularea permisului de conducere se dispune in urmatoarele cazuri:<br> a) titularul permisului de conducere a fost condamnat printr-o hotarare judecatoreasca ramasa definitiva pentru o infractiune care a avut ca rezultat
                            uciderea sau vatamarea corporala a unei persoane, savarsita ca urmare a nerespectarii regulilor de circulatie;<br> b) titularul permisului de conducere a fost condamnat, printr-o hotarare judecatoreasca ramasa definitiva, pentru
                            infractiunile prevazute la art. 334 alin. (2) si (4) , art. 335 alin. (2) , art. 336, 337, art. 338 alin. (1) , art. 339 alin. (2) , (3) si (4) din Codul penal;<br> c) [Articolul 114, alin. (1) , litera C. din capitolul VII
                            a fost abrogat la 01-dec-2006 de Art. I, punctul 32. din Ordonanta urgenta 63/2006]<br> d) titularului permisului de conducere i s-a aplicat, printr-o hotarare judecatoreasca ramasa definitiva, pedeapsa complementara a interzicerii
                            dreptului de a conduce anumite categorii de vehicule stabilite de instanta prevazuta la art. 66 alin. (1) lit. i) din Codul penal.<br> e) permisul de conducere a fost obtinut cu incalcarea normelor legale, situatie constatata
                            de instanta competenta.<br> f) permisul de conducere a fost obtinut in perioada in care titularul era cercetat sau judecat in cadrul unui proces penal pentru savarsirea unei infractiuni la regimul circulatiei pe drumurile publice,
                            atunci cand acesta a fost condamnat printr-o hotarare judecatoreasca ramasa definitiva. <br> (2) Permisul de conducere se anuleaza si in cazul in care titularul acestuia a decedat. <br> (3) Procedura anularii permisului de
                            conducere se stabileste prin regulament.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 115</button>
                    <div class="content">
                        <p>
                            (1) Suspendarea exercitarii dreptului de a conduce sau anularea permisului de conducere se dispune de catre politia rutiera din cadrul Inspectoratului General al Politiei Romane si in cazul in care impotriva titularului acestuia s-a hotarat o astfel de
                            masura de catre o autoritate straina competenta pentru o fapta savarsita pe teritoriul altui stat, in conditiile stabilite prin Conventia europeana cu privire la efectele internationale ale interzicerii exercitarii dreptului
                            de a conduce un vehicul cu motor, adoptata la Bruxelles la 3 iunie 1976, ratificata de Romania prin Legea nr. 126/1997.<br> (2) Hotararea asupra suspendarii exercitarii dreptului de a conduce un
                            vehicul sau anularii permisului de conducere se comunica titularului de catre politia rutiera care a dispus masura.


                        </p>
                    </div>
                    <button class="collapsible">Articolul 116</button>
                    <div class="content">
                        <p>
                            (1) Persoana al carei permis de conducere a fost anulat ca urmare a ramanerii definitive a unei hotarari judecatoresti de condamnare pentru una dintre faptele prevazute la art. 114 alin. (1) si la art. 115 alin. (1) se poate prezenta la examen pentru
                            obtinerea unui nou permis de conducere, pentru toate categoriile avute anterior, dupa caz, daca a intervenit una dintre situatiile urmatoare:<br> a) au trecut 6 luni de la data executarii pedepsei
                            amenzii sau a pedepsei in regim de privare de libertate ori la locul de munca;<br> b) a trecut un an de la data gratierii pedepsei sau a ramanerii definitive a hotararii judecatoresti prin care s-a dispus suspendarea executarii
                            pedepsei sub supraveghere;<br> c) a intervenit amnistia;<br> d) interzicerea dreptului de a conduce anumite categorii de vehicule stabilite de instanta prevazuta la art. 66 alin. (1) lit. i) din Codul penal, a expirat sau a
                            fost revocata.<br> (2) Persoana careia i-a fost anulat permisul de conducere, inainte de intrarea in vigoare a prezentei ordonante de urgenta, ca urmare a savarsirii, intr-un interval de 6 luni de la restituirea permisului
                            de conducere, a unei fapte care atragea suspendarea exercitarii dreptului de a conduce, se poate prezenta la examen in vederea obtinerii unui nou permis de conducere, fara a fi necesara trecerea vreunui termen de la data aplicarii
                            masurii administrative. (21) Persoana careia i-a fost anulat permisul de conducere, ca urmare a condamnarii pentru o infractiune care a fost dezincriminata, in conditiile art. 4 din Codul penal, se poate prezenta la autoritatea
                            competenta pe raza careia isi are domiciliul sau resedinta, pentru eliberarea unui nou permis de conducere, in conditiile ordinului ministrului afacerilor interne prevazut la art. 24 alin. (53) , fara a mai sustine examen si
                            cu prezentarea documentului care atesta o astfel de situatie. (22) In situatia in care anularea permisului de conducere nu a fost dispusa pana la depunerea cererii de restituire de catre titularul permisului de conducere, condamnat
                            definitiv pentru o infractiune care a fost dezincriminata, in conditiile art. 4 din Codul penal, seful serviciului rutier competent dispune restituirea acestuia, in baza documentului care atesta o astfel de situatie.<br> (3)
                            Pentru prezentarea la examen in vederea obtinerii unui nou permis de conducere, persoana aflata in una dintre situatiile prevazute la alin. (1) si (2) trebuie sa faca dovada ca:<br> a) este apta din punct de vedere medical;<br>                            b) nu a fost condamnata prin hotarare judecatoreasca ramasa definitiva pentru una dintre infractiunile prevazute la art. 24 alin. (6) , cu exceptia cazurilor in care a intervenit una dintre situatiile prevazute la alin. (1)
                            .
                        </p>
                    </div>
                    <button class="collapsible">Articolul 117</button>
                    <div class="content">
                        <p>
                            (1) Imobilizarea unui vehicul se dispune de catre politistul rutier in cazul savarsirii de catre conducatorul acestuia a uneia dintre urmatoarele fapte:<br> a) conducerea unui vehicul neinmatriculat sau neinregistrat ori cu
                            numar de inmatriculare sau de inregistrare fals ori fara a avea montate placutele cu numarul de inmatriculare sau de inregistrare;<br> b) conducerea unui vehicul care deterioreaza drumul public sau afecteaza mediul ori care
                            prezinta deficiente periculoase la sistemul de franare sau la mecanismul de directie; <br> c) conducerea unui vehicul cu incalcarea regulilor referitoare la transportul marfurilor periculoase ori cu gabarite si/sau mase depasite;<br>                            d) conducerea unui vehicul despre care exista date sau indicii ca face obiectul unei fapte de natura penala;<br> e) refuza sa se legitimeze;<br> f) se afla sub influenta bauturilor alcoolice, a produselor sau substantelor stupefiante
                            ori a medicamentelor cu efecte similare acestora, iar conducerea vehiculului nu poate fi asigurata de o alta persoana;<br> g) nu respecta timpii de conducere si de odihna prevazuti de lege. <br> (2) Imobilizarea unui vehicul
                            se dispune si in cazul in care conducatorul acestuia ori unul dintre pasageri savarseste o fapta de natura penala sau este urmarit pentru savarsirea unei infractiuni.<br> (3) Pentru oprirea fortata sau imobilizarea in cazurile
                            prevazute la alin. (1) si (2) , politia rutiera poate utiliza dispozitive speciale omologate.<br> (4) Procedura de imobilizare a vehiculelor in cazurile prevazute la alin. (1) si (2) se stabileste prin regulament.


                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">CAPITOLUL VIII: Cai de atac impotriva procesului-verbal de constatare a contraventiei
						</button>
            <div class="content">
                <div class="articol">
                    <button class="collapsible">Articolul 118</button>
                    <div class="content">
                        <p>
                            (1) Impotriva procesului-verbal de constatare a contraventiilor se poate depune plangere, in termen de 15 zile de la comunicare, la judecatoria in a carei raza de competenta a fost constatata fapta. *) O. G. 2/2001 privind regimul juridic al contraventiilor
                            modificat de Legea 76/2012 arata ca: "Plangerea se depune la judecatoria in a carei circumscriptie a fost savarsita contraventia. " <br> (2) Plangerea suspenda executarea amenzilor si a sanctiunilor
                            contraventionale complementare de la data inregistrarii acesteia pana la data pronuntarii hotararii judecatoresti. <br> (3) Dovada inregistrarii plangerii depuse la judecatorie in termenul prevazut la alin. (1) se prezinta
                            de contravenient la unitatea de politie din care face parte agentul constatator, care va efectua mentiunile in evidente si ii va restitui permisul de conducere. (31) [Articolul 118, alin. (3^1) din capitolul VIII a fost abrogat
                            la 01-sep-2012 de Actul din Decizia 500/2012]
                            <br> (4) In termen de 15 zile de la data pronuntarii hotararii judecatoresti prin care instanta a respins plangerea impotriva procesului-verbal de constatare a contraventiei, contravenientul este obligat sa se prezinte la serviciul
                            politiei rutiere care il are in evidenta pentru a preda permisul de conducere.<br> (5) Neprezentarea contravenientului in termenul prevazut la alin. (4) , in mod nejustificat, atrage majorarea cu 30 de zile a duratei de suspendare
                            a exercitarii dreptului de a conduce.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 119</button>
                    <div class="content">
                        <p>
                            In cazul in care fapta unui conducator de autovehicul, tractor agricol sau forestier ori tramvai a avut ca urmare producerea unui accident de circulatie, instanta de judecata investita cu solutionarea cauzei va cita unitatea de politie din care face parte
                            agentul constatator, partile implicate in eveniment si societatea de asigurare.
                        </p>
                    </div>

                    <button class="collapsible">Articolul 120</button>
                    <div class="content">
                        <p>
                            (1) Procesul-verbal neatacat in termen de 15 zile de la data comunicarii acestuia, precum si, dupa caz, hotararea judecatoreasca prin care s-a solutionat plangerea constituie titluri executorii, fara vreo alta formalitate.<br>                            (2) [Articolul 120, alin. (2) din capitolul VIII a fost abrogat la 24-aug-2018 de Art. 19, punctul 3. din capitolul V din Legea 203/2018]<br> (3) [Articolul 120, alin. (3) din capitolul VIII a fost abrogat la 24-aug-2018 de
                            Art. 19, punctul 3. din capitolul V din Legea 203/2018]

                        </p>
                    </div>
                    <button class="collapsible">Articolul 121</button>
                    <div class="content">
                        <p>
                            (1) [Articolul 121, alin. (1) din capitolul VIII a fost abrogat la 29-iun-2007 de Art. I, punctul 59. din Ordonanta urgenta 69/2007]<br> (2) Executarea sanctiunii contraventionale complementare se prescrie in acelasi termen
                            in care se prescrie sanctiunea contraventionala principala.


                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">CAPITOLUL IX: Atributii ale unor ministere si ale altor autoritati ale administratiei publice
						</button>
            <div class="content">
                <div class="articol">
                    <button class="collapsible">Articolul 122</button>
                    <div class="content">
                        <p>
                            Ministerul Transporturilor, Constructiilor si Turismului are urmatoarele atributii:<br> a) ia masuri pentru mentinerea permanenta in stare tehnica buna a drumurilor pe care le administreaza;<br> b) ia masuri pentru instalarea,
                            aplicarea si intretinerea mijloacelor de semnalizare rutiera, precum si a echipamentelor destinate sigurantei circulatiei pe drumurile din administrarea sa, cu respectarea standardelor in vigoare;<br> c) autorizeaza efectuarea
                            lucrarilor in zonele de siguranta si protectie a drumurilor din administrarea sa, verifica modul de executare si respectarea termenelor stabilite; <br> d) stabileste conditiile tehnice si metodologia de omologare si certificare
                            a echipamentelor, pieselor de schimb si materialelor de exploatare pentru vehicule;<br> e) autorizeaza infiintarea si functionarea statiilor de inspectie tehnica periodica, supravegheaza si controleaza activitatea acestora
                            si atesta personalul care efectueaza inspectia tehnica periodica;
                            <br> f) stabileste norme metodologice si organizeaza pregatirea, examinarea si atestarea profesionala a instructorilor si profesorilor de legislatie in domeniul pregatirii candidatilor pentru obtinerea permisului de conducere,
                            in conditiile legii; <br> g) stabileste conditiile tehnice si metodologice de omologare pentru circulatia pe drumurile publice a vehiculelor, de inspectie tehnica periodica, de certificare a autenticitatii, de identificare,
                            precum si de verificare tehnica in trafic a vehiculelor;<br> h) autorizeaza infiintarea si functionarea scolilor pentru pregatirea conducatorilor de autovehicule si tractoare agricole sau forestiere si tramvaie;<br> i) stabileste
                            norme obligatorii privind organizarea si desfasurarea transporturilor rutiere si controleaza respectarea acestora;<br> j) elaboreaza reglementari specifice in domeniul transporturilor rutiere; <br> k) omologheaza vehicule pentru
                            circulatie;
                            <br> l) certifica si/sau omologheaza echipamentele, piesele de schimb si materialele de exploatare pentru vehiculele fabricate in tara sau importate;<br> m) autorizeaza agentii economici care desfasoara activitati de reparatii,
                            de reglari, de modificari constructive, de reconstructie a vehiculelor, precum si de dezmembrare a acestora; <br> n) asigura efectuarea certificarii autenticitatii sau a identificarii vehiculelor rutiere, in vederea inmatricularii
                            acestora;
                            <br> o) asigura eliberarea cartii de identitate a vehiculelor rutiere; <br> p) stabileste normele metodologice si organizeaza pregatirea si examinarea conducatorilor auto, in vederea obtinerii certificatelor de atestare profesionala.
                            <br> q) elaboreaza, in conditiile legii, norme privind evaluarea capacitatilor psihologice solicitate in activitatea de conducere a autovehiculelor, tractoarelor agricole sau forestiere ori tramvaielor.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 123</button>
                    <div class="content">
                        <p>
                            Ministerul Apararii are urmatoarele atributii:<br> a) indruma, supravegheaza si controleaza circulatia pe drumurile publice a vehiculelor apartinand acestui minister si controleaza respectarea de catre conducatorii de vehicule
                            din subordine a regulilor de circulatie;
                            <br> b) coopereaza cu politia rutiera pentru realizarea actiunilor de insotire a coloanelor oficiale militare, precum si a vehiculelor din parcul propriu;<br> c) inregistreaza vehiculele din parcul propriu si tine evidenta
                            acestora;
                            <br> d) pregateste personalul din subordine pentru conducerea vehiculelor ministerului si autorizeaza personalul didactic din scolile de pregatire a conducatorilor auto din sistemul propriu, in vederea obtinerii permisului
                            de conducere; <br> e) organizeaza si executa inspectia tehnica periodica a vehiculelor din unitatile aflate in subordinea sa; <br> f) elaboreaza, impreuna cu Ministerul Administratiei si Internelor, norme privind conditiile
                            in care pot circula pe drumul public vehiculele speciale de lupta din parcul propriu; <br> g) elaboreaza, impreuna cu Ministerul Administratiei si Internelor, norme privind controlul circulatiei autovehiculelor apartinand Ministerului
                            Apararii si insotirea coloanelor militare.


                        </p>
                    </div>
                    <button class="collapsible">Articolul 124</button>
                    <div class="content">
                        <p>
                            Ministerul Educatiei si Cercetarii are urmatoarele atributii:<br> a) asigura, prin programa scolara, educatia rutiera a prescolarilor si elevilor din invatamantul preuniversitar;<br> b) asigura, in unitatile de invatamant specializate,
                            pregatirea cursantilor in vederea obtinerii permisului de conducere;<br> c) indruma, coordoneaza si controleaza, prin inspectoratele scolare, activitatea de educatie rutiera in unitatile de invatamant, inclusiv de pregatire
                            si de perfectionare a cadrelor didactice desemnate sa execute astfel de activitati;<br> d) asigura materialul didactic pentru laboratoarele de educatie rutiera si parcurile-scoala proprii de circulatie.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 125</button>
                    <div class="content">
                        <p>
                            Ministerul Sanatatii Publice are urmatoarele atributii:<br> a) elaboreaza norme referitoare la examinarea medicala a candidatilor la examenul pentru obtinerea permisului de conducere si a conducatorilor de vehicule;<br> b)
                            stabileste masurile ce trebuie luate de unitatile sanitare, in scopul prevenirii accidentelor de circulatie generate de cauze medicale;<br> c) elaboreaza norme privind examinarea medicala a conducatorilor de autovehicule, tractoare
                            agricole sau forestiere si tramvaie , precum si norme privind prelevarea probelor biologice in vederea stabilirii intoxicatiei etilice si a starii de influenta a produselor si substantelor stupefiante sau a medicamentelor cu
                            efecte similare acestora asupra comportamentului conducatorilor de autovehicule, tractoare agricole sau forestiere si tramvaie; <br> d) stabileste semnul distinctiv ce se aplica pe ambalajul medicamentelor contraindicate conducerii
                            vehiculelor; <br> e) stabileste si certifica continutul truselor medicale de prim ajutor.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 126</button>
                    <div class="content">
                        <p>
                            Comisia pentru Supraveghere a Asigurarilor impreuna cu politia rutiera intocmesc programe de preventie rutiera si indruma, coordoneaza si controleaza modul de aplicare a acestora. Fondurile necesare desfasurarii acestor programe se asigura de catre Comisia
                            de Supraveghere a Asigurarilor impreuna cu societatile de asigurare autorizate.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 127</button>
                    <div class="content">
                        <p>
                            (1) In scopul coordonarii unei strategii unitare, multidisciplinare in domeniul sigurantei circulatiei rutiere, in subordinea Guvernului functioneaza Consiliul Interministerial pentru Siguranta Rutiera**) .<br> (2) Atributiile
                            Consiliului Interministerial pentru Siguranta Rutiera se stabilesc prin hotarare a Guvernului.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 128</button>
                    <div class="content">
                        <p>
                            (1) Autoritatile administratiei publice locale au urmatoarele atributii:<br> a) iau masuri pentru mentinerea permanenta in stare tehnica buna a drumurilor pe care le administreaza, precum si pentru iluminarea corespunzatoare
                            a acestora, conform legii;<br> b) iau masuri pentru instalarea, aplicarea si intretinerea mijloacelor de semnalizare rutiera si a echipamentelor destinate sigurantei circulatiei, conform standardelor in vigoare, tinand evidenta
                            acestora;
                            <br> c) intocmesc si actualizeaza planurile de organizare a circulatiei pentru localitatile urbane si iau masuri pentru realizarea lucrarilor ce se impun in vederea asigurarii fluentei si sigurantei traficului, precum si a
                            reducerii nivelurilor de emisii poluante, cu avizul politiei rutiere;<br> d) stabilesc reglementari referitoare la regimul de acces si circulatie, stationare si parcare pentru diferite categorii de vehicule, cu avizul politiei
                            rutiere;
                            <br> e) iau masuri pentru amenajarea de trotuare si drumuri laterale pentru circulatia pietonilor, vehiculelor cu tractiune animala, a tractoarelor, de piste pentru biciclete, precum si de benzi destinate exclusiv transportului
                            public de persoane pe drumurile pe care le administreaza, cu avizul politiei rutiere;<br> f) inregistreaza si tin evidenta vehiculelor nesupuse inmatricularii;<br> g) iau masuri pentru ridicarea si depozitarea, in spatii special
                            amenajate, a autovehiculelor, remorcilor, caroseriilor sau subansamblurilor acestora, devenite improprii din punct de vedere tehnic pentru a circula pe drumurile publice, abandonate sau parasite pe domeniul public;
                            <br> h) iau masuri pentru asigurarea spatiului si depozitarii vehiculelor cu tractiune animala, depistate circuland pe drumurile publice pe care le este interzis accesul;<br> i) sprijina activitatile organizate de Ministerul
                            Educatiei si Cercetarii si de Ministerul Administratiei si Internelor pentru educatia rutiera a elevilor.<br> (2) Proiectele de sistematizare a localitatilor, de reglementare a circulatiei, precum si a drumurilor publice din
                            interiorul si din afara acestora, elaborate de autoritatile publice locale, vor fi avizate de seful politiei rutiere a judetului, municipiului Bucuresti sau, dupa caz, al politiei rutiere din Inspectoratul General al Politiei
                            Romane.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 129</button>
                    <div class="content">
                        <p>
                            (1) Ministerul Administratiei si Internelor si autoritatile administratiei publice locale iau masuri pentru popularizarea regulilor de circulatie in randul tuturor persoanelor care folosesc drumurile publice si in acest scop vor prevedea in planurile
                            anuale fondurile necesare.<br> (2) In unitatile de invatamant prescolar, primar si gimnazial obligatoriu se desfasoara cel putin o ora de educatie rutiera pe saptamana, pe parcursul anului scolar.
                            <br> (3) Mass-media poate sprijini actiunile Ministerului Administratiei si Internelor si ale autoritatilor administratiei publice locale in legatura cu popularizarea regulilor de circulatie pe drumurile publice. <br> (4) Politia
                            rutiera din cadrul Inspectoratului General al Politiei Romane se va implica in realizarea programelor de siguranta rutiera, stabilite de Comisia Economica pentru Europa a Organizatiei Natiunilor Unite.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 130</button>
                    <div class="content">
                        <p>
                            Orele de educatie rutiera din institutiile de invatamant prescolar, primar si gimnazial se desfasoara potrivit programei aprobate prin ordin comun al ministrului educatiei si cercetarii si al ministrului administratiei si internelor, care se publica in
                            Monitorul Oficial al Romaniei, Partea I.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">CAPITOLUL X: Dispozitii finale</button>
            <div class="content">
                <div class="articol">
                    <button class="collapsible">Articolul 131</button>
                    <div class="content">
                        <p>
                            In desfasurarea activitatilor de prevenire a accidentelor rutiere, politia rutiera poate solicita sprijinul unor asociatii profesionale si al unor conducatori de autovehicule si tractoare agricole sau forestiere , care consimt sa participe voluntar la
                            acestea, conform legii.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 132</button>
                    <div class="content">
                        <p>
                            Anual se stabilesc fonduri din bugetul Ministerului Administratiei si Internelor, destinate campaniilor si activitatilor de educatie rutiera.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 133</button>
                    <div class="content">
                        <p>
                            (1) Modelele indicatoarelor, marcajelor si semnalelor luminoase, precum si semnalele politistilor rutieri sunt prevazute in anexa nr. 2. <br> (2) Anexa prevazuta la alin. (1) poate fi modificata si completata prin hotarare
                            a Guvernului, pe baza modificarilor si completarilor aduse conventiilor si acordurilor internationale in domeniu, la care Romania este parte.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 133'</button>
                    <div class="content">
                        <p>
                            Substantele sau produsele stupefiante prevazute in prezenta ordonanta de urgenta, precum si medicamentele cu efecte similare acestora se stabilesc si se actualizeaza periodic, prin lege, la propunerea Ministerului Sanatatii.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 134</button>
                    <div class="content">
                        <p>
                            (1) Prezenta ordonanta de urgenta se aplica incepand cu data de 1 februarie 2003. Pe aceeasi data se abroga Decretul nr. 328/1966 privind circulatia pe drumurile publice, cu modificarile ulterioare, republicat in Buletinul Oficial, Partea I, nr. 49 din
                            28 iunie 1984, precum si orice alte dispozitii contrare prezentei ordonante de urgenta. <br> (2) In termen de 30 de zile de la data publicarii Ministerul Administratiei si Internelor va elabora regulamentul
                            de aplicare a prezentei ordonante de urgenta, care se aproba prin hotarare a Guvernului.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 135</button>
                    <div class="content">
                        <p>
                            In termen de 90 de zile de la publicarea in Monitorul Oficial al Romaniei, Partea I, a legii de aprobare a prezentei ordonante de urgenta***) , la propunerea Ministerului Administratiei si Internelor, Guvernul va emite hotararea de modificare si completare
                            a Hotararii Guvernului nr. 85/2003 pentru aprobarea Regulamentului de aplicare a Ordonantei de urgenta a Guvernului nr. 195/2002 privind circulatia pe drumurile publice, denumit regulament in cuprinsul prezentei ordonante de
                            urgenta, care se va publica in Monitorul Oficial al Romaniei, Partea I.
                        </p>
                    </div>
                    <button class="collapsible">Articolul 136</button>
                    <div class="content">
                        <p>
                            In termen de 90 de zile de la publicarea in Monitorul Oficial al Romaniei, Partea I, a legii de aprobare a prezentei ordonante de urgenta, ministerele cu atributii in domeniul circulatiei pe drumurile publice vor elabora, vor aproba si vor publica in
                            Monitorul Oficial al Romaniei, Partea I, normele de aplicare a prevederilor prezentei ordonante de urgenta, dupa cum urmeaza:<br> a) Ministerul Administratiei si Internelor, pentru prevederile art.
                            15 alin. (4) , art. 23 alin. (10) , art. 24 alin. (2) si ale art. 83 alin. (4) ;<br> b) Ministerul Transporturilor, Constructiilor si Turismului, pentru prevederile art. 23 alin. (33) si (35) si ale art. 66 alin. (3) ;<br>                            c) Ministerul Transporturilor, Constructiilor si Turismului si Ministerul Administratiei si Internelor, pentru prevederile art. 9 alin. (2) si ale art. 14 alin. (2) ;<br> d) Ministerul Sanatatii, pentru prevederile art. 22
                            alin. (2) , (5) si (7) si ale art. 125 litera a) ;
                            <br> e) [Articolul 136, litera E. din capitolul X a fost abrogat la 01-dec-2006 de Art. I, punctul 37. din Ordonanta urgenta 63/2006] <br> f) Ministerul Transporturilor, Constructiilor si Turismului, Ministerul Educatiei si
                            Cercetarii si Ministerul Administratiei si Internelor, pentru prevederile art. 23 alin. (5) si (8) ;<br> g) Ministerul Apararii si Ministerul Administratiei si Internelor, pentru prevederile art. 123 lit. f) si g) ; <br> h)
                            Ministerul Educatiei si Cercetarii si Ministerul Administratiei si Internelor, pentru prevederile art. 130.

                        </p>
                    </div>
                    <button class="collapsible">Articolul 137</button>
                    <div class="content">
                        <p>
                            - Anexele nr. 1 si 2 fac parte integranta din prezenta ordonanta de urgenta.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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