<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

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

        <form action="action/connexion_utilisateur.php"  method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='LOGIN'>


        </form>
    </div>
    <div id="container">
        <!-- zone de connexion -->

        <form action="action/inscription_utilisateur.php"  method="POST">
            <h2>Inscription</h2>

            <label><b>Email</b></label>
            <input type="text" placeholder="Entrez votre email" name="email" required>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrez votre nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrez votre mot de passe" name="password" required>

            <input type="submit" id='submit' value='REGISTER'>


        </form>
    </div>
</body>

</html>