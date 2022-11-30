<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();
?>

<?php require_once "action/database.php"; ?>

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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Urbanist:wght@200&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen">
    <link type="text/css" rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!--Navbar-->
    <div class="navbar-fixed">
        <nav class="nav-extended">
            <div class="nav-wrapper">
                <a href="#brand-logo" class="brand-logo"><img src="img/logo-gc.png" alt="Logo Gaming Campus"></a>
                <a href="#mobile-demo" data-target="mobile-demo" class="sidenav-trigger"><i
                        class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">

                    <li><a href="index.php">Accueil</a></li>

                    <?php if (isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['admin']==0 || $_SESSION['admin']==1){  ?>
                    <li><a href="matthieu-projects.php">Projets Matthieu</a></li>
                    <li><a href="eliott-projects.php">Projets Eliott</a></li>
                    <?php }?>

                    <?php if (isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['admin']==1){ ?>
                    <li><a href="admin/admin.php">Administration</a></li>
                    <?php } ?>

                    <?php if (isset($_SESSION['username']) && isset($_SESSION['password'])){ ?>
                    <li><a href="action/deconnexion.php">Deconnexion</a></li>
                    <?php } ?>

                    <?php if (!isset($_SESSION['username']) && !isset($_SESSION['password']) && !isset($_SESSION['admin'])){ ?>
                        <li><a href="action/Connexion.php">Connexion</a></li>
                    <?php } ?>

                </ul>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <?php if(isset($_SESSION['username']) && isset($_SESSION['admin']) && $_SESSION['admin']==0 || $_SESSION['admin']==1){  ?>
                    <li class="tab"><a href="#title-h1">Présentation</a></li>
                    <li class="tab"><a href="#projects">Projet commun</a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php">Accueil</a></li>
        <?php if (isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['admin']==0 || $_SESSION['admin']==1){  ?>
        <li><a href="matthieu-projects.php">Projets Matthieu</a></li>
        <li><a href="eliott-projects.php">Projets Eliott</a></li>
        <?php } ?>
        <?php if (isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['admin']==1){ ?>
        <li><a href="admin/admin.php">Administration</a></li>
        <?php } ?>
        <li><a href="action/deconnexion.php">Deconnexion</a></li>
    </ul>


    <div class="video-chad" id="video-chad">
        <video controls>
            <source src="video/chad-dr-comp.mp4" type=video/mp4>
        </video>
    </div>


    <div class="cards">
        <div class="parallax-container">
            <div class="parallax">
                <img src="img/img-parallax3.jpg" alt="Image Fond d'écran No Man's Sky">
            </div>
            <h1 id="title-h1">Présentation des étudiants</h1>
            <div class="row">
                <div class="col offset-s3 s3 offset-m3 m3 offset-l3 l3">
                    <div class="card" id="presentation">
                        <div class="card-image">
                            <img src="img/sylvestre.jpg" alt="Image Matthieu SYLVESTRE">
                            <span class="card-title">Matthieu SYLVESTRE</span>
                        </div>
                        <div class="card-content">
                            <p>Matthieu SYLVESTRE, technicien réseau de 21 ans en classe de G.TECH 1 à l'école Gaming
                                Campus. Passionné de jeux vidéos, speedrunner, adepte de la musique. J'apprécie les jeux
                                4X ainsi que les jeux de gestion. Gros fan de metal
                                ainsi que de FrenchCore</p>
                        </div>
                        <div class="card-action">
                            <a href="matthieu-projects.php">Mes projets</a>
                        </div>
                    </div>
                </div>
                <div class="col s3 m3 l3">
                    <div class="card" id="presentation2">
                        <div class="card-image">
                            <img src="img/lacroix.jpeg" alt="Image Eliott LACROIX">
                            <span class="card-title">Eliott LACROIX</span>
                        </div>
                        <div class="card-content">
                            <p>Je m'appelle Eliott, j'ai 18 ans et je suis actuellement en classe de G.TECH 1 à l'école
                                Gaming Campus. Je suis passioné de jeux vidéo et de musique depuis que je suis tout
                                petit, je joue de la guitare depuis 6 ans, mes styles
                                de musique péférés sont le rock/metal, le blues et le jazz.
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="eliott-projects.php">Mes projets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 id="title-h2">Projet Commun</h2>



    <div class="carousel" id="projects">
        <div class="carousel-item"><img src="img/prj-1.jpg" id="image-1"
                alt="Image Site G.TECH 1 Dishonored 2 Gaming Campus"></div>
        <div class="carousel-item"><img src="img/prj-2.jpg" id="image-2"
                alt="Image Site G.TECH 1 Dishonored 2 Gaming Campus"></div>
        <div class="carousel-item"><img src="img/prj-3.jpg" id="image-3"
                alt="Image Site G.TECH 1 Dishonored 2 HTML Gaming Campus"></div>
        <div class="carousel-item"><img src="img/prj-4.jpg" id="image-4"
                alt="Image Site G.TECH 1 Dishonored 2 CSS Gaming Campus"></div>
        <div class="carousel-item"><img src="img/prj-5.jpg" id="image-5"
                alt="Image Site G.TECH 1 Dishonored 2 Contact Gaming Campus"></div>
        <p id="explaining-text">Voici des captures d'écran de notre dernier projet commun. Ce dernier portait sur le jeu
            Dishonored 2</p>
    </div>



    <div class="parallax-container">
        <div class="parallax"><img src="img/img-parallax2.jpg"
                alt="Image fond d'écran No Man's Sky planète et Vaisseau">
        </div>
        <div class="form-button">
            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Formulaire</a>
        </div>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Formulaire de contact</h4>
                <form method="post" enctype="text/plain">
                    <p>
                        <label for="Nom">Nom</label> <input type="text" id="Nom" name="Nom" required
                            class="required text">
                        <label for="Prenom">Prénom</label> <input type="text" id="Prenom" name="Prenom" required
                            class="required text">
                    </p>
                    <p>
                        <label for="email">Mail</label> <input type="email" id="email" name="email" required
                            class="required email">
                    </p>
                    <p>
                        <select name="probleme" id="font_probleme">
                            <option value="fichiers">Fichiers corrompus</option>
                            <option value="bug">Bug divers</option>
                            <option value="demarrage">Démarrage</option>
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

</body>

</html>