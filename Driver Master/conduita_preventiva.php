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
            <button class="collapsible">Capitolul I -Introducere in conduita preventiva si factorii principali</button>
            <div class="content">
                <p><strong>Reprezinta comportamentul participantului la trafic ce are drept scop evitarea producerii accidentelor rutiere prin adaptarea modului de deplasare in conditii atmosferice nefavorabile, de drum, de vizibilitate si de intensitatea fluxului de vehicule. Dar si limitarea consecintelor accidentelor daca acestea sunt iminente.</strong></p>

                <p><strong>Inaintea pornirii la drum in baza conduitei preventive conducatorul auto trebuie sa tina cont de urmatoarele elemente:</strong></p>

                <ul>
                    <li>odihna: un lucru foarte important, mai ales atunci cand trebuie parcurs un drum lung sau pe timp de noapte;</li>
                    <li>sa se informeze asupra conditiilor meteorologice si sa fie pregatit pentru orice fel de conditii atmosferice ce ar putea fi intalnite: ploaie, ninsoare, inghet;</li>
                    <li>sa conceapa un traseu de baza dar si unul de rezerva;</li>
                    <li>starea fizica si psihica sa fie buna.</li>
                </ul>

                <p><strong>In vederea eliminarii accidentelor de circulatie, conduita preventiva este caracterizata prin:</strong></p>

                <ul>
                    <li>anticiparea situatiilor ce pot genera eventuale pericole atat pentru tine cat si pentru ceilalti participanti la trafic;</li>
                    <li>evitarea accidentelor pe cale de a se produce;</li>
                    <li>alegerea celei mai bune variante pentru a iesi dintr-un accident ce nu a putut fi evitat cu consecinte minime;</li>
                    <li>adaptarea modului de delpasare la conditiile de drum, trafic, vizibilitate si conditii meteo.</li>
                </ul>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">Capitolul II - Starea fizica si psihica a conducatorului auto</button>
            <div class="content">
                <h3>Starea fizica si psihica a conducatorului auto</h3>
                <p><strong>Principalii factori care infuenteaza starea fizica si psihica a conducatorului auto sunt:</strong></p>
                <div class="articol">
                    <button class="collapsible"> <strong>Oboseala</strong> </button>

                    <div class="content">
                        <p><strong>Reprezinta slabirea capacitatilor de munca, cauzata de un efort fizic sau intelectual prelungit.</strong></p>

                        <p>Efectele oboselii:</p>
                        <li>reduce capacitatea de a prevedea si de a analiza situatiile din trafic;</li>
                        <li>dificultati de concentrare, neatentie;</li>
                        <li>aprecierea gresita a vitezei si a distantelor;</li>
                        <li>cresterea timpului de reactie;</li>
                        <li>observarea intarziata a semnalelor si a indicatoarelor din trafic;</li>
                        <li>adormirea sau atipirea la volan, cauza multor accidente grave de circulatie.</li>
                        </ul>
                        <p><strong>Din punct de vedere al producerii oboselii aceasta poate fi:</strong></p>

                        <ul>
                            <li><strong>oboseala acumulata inaintea plecarii la drum</strong></li>
                        </ul>
                        <ul>
                            <li>odihna insuficienta;</li>
                            <li>starea sanatatii;</li>
                            <li>efortul, atat fizic cat si intelectual.</li>
                            <li><strong>oboseala acumulata in timpul conducerii</strong></li>
                        </ul>
                        <ul>
                            <li>conducerea autovehiculului un timp indelungat. Se recomanda ca la fiecare 2 ore de condus sa se faca pauza minim 15 minute;</li>
                            <li>numarul mare de manevre (opriri, porniri, schimbarea vitezelor, intoarceri etc);</li>
                            <li>vizibilitatea redusa. Datorata intunericului sau a conditilor meteo nefavorabile (ceata, ploaie torentiala, ninsoare abundenta);</li>
                            <li>conducera cu viteze mari. Datorita vitezei mari de deplasare campul vizual se va micsora.</li>
                        </ul>
                    </div>
                    <button class="collapsible"><strong>Alcoolul</strong></button>
                    <div class="content">
                        <p>Alcoolul consumat sub orice forma, ajunge in sange si produce modificari ale starii fizice si psihice.</p>

                        <p>Alcoolemia reprezinta cantitatea de alcool etilic, exprimata in grame, aflata intr-un litru de sange. De exemplu o alcoolemie de 1%, inseamna ca intr-un litru de sange se afla 1 gram de alcool etilic.
                        </p>

                        <p>Alcoolemia se poate masura in aerul expirat sau prin probe de sange.</p>

                        <p>Stabilirea prezenţei alcoolului in aerul expirat sau testarea preliminara a prezenţei in organism a substanţelor ori produselor stupefiante sau a medicamentelor cu efecte similare acestora se face de catre poliţia rutiera, cu ajutorul
                            unor mijloace tehnice certificate.</p>

                        <p>Recoltarea probelor biologice se face in instituţii medicale autorizate sau in instituţii medico-legale şi se efectueaza numai in prezenţa unui reprezentant al poliţiei rutiere.</p>

                        <p>in Romania, Codul Rutier prevede o limita de 0,8 mg/l alcool pur in sange dincolo de care apare raspunderea penala.</p>

                        <p>Pentru a conduce in siguranta ai nevoie de o vedere buna, de o judecata corecta si de timpi rapizi de reactie. Alcoolul distorsioneaza toate cele 3 simturi mentionate, prin urmare, abilitatea de a conduce un autovehicul in siguranta
                            este diminuata indiferent de cantitatea de alcool consumata.</p>

                    </div>
                    <button class="collapsible"><strong>Medicamentele</strong></button>
                    <div class="content">
                        <p>Medicamentele reprezinta una din cauzele care duc la producerea unor modificari comportamentale actionand negativ asupra starii fzice si psihice, diminuand astfel capacitatea de a conduce autovehicule.</p>

                        <p>Principalele grupe de medicamente contraindicate conducatorilor auto sunt:</p>

                        <ul>
                            <li>tranchilizantele: acele medicamente care produc somnolenta, reduc capacitatea de concentrare si diminueaza randamentul fizic si psihic;</li>
                            <li>antidepresivele: acele medicamente care produc uneori stari de irascibilitate, diminueaza capacitatea de efort si a starii de concentrare;</li>
                            <li>sedativele: acele medicamente care produc somnolenta si reduc coordonarea muschilor datorita slabiciunii aparute la nivelul acestora;</li>
                            <li>analgezicile: acele medicamente care se manifesta prin agitatia psihomotorie sau prin stari de euforie.</li>
                        </ul>
                    </div>
                    <button class="collapsible"><strong>Drogurile</strong></button>
                    <div class="content">
                        <p>Drogurile sunt substante de origine vegetala, animala sau minerala care actioneaza prin grabirea, incetinirea sau modificarea proceselor unui anumit organ.</p>

                        <p>Termenul drog are mai multe acceptiuni. in sens larg desemneaza orice substanta (naturala sau artificiala) care prin natura sa chimica determina alterarea functionarii unui organ. in sens restrans se refera substante care provoaca
                            toleranta si dependenta.</p>

                        <p>in limbaj uzual, acest termen se refera la substante psihoactive, mai ales cele ilegale.</p>

                        <p>Cu alte cuvinte, drogul este o substanta solida, lichida sau gazoasa, a carei folosinta se transforma in obicei si care afecteaza direct creierul si sistemul nervos, schimba sentimentele, dispozitia si gandirea, perceptia si/sau
                            starea de constienta, modificand imaginea asupra realitatii inconjuratoare.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">Capitolul III - Siguranta conducatorilor auto, centura de siguranta, tetierele si airbag-ul</button>
            <div class="content">
                <div class="articol">
                    <button class="collapsible">Centura de siguranta</button>
                    <div class="content">
                        <p>Purtatul centurii de siguranta este obligatorie, insa foarte multi evita sa o foloseasca din comoditate sau invocand motive de genul: &ldquo;sunt un sofer bun, mie nu mi se poate intampla...&rdquo;.</p>

                        <p>Statisticile arata ca, in urma unui accident grav, majoritatea victimelor care nu au avut centura de siguranta, nu au supravietuit, iar celelalte nu au scapat fara traumatisme care sa le marcheze existenta.</p>

                        <p>Cei mai expusi leziunilor grave sunt ocupantii banchetei din spate, ei neputand fi protejati de airbaguri, deoarece majoritatea autovehiculelor nu dispun de sistem airbag si pentru ocupantii banchetei din spate.</p>
                        <p>Exista insa si situatii cand purtatul centurii de siguranta poate fi scutit:</p>
                        <ul>
                            <li>persoanele care detin un certificat medical in care sa fie menţionata afecţiunea care contraindica purtarea centurii de siguranţa;</li>
                            <li>femeile care prezinta o stare vizibila de graviditate;</li>
                            <li>examinatorul (aflat in timpul desfaşurarii probelor practice ale examenului);</li>
                            <li>instructorul auto (atuci cand se afla in dreapta, avand elevul la volan);</li>
                            <li>taximetristul (cat timp clientul se afla in maşina).</li>
                        </ul>

                    </div>
                    <button class="collapsible"><strong>Tetierele</strong></button>
                    <div class="content">
                        <p>Rolul principal al tetierelor este de a impiedica miscarile bruste ale capului, in cazul lovirii din spate a autovehiculului, prevenind astfel o posibila fracturare a coloanei cervicale.</p>
                    </div>
                    <button class="collapsible"><strong>Airbag-ul (perna de aer)</strong></button>
                    <div class="content">
                        <p>Scopul principal al unui airbag este de a diminua efectelor unui impact, ajutand la scaderea inertiei pe care o are corpul uman atunci cand masina se loveste.</p>

                        <p>insa airbag-ul nu protejeaza pasagerul de diverse indoituri ale caroseriei, ci foloseste doar la atenuarea socului pe care il poate avea corpul.</p>

                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="capitol">
                <button class="collapsible">Capitolul V - Conditiile de drum nefavorabile, aderenta, derapajul si acvaplanarea</button>
                <div class="content">
                    <div class="articol">
                        <button class="collapsible"><strong>Aderenta</strong></button>
                        <div class="content">
                            <p>Reprezinta fenomenul care se produce intre rotile unui vehicul si calea de rulare, realizandu-se astfel miscarea vehiculului.</p>

                            <p>Aderenta masinii depinde de o serie de factori asupra carora avem mai mult sau mai putin control. De exemplu: starea anvelopelor, rapiditatea manevrarii directiei, viteza de deplasare, etc.</p>
                            <p><strong>Alti factori nu depind insa de noi, ci de variabile precum:</strong></p>

                            <ul>
                                <li>starea carosabilului (umezeala, noroi, polei, nisip, zapada afanata, zapada batatorita, pavaj de piatra cubica);</li>
                                <li>solutia constructiva a masinii (tractiune fata/spate, 4x4 selectabil, 4x4 permanent);</li>
                                <li>conditile meteo (vant puternic, ploaie torentiala, etc.);</li>
                                <li>dotarile speciale ale masinii (ABS, Controlul stabilitatii, ESP, ASR, etc).</li>
                            </ul>
                        </div>
                        <button class="collapsible"><strong>Derapajul</strong></button>
                        <div class="content">
                            <p>Este o consecinta a aderentei scazute si a manevrarii incorecte a autovehiculului.</p>

                            <p>Principala cauza a derapajului este viteza excesiva, rezultand astfel pierderea stabilitatii autovehiculului in urma franarii excesive si neadaptarii vitezei la conditiile de carosabil alunecos sau umed.</p>

                            <p>Atunci cand autovehiculul intra intr-un derapaj, trebuie sa se ridice piciorul de pe frana iar volanul sa se miste lin in sensul invers al deraparii.</p>

                            <p>Daca rotile din fata derapeaza, masina va incepe sa alunece inafara carosabilului. in aceasta situatie este recomandat sa incetiniti si tineti controlul asupra volanului, ca masina sa mearga drept.</p>

                            <p>Daca rotile din spate derapeaza, spatele masinii se va misca, alunecand in ambele parti. in aceasta situatie este recomandat sa mentineti volanul in directia alunecarii, pana ce masina nu mai derapeaza si rotile vin in contact
                                cu soseaua, apoi miscati volanul in directia opusa alunecarii, pentru a indrepta masina.</p>

                            <p>Daca toate patru rotile derapeaza, masina va aluneca inainte, in linie dreapta, ca si cum ar fi o sanie. in aceasta situatie este recomandat sa va pastrati calmul si sa incetiniti treptat, ridicand piciorul de pe acceleratie,
                                mentinand controlul asupra volanului, in directia de mers. Astfel, in momentul in care rotile adera din nou la sosea, va veti putea continua drumul.</p>

                        </div>
                        <button class="collapsible"><strong>Acvaplanarea</strong></button>
                        <div class="content">
                            <p>Acvaplanarea apare atunci cand anvelopele masinii nu mai fac contact direct cu asfaltul, deoarece intre cele doua suprafete exista o pelicula de apa.</p>

                            <p>Datorita vitezei excesive sau a uzurii accentuate a anvelopelor, apa nu mai poate fi evacuata rapid prin canalele pneului.</p>

                            <p>Efectul poate fi o pierdere a controlului vehiculului prin reducerea posibilitatilor de manevrare sau franare.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">Capitolul VI - Conduita preventiva pe timp de primavara, vara, toamna sau iarna</button>
            <div class="content">
                <div class="articol">
                    <button class="collapsible"><strong>Conduita preventiva pe timp de primavara</strong></button>
                    <div class="content">
                        <p><strong>Factorii de risc care influenteaza comportamentul autovehiculului aflat in mers sunt:</strong></p>

                        <ul>
                            <li>starea carosabilului;</li>
                            <li>conditiile climaterice;</li>
                            <li>aglomeratia.</li>
                        </ul>

                        <p><strong>Masuri de conduita preventiva pe timp de primavara:</strong></p>

                        <ul>
                            <li>dupa iesirea din iarna carosabilul poate sa fie degradat, prezinta fisuri si gropi;</li>
                            <li>la inceputul primaverii sunt prezente fenomenele meteorologice care reduc vizibilitatea, ceata si ninsoarea;</li>
                            <li>data ce vremea incepe sa se incalzeasca, zapada se topeste acoperind carosabilul cu polei sau gheata;</li>
                            <li>marcajele de pe sosea pot fi sterse partial sau total, acest lucru putand afecta incadrarea pe banda a conducatorilor auto;</li>
                            <li>fluxul de masini este mult mai mare, deci stresul si oboseala cresc.</li>
                        </ul>

                        <h3><strong>Conduita preventiva pe timp de vara</strong></h3>

                        <p><strong>Factorii de risc care influenteaza comportamentul autovehiculului aflat in mers sunt:</strong></p>

                        <ul>
                            <li>temperaturi foarte ridicate;</li>
                            <li>apar ploi torentiale insotite de descarcari electrice;</li>
                            <li>traficul este aglomerat.</li>
                        </ul>
                    </div>
                    <button class="collapsible"><strong>Masuri de conduita preventiva pe timp de vara</strong><strong>:</strong></button>
                    <div class="content">
                        <ul>
                            <li>sa se adapteze viteza de deplasare in functie de drum si de trafic;</li>
                            <li>asigurati-va o stare fizica si psihica buna inainte de plecarea la drum, deoarece din cauza temperaturilor ridicate oboseala se instaleaza foarte rapid;</li>
                            <li>sa se sporeasca atentia deoarece copii se afla in vancanta si se pot juca pe carosabil sau in apropierea lui;</li>
                            <li>traficul este mai diversificat, apar biciclisti, mopede, carute, etc.</li>
                        </ul>

                        <h3><strong>Conduita preventiva pe timp de toamna</strong></h3>

                        <p><strong>Factorii de risc care influenteaza comportamentul autovehiculului aflat in mers sunt:</strong></p>

                        <ul>
                            <li>aglomeratia traficului;</li>
                            <li>conditile meteo;</li>
                            <li>starea fizica si psihica.</li>
                        </ul>
                    </div>
                    <button class="collapsible"><strong>Masuri de conduita preventiva pe timp de toamna:</strong></button>
                    <div class="content">
                        <ul>
                            <li>sa se sporeasca atentia deoarece traficul este aglomerat, sunt intalnite in trafic toate tipurile de utilaje si masini agricole;</li>
                            <li>adaptarea vitezei la conditiile meteo, conditiile de vizibilitate si conditiile de drum. Vremea se raceste, apar ploile si ceata iar ziua se micsoreaza;</li>
                            <li>schimbarea vremii de la cald la rece poate afecta starea fizica si psihica. Unele persoane sunt mai sensibile decat altele la schimbarile vremii, cum ar fi presiunea, umiditatea si temperatura. Durerile se pot agrava, mai ales
                                cele reumatice (70% dintre persoanele care au probleme cu articulatiile spun ca durerea este mai mare atunci cand vremea se raceste). Efecte asupra psihicului sunt: iritabilitate crescuta, oboseala, lipsa de concentrare
                                si insomnii.</li>
                        </ul>

                        <h3><strong>Conduita preventiva pe timp de iarna</strong></h3>

                        <p><strong>Factorii de risc care influenteaza comportamentul autovehiculului aflat in mers sunt:</strong></p>

                        <ul>
                            <li>conditile meteo;</li>
                            <li>starea carosabilului;</li>
                            <li>autovehiculul patineaza sau derapeaza.</li>
                        </ul>

                    </div>
                    <button class="collapsible"><strong>Masuri de conduita preventiva&nbsp;pe timp de iarna:</strong></button>
                    <div class="content">
                        <ul>
                            <li>sa se adapteze viteza de deplasare la conditile meteo, apar ninsorile abundente care pot fi insotite de vanturi puternice;</li>
                            <li>inainte de a pleca la drum conducatorul auto trebuie sa se informeze despre starea vremii asupra drumurilor ce urmeaza a fi strabatute;</li>
                            <li>drumurile sunt acoperite de zapada si gheata, lucru care influenteza in mod direct distanta de franare. Se recomanda marirea distantei fata de autovehiculul care circula in fata dumneavoastra, putand astfel sa se evite eventualele
                                situatii neprevazute. Din cauza starii carosabilului autovehiculul poate patina sau derapa, iar pentru a se &nbsp;evita acest lucru autoturismul trebuie echipat cu lanturi antiderapante.</li>
                            <li>sa se sporeasca atentia, din cauza zapezii abundent cazute, partea carosabila se ingusteaza. Pietonii folosesc si ei partea carosabila si datorita viscolului si a pericolului de alunecare circula cu privirea aplecata nemaifiind
                                foarte atenti in jurul lor.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">Capitolul VII - Conduita preventiva pe timp de noapte, ploaie sau ceata
					</button>
            <div class="content">
                <div class="articol">
                    <button class="collapsible"><strong>Conduita preventiva pe timp de noapte</strong></button>
                    <div class="content">
                        <p><strong>Factorii de risc care influenteaza comportamentul autovehiculului aflat in mers sunt:</strong></p>

                        <ul>
                            <li>vizibilitatea redusa;</li>
                            <li>orbirea temporara;</li>
                            <li>oboseala.</li>
                        </ul>

                        <p><strong>Masuri de conduita preventiva pe timp de noapte:</strong></p>

                        <ul>
                            <li>noaptea vizibilitatea este mult redusa, atunci cand vei circula in localitate pe timp de noapte se vor folosi luminile de intalnire (sau luminile de drum, doar daca pe drum nu sunt alti participanti la trafic), se va acorda
                                atentie sporita traficului si se va reduce viteza de deplasare in apropierea trecerilor pentru pietoni;</li>
                            <li>pot fi intalnite drumuri neiluminate, iar vizibilitatea este afectata si mai mult daca farurile nu sunt reglate corespunzator sau daca parbrizul este murdar.</li>
                        </ul>
                        <ul>
                            <li>nu folositi faza lunga atunci cand intalniti un sofer din sens opus, nici atunci cand va aflati in spatele unei masini, destul de aproape de aceasta, pentru ca il veti orbi pe sofer prin oglinda retrovizoare. in situatia in
                                care sunteti orbit de lumina farurilor unui autovehicul care circula din sens opus trebuie sa mentineti in functiune luminile de intalnire si sa reduceti viteza de deplasare sau daca este cazul sa opriti pana la trecerea
                                autovehicului;
                            </li>
                            <li>evita sa conduci atunci cand esti obosit. Oboseala la volan este printre cauzele frecvente ale accidentelor rutiere si de obicei acestea se lasa cu urmari dintre cele mai grave. in cazul in care ai de parcurs o distanta mare
                                si te simti obosit, este indicat sa opresti in locuri special amenajate, cum sunt refugiile si sa incerci sa dormi macar 15 minute.</li>
                        </ul>
                    </div>
                    <button class="collapsible"><strong>Conduita preventiva pe timp de ploaie</strong></button>
                    <div class="content">
                        <p><strong>Factorii de risc care influenteaza comportamentul autovehiculului aflat in mers sunt:</strong></p>

                        <ul>
                            <li>vizibilitatea redusa;</li>
                            <li>acvaplanarea;</li>
                            <li>aderenta scazuta;</li>
                            <li>spatiul de franare creste.</li>
                        </ul>

                        <p><strong>Masuri de conduita preventiva pe timp de ploaie:</strong></p>

                        <ul>
                            <li>asigurati-va o buna vizibilitate curatand parbrizul, geamurile laterale, luneta si deasemenea sa va asigurati buna funcţionare a stergatoarelor de parbriz si a sistemului de climatizare şi dezaburire;</li>
                            <li>foarte importanta atunci cand ploua este viteza de deplasare, care trebuie redusa pana la 30km/h in interiorul localitatilor şi 50km/h in afara acestora;</li>
                            <li>drumurile sunt alunecoase crescand astfel distanta de franare, este recomandat sa pastrati o distanta suficienta fata de vehiculul din fata dumneavoastra, astfel evitandu-se eventualele situatii neprevazute; Din cauza apei
                                care ia contact cu praful de pe carosabil se formeaza un strat de mazga iar in acest caz aderenta este una scazuta;</li>
                            <li>daca ploaia este una torentiala, vizibilitatea va fi mult ingreunata iar conducatorul autovehiculului trebuie sa opreasca in afara partii carosabilului.</li>
                        </ul>

                    </div>
                    <button class="collapsible"><strong>Conduita preventiva pe timp de ceata</strong></button>
                    <div class="content">
                        <p><strong>Factorii de risc care influenteaza comportamentul autovehiculului aflat in mers sunt:</strong></p>

                        <ul>
                            <li>vizibilitate redusa;</li>
                            <li>viteza de deplasare;</li>
                            <li>oboseala conducatorului auto.</li>
                        </ul>

                    </div>
                    <button class="collapsible"><strong>Masuri de conduita preventiva pe timp de ceata:</strong></button>
                    <div class="content">
                        <ul>
                            <li>ceata poate veni in valuri, ceasta poate trece rapid de la densitatea la care nu poti vedea la 10 metri in fata la o vizibilitate aparenta de 100 metri si inapoi, in interval foarte scurt;</li>
                            <li>circula incet si prudent. Principala cauza a accidentelor consta in neadaptarea vitezei la conditile de vizibilitate si drum. Foloseste luminile de avarie daca este nevoie, pentru a te face cat mai vizibil pentru ceilalti participanti
                                la trafic;</li>
                            <li>in timpul conducerii foloseste luminile de intalnire (faza scurta) si de ceata, sistemul de climatizare si dezaburire. Niciodata sa nu folosesti luminile de drum (faza lunga), acesta nu va face altceva decat sa inrautateaca
                                situatia, deoarece lumina loveste direct in ceata, facand ca vizibilitatea sa fie mult mai scazuta;</li>
                            <li>datorita concentrarii atentiei, oboseala apare rapid.</li>
                        </ul>
                    </div>
                    <button class="collapsible">Articolul 88</button>
                    <div class="content">
                        <p>
                            (1) Recoltarea mostrelor biologice se face numai in prezenta unui politist rutier, in conditiile art. 190 alin. (8) din Codul de procedura penala, in urmatoarele spatii ale institutiilor medicale: a) in interiorul unitatilor de asistenta medicala autorizate;
                            b) in ambulante avand echipaj cu medic ori autospeciale cu aceasta functie apartinand Serviciului mobil de urgenta, reanimare si descarcerare; c) in interiorul unitatilor medico-legale. (11) Medicul, asistentul medical sau
                            persoana cu pregatire medicala de specialitate din echipajul ambulantei sau autospecialei apartinand Serviciului mobil de urgenta, reanimare si descarcerare, care intervine la evenimentele in legatura cu traficul rutier, poate
                            recolta mostre biologice in masura in care prin aceasta nu se afecteaza acordarea asistentei medicale de urgenta sau de prim ajutor, precum si in situatia in care persoana implicata intr-un accident de circulatie refuza transportul
                            de urgenta la o unitate sanitara sau starea sa de sanatate nu impune acest transport. (12) Recoltarea mostrelor biologice se face cu respectarea normelor stabilite potrivit art. 125 lit. c) . (13) Transportul mostrelor biologice,
                            recoltate in conditiile alin. (11) , la unitatea medico-legala in vederea realizarii analizei toxicologice, va fi efectuat de catre politistul rutier. (2) Stabilirea concentratiei de alcool sau a prezentei in organism de substante
                            psihoactive se face in institutiile medico-legale autorizate, in conformitate cu normele metodologice elaborate de Ministerul Sanatatii. (3) Stabilirea prezentei alcoolului in aerul expirat sau testarea preliminara a prezentei
                            in organism a unor substante psihoactive se face de catre politia rutiera, cu ajutorul unor mijloace tehnice certificate. (4) Stabilirea concentratiei de alcool in aerul expirat se face de catre politia rutiera, cu ajutorul
                            unui mijloc tehnic omologat si verificat metrologic. (5) Persoana care conduce pe drumurile publice un vehicul pentru care legea prevede obligativitatea detinerii permisului de conducere, testata de politistul rutier cu un
                            mijloc tehnic omologat si verificat metrologic si depistata ca avand o concentratie de pana la 0,40 mg/l alcool pur in aerul expirat, ii poate solicita acestuia sa i se recolteze mostre biologice in cadrul unitatilor sau institutiilor
                            medicale prevazute la alin. (1) , in vederea stabilirii imbibatiei de alcool in sange. (6) Persoana care conduce pe drumurile publice un vehicul pentru care legea prevede obligativitatea detinerii permisului de conducere, testata
                            cu un mijloc tehnic omologat si verificat metrologic si depistata ca avand o concentratie de peste 0,40 mg/l alcool pur in aerul expirat, este obligata sa se supuna recoltarii mostrelor biologice, in vederea stabilirii imbibatiei
                            de alcool in sange. (7) Conducatorilor de vehicule pentru care legea prevede obligativitatea detinerii permisului de conducere, testati in trafic cu un mijloc certificat care indica prezenta in organism a unor substante psihoactive,
                            li se recolteaza obligatoriu mostre biologice.

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">Capitolul VIII - Conduita preventiva in mediul urban, rural, in tuneluri, pe poduri si sub poduri

						</button>
            <div class="content">
                <div class="articol">
                    <button class="collapsible"><strong>Conduita preventiva in mediul urban</strong></button>
                    <div class="content">
                        <p><strong>Factorii de risc care influenteaza comportamentul autovehiculului aflat in mers sunt:</strong></p>

                        <ul>
                            <li>numarul mare de intersectii si diversitatea acestora;</li>
                            <li>aglomeratia;</li>
                            <li>numarul mare de indicatoare si marcaje rutiere;</li>
                            <li>pietonii;</li>
                            <li>insuficienta locurilor de parcare;</li>
                            <li>oboseala acumulata.</li>
                        </ul>
                    </div>
                    <button class="collapsible"><strong>Masuri de conduita preventiva in mediul urban:</strong></button>
                    <div class="content">
                        <ul>
                            <li>sa se adapteze viteza de deplasare in functie de conditile de vizibilitate, de drum si de trafic;</li>
                            <li>sa se evite pe cat posibil orele de varf ale circulatiei;</li>
                            <li>sa se sporeasca atentia, drumurile sunt foarte aglomerate si sa se anticipeze eventualele manevre ale pietonilor sau a celorlalti participanti la trafic, evitandu-se astfel evenimente neprevazute;</li>
                            <li>datorita numarului mare de manevre (opriri, intoarceri, incadrari pe banda) se instaleaza oboseala si starile de nervozitate. incercati pe cat posibil sa va mentineti calmul si concentrarea la drum.</li>
                        </ul>

                        <h3><strong>Conduita preventiva in mediul rural</strong></h3>

                        <p><strong>Factorii de risc care influenteaza comportamentul autovehiculului aflat in mers sunt:</strong></p>

                        <ul>
                            <li>starea drumurilor;</li>
                            <li>lipsesc indicatoarele si marcajele rutiere;</li>
                            <li>lipsa trotuarelor;</li>
                            <li>prezenta pe carosabil a animalelor.</li>
                        </ul>

                        <p><strong>Masuri de conduita preventiva in mediul rural:</strong></p>

                        <ul>
                            <li>sa se adapteze viteza de deplasare in functie de conditile de drum si de trafic;</li>
                            <li>sa se sporeasca atentia, in unele sate lipsesc trotuarele iar oamenii folosesc partea carosabila, unele intersectii sunt nesemnalizate prin indicatoare sau prin marcaje rutiere sau veti putea intalni turme sau animale nesupravegheate.</li>
                        </ul>
                    </div>
                    <button class="collapsible"><strong>Conduita preventiva in tuneluri, pe poduri si sub poduri</strong></button>
                    <div class="content">
                        <p><strong>Factorii de risc care influenteaza comportamentul autovehiculului aflat in mers sunt:</strong></p>

                        <ul>
                            <li>spatii inguste;</li>
                            <li>vederea se adapteaza mai greu.</li>
                            <li>sa se sporeasca atentia deoarece vederea se adapteaza mai greu in urma trecerii de la lumina naturala la cea artificiala;</li>
                            <li>sa se adapteze viteza in functie de vizibilitate si conditiile de drum ingustat; Prin constructia lor podurile nu permit evitarea accidentelor prin iesirea pe acostament sau decor.</li>
                            <li>podurile sunt amplasate peste cursurile de ape sau peste vai, ceea ce duce la o frecventa mai mare a aparitiei ghetii si a poleiului.</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">Capitolul IX - Conduita preventiva la depasire si la acordarea de prioritate
						</button>
            <div class="content">
                <div class="articol">
                    <button class="collapsible"><strong>Conduita preventiva la depasire</strong></button>
                    <div class="content">
                        <p><strong>Factorii de risc care influenteaza comportamentul autovehiculului aflat in mers sunt:</strong></p>

                        <ul>
                            <li>viteza de deplasare;</li>
                            <li>angajarea intr-o depasire fara a se asigura;</li>
                            <li>depasirea brusca a unui autovehicul si fortarea reintrarii pe banda de deplasare;</li>
                            <li>aprecierea gresita a vitezei autovehiculului care circula din sensul opus.</li>
                        </ul>
                        p><strong>Masuri de conduita preventiva pentru conducatorul auto care depaseste:</strong></p>

                        <ul>
                            <li>angajarea intr-o depasire se face numai dupa ce conducatorul autovehicului se asigura atat din fata cat si in spate, acesta se va angaja in depasire numai atunci cand este sigur ca manevra poate fi efectuata in deplina siguranta;</li>
                            <li>sa se asigure ca cel depasit ti-a sesizat intentia de a depasi;</li>
                            <li>sa se aprecieze corect viteza de deplasare a autovehiculului care circula din sens opus;</li>
                            <li>sa se mentina o distanta laterala suficienta fata de autovehiculul depasit.</li>
                        </ul>

                        <p><strong>Masuri de conduita preventiva pentru conducatorul auto care este depasit:</strong></p>

                        <ul>
                            <li>atunci cand un autovehicul urmeaza sa fie depasit, nu trebuie sa mareasca viteza de deplasare si trebuie sa se angajeze cat mai aproape pe marginea din dreapa a partii carosabile pentru a nu stanjenii in vreun fel pe cel ce
                                s-a angajat in depasire;</li>
                            <li>sa se sporeasca atentia si sa se anticipeze eventualele situatii care ar putea deveni periculoase.</li>
                        </ul>

                        <p><br />
                            <strong>Masuri de conduita preventiva pentru conducatorul auto care circula din sens opus:</strong></p>

                        <ul>
                            <li>sa se reduca viteza de deplasare si sa se evite o eventuala coliziune cu un autovehicul care nu a apreciat corect viteza de deplasare a celui ce circula din sens opus si s-a angajat in depasire;</li>
                            <li>sa se sporeasca atentia si sa se evite situatiile care ar putea deveni periculoase.</li>
                        </ul>

                    </div>
                    <button class="collapsible"><strong>Conduita preventiva cand se acorda prioritate</strong></button>
                    <div class="content">
                        <p><strong>Factorii de risc care influenteaza comportamentul autovehiculului aflat in mers sunt:</strong></p>

                        <ul>
                            <li>acordarea prioritatii pietonilor;</li>
                            <li>neobservarea indicatoarelor.</li>
                        </ul>
                        <p><strong>Masuri de conduita preventiva atunci cand se acorda prioritatea de trecere:</strong></p>

                        <ul>
                            <li>sa se avertizeze din timp conducatorul auto care circula la mica distanta in spate;</li>
                            <li>sa se sporeasca atentia asupra indicatoarelor rutiere si sa se acorde prioritate pietonilor, in orice situatie;</li>
                            <li>atunci cand trebuie sa opreasca pentru acordarea prioritatii sa nu se stanjeneasca circulatia celorlalti participanti la trafic prin obligarea acestora sa efectueze manevre suplimentare de ocolire, care pot provoca accidente.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="capitol">
            <button class="collapsible">Capitolul X - Coliziunile
						</button>
            <div class="content">
                <div class="articol">
                    <button class="collapsible"><strong>Coliziunile se pot produce:</strong></button>
                    <div class="content">
                        <ul>
                            <li>intre doua vehicule aflate in mers;</li>
                            <li>intre un vehicul aflat in mers si unul stationat, sau un alt obstacol fix.</li>
                        </ul>

                        <p><strong>Atunci cand coliziunile se produc intre doua vehicule aflate in mers, dupa directiile de deplasare ale acestora, coliziunile pot fi:</strong></p>

                        <ul>
                            <li>frontale (atunci cand directiile de mers sunt opuse);</li>
                            <li>laterale;</li>
                            <li>din spate (directiile de mers sunt in acelasi sens).</li>
                        </ul>

                        <h3><strong>Coliziunile&nbsp;frontale</strong></h3>

                        <p><strong>Factorii de risc in cazul coliziunilor frontale:</strong></p>

                        <ul>
                            <li>viteza de deplasare;</li>
                            <li>pozitia in timpul mersului;</li>
                            <li>circulatia pe sensul opus.</li>
                        </ul>
                        <p><strong>Masuri de conduita preventiva in cazul coliziunilor frontale:</strong></p>

                        <ul>
                            <li>sa se reduca viteza de deplasare si sa se evite o eventuala coliziune cu un autovehicul care nu a apreciat corect viteza de deplasare a celui care circula din sens opus si s-a angajat in depasire;</li>
                            <li>iesirea de pe partea carosabila, pe partea dreapta pentru a evita evetualele coliziuni;</li>
                            <li>sa se sporeasca atentia si sa se anticipeze situatiile ce ar putea deveni periculoase.</li>
                        </ul>
                    </div>
                    <button class="collapsible"><strong>Coliziunile&nbsp;laterale</strong></button>
                    <div class="content">
                        <p><strong>Factorii de risc in cazul coliziunilor laterale:</strong></p>

                        <ul>
                            <li>neasigurarea inaintea angajarii in virajul la stanga;</li>
                            <li>nerespectarea normelor de prioritate;</li>
                            <li>neasigurarea atunci cand se trece de pe o banda pe alta.</li>
                        </ul>

                        <p><strong>Masuri de conduita preventiva in cazul coliziunilor laterale:</strong></p>

                        <ul>
                            <li>sa se sporeasca atentia atunci cand se circula prin intersectii, indiferent daca sunt sau nu dirijate, pentru a se evita eventualele actiuni incorecte ale participantilor la trafic;</li>
                            <li>pastrarea unei distante laterale suficiente fata de ceilalti participanti la trafic.</li>
                        </ul>
                    </div>
                    <button class="collapsible"><strong>Coliziunile&nbsp;din spate</strong></button>
                    <div class="content">
                        <p>Factorii de risc in cazul coliziunilor din spate:</p>

                        <ul>
                            <li>nerespectarea distantei in mers fata de vehiculul care circula in fata;</li>
                            <li>neatentia si neanticiparea situatiilor ce ar putea deveni periculoase;</li>
                            <li>aprecierea incorecta a distantei de oprire.</li>
                        </ul>
                        <p><strong>Masuri de conduita preventiva in cazul coliziunilor din spate:</strong></p>

                        <ul>
                            <li>sa se adapteze viteza de deplasare la conditiile meteo, de vizibilitate, de trafic si de drum;</li>
                            <li>sa se pastreze o distanta suficienta si sa se aprecieze corect distanta de oprire, mai ales atunci cand carosabilul este acoperit cu polei, mazga, gheata;</li>
                            <li>sporirea si concentrarea atentiei asupra vehiculului din fata pentru a observa din timp eventuale semnalizari si de a lua masurile corespunzatoare.</li>
                        </ul>
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