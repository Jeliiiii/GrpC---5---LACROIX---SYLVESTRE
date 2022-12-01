<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Connexion</title>
    <link type="text/css" rel="stylesheet" href="css/style2.css">
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="navbar-fixed">
        <nav class="nav-extended">
            <div class="nav-wrapper">
                <a href="#brand-logo" class="brand-logo"><img src="img/global/logo-gc.png" alt="Logo Gaming Campus"></a>
                <a href="#mobile-demo" data-target="mobile-demo" class="sidenav-trigger"><i
                        class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Accueil</a></li>
                </ul>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="#title-h1">Connexion</a></li>
                    <li class="tab"><a href="#title-h2">Inscription</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php">Accueil</a></li>
    </ul>

    <?php
    echo "<h1><mark>";
    if (isset($_SESSION['res'])) {
        echo $_SESSION['res'];
        $_SESSION['res'] = " ";
    }
    echo "</mark></h1>";
    ?>

    <div id="container">
        <!-- zone de connexion -->

        <form action="action/connexion_utilisateur.php" method="POST">
            <h2 id = 'title-h1'>Connexion</h2>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='Connectez-vous'>


        </form>
    </div>
    <div id="container">
        <!-- zone de connexion -->

        <form action="action/inscription_utilisateur.php" method="POST">
            <h2 id = 'title-h2'>Inscription</h2>

            <label><b>Email</b></label>
            <input type="email" placeholder="Entrez votre email" name="email" required>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrez votre nom d'utilisateur" name="username" required>

            <input id="admin" name="admin" type="hidden" value="Non">

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrez votre mot de passe" name="password" required>

            <input type="submit" id='submit' value='Inscrivez-vous'>


        </form>
    </div>
</body>

</html>