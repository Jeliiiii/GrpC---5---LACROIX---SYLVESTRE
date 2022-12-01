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
    <link rel="icon" type="image/png" sizes="16x16" href="img/global/logo-gc.png">
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
                <a href="#brand-logo" class="brand-logo"><img src="img/global/logo-gc.png" alt="Logo Gaming Campus"></a>
                <a href="#mobile-demo" data-target="mobile-demo" class="sidenav-trigger"><i
                        class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">

                    <li><a href="index.php">Accueil</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="matthieu-projects.php">Projets Matthieu</a></li>
                    <li><a href="eliott-projects.php">Projets Eliott</a></li>
                    <li><a href="projets.php">Projets supplémentaires</a></li>
                    <?php } ?>

                    <?php if (isset($_SESSION['username']) && $_SESSION['admin'] == 1) { ?>
                    <li><a href="admin/admin.php">Administration</a></li>
                    <?php } ?>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="action/deconnexion.php">Deconnexion</a></li>
                    <?php } ?>

                    <?php if (!isset($_SESSION['username'])) { ?>
                    <li><a href="connexion.php">Connexion</a></li>
                    <?php } ?>

                </ul>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="#ajouter">Ajoutez un projet</a></li>
                    <?php if (isset($_SESSION['username']) && $_SESSION['admin'] == 1) { ?>
                    <li class="tab"><a href="#modifier">Modifiez un projet</a></li>
                    <li class="tab"><a href="#supprimer">Supprimez un projet</a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php">Accueil</a></li>
        <?php if (isset($_SESSION['username'])) { ?>
        <li><a href="matthieu-projects.php">Projets Matthieu</a></li>
        <li><a href="eliott-projects.php">Projets Eliott</a></li>
        <li><a href="projets.php">Projets supplémentaires</a></li>
        <?php } ?>

        <?php if (isset($_SESSION['username']) && $_SESSION['admin'] == 1) { ?>
        <li><a href="admin/admin.php">Administration</a></li>
        <?php } ?>

        <?php if (isset($_SESSION['username'])) { ?>
        <li><a href="action/deconnexion.php">Deconnexion</a></li>
        <?php } ?>

        <?php if (isset($_SESSION['username'])) { ?>
        <li><a href="connexion.php">Connexion</a></li>
        <?php } ?>
    </ul>


    <!--  
            Afficher la liste des projets actuellements enregistrés
            <div id="container">-->
    <!--Zone de modification-->
    <?php
    $reponse = " ";
    $reponse = $pdo->query('SELECT * FROM `projects`');
    ?>
    
    <!--Récupérer d'un form les données à ajouter
        CREER un nouveau projet
        AJOUTER de nouvelles images avec le nom du projet-->
    <form action="../action/ajout_projet.php" method="POST">
        <h2 id=ajouter>Ajouter un projet</h2>

        <label><b>Nom du projet</b></label><br>
        <input type="text" placeholder="Entrer le nom du projet :" name="projectName" required>

        <label><b>Ajouter une image</b></label><br>
        <input type="file" placeholder="Choisissez une image :" name="img" required>

        <label><b>Ajouter un texte</b></label><br>
        <input type="text" placeholder="Description :" name="description" required>

        <input type="submit" id='submit' value='Ajoutez votre projet'>
        </div>
    </form>
<?php
    require "action/afficher_project.php";
    foreach($data_project as $project){ ?>
<div class="bloc_project">
    <h3><?php echo $project['name'] ?></h3>
    <from method="post" action = "action/majProject.php">
        <input type='hidden' name="id" value="<?php echo $project['id'] ?>">
        <input type='text' name='name' value="<?php echo $project['name'] ?>">
        <button type = 'submit'> Changer le nom du projet </button>
    </form>
    <form method="post" action= "action/remove_project.php">
        <input type="hidden" name="id" value="<?php echo $project['id'] ?>">
        <button type = 'submit'> Supprimer le projet </button>
    <?php } ?>
</div>
</body>

</html>