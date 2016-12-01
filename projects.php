<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>
    <div class="front">
        <header class="navbar cl-effect-4">
            <div class="navbar-header">
                <a href="index.php" class="disabled-link visible-xs-block mini-mobile-logo"><img src="img/logo2.png" width="80px"></a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!-- end navbar-header -->

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden-xs"><a class="disabled-link" href="index.php"><img id="logo" src="img/logo.png" width="80px"></a></li>
                    <li><a href="about.php">O nama</a></li>
                    <li><a href="projects.php">Projekti</a></li>
                    <li><a href="membership.php">Članstvo</a></li>
                    <li><a href="contact.php">Kontakt</a></li>
                </ul>
            </div><!-- end collapse -->
        </header>
        <div class="cover-image-landing overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center front-text">
                    <br>
                    <h1 class="big-font hidden-xs">Udruga studenata<br>grada Zaprešića</h1>
                    <h1 class="big-font visible-xs-block">USGZ</h1>

                    <p class="text-inverse intro-font hidden-sm">Dobrodošli na naše stranice!</p>
                </div>
            </div>
        </div>
    </div>
    <div id="main">
        <div class="section">
            <div class="container">
                <div class="row">
                    <h1 class="text-primary padding-fix">Aktualni projekti</h1>
                    <div class="col-md-6">
                        <h2>Orijentacijske tribine za maturante Srednje škole Ban Josip Jelačić</h2>
                        <p>Tribine čiji je cilj <strong>pomoći maturantima</strong> u izboru studija, <strong>olakšati pripremu</strong> za studije te <strong>ubrzati
                         integraciju</strong> na studij, što sve zajedno može poboljšati učinkovitost studenata grada Zaprešića.
                        </p>
                        <button id="button-toggle1" class="button-toggle" onclick="toggleText('text1', 'button-toggle1')">Pročitaj više <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                        <div id="text1">
                            <br>
                            Udruga studenata grada Zaprešića održava Orijentacijske tribine za 
                            maturante Srednje škole Ban Josip Jelačić. Tribina ima tri cilja: 
                            pomoći maturantima u odabiru studija, olakšati im upise i ubrzati njihovu integraciju na 
                            studij. Opći cilj je <strong>smanjiti razdoblje privikavanja</strong> na studij i <strong>poboljšati učinak</strong> studenata u Zaprešiću.
                            <br><br>
                            Upoznavanje 
                            budućih studenata sa detaljima studija  dugoročno može smanjiti broj studenata koji 
                            odustaju od studija ili se prebacuju na neki drugi. Smatramo da je od 
                            iznimne važnosti upoznati maturante s informacijama koje mogu saznati samo <strong>iz prve ruke</strong>.
                            <br><br> Evaluacija tribina 
                            odvija se pod mentorstvom dr. sc. Vesne Buško, red. prof. s Katedre za psihometriju Filozofskog fakulteta u Zagrebu.
                            Tribine su organizirane na način da zaprešićki studenti s različitih studija za koje su maturanti iskazali najveći interes predavanjima prenose svoja iskustva sa studija. Nakon predavanja maturanti mogu postavljati pitanja studentima.
                            <br><br>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 projects-img no-padding hidden-sm hidden-xs"></div>
                    <div class="col-md-12">
                    <div class="col-md-6 col-sm-6 projects-img2 hidden-sm hidden-xs"></div>
                    <div class="col-md-6 sm-fix">
                        <h2 class="top-fix top-sm-fix">Razvoj sustava ciljanog stipendiranja studenata grada Zaprešića</h2>
                        <p>Izrada novog, modernog načina stipendiranja čiji je cilj <strong>suzbiti pojavu deficitarnih zanimanja</strong> za koje je potrebno visoko obrazovanje i povećati motivaciju studenata.
                        </p>
                        <button class="button-toggle" id="button-toggle2" onclick="toggleText('text2', 'button-toggle2')">Pročitaj više <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                        <div id="text2">
                            <br>
                            Mnogi gradovi i općine uveli su pozitivnu praksu stipendiranja deficitarnih zanimanja. Međutim, takva se stipendiranja uvijek odnose na stipendiranje učenika srednjih škola. Kroz projekt Razvoj sustava ciljanog stipendiranja studenata grada Zaprešića, Udruga studenata grada Zaprešića želi prenijeti ovakvu praksu i na visoko obrazovanje. 
                            <br><br>
                            Uvođenjem stipendija za deficitarne studije s jedne će se strane utjecati na <strong>povećanje motivacije</strong> studenata deficitarnih studija, odnosno potaknut će ih se da se zadrže na studiju i da ga ne napuštaju ukoliko naiđu na poteškoće, a s druge strane će se utjecati na <strong>sprječavanje pojave određenih vrsta deficitarnih zanimanja</strong> u strukama za koje je potrebno visoko obrazovanje. Deficitarna zanimanja, odnosno studiji određeni su korištenjem statističkih testova.
                            <br><br>
                            Ovaj projekt financiran je sredstvima Grada Zaprešića.<img src="img/obligatorni_logo.jpg"><br><br>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-12">
                        <h1 class="text-primary">Suradnje i partnerstva na projektima</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6 no-padding">
                            <h2>Centar za mladež Zaprešić</h2>
                            <p>
                                Udruga studenata grada Zaprešića sklopila je sporazume sa Centrom za mladež Zaprešić kojima se definira suradnja na projektima <strong>Lokalni volonterski centar Zaprešić</strong> i <strong>Info centar za mlade</strong>, a kojih je Centar za mladež Zaprešić nositelj. Cilj ovih projekata je potaknuti volonterstvo u gradu Zaprešiću i osigurati kvalitetan izvor informacija o događanjima za mlade. Više o projektima pročitajte na 
                                <a href="http://www.czmz.hr/novi_czmz/" target="_blank">stranicama Centra za mladež Zaprešić</a>.
                            </p>
                        </div>
                        <div class="col-md-6 col-xs-6 projects-img3 hidden-sm hidden-xs">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6 col-xs-6 projects-img4 hidden-sm hidden-xs">
                        </div>
                        <div class="col-md-6 top-fix sm-fix">
                            <h2>International Peace Youth Group</h2>
                            <p>
                                Udruga studenta grada Zaprešića surađuje s korejskom udrugom International Peace Youth Groupom (IPYG), koji svojim djelovanjem želi doprinijeti miru u svijetu. Udruga studenata grada Zaprešića u kolovozu 2016. organizirala je u Mojo Blues Cafe/Galeriji prikupljanje potpisa za Deklaraciju o miru i prestanku ratovanja, kojom bi se na globalnoj razini <strong>smanjila proizvodnja oružja i ulaganje u vojsku</strong> te bi se zabranila upotreba kemijskog i nuklearnog oružja. Više pročitajte na <a href="http://ipyg.org/" target="_blank">stranicama IPYG-a</a>.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-primary">
                            Projekti u razvoju
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4 no-padding sm-fix2">
                            <h2>Zaposli me!</h2>
                            <p>
                                U suradnji sa Savjetom mladih Grada Zaprešića, Udruga studenata grada Zaprešića radi na kreiranju 
                                <strong>internetskog portala koji bi povezivao studente i poslodavce s područja Zaprešića</strong> i omogućavao im lakše međusobno pronalaženje.
                            </p>
                        </div>
                        <div class="col-md-4 no-padding sm-fix">
                            <h2>Centar za razvoj akademskih vještina</h2>
                            <p>
                                Projekt čiji je cilj <strong>unaprijediti akademske i karijerne vještine studenata</strong> grada Zaprešića kroz niz radionica koje provode stručnjaci.
                            </p>
                        </div>
                        <div class="col-md-4 sm-fix">
                            <h2>Koliko plaćam svoj pokaz?</h2>
                            <p>
                                Projekt i medijska kampanja čija je svrha izboriti se za <strong>smanjenje (pre)visoke cijene studentskog pokaza</strong> za ZET za zaprešićke studente.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-distributed">
        <div class="footer-left">
            <img class="footer-company-name" src="img/logo_polozeni.png" width="280px">
            <br><br><br>
            <p class="footer-links">
                <a href="index.php">Početna</a>
                <a href="about.php">O nama</a>
                <a href="projects.php">Projekti</a>
                <a href="membership.php">Članstvo</a>
                <a href="contact.php">Kontakt</a>
            </p>
            <p class="footer-company-name">Udruga studenata grada Zaprešića &copy; 2016</p>
        </div>
        <div class="footer-right">
        </div>
    </footer>
    <script type="text/javascript" src="js/handler.js"></script>
</body>
</html>
