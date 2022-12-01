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
    <title>Eliott LACROIX - G.TECH 1 - Mes projets</title>
    <meta name="description" content="Je vais vous parler de mes expériences, et mes projets personnels.">
    <link rel="icon" type="image/png" sizes="16x16" href="img/global/logo-gc.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Urbanist:wght@200&display=swap"
        rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen">
    <link type="text/css" rel="stylesheet" href="css/style-eliott.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!--Navbar-->
    <div class="navbar-fixed">
        <nav class="nav-extended">
            <div class="nav-wrapper">
                <a href="#brand-logo" class="brand-logo"><img src="img/global/logo-gc.png" alt="logo Gaming Campus"></a>
                <a href="#mobile-demo" data-target="mobile-demo" class="sidenav-trigger"><i
                        class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="matthieu-projects.php">Projets Matthieu</a></li>
                    <li><a href="eliott-projects.php">Projets Eliott</a></li>
                    <li><a href="projets.php">Projets supplémentaires</a></li>
                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="action/deconnexion.php">Deconnexion</a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="#preambule">Préambule</a></li>
                    <li class="tab"><a href="#music-project">Projet Musical</a></li>
                    <li class="tab"><a href="#school-project">Projet Scolaire</a></li>
                    <li class="tab"><a href="#gaming-project">Projet Setup Gaming</a></li>
                    <li class="tab"><a href="#contactus">Contactez-nous</a></li>
                </ul>
            </div>
        </nav>
    </div>


    <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="matthieu-projects.php">Projets Matthieu</a></li>
        <li><a href="eliott-projects.php">Projets Eliott</a></li>
        <li><a href="projets.php">Projets supplémentaires</a></li>
        <?php if (isset($_SESSION['username'])) { ?>
        <li><a href="action/deconnexion.php">Deconnexion</a></li>
        <?php } ?>
    </ul>

    <div class="parallax-container" id="parallax1">
        <div class="parallax">
            <img src="img/global/img-parallax4.jpg" alt="Image fond d'écran No Man's Sky stylisé">
        </div>
        <h1>Préambule</h1>
        <div class="row">
            <div class="col offset-s3 s3 offset-m3 m3 offset-l3 l3">
                <div class="linkedin" id="preambule">
                    <div class="badge-base LI-profile-badge" data-locale="fr_FR" data-size="medium" data-theme="dark"
                        data-type="HORIZONTAL" data-vanity="eliott-lacroix-jeli" data-version="v1"><a
                            class="badge-base__link LI-simple-link"
                            href="https://fr.linkedin.com/in/eliott-lacroix-jeli?trk=profile-badge"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="music-project" id="music-project">
        <h2>Mon projet musical</h2><br>
        <div class="button-trust">
            <a class="waves-effect waves-light btn modal-trigger" href="https://matias.ma/nsfl/" rel="nofollow"
                target="_blank">Mon projet sur Youtube</a>
        </div>
        <div class="carousel" id="project1">
            <div class="carousel-item"><iframe width="590" height="335" src="https://www.youtube.com/embed/AR-CYSFCywQ"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe></div>
            <div class="carousel-item"><iframe width="590" height="335" src="https://www.youtube.com/embed/qB_LLJLnR90"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe></div>
            <div class="carousel-item"><img src="img/projetEliott/img-guitar1.png"
                    alt="Charvel Dk-24 Nova 6 Signature Angel Vivaldi"></div>
            <div class="carousel-item"><img src="img/projetEliott/amp1.png" alt="Tim Henson sim amp collection Neural DSP"></div>
            <p>Quelques images et vidéos de mon projet. <br> <br> <br>
                Mon équipement: <br> <br>
                - Guitare : Charvel Dk24 Nova 6 Signature Angel Vivaldi <br>
                - Ampli : Neural DSP Signature Tim Henson</p>
        </div>
    </div>

    <div class="parallax-container" id="parallax2">
        <div class="parallax">
            <img src="img/global/img-parallax1.jpg" alt="Image fond d'écran No Man's Sky stylisé">
        </div>
    </div>

    <div class="school-project" id="school-project">
        <h2>Mon projet scolaire</h2>
        <div class="carousel" id="project2">
            <div class="carousel-item"><img src="img/projetEliott/lamache2.jpg" id="lamache-logo-png" alt="Photo logo Lamache"></div>
            <div class="carousel-item"><img src="img/projetEliott/lamache1.jpg" id="lamache-bat"
                    alt="Photo deventure du Lycée/Ecole LaMache"></div>
            <div class="carousel-item"><img src="img/global/gaming-campus2.jpg" alt="Image Logo Gaming Campus">
            </div>
            <div class="carousel-item"><img src="img/global/gaming-campus1.jpg" alt="Image Locaux Gaming Campus"></div>
            <p>Voici mon projet scolaire:<br><br>
                Mon lycée: LaMache.<br>
                J'avais rejoint le lycée LaMache pour ma 1ère et ma Terminale,<br>
                j'y étais pour un cursus STI2D avec la spécialité SIN (Système Informatique et Numérique)<br><br>
                Mon école supérieur: Gaming Campus.<br>
                Je l'ai rejoint après mon lycée pour poursuivre dans l'informatique<br>
                afin de pouvoir travailler dans le monde du jeux vidéo plus tard car c'est ma plus grande passion.
            </p>
        </div>
    </div>

    <div class="parallax-container" id="parallax3">
        <div class="parallax">
            <img src="img/global/img-parallax5.jpg" alt="Image fond d'écran No Man's Sky stylisé">
        </div>
    </div>

    <div class="gaming-project" id="gaming-project">
        <h2>Mon projet setup gaming</h2>
        <div class="carousel" id="project3">
            <div class="carousel-item"><img src="img/projetEliott/nzxt-h1.png" alt="Boitier Nzxt H1 Mini ITX"></div>
            <div class="carousel-item"><img src="img/projetEliott/mz1.png" alt="Souris Gaming rocket Jump ninja Xtrfy Mz1"></div>
            <div class="carousel-item"><img src="img/projetEliott/akko-keyboard.png" alt="Clavier custom akko skin japon"></div>
            <div class="carousel-item"><img src="img/projetEliott/screen-sam.png" alt="Ecran Samsung jeux vidéo">
            </div>
            <div class="carousel-item"><img src="img/projetEliott/audient-id4.png" alt="Carte son audient id4 mk2">
            </div>
            <p>Voici mon projet setup gaming:<br><br>
                4 ans pour arriver à un tel résultat.<br>
                Ma config PC:<br>
                Carte mère: MSI B560i MPG Processeur: Intel Core i5 11600k 3.90 GHz Carte Graphique: AMD RX 6700 XT
                Founders Edition<br><br>
                Mon stuff:<br>
                Clavier: Akko 3068 World Tour Custom Souris: Xtrfy Mz1 Carte son: Audient ID4 MK2<br>
                C'est l'un de mes plus gros projet, j'y ai passé beaucoup de temps, et surtout un gros investissement.
            </p>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="img/global/img-parallax2.jpg"
                alt="Image fond d'écran No Man's Sky planète et Vaisseau">
        </div>
        <div class="form-button" id = 'contactus'>
            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Contactez-nous</a>
        </div>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Formulaire de contact</h4>
                <form method="post" action="action/mail.php">
                    <p>
                        <label for="email">Email :</label>
                        <input type="email" id ="email" placeholder="Entrez votre email :" name="email" required>
                    </p>
                    <label for="email">Objet :</label>
                    <select name="probleme" id="font_probleme">
                        <option value="basic">Sélectionnez l'objet :</option>
                        <option value="bug">Problème avec le site</option>
                        <option value="demande">Demande(s)</option>
                        <option value="idea">Idée(s)</option>
                    </select>
                    <p>
                        <label for="description">Description :</label>
                        <br>
                        <textarea id="description" name="description" required class="required text"
                            placeholder="Votre Message :"></textarea>
                    </p>
                    <div class="button-env">
                        <a href="" class="waves-effect waves-light btn" rel="me nofollow" target="_blank"><i
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