<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>G.Tech 1 - Nos projets</title>
    <meta name="description"
        content="Nous allons vous parler de nos expériences, et nos projets au sein de l'école Gaming Campus.">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo-gc.png">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Urbanist:wght@200&display=swap"
        rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen">
    <link type="text/css" rel="stylesheet" href="css/style-matthieu.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!--Navbar-->
    <div class="navbar-fixed">
        <nav class="nav-extended">
            <div class="nav-wrapper">
                <a href="#brand-logo" class="brand-logo"><img src="img/logo-gc.png" alt="logo Gaming Campus"></a>
                <a href="#mobile-demo" data-target="mobile-demo" class="sidenav-trigger"><i
                        class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="matthieu-projects.php">Projets Matthieu</a></li>
                    <li><a href="eliott-projects.php">Projets Eliott</a></li>
                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="action/deconnexion.php">Deconnexion</a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="#preambule">Préambule</a></li>
                    <li class="tab"><a href="#twitch-project">Projet Twitch</a></li>
                    <li class="tab"><a href="#school-career">Parcours Scolaire</a></li>
                    <li class="tab"><a href="#contactus">Contactez-nous</a></li>
                </ul>
            </div>
        </nav>
    </div>


    <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="matthieu-projects.php">Projets Matthieu</a></li>
        <li><a href="eliott-projects.php">Projets Eliott</a></li>
        <?php if (isset($_SESSION['username'])) { ?>
        <li><a href="action/deconnexion.php">Deconnexion</a></li>
        <?php } ?>
    </ul>


    <div class="parallax-container" id="parallax1">
        <div class="parallax">
            <img src="img/img-parallax1.jpg" alt="Image fond d'écran No Man's Sky stylisé">
        </div>
        <h1>Préambule</h1>
        <div class="row">
            <div class="col offset-s3 s3 offset-m3 m3 offset-l3 l3">
                <div class="linkedin" id="preambule">
                    <div class="badge-base LI-profile-badge" data-locale="fr_FR" data-size="medium" data-theme="dark"
                        data-type="HORIZONTAL" data-vanity="matthieu-sylvestre-44588920a" data-version="v1">
                        <a class="badge-base__link LI-simple-link"
                            href="https://fr.linkedin.com/in/matthieu-sylvestre-44588920a?trk=profile-badge"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="music-project" id="twitch-project">
        <h2>Mon projet Twitch</h2><br>
        <div class="button-trust">
            <a class="waves-effect waves-light btn modal-trigger" href="https://matias.ma/nsfl/" rel="nofollow"
                target="_blank">Ma chaine Twitch</a>
        </div>
        <div class="carousel" id="project1">
            <div class="carousel-item"><img src="img/twitch.jpg" alt="Apparence profil Twitch matthieu">
            </div>
            <div class="carousel-item"><img src="img/discord.jpg" alt="Apparence discord matthieu"></div>
            <div class="carousel-item"><img src="img/statistiques-chaine.jpg" alt="Statistiques chaine matthieu"></div>
            <div class="carousel-item"><img src="img/profil-speedruncom.jpg" alt="profil speedrun.com matthieu"></div>
            <p>Quelques images de mon projet et ses statistiques. <br> <br> Mon ambition: <br> - Monter encore en
                statistiques <br> - Avoir une plus grande communauté et plus de records</p>
        </div>
    </div>

    <div class="parallax-container" id="parallax2">
        <div class="parallax">
            <img src="img/img-parallax2.jpg" alt="Image fond d'écran No Man's Sky stylisé">
        </div>
    </div>

    <div class="school-project" id="school-career">
        <h2>Mon parcours scolaire</h2>
        <div class="carousel" id="project2">
            <div class="carousel-item"><img src="img/diderot1.jpg" alt="Photo logo Diderot"></div>
            <div class="carousel-item"><img src="img/diderot2.jpg" alt="Photo deventure du Lycée Diderot"></div>
            <div class="carousel-item"><img src="img/lombards1.jpg" alt="Photo logo Les Lombards"></div>
            <div class="carousel-item"><img src="img/lombards2.jpg" alt="Photo deventure du Lycée Les Lombards"></div>
            <div class="carousel-item"><img src="img/gaming-campus2.jpg" alt="Image Logo Gaming Campus">
            </div>
            <div class="carousel-item"><img src="img/gaming-campus1.jpg" alt="Image Locaux Gaming Campus"></div>
            <p>Quelques images des lieux d'études que j'ai fréquenté. <br> <br> Mon parcours: <br> - 2 Baccalauréat (SI
                , STI) au Lycée Denis Diderot - Langres <br> - BTS ( SNIR ) au Lycée Polyvalent Les Lombards<br> -
                Préparation d'un bachelor jeux vidéos
                au Gaming Campus Lyon</p>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="img/img-parallax2.jpg"
                alt="Image fond d'écran No Man's Sky planète et Vaisseau">
        </div>
        <div class="form-button" id = 'contactus'>
            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Contactez-nous</a>
        </div>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Formulaire de contact</h4>
                <form method="post" action="action/mail.php" enctype="text/plain">
                    <p>
                        <label for="email">Mail</label> <input type="email" id="email" name="email" required
                            class="required email">
                    </p>
                    <p>
                        <select name="probleme" id="font_probleme">
                            <option value="basic">Sélectionnez l'objet:</option>
                            <option value="bug">Problème avec le site</option>
                            <option value="demande">Demande</option>
                            <option value="idea">Idées</option>
                        </select>
                    </p>
                    <p>
                        <label for="description">Description :</label>
                        <br>
                        <textarea id="description" name="description" required class="required text"
                            placeholder="Votre Message:"></textarea>
                    </p>
                    <div class="button-env">
                        <a href="" class="waves-effect waves-light btn" rel="nofollow" target="_blank"><i
                                class="material-icons left">done</i>Envoyer</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fermer</a>
            </div>
        </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
</body>

</html>