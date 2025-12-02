<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CheckVoyages</title>
        <link href="style/style-index.css" rel="stylesheet">
        <link href="style/style-responsive.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Mansalva&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"><!--Pour les icônes version mobile-->

    </head>
    <body>
        <header>
            <nav>
                <p class="logo">Check<span class="orange">V</span>oyages</p>
                <div class="nav-links">
                    <div class="dropdown"><!-- conteneur global pour le positionnement -->
                        <button id="btn-explorer">Explorer</button>
                        <div id="menuExplorer" class="dropdown-content">
                            <a href="#">Europe</a>
                            <a href="#">Asie</a>
                            <a href="#">Amérique</a>
                            <a href="#">Afrique</a>
                            <a href="#">Océanie</a>
                        </div><!-- container vide pour le menu qui s'affiche au click -->
                    </div>
                    <a href="#btn-popular-destinations">Destinations populaires</a>
                    <a href="signIn.html">Connexion</a>
                </div>
            </nav>
        </header>
        <!-- VERSION MENU MOBILE EN BAS -->
        <div class="mobile-menu">
            <a href="#" class="mobile-item"><i class="fa-solid fa-compass"></i><span>Explorer</span></a><!--balise i: Lien Font Awesome transforme balise i en icônes -->
            <a href="#" class="mobile-item"><i class="fa-solid fa-fire"></i><span>Populaires</span></a>
            <a href="signIn.html" class="mobile-item"><i class="fa-solid fa-user"></i><span>Compte</span></a>
        </div>
        <main> 
            <section>
                
            </section>
        </main>
        <footer class="footer">
            <section class="footer-links">
                <div class="container-footer">
                    <h3>Qui sommes nous?</h3>
                    <p>Nos engagements</p>
                    <p>Tourisme responsable</p>
                </div>
                <div class="container-footer">
                    <h3>Conditions</h3>
                    <p>Notice légales</p>
                    <p>CGU</p>
                    <p>Cookies</p>
                </div>
                <div class="container-footer">
                    <h3>Infos</h3>
                    <p>01 44 22 11 22</p>
                    <p>(Nos conseillers sont à votre écoute)<br> 
                9h-23h du lundi au samedi <br> 10h-23h dimanche Pour nous appeller depuis l'étranger, cliquer ici</p>
                </div>
                <div class="icons-social">
                    <img src="images/icon-instagram.png"alt="icon reseaux sociaux instagram">
                    <img src="images/icon-facebook.png"alt="icon reseaux sociaux facebook">
                </div>
            </section>
        </footer>
        <script src="script/script.js"></script><!-- chemin relatif depuis le HTML vers mon fichier script.js -->
    </body>
</html>