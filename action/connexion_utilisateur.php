<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

session_start();

?>

<?php

    if (isset($_POST['username']) && isset($_POST['password'])) {

        require "database.php";
        $reponse = " ";
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username !== "" && $password !== "") {
            //Verifier si le boolean est true
            $mdp = $bdd->prepare('SELECT `password` FROM users WHERE username = ?');
            $mdp->execute(array($username));
            $hasheur = $mdp->fetch();
            $hash = $hasheur['password'];
            $don = password_verify($password, $hash);

            if ($don == 1) {
                $reponse = $bdd->query('SELECT * FROM users WHERE username = "' . $username . '"');

                $donnees = $reponse->rowCount();

                if ($donnees > 0) // nom d'utilisateur et mot de passe correctes
                {
                    $_SESSION['username'] = $username;

                    //récupération de la fonction de l'utilisateur, fait parti de la table users, 3e colonne
                    $reponse2 = $bdd->prepare('SELECT grade FROM users WHERE username =?');
                    $reponse2->execute(array($username));
                    $grade = $reponse2->fetch();
                    $_SESSION['grade'] = $grade['grade'];

                    if ($grade['grade'] === "Opérateur") {
                        header('Location: interfaces/mod/mod_home.php');
                    } elseif ($grade['grade'] === "Administrateur") {
                        header('Location: interfaces/admin/admin_home.php');
                    } elseif ($grade['grade'] === "Utilisateur") {
                    header('Location: interfaces/user/user_home.php'); 
                    }else {
                        header('Location : connexion.php');
                        echo "Veuillez attribuer un grade a votre utilisateur";
                    }
                } else {
                    header('Location: index.html?erreur=1'); // utilisateur ou mot de passe incorrect
                }
            } else {
                header('Location: index.html?erreur=2'); // utilisateur ou mot de passe incorrect
            }
        } else {
            header('Location: index.html?erreur=3'); // utilisateur ou mot de passe vide
        }
    }
    ?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div id="container">
        <!-- zone de connexion -->

        <form method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='LOGIN'>


        </form>
    </div>

    
</body>

</html>